$(function () {
   
    $('.updateservv').click(function (e) { 
       var id = $(this).attr('id');
       var id2 = $(this).attr('data-id');
        var sep = id.split('-');
            
        $('#ServID2').val(sep[0]);
     
        $('#ServName2').val(sep[1]);
        $('#ServPrice2').val(id2);

      
    });
});
