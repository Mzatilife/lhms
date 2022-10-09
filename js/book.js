$(function() {
    var student = $('#SI').val();

    $.ajax({

        url: "book.php",
        method: "post",
        data: { student: student },
        dataType: "json",
        success: function(data) {
            $('#look').val('sss');
            if (data.booked == 1) {
                $('.show').removeClass('d-block');
                $('.show').addClass('d-none');
                $('#remove').removeClass('d-none');
                $('#remove').addClass('d-block');
            } else {

                $('#remove').removeClass('d-block');
                $('#remove').addClass('d-none');
                $('.show').removeClass('d-none');
                $('.show').addClass('d-block');
            }


        }
    });




});