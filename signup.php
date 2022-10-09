<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIGNUP PAGE</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates,
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link rel="stylesheet" href="web_warden/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->

    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="web/css/fontawesome-all.css" rel="stylesheet" />

    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->
    <script>
// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 

    var student_fname = document.signupForm.student_fname.value;
    var student_lname = document.signupForm.student_lname.value;
    var email = document.signupForm.email.value;
    var gender = document.signupForm.gender.value;
   
    
	// Defining error variables with a default value
    var fnameErr =lnameErr =  emailErr = mobileErr  = genderErr = true;
    
    // Validate name
 
    if(student_fname == "") {
        printError("fnameErr", "Please enter your First name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(student_fname) === false) {
            printError("fnameErr", "Please enter a valid name");
        } else {
            printError("fnameErr", "");
            fnameErr = false;
        }
    }

    if(student_lname == "") {
        printError("lnameErr", "Please enter your Last name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(student_lname) === false) {
            printError("lnameErr", "Please enter a valid name");
        } else {
            printError("lnameErr", "");
            lnameErr = false;
        }
    }
    
    // Validate email address
    if(email == "") {
        printError("emailErr", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else{
            printError("emailErr", "");
            emailErr = false;
        }
    }
    
    // Validate mobile number
    
   
    // Validate gender
    if(gender == "") {
        printError("genderErr", "Please select your gender");
    } else {
        printError("genderErr", "");
        genderErr = false;
    }
    
    // Prevent the form from being submitted if there are any errors
    if((fnameErr || lnameErr || emailErr  || genderErr) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
    
       
        // Display input data in a dialog box before submitting the form
        
    }
};
</script>

</head>



<body>
<h1> LAWS CAMPUS HOSTEL MANAGEMENT SYSTEM <br></h1>
    
<div class="container " style="margin-top: 100px;">
        <div class="row justify-content-center">
            <div class="col-md-9" >
                <div class="card shadow p-5" >
                   
                    <div class="card-body ">
                    <p align="center"> <img src="logo2.png" width="200" height="200" class="img-thumbnail"  style='border-radius:250px;position:relative; margin-top:-7.2em;'></p>

                    <form name="signupForm"action="includes/signup.inc.php" onKeyup="return validateForm()" method="POST">

                   <h1 class="display-4 text-center" style="font-size:34px;margin-top:-1em; font-weight:bold;">Signup</h1>
                   <div class="form-group">
                   

            <div class=" form-group" >
                <label>Registration #</label>
                   
                    <input type="text" style="font-style:italic" class="form-control form-control-lg" id="regNo" name="student_roll_no" placeholder="Enter your reg#..." required="required" />
                </div>
                <div class="error "  id="regErr"></div>
     
            </div>
            <div class="row">
                <div class="col-md-6">
                <div class=" form-group" >
                <label>First Name</label>
                 
                    <input type="text" style="font-style:italic"class="form-control form-control-lg" id="student_fname"name="student_fname" placeholder="Enter your first name..." required="required" />

                </div>
                <div class="error "  id="fnameErr"></div>
                </div>
                <div class="col-md-6">
                       
            <div class=" form-group" >
                <label>Last Name</label>
                  
                    <input type="text" style="font-style:italic" class="form-control form-control-lg" id="student_lname" name="student_lname" placeholder="Enter last name..." required="required" />
                    
                </div>
                <div class="error" id="lnameErr"></div>
                    </div>
        
</div>
              


              <div class="form-check form-check-inline mb-1">
              <label for="" class="mr-4 mt-2">Gender</label>
                  <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="gender" value="Male" id="" checked> Male 
                
                  <label class="form-check-label">
                      <input class="form-check-input ml-2" type="radio" name="gender" value="Female" id="" > Female 
                     
              </div>
              </label>
              <div class="error" id="genderErr"></div>
              
            

      
    <div class="row">
        <div class="col-md-6">
        <div class=" form-group" >
                <label>Mobile No</label>
                 
                    <input type="text" class="form-control form-control-lg" style="font-style:italic"name="mobile_no" id="mobile_no"placeholder="Enter your mobile number.." required="required" />
                    
                </div>
                <div class="error" id="mobileErr"></div>
            
        </div>
        <div class="col-md-6">
        <div class=" form-group" >
                <label>Email</label>
                    
                    <input type="text" class="form-control form-control-lg"  style="font-style:italic"name="email" id="email" placeholder="Enter your email..." required="required" />
                   
                </div>
                <div class="error" id="emailErr"></div>
            
            </div>        
            
    </div>   
    <div class="row">
        <div class="col-md-6">
        <div class=" form-group" >
                <label>Department</label>
                <div class="group">
                    
                    <select style="width:100%; font-size:18px;" style="font-style:italic"class="form-control form-control-lg " type="text" class="custom-select" name="department" placeholder="Department" required="required">
                        <option value="Select depertment"></option>
                        <option value="Computer Engineering">Computer Engineering</option>
                        <option value="Food Security and Nutrition">Food Security and Nutrition</option>
                        <option value="Public Health">Public Health</option>
                        <option value="Environmental science">Environmental sciences</option>
                        <option value="Education in Sciences">Education in Sciences</option>
                        <option value="Education in Hmanities">Education in Hmanities</option>
                        <option value="Education in information and Communication Tech">Education in information and Communication Tech</option>
                        </select>
                   
                </div>
            </div>
        </div>
        <div class="col-md-6">
            
        <div class=" form-group" >
                <label>Year of Study</label>
                  
                    <input type="text" style="font-style:italic"class="form-control form-control-lg" name="year_of_study" placeholder="Year of Study" required="required" />
                </div>
            </div>
            
    </div> 

          <div class="row">
<div class="col-md-6">
<div class=" form-group" >
                <label>Password</label>
                    <input type="password" style="font-style:italic"  class="form-control form-control-lg" name="pwd" placeholder="Password" required="required" />
                </div>
    
</div>
<div class="col-md-6">
<div class=" form-group">
                <label>Comfirm password</label>
                    <input type="password" style="font-style:italic"  class="form-control form-control-lg" name="confirmpwd" placeholder="Confirm Password" required="required" />
                </div>
</div>
            
        

          </div>
            <!--<div class="forgot">
                <a href="#">Forgot Password?</a>
                <p><input type="checkbox">Remember Me</p>
            </div>-->
     <a href="index.php" class="text-info">     Already a member?</a>
    
            <div class='text-center mt-5'>
                        <button type="submit" class="btn btn-info pr-5 pl-5 pt-2 pb-2" style="font-size:23px; border-radius:30px; " name="signup-submit">signup</button>
                        </div>
                      
                    </form>
                </div>
            </div>
            
        </div>
    </div>

    


    <footer>
    <p class="text-info" style="margin-top: 50px;font-size:25px;font-weight:bold;letter-spacing: 5px;"> &copy; University-Of-Livingstonia-Laws-Campus</p>
    </footer>



</body>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/jquery.inputmask.js"></script>
<script>
$(function () {
    $('#regNo').inputmask("AAA/99/99/99");
    $('#mobile_no').inputmask("+265-999-999-999");

});
</script>
</html>
