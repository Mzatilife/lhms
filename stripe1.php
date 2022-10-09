<?php 
// Include configuration file  
require_once 'stripePf.php'; 
      // Include database connection file  
      include_once 'includes/config.inc.php';            
$payment_id = $statusMsg = ''; 
$ordStatus = 'error'; 
$itemPrice =$_POST['amount'] ;

$SI = $_POST['SI'];
$HID = $_POST['hostelId'];
$SH = $_POST['hos'];
$RN =  $_POST['RN'];
$BN = $_POST['BN'];

$amount =$_POST['amount'];
$date_time = date('Y-m-d H:i:s', time());
$Date=date('Y-m-d');


$name = "SELECT * FROM student WHERE Student_id='$SI';";
$namedb=$selectdb = mysqli_query($conn,$name);
$studentN = mysqli_fetch_array($namedb);
$SN=$studentN['Fname'].' '.$studentN['Lname'];


// Check whether stripe token is not empty 
if(!empty($_POST['stripeToken'])){ 
     
    // Retrieve stripe token, card and user info from the submitted form data 
    $token  = $_POST['stripeToken']; 
    $name = $_POST['Rname']; 
    $email = $_POST['email']; 
    $item=$BN;
 
    // Include Stripe PHP library 
    require_once 'stripe-php/init.php'; 
     
    // Set API key 
    \Stripe\Stripe::setApiKey(STRIPE_API_KEY); 
     
    // Add customer to stripe 
    try {  
        $customer = \Stripe\Customer::create(array( 
            'email' => $email, 
            'source'  => $token 
        )); 
    }catch(Exception $e) {  
        $api_error = $e->getMessage();  
    } 
     
    if(empty($api_error) && $customer){  
         
        // Convert price to cents 
        $itemPriceCents = ($itemPrice*100); 
         
        // Charge a credit or a debit card 
        try {  
            $charge = \Stripe\Charge::create(array( 
                'customer' => $customer->id, 
                'amount'   => $itemPriceCents, 
                'currency' => $currency, 
                'description' => $item
            )); 
        }catch(Exception $e) {  
            $api_error = $e->getMessage();  
        } 
         
        if(empty($api_error) && $charge){ 
         
            // Retrieve charge details 
            $chargeJson = $charge->jsonSerialize(); 
         
            // Check whether the charge is successful 
            if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1){ 
                // Transaction details  
                $transactionID = $chargeJson['balance_transaction']; 
                $paidAmount = $chargeJson['amount']; 
                $paidAmount = ($paidAmount/100); 
                $paidCurrency = $chargeJson['currency']; 
                $payment_status = $chargeJson['status']; 
                 
                // Insert tansaction data into the database 
        
                 
                // If the order is successful 
                if($payment_status == 'succeeded'){ 
                    $ordStatus = 'success'; 
                    $statusMsg = '  Your Payment has been Successful!'; 
                  
                    $sql = "INSERT INTO payments(Stud_name,Student_Id,currency,Hostel_name,Room_no,Bed_No,TransId,Amount,email,Reciever,Date_added) VALUES('$SN','$SI','$currency','$SH','$RN','$BN','$transactionID','$amount','$email','$name','$Date')"; 
                    $insert = $conn->query($sql); 
                    $payment_id = $conn->insert_id; 

                    //booking handler

                    $check = "SELECT * FROM student_application WHERE Student_id ='$SI' AND App_status = 1";
                    $checkdb = mysqli_query($conn,$check);
                        $find = mysqli_num_rows($checkdb);
                        if($find == 1){
                           $error = "You already booked a hostel";
                        }else{
            
                            $set = "UPDATE beds SET Is_taken = 1 WHERE Bed_No = '$BN' AND Room_No = '$RN' AND Hostel_id = '$HID';";
                            $setdb = mysqli_query($conn,$set);
                            $all = "SELECT * FROM hostel WHERE Hostel_id='$HID';";
                            $alldb = mysqli_query($conn,$all);
                            $c = mysqli_num_rows($alldb);
                            
                            
                               
                
                        
                            $insertApp  = "INSERT INTO student_application (Student_id,Student_name,Hostel_id,Bed_No,Room_No,Confirm_Message,App_date,App_status,Rep_date) VALUES ('$SI','$SN','$HID','$BN','$RN','$transactionID','$date_time',1,'$Date')";
                            $insertAppdb = mysqli_query($conn,$insertApp);
                            $select3 = "SELECT * FROM student WHERE Student_id ='$SI';";
                            $fe = mysqli_fetch_row($alldb);
                            
                        
                            
                        $select3 = "SELECT * FROM student WHERE Student_id ='$SI';";
                            $fe = mysqli_fetch_row($alldb);
                            
                                   
                            $set2 = "UPDATE student SET Room_No ='$RN', Bed_No ='$BN',Hostel_id='$HID', Hostel_name ='$SH' WHERE Student_id ='$SI';";
                            $set2db = mysqli_query($conn,$set2);
            
                            if($insertAppdb){
                                $success = "Hostel booked successfully";
                            }else{
                                $error = "something went wrong";
                            }



                            
                            $select6 = "INSERT INTO notice(Student_id,N_subject,N_description,Date_sent,View_status) VALUES( '$SI','allotment notice','Dear $SN You have been allocated to Hostel $SH Room $RN Bed No. $BN !','$date_time',0)";
                            $selectdb6 = mysqli_query($conn, $select6);
                        }
                      

                }else{ 
                    $statusMsg = "Your Payment has Failed!"; 



                } 
            }else{ 
                $statusMsg = "Transaction has been failed!"; 
            } 
        }else{ 
            $statusMsg = "Charge creation failed! $api_error";  
        } 
    }else{  
        $statusMsg = "Invalid card details! $api_error";  
    } 
}else{ 
    $statusMsg = "Error on form submission."; 
} 

?>

<link href="web_home/css_home/slider.css" type="text/css" rel="stylesheet" media="all">

<!-- css files -->
<link rel="stylesheet" href="web_warden/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->

<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!-- testimonials css -->
<link rel="stylesheet" href="web_home/css_home/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->
<!-- //testimonials css -->

<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<!-- //web-fonts -->
<div class="col-md-3">
                
                </div>
                
            </div>
        <div class="row justify-content-center" style="margin-top:50px">
            <div class="col-md-9">
            <form action="stripe1.php" method="post" id='paymentFrm' style="text-align:center;">
                <div class = "card p-3 mt-2">
    <div class="status">
        <?php if(!empty($payment_id)){ ?>
            <h1 style="text-color:green;"class="<?php echo $ordStatus; ?>"><?php echo 'Dear'.' '. $SN; ?> <?php echo  $statusMsg; ?></h1>
			
            <h4>Payment Information</h4>
            <p><b>Reference Number:</b>  <?php echo $payment_id; ?></p>
            <p><b>Transaction ID:</b> <?php echo $transactionID; ?></p>
            <p><b>Paid Amount:</b> <?php echo $paidAmount.' '.$paidCurrency; ?></p>
            <p><b>Payment Status:</b> <?php echo $payment_status; ?></p>
            <h4>Product Information</h4>
            <p><b>Hostel_name:</b> <?php echo $SH; ?></p>
            <p><b>Room Number:</b> <?php echo $RN; ?></p>
            <p><b>Bed number:</b> <?php echo $BN; ?></p>
            <p><b>Price:</b> <?php echo $itemPrice.' '.$currency; ?></p>
        <?php }else{ ?>
            <h1 class="error">Your Payment has Failed</h1>
        <?php } ?>
    </div>
    <a href="book-hostel.php" class="btn-link">Back to Payment Page</a>
</div>
</div>
            </div>
            <div class="col-md-3">
                
                </div>


        </div>
</form>


</div>
<script src="js/nels.js"></script>