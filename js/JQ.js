$(document).ready(function() {


    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    //scroll up function

    $("#up").click(function() {
        $('html ,body').animate({ scrollTop: 0 }, 800, 'easeInOutExpo');

    });

    $(window).scroll(function() {

        var $win = $(window);
        if ($win.scrollTop() > 200) {
            
            $('#up').fadeIn();
      
        
        } else {
            $('#up').fadeOut();

    
        }

    });
    //box hover function
    $('.box').hover(function() {
        // over
        $(this).animate({
            marginTop: "-=3%",
        }, 200);

    }, function() {
        // out
        $(this).animate({
            marginTop: "0%"
        }, 200);
    });


    $(document).ready(function() {
        $('#rootwizard').bootstrapWizard();
    });







});






function getStuff() {

    var x = document.getElementById("FirstN").value;
    var y = document.getElementById("LastN").value;
    document.getElementById("fname").innerHTML = x + " " + y;

    var heart = document.getElementById("HeartP").value;
    var ResP = document.getElementById("ResP").value;
    var Body = document.getElementById("BodyT").value;
    var Blood = document.getElementById("BloodP").value;
    var GetID = document.getElementById("ID").value;
    var Weight = document.getElementById("WeT").value;
    var Height = document.getElementById("Het").value;

 
    


    if (GetID == "") {
        document.getElementById("PatiID").innerHTML = GetID;

    } else {
        document.getElementById("PatiID").innerHTML = GetID;

    }
    if (heart == "") {
        document.getElementById("HP").innerHTML = heart;
    } else {
        document.getElementById("HP").innerHTML = heart + " " + " " + "bpm";
    }

    if (ResP == "") {
        document.getElementById("RP").innerHTML = ResP;

    } else {
        document.getElementById("RP").innerHTML = ResP + " " + " " + "bra";
    }

    if (Body == "") {
        document.getElementById("BT").innerHTML = Body;

    } else {
        document.getElementById("BT").innerHTML = Body + " " + " " + "celcius";
    }

    if (Blood == "") {
        document.getElementById("BP").innerHTML = Blood;
    } else {
        document.getElementById("BP").innerHTML = Blood + " " + " " + "/120 mm Hg";
    }

    if (Weight == "") {
        document.getElementById("WT").innerHTML = Weight;
    } else {
        document.getElementById("WT").innerHTML = Weight + " " + " " + "Kg";
    }

    if (Height == "") {
        document.getElementById("HT").innerHTML = Height;
    } else {
        document.getElementById("HT").innerHTML = Height + " " + " " + "m";
    }


    









}



//for cash
function getStuff1() {

    var FirstNameCash = document.getElementById("FirstNameCash").value;
    var LastNameCash = document.getElementById("LastNameCash").value;

    document.getElementById("cashFN").innerHTML = FirstNameCash;
    document.getElementById("cashLN").innerHTML = LastNameCash;
    var finalname = FirstNameCash + " " + LastNameCash;
    document.getElementsByName('last').value = document.getElementById("FirstNameCash").value;





}

function page() {
    document.getElementById("thatForm").reset();
}






$(function() {
    $(".press").click(function(e) {
        e.preventDefault();
        $("#text").hide();

    });


    


});

$(document).ready(function () {
  
    var x = document.cookie.split(";");

var patt = /username=/g;


var html = $('.searchcontent').html();
var html2 = html.trim();

var result = x[0].search(patt);

if(result==-1){
    //
    $('#person').val("");
   
}else{
  var final = x[0];

 var sp2 = final.split("=");

 if($("#Svalue").val()!="" && html2 !="" ){
    $('#person').val(sp2[1]);
    
    $('#dsp').addClass('d-block');


 }else{
    if(html2 ==""){
        $('#person').val("");
    }

 }

  
}

});



$(function () {
    $('#paybut').addClass('d-none');

  
});

$(function() {

    function showUnreadNotifications(option = '') {

            var take = "";
        $("select#cashPatient").change(function(){
            var selectedBill = $(this).children("option:selected").val();
            $('.tabShow').addClass('d-block');
            take = selectedBill;
          
            });

          
           
        

    
        $.ajax({

            url: "fetch.php",
            method: "POST",
            data: { option: option, take:take },
            dataType: "json",
            success: function(data) {
                $('#nursesection').html(data.notification);

                //nurse
                
    $(".Nurse1").click(function() {

        $('#view').animatescroll({padding:-100});
   
     var msg1 =  $(this).attr('id');
 
     $.ajax({
 
         url: "loaddata.php",
         method: "POST",
         data: { msg1:msg1},
         dataType: "json",
         success: function(data) {
             $('#FirstN').val(data.firstname);
             $('#LastN').val(data.lastname);
             $('#ID').val(data.patient);
             $('#notid').val(msg1);
 
         }
     });


    });

                
                $('#Doctor').html(data.notification2);

             
                $(".Doctor1").click(function() {

                    $('#view').animatescroll({padding:-100});
                    var msg1 =  $(this).attr('id');
 
                    $.ajax({
                
                        url: "doc.php",
                        method: "POST",
                        data: { msg1:msg1},
                        dataType: "json",
                        success: function(data) {
                            $('#DocFN').val(data.firstname);
                            $('#DocLN').val(data.lastname);
                            $('#DocID').val(data.patient);
                            $('#notid2').val(msg1);
                
                        }
                    });
             
            
                });
           
                
                $("#Cashier1").html(data.notification3);
                
                $(".Cashier1").click(function(){
                       
                    $('#view').animatescroll({padding:-100});
                    var selectedBill = $(this).attr('id');
               $('#notifiID').val(selectedBill);
                    
             
               $('#paybut').addClass('d-block');
                  
                   $.ajax({
              
                    url: "dalie.php",
                    method: "POST",
                    data: { selectedBill: selectedBill },
                    dataType: "JSON",
                    success: function(data) {

                        $('#cashpid').val(data.id);
                        $('#cashfis').val(data.first);
                        $('#cashlin').val(data.last);

                     var sum = 0;
                      
                      $('#inline').click(function (e) { 

                       
                        var lab = $('#labcharge').val();
                        var pharmacy= $('#pcharge').val();
                        var vital= $('#vcharge').val();
                        var regist= $('#rcharge').val();
                        var xray= $('#xcharge').val();
                        var numlub = $('#biil input').filter('.is-invalid');

                     ;
                        if(lab!=''&& pharmacy!=''&& vital!=''&&regist!=''&&xray!='' ){
                            sum = parseFloat(lab) + parseFloat(pharmacy) + parseFloat(vital) + parseFloat(regist) + parseFloat(xray);
                           $('#Totals').val(sum);
                         
                           $('#payme2').show();
                        }else if(lab==''|| pharmacy==''|| vital==''||regist==''||xray!='' ){
                           $('#payme2').hide();
                           $('.correct').html('All fields should be filled');
                            $('.correct').addClass('d-block');
                         
                            setTimeout(() => {
                                
                                $('.correct').fadeOut('slow');
                                $('.correct').removeClass('d-block');
                            }, 2000);
                           
                           
                        } 
                   
                        if(numlub.length > 0){
                            $('#Totals').val(0);
                                  $('#payme2').hide();
                                  $('.correct').html('Please correct all fields');
                            $('.correct').addClass('d-block');
                            setTimeout(() => {
                                
                                $('.correct').fadeOut('slow');
                                $('.correct').removeClass('d-block');
                            }, 2000);

                        }

                        

                         
                      });
                       $('#payme').click(function (e) { 
                                $('#Billl').val(data.bill);
                                $('#billMe').val(Math.round( data.total / 754.53 ));
                                $('#TheID').val(data.pat);
                                $('#TheName').val(data.full);
                                $('#payBtn2').html('Pay ' +'US '+(  Math.round( data.total / 754.53 ) ));
                           
                       });


                       $('#payme2').click(function (e) { 
var numlub = $('#biil input').filter('.is-invalid');

if(numlub.length > 0){
    

    e.stopPropagation();
    $('#Totals').val(0);
    $('#payme2').hide();
    $('.correct').html('Please correct all fields');
$('.correct').addClass('d-block');
setTimeout(() => {
  
  $('.correct').fadeOut('slow');
  $('.correct').removeClass('d-block');
}, 2000);
}else{
    var lab = $('#labcharge').val();
    var pharmacy= $('#pcharge').val();
    var vital= $('#vcharge').val();
    var regist= $('#rcharge').val();
    var xray= $('#xcharge').val();

    $('.rlaab').val(lab);
    $('.rpharma').val(pharmacy);
    $('.rvital').val(vital);
    $('.rreg').val(regist);
    $('.rxray').val(xray);
  
}

                        $('#Billl2').val(data.bill);
                        $('#billMe2').val(sum);
                        $('#payBtn').html('Pay ' +'K '+ sum);
                     
                        $('#TheID2').val(data.pat);
                        $('#TheName2').val(data.full);
                        
                        $('#billMe2').counterUp({
                            delay: 5,
                            time: 7000,
                    
                        });
                   
               });
                
                    }
                });
                
        
                });
                
                $("#Pharmacist1").html(data.notification4);
                $(".Pharmacist1").click(function(){
                    $("a.dropdown-item.active").removeClass("active");

                    $(this).addClass("active");
                   
                    var id = $(this).attr('id');
              
               
                    $.ajax({
                
                        url: "daliep.php",
                        method: "POST",
                        data: { id:id},
                        dataType: "json",
                        success: function(data) {
                            $('#Svalue').val(data.bill);
                            $('#person').val(data.ntd);
                             document.cookie="username="+data.ntd;
                            $('#search').trigger('click');

                            
                        }
                    });
                   


                });
              
                if (data.unreadNotification > 0) {
                    $('.count').html(data.unreadNotification);

                }
                
                if (data.unreadNotification == 0) {
                    $('.count').html(data.unreadNotification);
                    $('.count').addClass('d-none');
                }

                if (data.unreadNotification2 > 0) {
                    $('.count2').html(data.unreadNotification2);
                }
                if (data.unreadNotification3 > 0) {
                    $('.count3').html(data.unreadNotification3);




                }
                if (data.unreadNotification4 > 0) {
                    $('.count4').html(data.unreadNotification4);




                }





            }
        });
    }

    showUnreadNotifications();

    $("#Notify").submit(function(e) {



        if ($('#FirstN').val() != '' && $('#LastN').val() != '') {

            var formData = $(this).serialize();

            $.ajax({

                url: "insert.php",
                method: "POST",
                data: formData,
                success: function(data) {

                    $('#Notify')[0].reset();
                    showUnreadNotifications();

                }
            });


        } else {

        }

    });

    $(document).on('click', '.dropdown-toggle', function() {
        $('.count').html('');
        $('.count2').html('');
        $('.count3').html('');
    });
    setInterval(function() {
        showUnreadNotifications();
    }, 3000);

});











$(function() {
    $("#exist").hide();
    $("[data-toggle='tooltip']").tooltip();
    $("#click1").click(function() {

        $("#exist").hide();
        $("#Thisdrug").show();

        $("#ThisID").show();

    });
    $("#click2").click(function(e) {
        e.preventDefault();
        $("#exist").show();
        $("#Thisdrug").hide();
        $("#ThisID").hide();

    });









});







function myFunction() {

    $(window).on('load', function() {
        $('#loader').fadeOut('1000', function() {
            $(this).remove();
         
        });

       
    });
}




function deleteE1() {
    h1 = document.getElementById('drug2').value;
    if (h1 != '') {

        document.getElementById('drug2').value = '';
    }

}

function deleteE2() {

    h2 = document.getElementById('drug3').value;
    if (h2 != '') {

        document.getElementById('drug3').value = '';
    }

}

function deleteE3() {

    h3 = document.getElementById('drug4').value;
    if (h3 != '') {

        document.getElementById('drug4').value = '';
    }

}

function deleteE4() {


    h4 = document.getElementById('drug5').value;
    if (h4 != '') {

        document.getElementById('drug5').value = '';
    }

}

function deleteE5() {


    h5 = document.getElementById('drug6').value;
    if (h5 != '') {

        document.getElementById('drug6').value = '';
    }

}







$(function() {
    //to delete input


    $(".hide2").hide();
    $(".hide3").hide();
    $(".hide4").hide();
    $(".hide5").hide();
    $(".hide6").hide();
    $('.unhide3').hide();
    //for input

    $('.unhide2').click(function(e) {
        e.preventDefault();
        $(".hide2").show();

        var take = $(".hide2").show();
        if (take) {
            $('.unhide2').hide();
            $('.unhide3').show();





        }

    });


    $('.delete2').click(function(e) {
        e.preventDefault();
        $(".hide2").hide();
        var take2 = $(".hide2").hide();

        if (take2) {
            $('.unhide2').show();

        }

        deleteE1();


    });

    $('.unhide3').click(function(e) {
        e.preventDefault();
        $(".hide3").show();

        var take = $(".hide3").show();
        if (take) {

            $('.unhide3').hide();
            $('.unhide4').show();



        }

    });

    $('.delete3').click(function(e) {
        e.preventDefault();
        $(".hide3").hide();
        var take2 = $(".hide3").hide();

        if (take2) {
            $('.unhide3').show();

        }
        deleteE2();


    });

    $('.unhide4').click(function(e) {
        e.preventDefault();
        $(".hide3").show();

        var take = $(".hide4").show();
        if (take) {

            $('.unhide4').hide();
            $('.unhide5').show();



        }

    });

    $('.delete4').click(function(e) {
        e.preventDefault();
        $(".hide4").hide();
        var take2 = $(".hide4").hide();

        if (take2) {
            $('.unhide4').show();

        }
        deleteE3();


    });

    $('.unhide5').click(function(e) {
        e.preventDefault();
        $(".hide5").show();

        var take = $(".hide5").show();
        if (take) {

            $('.unhide5').hide();
            $('.unhide6').show();



        }

    });

    $('.delete5').click(function(e) {
        e.preventDefault();
        $(".hide5").hide();
        var take2 = $(".hide5").hide();

        if (take2) {
            $('.unhide5').show();

        }

        deleteE4();


    });

    $('.unhide6').click(function(e) {
        e.preventDefault();
        $(".hide6").show();

        var take = $(".hide6").show();
        if (take) {

            $('.unhide6').hide();
            $('.unhide7').show();



        }

    });

    $('.delete6').click(function(e) {
        e.preventDefault();
        $(".hide6").hide();
        var take2 = $(".hide6").hide();

        if (take2) {
            $('.unhide6').show();

        }
        deleteE5();


    });







});

$(function() {


    $("show").click(function() {
        alert("empty");

    });
    $('.load').hide();
$('#UpdateMY').click(function (e) { 

    if($('#Old').val()=='' || $('#New').val()=='' || $('#UserPass').val()==''){
        
        $('#Old').attr('required',true);
        $('#New').attr('required',true);
        $('#UserPass').attr('required',true);
       
      }

      if($('#Old').val()!='' && $('#New').val()!=''){
     
            $('#Old').removeClass('is-invalid');
            $('#New').removeClass('is-invalid');
            $('#Old').addClass('is-valid');
            $('#New').addClass('is-valid');
            e.preventDefault();

            var User =  $('#UserPass').val();

            $.post(

                "foward.php", { foward: User },
                function(data) {
                 
                   
                    
//All correct}
                    if(data=='matched' && $('#Old').val()==$('#New').val()){
                        $('#just').addClass('d-block');
                        var Newpassword = $('#New').val();

                        $.post(


                            "foward1.php", { foward1: Newpassword },
                            function(data) {
                             
                                    
                        $('#just').html(data);
                        $('#UserPass').removeClass('is-invalid');
                        $('#UserPass').addClass('is-valid');
                        if( $('#UserPass').addClass('is-valid')){
                            $('#just').removeClass('alert alert-warning');
                            $('#just').addClass('alert alert-success');
                            $('.popTop').show();
                            $('.popTop').fadeOut(1000, function () {
                                    $('#Live').submit();
                            });

                        }
                    
                            }
                    
                    
                    
                        );

                    }

                 else   if(data=='matched' && $('#Old').val()!=$('#New').val()){
                    $('#Old').removeClass('is-valid');
                    $('#New').removeClass('is-valid');
                    $('#Old').addClass('is-invalid');
                    $('#New').addClass('is-invalid');
                    $('#just').addClass('d-block');
                   
                    $('#just').removeClass('alert alert-success');
                        $('#just').addClass('alert alert-warning');
                    $('#just').html('Old & New password unmatch');
                    $('#UserPass').removeClass('is-invalid');
                    $('#UserPass').addClass('is-valid');
                    $('.popTop').show();
                    $('.popTop').fadeOut(3000, function () {
            
                    });

                    }
                  else  if(data=='not matched' && $('#Old').val()==$('#New').val()){
                        $('#just').addClass('d-block');
                        $('.popTop').show();
                        $('#just').removeClass('alert alert-success');
                            $('#just').addClass('alert alert-warning');
                        $('#just').html('Old password is wrong!');
                        $('#UserPass').removeClass('is-valid');
                        $('#UserPass').addClass('is-invalid');
                        $('.popTop').fadeOut(3000, function () {
                
                        });
                     
                    }
                  else  if(data=='not matched' && $('#Old').val()!=$('#New').val()){
                    $('#Old').removeClass('is-valid');
                    $('#New').removeClass('is-valid');
                    $('#Old').addClass('is-invalid');
                    $('#New').addClass('is-invalid');
                    $('#just').addClass('d-block');
                    $('#just').removeClass('alert alert-success');
                        $('#just').addClass('alert alert-warning');
                    $('#just').html('Correct all fields');
                    $('#UserPass').removeClass('is-valid');
                    $('#UserPass').addClass('is-invalid');
                    $('.popTop').show();
                    $('.popTop').fadeOut(3000, function () {
            
                    });
                    }



    
                }
            );

            
   

     
       
      }

   
    $('#Old').focus(function (e) {
        $('.just').removeClass('d-block'); 
        $('.just').addClass('d-none');
        
    });
    $('#New').focus(function (e) {
        $('.just').removeClass('d-block'); 
        $('.just').addClass('d-none');
        
    });
    $('#UserPass').focus(function (e) {
        $('.just').removeClass('d-block'); 
        $('.just').addClass('d-none');
        
    });
 

});











});


$('.click').click(function (e) { 
  var patientID = $(this).attr("id");

  $.ajax({
     
      url: "select.php",
      method: "post",
      data: {patientID:patientID},
      success: function (data) {
          $('#patientDetails').html(data);
          $('.patientDetails').html(data);
      
      }
  });   
    
});


$(document).ready(function () {
    $('#ext').addClass('d-none');
    $('.newd').click(function (e) { 
        $('#ext').removeClass('d-block');
        $('#ext').addClass('d-none');

        $('#neW').removeClass('d-none');
        $('#neW').addClass('d-block');

        $('#Current').removeClass('d-none');
        $('#Current').addClass('d-block');
        
    });

    $('.oldd').click(function (e) { 
        $('#ext').removeClass('d-none');
        $('#ext').addClass('d-block');

        $('#neW').removeClass('d-block');
        $('#neW').addClass('d-none');

        
        $('#Current').removeClass('d-block');
        $('#Current').addClass('d-none');
        
        
    });



});

$(document).ready(function () {

    $('.counter').counterUp({
        delay: 5,
        time: 1000
    });
});



$(function () {
    
    $(window).scroll(function () { 
        var name = $(window).scrollTop();
            if(name > 0){
                $('#menu').removeClass('sticky-top');
                $('#menu').addClass('fixed-top');
                $('#menu').fadeIn(5000, function () {
                    $('#menu').css('transition', '0.8s');
                    $('#menu').addClass('bg-dark');
                });
               
            }else{
                $('#menu').removeClass('fixed-top');
                $('#menu').addClass('sticky-top');
            }

        
    });
});


$(document).ready(function () {
 $('.updatevc').click(function (e) { 
  var id = $(this).attr('id');

     
               
  $.ajax({
                
    url: "updatevc.php",
    method: "POST",
    data: { id:id},
    dataType: "json",
    success: function(data) {
        $('#ind').val(id);
        $('#adpid').val(data.pid);
    
        $('#adfs').val(data.first);
        $('#adfs').click(function (e) { 
           
              
          });
        $('#adls').val(data.last);
        $('#adls').click(function (e) { 
           
              
          });
        $('#adhr').val(data.hr);
        $('#adhr').click(function (e) { 
           
              
          });
        $('#adht').val(data.ht);
        $('#adht').click(function (e) { 
           
              
          });
        $('#adwt').val(data.wt);
        $('#adwt').click(function (e) { 
           
              
          });
        $('#adbp').val(data.bp);
        $('#adbp').click(function (e) { 
           
              
          });
        $('#adbt').val(data.bt);
        $('#adbt').click(function (e) { 
           
              
          });
        $('#adresp').val(data.rp);
        $('#adresp').click(function (e) { 
           
              
          });


    }
});
 });
 $('.updatepr').click(function (e) { 
    var id = $(this).attr('id');

       
                 
    $.ajax({
                  
      url: "updatepr.php",
      method: "POST",
      data: { id:id},
      dataType: "json",
      success: function(data) {
          $('#indexn').val(id);
          $('#presID').val(data.pid);
      
          $('#presfn').val(data.first);
          $('#presfn').click(function (e) { 
             
                
            });
          $('#presls').val(data.last);
          $('#presls').click(function (e) { 
             
                
            });
          $('#presdiag').val(data.diag);
          $('#presdiag').click(function (e) { 
             
                
            });

         

           
         
         
  
  
      }
  });





   });
   
});



  $(function () {
    
    $('#cardnumber').on('keypress change blur', function () {
        $(this).val(function (index, value) {
          return value.replace(/[^a-z0-9]+/gi, '').replace(/(.{4})/g, '$1 ');
        });
      });
      
      $('#cardnumber').on('copy cut paste', function () {
        setTimeout(function () {
          $('#credit-card').trigger("change");
        });
      });

var check = $('.paymentResponse').html();

if(check ==''){

}else{
    $('.paymentResponse').addClass('d-block');
}






  });

  $(document).ready(function () {
    $('#payme2').hide();


    var numlub = $('#biil input').filter('.is-invalid');
   


  

  });


$(function () {
    $('#offline').hide();
    function online(){

    var ifConnected = window.navigator.onLine;


var none ='';
none = ifConnected;

$.ajax({
                  
    url: "online.php",
    method: "POST",
    data: { none:none},
    dataType: "json",
    success: function(data) {

      
     if(data.off!=''){
        $('#sendemail').hide();
        $('#offline').show();
            $('#offline').html( '<i class="fa fa-exclamation-circle" aria-hidden="true"></i>  ' +data.off);
     }else{
         
        $('#sendemail').show();
        $('#offline').hide();

     }
   


        }
        });

    }
     
    
    online();

    setInterval(() => {
        online();
    }, 500);


});



$(function () {
    var nels = '';


    $.ajax({
     
        url: "nels.php",
        method:"post",
        data: {nels:nels},
        dataType: "json",
        success: function (data) {
           
        }
    });
});


$(selector).change(function (e) { 
    e.preventDefault();
    
});