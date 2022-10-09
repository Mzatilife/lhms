$(function () {

    //Outpatient form
    $('#outpatientform').trigger('reset');
    $('#nurseform1').trigger('reset');
    $('#docform').trigger('reset');
    $('#adddrugz').trigger('reset');
    $('#addInvent').trigger('reset');
    $('#addingsup').trigger('reset');
    $('#regusers').trigger('reset');
    $('#dist').trigger('reset');
function namez(x,y){
var pattern = new RegExp(/[~`!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?_]/);
var pattern2 = new RegExp(/[0-9]/);
var pattern3 = '';
var capital = x.charAt(0).toUpperCase() + x.substr(1);
if(pattern.test(x) || pattern2.test(x)){
   
  
    $('#'+y).removeClass('is-valid');
    $('#'+y).addClass('is-invalid');
    $('#'+y).val(capital);
    $('#'+y).popover({
        'placement':'bottom',
        'content':'No special characters/numbers allowed'
    }).popover('show');



}else{
    $('#'+y).removeClass('is-invalid');
    $('#'+y).addClass('is-valid');
    $('#'+y).val(capital);
   
        $('#'+y).popover('dispose');
   

}

    
}
function number(y,z){
 

    if(z<15){
       
     
        $('#'+y).removeClass('is-valid');
        $('#'+y).addClass('is-invalid');
        $('#'+y).popover({
            'placement':'bottom',
            'content':'Invalid number'
        }).popover('show');
    
    
    
    }else{
        $('#'+y).removeClass('is-invalid');
        $('#'+y).addClass('is-valid');
     
       
            $('#'+y).popover('dispose');
       
    
    }
    
        
    }

    function batch(y,z,g){
 
        var pattern = new RegExp(/[~`!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/);
        var pattern2 = new RegExp(/[A-Za-z]/);
        var num = 1;
        var num2 = 0;
        var num3 = 0;

     
        if(z<4 || pattern.test(g) || pattern2.test(g) || g.charAt(0)+g.charAt(1)+g.charAt(2) != 100){
           
         
            $('#'+y).removeClass('is-valid');
            $('#'+y).addClass('is-invalid');
            $('#'+y).popover({
                'placement':'bottom',
                'content':'Invalid Batch Number'
            }).popover('show');
        
        
        
        }else{

            $('#'+y).removeClass('is-invalid');
            $('#'+y).addClass('is-valid');
         
            
                $('#'+y).popover('dispose');
           
        
        }
        
            
        }

    function agez(x,y){
        var pattern = new RegExp(/[~`!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/);
        var pattern2 = new RegExp(/[A-Za-z]/);
        var pattern3 = '';
        var capital = x.charAt(0).toUpperCase() + x.substr(1);
        if(pattern.test(x) || pattern2.test(x)){
      
            $('#'+y).removeClass('is-valid');
            $('#'+y).addClass('is-invalid');
            $('#'+y).val(capital);

           
            $('#'+y).popover({
                'placement':'bottom',
                'content':'Numbers only'
            }).popover('show');
        

        
        }
       
        else{
            if(parseInt(x)<=0){
                $('#'+y).removeClass('is-valid');
                $('#'+y).addClass('is-invalid');
            $('#'+y).popover({
                'placement':'bottom',
                'content':'It should be greater than 0'
            }).popover('show');



            }else{

           
            $('#'+y).removeClass('is-invalid');
    $('#'+y).addClass('is-valid');
    $('#'+y).val(capital);
   
        $('#'+y).popover('dispose');
            
        
        }
        
            
 }

}
















    $('.namez').on('keyup change blur',function (e) { 
     getval = $(this).val();
     getid = $(this).attr('id');
            namez(getval,getid);
            if($('#'+getid).val() ==''){
                $('#'+getid).removeClass('is-valid');
                $('#'+getid).addClass('is-invalid');
                $('#'+getid).attr('required', true);
            }

    });


        $('.agez').on('keyup change blur ',function (e) { 
            getval = $(this).val();
            getid = $(this).attr('id');
            agez(getval,getid);
            
         if($('#'+getid).val() ==''){
             $('#'+getid).removeClass('is-valid');
             $('#'+getid).addClass('is-invalid');
             $('#'+getid).attr('required', true);
         }
        });

        $('.number').on('keyup change blur',function (e) { 
            getval = $(this).val();
            getid = $(this).attr('id');
            
           var get = getval.split('_');
           var count = get[0].length;
          number(getid,count);
           
            
            
        });

        $('.batch').on('keyup change blur',function (e) { 
            getval = $(this).val();
            getid = $(this).attr('id');
        
           var count = getval.length;
          
          batch(getid,count,getval);
         

           
            
            
        });

     

      
       $('#showout').click(function (e) { 
      


            var number =$('#outpatientform input').filter('.is-invalid');
              // element == this
        if(number.length>0){
           e.preventDefault();
            $('.correct').addClass('d-block');
        }else{
            $('.correct').removeClass('d-block');
            $('.correct').addClass('d-none');
            $('#showout').unbind('submit');


        }
        

       });
        

$('[data-toggle="tab"]').click(function (e) { 
    $('.correct').removeClass('d-block');
    $('input').popover('dispose');
    $('.correct').addClass('d-none');
});

//nurse

  
$('#shownurse').click(function (e) { 
      


    var number =$('#nurseform1 input').filter('.is-invalid');
  
      // element == this
if(number.length>0){
   
   e.preventDefault();
    $('.correct').addClass('d-block');
}else{
    $('.correct').removeClass('d-block');
    $('.correct').addClass('d-none');
    $('#shownurse').unbind('submit');


}


});




//Doctor

//Pharmacist
  
$('#AddDRUGSb').click(function (e) { 
      

    
    var number =$('#adddrugz input').filter('.is-invalid');
  
      // element == this
if(number.length>0){
   
   e.preventDefault();
    $('.correct').addClass('d-block');
}else{
    $('.correct').removeClass('d-block');
    $('.correct').addClass('d-none');
    $('#AddDRUGS').unbind('submit');


}


});

//Inventory
$('#stores').click(function (e) { 
      

    
    var number =$('#addInvent input').filter('.is-invalid');
  
      // element == this
if(number.length>0){
   
   e.preventDefault();
    $('.correct').addClass('d-block');
}else{
    $('.correct').removeClass('d-block');
    $('.correct').addClass('d-none');
    $('#stores').unbind('submit');


}


});
$('#Addsupplier').click(function (e) { 
      

    
    var number =$('#addingsup input').filter('.is-invalid');
  
      // element == this
if(number.length>0){
   
   e.preventDefault();
    $('.correct').addClass('d-block');
}else{
    $('.correct').removeClass('d-block');
    $('.correct').addClass('d-none');
    $('#Addsupplier').unbind('submit');


}


});






//admin
$('#reg').click(function (e) { 
   
  
    var second = $('#lps').val();
    var first =    $('#lps2').val();
  
  
    
    
   
    if(second != first ){
       
      
      
        $('#lps2').removeClass('is-valid');
        $('#lps2').addClass('is-invalid');
        $('#lps').removeClass('is-valid');
        $('#lps').addClass('is-invalid');
        e.preventDefault();
    }
      
    if(second == first && second!=''&& first !='' ){
       
      
      
        $('#lps2,#lps').removeClass('is-invalid');
        $('#lps2,#lps').addClass('is-valid');
       
        
    }



});
$('#reg').click(function (e) { 
   
    var number =$('#regusers input').filter('.is-invalid');

      // element == this
if(number.length>0){
   
   e.preventDefault();
    $('.correct').addClass('d-block');


}else{
    $('.correct').removeClass('d-block');
    $('.correct').addClass('d-none');
    $('#reg').unbind('submit');


}


});



$('#').change(function (e) { 
    var second = $('#lps').val();
    var first =    $('#lps2').val();
    if(second == first && first !='' && second !=''){
        $('#lps').removeClass('is-invalid');
        $('#lps').addClass('is-valid');
        $('#lps2').removeClass('is-invalid');
        $('#lps2').addClass('is-valid');
        $('#lps2,#lps').popover('dispose');
    
    }else if(second != first && first !='' && second !=''){
        $('#lps2,#lps').popover({
            'placement':'bottom',
            'content':'Passwords do not match'
        }).popover('show');
      
        $('#lps2').removeClass('is-valid');
        $('#lps2').addClass('is-invalid');
        $('#lps').removeClass('is-valid');
        $('#lps').addClass('is-invalid');
    }
    
});
$('#SubmitReg1').click(function (e) { 



    
    var number =$('#signin input').filter('.is-invalid');

      // element == this
if(number.length>0){
   
   e.preventDefault();
    $('.correct').addClass('d-block');
}else{
    $('.correct').removeClass('d-block');
    $('.correct').addClass('d-none');
    $('#SubmitReg1').unbind('submit');


}


});
$('#LoginTHis').click(function (e) { 



    
    var number =$('#myForm input').filter('.is-invalid');

      // element == this
if(number.length>0){
    e.preventDefault();
  
    $('.correct').addClass('d-block');
}else{
    $('.correct').removeClass('d-block');
    $('.correct').addClass('d-none');
    $('#subb').unbind('submit');


}


});
$('#updatepatient').click(function (e) { 
 
    
    var number =$('#patientlist input').filter('.is-invalid');
  
    // element == this
if(number.length>0){
 
 e.preventDefault();
  $('.correct').addClass('d-block');
}else{
  $('.correct').removeClass('d-block');
  $('.correct').addClass('d-none');
  $('#updatepatient').unbind('submit');


}

});

$('#updatevc').click(function (e) { 
 
    
    var number =$('#vitallist input').filter('.is-invalid');
  
    // element == this
if(number.length>0){
 
 e.preventDefault();
  $('.correct').addClass('d-block');
}else{
  $('.correct').removeClass('d-block');
  $('.correct').addClass('d-none');
  $('#updatevc').unbind('submit');


}

});

$('#updatepr').click(function (e) { 
 
    
    var number =$('#presclist input').filter('.is-invalid');
  
    // element == this
if(number.length>0){
 
 e.preventDefault();
  $('.correct').addClass('d-block');
}else{
  $('.correct').removeClass('d-block');
  $('.correct').addClass('d-none');
  $('#updatepr').unbind('submit');


}

});

$('#updateS').click(function (e) { 
 
    
    var number =$('#adminstock input').filter('.is-invalid');
  
    // element == this
if(number.length>0){
 
 e.preventDefault();
  $('.correct').addClass('d-block');
}else{
  $('.correct').removeClass('d-block');
  $('.correct').addClass('d-none');
  $('#updateS').unbind('submit');


}

});

$('#updatesupplier1').click(function (e) { 
 
    
    var number =$('#adminstockr input').filter('.is-invalid');
  
    // element == this
if(number.length>0){
 
 e.preventDefault();
  $('.correct').addClass('d-block');
}else{
  $('.correct').removeClass('d-block');
  $('.correct').addClass('d-none');
  $('#updatesupplier1').unbind('submit');


}

});

$('#Return1').click(function (e) { 
 
    
    var number =$('#adminstockp input').filter('.is-invalid');
  
    // element == this
if(number.length>0){
 
 e.preventDefault();
  $('.correct').addClass('d-block');
}else{
  $('.correct').removeClass('d-block');
  $('.correct').addClass('d-none');
  $('#Return1').unbind('submit');


}

});



//modal up users

$('#updateuser').click(function (e) { 
    var second = $('#lps').val();
    var first =    $('#lps2').val();
  
  
    
    
   
    if(second != first ){
       
      
      
        $('#lps2').removeClass('is-valid');
        $('#lps2').addClass('is-invalid');
        $('#lps').removeClass('is-valid');
        $('#lps').addClass('is-invalid');
        e.preventDefault();
    }
      
    if(second == first && second!=''&& first !='' ){
       
      
      
        $('#lps2,#lps').removeClass('is-invalid');
        $('#lps2,#lps').addClass('is-valid');
       
        
    }

});


$('#updateuser').click(function (e) { 
  
   
    var number =$('#upusers input').filter('.is-invalid');
   

      // element == this
if(number.length>0){
   
   e.preventDefault();
    $('.correct').addClass('d-block');


}else{
    $('.correct').removeClass('d-block');
    $('.correct').addClass('d-none');
    $('#updateuser').unbind('submit');


}


});

$('#deliver').click(function (e) { 
  
   
    var number =$('#dist input').filter('.is-invalid');
   

      // element == this
if(number.length>0){
   
   e.preventDefault();
    $('.correct').addClass('d-block');


}else{
    $('.correct').removeClass('d-block');
    $('.correct').addClass('d-none');
    $('#deliver').unbind('submit');


}


});


$('#save').click(function (e) { 
  
   
    var number =$('#dispppp input').filter('.is-invalid');
   

      // element == this
if(number.length>0){
   
   e.preventDefault();
    $('.correct').addClass('d-block');


}else{
    $('.correct').removeClass('d-block');
    $('.correct').addClass('d-none');
    $('#save').unbind('submit');


}


});
});
   

