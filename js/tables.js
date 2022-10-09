$(function () {
  //users

  $('.users').click(function (e) { 


    var id1 = $(this).attr('id');
    
    $.ajax({
        url: "users.php",
            method: "POST",
            data: { id1: id1 },
            dataType: "JSON",
        success: function (data) {
            $('#FirstName').val(data.fn);
            $('#LastName').val(data.ln);
            $('#UserName').val(data.un);
           
            $('#UserID').val(id1);
            $('#UserRole').val(data.ur);
            $('#UserEmail').val(data.ue);
     
        }
    });
    
      
  });




  $('.patientP').click(function (e) { 

 
    var pid = $(this).attr('id');

     $('#outID').val(pid);
    $.ajax({
        url: "patient.php",
            method: "POST",
            data: { pid: pid },
            dataType: "JSON",
        success: function (data) {
            $('input:radio[name=outMale]').val([data.gn]);
            $('#FoutName').val(data.fn);
               $('#LoutName').val(data.ln);
              $('#outAge').val(data.ag);
              $('#outNum').val(data.mb);
              $('#Occupation').val(data.oc);
              $('#outAddress').val(data.pa);
              $('#outReligion').val(data.rl);
              $('#LEducation').val(data.le);
              $('#outMarital').val(data.ms);
              $('#District').val(data.hd);

        }
    });
    
      
  });
  $('.req4').click(function (e) { 
    var takeid = $(this).attr('id');
    $.ajax({

        url: "updatestock.php",
        method: "POST",
        data: { takeid:takeid},
        dataType: "json",
        success: function(data) {
                $('#sid1').val(takeid);
                $('#snm1').val(data.dn);
                $('#sdc').val(data.dc);
                $('#expd1').val(data.exp);
                $('#qnt1').val(data.qt);
                $('#prc1').val(data.dp);
                $('#dtype').val(data.dt);
            
            
        }
    });

});
});



$(function () {
    var chosen = $('.title3').attr('id');


$.ajax({

    
    
url: "payy.php",
method: "POST",
data: { chosen:chosen},
dataType: "json",
success: function(data) {

$('#billingid').html(data.bl);
$('#patientid').html(data.pi);
$('#fullname').html(data.fn);
$('#currency').html(data.cn);
$('#paidamount').html(data.pd);
$('#transactionid').html(data.txn);
$('#datecreated').html(data.cr);
$('#datemodified').html(data.mod);


}
});
  });

