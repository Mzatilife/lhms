$(function () {
    




$('#exampleInputuser').on('change keyup',function (e) { 

  var user =  $(this).val();
 
    $.ajax({

        url: "pass.php",
        method: "POST",
        data: { user:user},
        dataType: "json",
        success: function(data){

            if(data.set==1){
               $('#exampleInputuser').removeClass('is-invalid');
               $('#exampleInputuser').addClass('is-valid');
               $('#exampleInputuser').popover('dispose');
            }else if(data.set==0){
                $('#exampleInputuser').removeClass('is-valid');
                $('#exampleInputuser').addClass('is-invalid');
                $('#exampleInputuser').popover({
                    'placement':'left',
                    'content':'Username does not exist'
                }).popover('show');
            }

            if(user ==''){
                $('#exampleInputuser').removeClass('is-valid');
                $('#exampleInputuser').addClass('is-invalid');
                $('#exampleInputuser').attr('required', true);
            } 
           
        }
    });
});



});