$(function() {
    
    var Resultform = $('.ShowErrors').html().trim();
if(Resultform==''){

}else{
    $('#loginForm').modal('show');
    $(".myhide").fadeOut(5000);
}
   







    $("input[name='input1'],input[name='quant1']").hide();
    $(".drugX1").hide();
    $(".QuantX1").hide();
    $("input[name='input2'],input[name='quant2']").hide();
    $(".drugX2").hide();
    $(".QuantX2").hide();
    $("input[name='input3'],input[name='quant3']").hide();
    $(".drugX3").hide();
    $(".QuantX3").hide();
    $("input[name='input4'],input[name='quant4']").hide();
    $(".drugX4").hide();
    $(".QuantX4").hide();
    $("input[name='input5'],input[name='quant5']").hide();
    $(".drugX5").hide();
    $(".QuantX5").hide();
    $("input[name='input6'],input[name='quant6']").hide();
    $(".drugX6").hide();
    $(".QuantX6").hide();




});

$(function() {


});




$(function() {

    $(".Pharmacist").click(function() {

        $('#view').animatescroll({padding:-100});
        $("a.dropdown-item.active").removeClass("active");

        $(this).addClass("active");

        var msg = $('a.dropdown-item.active').text();


        document.getElementById("demo").innerHTML = msg;
        var spl = msg.split(" ");

        $("input[name = 'PID']").val(spl[0]);

        $("input[name = 'PID']").attr('readonly', true);
        var hate = " ";
        hate = $("input[name = 'PID']").val();


        $.post(

            "loaddata.php", { jack: hate },
            function(data) {
                $("input[name = 'FirstName']").val(data);
                var take = $("input[name = 'FirstName']").val();
                var stringArray = take.split(" ");
                $("input[name = 'FirstName']").val(stringArray[0]);
                $("input[name = 'FirstName']").attr('readonly', true);

                var stringArray1 = take.split(" ");
                $("input[name = 'LastName']").val(stringArray1[1]);
                $("input[name = 'LastName']").attr('readonly', true);



            }
        );


    });



});

$(document).ready(function() {


    $("#AlertFade").fadeOut(5000);
    $("#AlertFade2").fadeOut(5000);
    


});

//Doctor



//Cashier
$(document).ready(function() {
   
    $("#Doctor2").click(function() {


        $("a.dropdown-item.active").removeClass("active");

        $(this).addClass("active");

        var msg = $('a.dropdown-item.active').text();


        document.getElementById("demo").innerHTML = msg;
        var spl = msg.split(" ");

        $("input[name = 'DocID']").val(spl[0]);

        var hate = " ";
        hate = $("input[name = 'DocID']").val();
        $("input[name = 'DocID']").attr('readonly', true);





        $.post(


            "doc.php", { Doc: hate },
            function(data) {
                $("input[name = 'DocFN']").val(data);
                var take = $("input[name = 'DocFN']").val();

                var stringArray = take.split(" ");
                $("input[name = 'DocFN']").val(stringArray[0]);
                $("input[name = 'DocFN']").attr('readonly', true);

                var stringArray1 = take.split(" ");
                $("input[name = 'DocLN']").val(stringArray1[1]);
                $("input[name = 'DocLN']").attr('readonly', true);





            }
        );








    });

});




$("#CashF").click(function() {



    $("a.dropdown-item.active").removeClass("active");

    $(this).addClass("active");

    var msg = $('a.dropdown-item.active').text();


    document.getElementById("demo").innerHTML = msg;

    var spl = msg.split(" ");
    var hate = spl[0];
    $.post(


        "cashprint.php", { cash: hate },
        function(data) {
            $("#Svalue").val(data);




        }
    );





 


  


   
















});



$("input[name='SupIDINv']").keyup(function() {

    var getValue = $("input[name='SupIDINv']").val();

    $.post(


        "SuplierIds.php", { id: getValue },
        function(data) {
            if (data == 'Supplier ID does not exist') {
                $("input[name='SupIDINv']").removeClass('is-valid');
                $("input[name='SupIDINv']").addClass('is-invalid');
                $('#Myerror').html('Supplier ID does not exist');
            }

            if (data == ' ') {
                $("input[name='SupIDINv']").removeClass('is-invalid');
                $("input[name='SupIDINv']").addClass('is-valid');
                $('#Myerror').html('');
            }


        }



    );


});


$("input[name='SupID2']").keyup(function() {

    var getValue = $("input[name='SupID2']").val();

    $.post(


        "SuplierIds.php", { id: getValue },
        function(data) {
            if (data == 'Supplier ID does not exist') {
                $("input[name='SupID2']").removeClass('is-valid');
                $("input[name='SupID2']").addClass('is-invalid');
                $('#Myerror2').html('Supplier ID does not exist');
            }

            if (data == ' ') {
                $("input[name='SupID2']").removeClass('is-invalid');
                $("input[name='SupID2']").addClass('is-valid');
                $('#Myerror2').html('');
            }


        }



    );


});

$(document).ready(function () {
    //pass errors
    var Passs = $('.PassErrors').html();
    
    var PassF = Passs.trim();
    if(PassF==''){
        
    }
    else if(PassF!=''){
      $('#Update').modal();
    }


    
});

$(document).ready(function () {
      
   

        $("#Search").click(function(){
           

            var selectedBill = $('#cashPatient').val();
            $('.tabShow').addClass('d-block');

        $.ajax({
      
            url: "dalie.php",
            method: "POST",
            data: { selectedBill: selectedBill },
            dataType: "JSON",
            success: function(data) {
               $('.tablecontent').html(data.mine);
               $('.patient').html(data.details1);
               $('.cashier').html(data.details2);
               $('.cash1ID').html(data.details3);
               $('.desc').html(data.desc); 
             if(data.mine ==''){
                var total = 0;
                    
                $('.Bill').click(function (e) { 
                    $('.here').html(total);
                    $('.here').counterUp({
                        delay: 5,
                        time: 500,

                        
                    });

                $('input[name="billMe"]').val(0);
           });
                
             }else{
                $('.Bill').click(function (e) { 
                    var total = 0;
                    
                    total = data.result + data.final;
                    $('.here').html(total);
                    $('.here').counterUp({
                        delay: 5,
                        time: 500,

                        
                    });
                    $('input[name="billMe"]').val(total);
                    $('input[name="Billl"]').val(selectedBill);
                    $('#TheID').val(data.id);
                    $('#TheName').val(data.first+' '+data.last);

                    
           });
             }
              
                
            
             
               
               
           
            }
        });
        

        });



;
      


});

$(document).ready(function () {

   var id = $('.index').attr('id');
  
   if(id==undefined){
    $('#Dispense').addClass('d-none');
   }else{
      $('#Dispense').removeClass('d-none');

            
                
   
    
   }


$('.index').click(function (e) { 
 var id2 =  $(this).attr('id');
var get = id2.split(',');
var id = get[0];
var name = get[2];


$('#Inumber').val(id);
$('#DrugNam').val(name);




    
});








});

$(function () {
    var none ="";
    var none1 ="";
    var val1="";
    var val2="";
  
    $.ajax({
    
        url: "loadcount1.php",
        data: {none:none},
        method: "post",
        success: function (data) {
            $('.DArlet').html(data);
         
           if(data==0){
            $('.DArlet').addClass('d-none');
           }


        }
    });
    $.ajax({
      
        url: "loadcount2.php",
        data: {none:none},
        method: "post",
        success: function (data) {
            $('.DArlet2').html(data);
            if(data==0){
                $('.DArlet2').addClass('d-none');
               }
        }
    });

    $.ajax({
      
        url: "loadcount3.php",
        data: {none:none},
        method: "post",
        success: function (data) {
            $('.DArlet3').html(data);
            
           
        }
    });

   









});

    

    $(function () {

        $('#takevalue').keyup(function (e) { 

            var some =  $('#takevalue').val();
            $('#takevalue2').val(some);

        });
        $('.req').click(function (e) { 
  
            var take = $(this).attr('id');
          
            var take2 = take.split(",");
        

            $('#dnamev').val(take2[0]);
            $('#did').val(take2[1]);
            $('#did2').val(take2[1]);
            $('#dname2').val(take2[0]);
        }); 
        
        


        $('.restockname').click(function (e) { 
            var takeid = $(this).attr('id');
            var take2 = takeid.split(",");


            $('#stockid').val(take2[0]);
            $('#stockname').val(take2[1]);
          
            
        });

        
        $('.req3').click(function (e) { 
            var takeid = $(this).attr('id');
            var take2 = takeid.split(",");


            $('#sid').val(take2[1]);
            $('#snm').val(take2[0]);
          
            
        });
       
    });


    $(document).ready(function () {

    
        $(".updatesSupplier").click(function(){
            var selectname = $(this).attr('id') ;

           
           
            $.ajax({

                url: "updatesups.php",
                method: "POST",
                data: { selectname:selectname},
                dataType: "json",
                success: function(data) {
                    $('#dope').val(selectname);
                    $('#Fname').val(data.firstname);
                    $('#Lname').val(data.lastname);
                    $('#Cname').val(data.contact);
                    $('#Ename').val(data.email);
                    
    
    
    
    
                }
            });
          
            });
            $(".takestockID").click(function(){
                var selectname = $(this).attr('id') ;

               
               
                $.ajax({
    
                    url: "updateinv.php",
                    method: "POST",
                    data: { selectname:selectname},
                    dataType: "json",
                    success: function(data) {
                        $('#serial').val(data.serial);
                        $('#ItemName').val(data.Item);
                    $('#itemq').val(data.Quantity);
                    $('#itemp').val(data.Unit);
                    $('#iteme').val(data.exp);
                    $('#itemr').val(data.dates);
                    $('#itemt').val(data.type);
                    $('select#supname').val(data.sup);
                        
                  
        
                    }
                });
              
                });
    });

$(function () {
    var none ="";
 
    $.ajax({

        url: "notify.php",
        method: "POST",
        data: { none:none},
        dataType: "json",
        success: function(data) {
            $('.see').html(data.notify2);
            $('.beast').click(function (e) { 
               var id = $(this).attr('id');
              
                
            });




        }
    });

});


function showText(){

    var id =$('.textme').html();



}

$(document).ready(function () {
 
 $('.textms').click(function (e) { 
    var id = $(this).attr('id');
    
    


    $.ajax({

        url: "text.php",
        method: "POST",
        data: { id:id},
        dataType: "json",
        success: function(data) {
         
               
              $('#sendermsg').val(data.msg); 
              $('#sendersub').val(data.subject); 
              $('#senderuser').val(data.user);
              $('#useid').val(data.userid);
                $('#notID').val(id);
        }
    });
  
     
 });

 $('.textms').click(function (e) { 
    var id = $(this).attr('id');
    
    


    $.ajax({

        url: "text.php",
        method: "POST",
        data: { id:id},
        dataType: "json",
        success: function(data) {
         
               
              $('#sendermsg').val(data.msg); 
              $('#sendersub').val(data.subject); 
              $('#senderuser').val(data.user);
              $('#useid').val(data.userid);
                $('#notID').val(id);
        }
    });
  
     
 });


 $('.send').click(function (e) { 
  var id =  $(this).attr('id');
   $('#PID1').val(id);

   $.ajax({

    url: "send.php",
    method: "POST",
    data: { id:id},
    dataType: "json",
    success: function(data) {
     
        $('#FoutName1').val(data.first);
        $('#LoutName1').val(data.last);
    }
});

   
 });
    
});

$('.admit').click(function (e) { 
  var id = $(this).attr('id');
var spl = id.split('-');
  $('#addd').val(spl[0]);
  $('#adthis').html(spl[1]+' '+spl[2]);
    
});

$(function () {
        var id = '';
        $.ajax({

            url: "signup.php",
            method: "POST",
            data: { id:id},
            dataType: "json",
            success: function(data) {
             
           if(data.count == 0){
            $('#secondlogin').removeClass('d-none');
               $('#firstlogin').addClass('d-none');
              
                $('#sign').modal();
           }else{
            $('#firstlogin').removeClass('d-none');
         
            $('#secondlogin').addClass('d-none');
               $('#loginForm').modal();

           }

            }
        });

});

$(document).ready(function () {
    $('select#userServ').change(function (e) { 
        var selected = $(this).children("option:selected").val();

      

        $.ajax({

            url: "selectservice.php",
            method: "POST",
            data: { selected:selected},
            dataType: "json",
            success: function(data) {
             if(data.count=='Registration'){

                $('select#UserRole').val('Receptionist');
                    
              
             }
             if(data.count=='Billing'){

                $('select#UserRole').val('Cashier');
                    
              
             }
             if(data.count=='Inventory Management'){

                $('select#UserRole').val('Stores Clerk');
                    
              
             }
             if(data.count=='Vital Check'){

                $('select#UserRole').val('Nurse');
                    
              
             }
             if(data.count=='Drug Management'){

                $('select#UserRole').val('Pharmacist');
                    
              
             }
             if(data.count=='Prescription'){
                    
                $('select#UserRole').val('Doctor');
                    
              
             }

            }
        });
        
    });
});
$(function () {
    
 $('.dist').click(function (e) { 
     var id = $(this).attr('id');
   $('#deliver1').val(id);


    $.ajax({
        url: "dist.php",
        method: "POST",
        data: { id:id},
        dataType: "json",
        success: function(data) {
            
            $('#StockExp1').val(data.exp);
            $('#StockPr').val(data.price);
            $('#avqua').val(data.quant);

        }
    });
      


     
 });
      $('select#deliver1').change(function (e) { 
        var id = $(this).children('option:selected').val();
     
     
         $.ajax({
             url: "dist.php",
             method: "POST",
             data: { id:id},
             dataType: "json",
             success: function(data) {
            
                    $('#StockExp1').val(data.exp);

                    $('#avqua').val(data.quant);
                 $('#StockPr').val(data.price);
                
             }
         });
           
          
      });
 

      $('#StockQ').keyup(function (e) { 
         
        var get = parseInt($(this).val());
            var get2 = parseInt($('#avqua').val());


            if(get > get2){
                    $('.warner').removeClass('d-none');
                    $('.warner').addClass('d-block');
              
             
            }else{
                $('.warner').removeClass('d-block');
                $('.warner').addClass('d-none');
              
               
            }
      });


      $('#deliver').click(function (e) { 
        var get = parseInt($('#StockQ').val());
        var get2 = parseInt($('#avqua').val());
     
        if(get > get2){
            $('#StockQ').removeClass('is-valid');
            $('#StockQ').addClass('is-invalid');
               e.preventDefault();
           
        }else{
           
            $('#StockQ').removeClass('is-invalid');
     
           
        }

          
      });
});

$(function () {
    function jsonCallback(json){
        console.log(json);
      }
      
      $.ajax({
        url: "http://run.plnkr.co/plunks/v8xyYN64V4nqCshgjKms/data-2.json",
        dataType: "jsonp"
      });
      
});