$(function() {

    //take id


    //for student Id

    $('#SI').keyup(function(e) {
        if ($('#SI').val() == "") {
            $('#Serror').html('');
            $('#SI').removeClass('is-invalid');
            $('#SI').removeClass('is-valid');
        } else {
            var id = $('#SI').val();

            $.ajax({

                url: "fetch.php",
                data: { id: id },
                method: "post",
                success: function(data) {
                    if (data == 0) {
                        $('#Serror').html('Student Id does not exist');
                        $('#SI').removeClass('is-valid');
                        $('#SI').addClass('is-invalid');
                    } else {
                        $('#SI').removeClass('is-invalid');
                        $('#SI').addClass('is-valid');
                        $('#Serror').html('');
                    }



                }
            });
        }

    });


    //code yolusa
    var $options = $('#SH').find('option'),
        random = ~~(Math.random() * $options.length);

    $options.eq(random).prop('selected', true);



    var id = $('#SH').val();

    var hostel = $('select#SH').children('option:selected').html();

    $('#hos').val(hostel);
    if (id == '') {
        $('#RoomNumber').val('');
        $('#BN').val('');
        $('#Herror').html('');
    } else {
        $.ajax({

            url: "fetch2.php",
            method: "POST",
            data: { id: id },
            dataType: "json",
            success: function(data) {
                $('#RoomNumber').val(data.roomno);
                $('#BN').val(data.bedno);
                $('#Herror').html(data.hostelno);
                $('.HID').val(id);

            }
        })
    }





});

$(function() {
    setInterval(() => {
        var none = "";
        $.ajax({

            url: "fetch3.php",
            method: "POST",
            data: { none: none },
            success: function(data) {




            }
        });

    }, 1000);


});


$(function() {

    //not go back
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
});

$(document).ready(function() {

    $('.reply').click(function(e) {

        var id = $(this).attr('id');
        var id2 = id.split(' ');
        var take = id2[0];
        var take2 = id2[1];
        $('#studID').val(take);
        $.ajax({

            url: "getname.php",
            method: "POST",
            data: { take: take },
            success: function(data) {
                $('#studN').val(data);
            }
        });

        $.ajax({

            url: "getname2.php",
            method: "POST",
            data: { take2: take2 },
            success: function(data) {
                $('#msg').val(data);
            }
        });

    });

    $('.vacate').click(function() {
        var id = $(this).attr('id');

        var splitted = id.split('-');
        $('#StudId').val(splitted[0]);
        $('#HostelId').val(splitted[1]);
        $('#BedNo').val(splitted[2]);
        $('#RoomNo').val(splitted[3]);


    });

    $('.delete').click(function() {
        var id = $(this).attr('id');

        var splitted = id.split('-');
        $('#StudId').val(splitted[0]);
        $('#HostelId').val(splitted[1]);
        $('#BedNo').val(splitted[2]);
        $('#RoomNo').val(splitted[3]);


    });
    (function($) {
        "use strict";

        // Add active state to sidbar nav links
        var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
            if (this.href === path) {
                $(this).addClass("active");
            }
        });

        // Toggle the side navigation
        $("#sidebarToggle").on("click", function(e) {
            e.preventDefault();
            $("body").toggleClass("sb-sidenav-toggled");
        });

    })(jQuery);
    $(function() {
        var studReport = '';

        $.ajax({

            url: "report_mh.php",
            method: "post",
            data: { studReport: studReport },
            dataType: "json",
            success: function(data) {

            }
        })
    });

    $(function() {
        var compReport = '';
        $.ajax({

            url: "report_mh.php",
            method: "post",
            data: { compReport: compReport },
            dataType: "json",
            success: function(data) {

            }
        });
    });


    $(function() {
        var hstlreport = '';
        $.ajax({

            url: "report_mh.php",
            method: "post",
            data: { hstlreport: hstlreport },
            dataType: "json",
            success: function(data) {

            }
        });
    });


    $(function() {
        var pmntreport = '';
        $.ajax({

            url: "report_mh.php",
            method: "post",
            data: { pmntreport: pmntreport },
            dataType: "json",
            success: function(data) {

            }
        });
    });

    var view = '';
    $.ajax({

        url: "noti.php",
        method: "POST",
        data: { view: view },
        dataType: "json",
        success: function(data) {
            $('.count2').html(data.number);
            $('#there').html(data.getnoti);
        }

    });
    var view1 = '';
    $.ajax({

        url: "paynoti.php",
        method: "POST",
        data: { view1: view1 },
        dataType: "json",
        success: function(data) {
            $('.count').html(data.number);
            $('#here').html(data.payments);
        }

    });

    $(document).ready(function() {
        function load_unseen_notification(view = '') {
            $.ajax({
                url: "noti.php",
                method: "POST",
                data: { view: view },
                dataType: "json",
                success: function(data) {
                    $('.dropdown-menu').html(data.notification);
                    if (data.unseen_notification > 0) {
                        $('.count2').html(data.unseen_notification);
                    }
                }
            });
        }
        load_unseen_notification();
        $('#msg').on('submit', function(event) {
            event.preventDefault();

            if ($('#subject_h').val() != ':' && $('#C_description').val() != '') {
                var form_data = $(this).serialize();
                $.ajax({
                    url: "noti.php",
                    method: "POST",
                    data: form_data,
                    success: function(data) {
                        $('#msg')[0].reset();
                        load_unseen_notification();
                    }
                });
            } else {
                alert("Both Fields are Required");
            }
        });
        $(document).on('click', '.dropdown-toggle', function() {
            $('.count2').html('');
            load_unseen_notification('yes');
        });
        setInterval(function() {
            load_unseen_notification();;
        }, 5000);
    });


    $('.approve').click(function() {
        var id = $(this).attr('id');

        var splitted = id.split('-');
        $('#StudId').val(splitted[0]);
        $('#PaymentId').val(splitted[1]);



    });


    $('.edit_h').click(function() {
        var id = $(this).attr('id');

        var splitted = id.split('-');
        $('#hostel_id').val(splitted[0]);
        $('#hostelname').val(splitted[1]);
        $('#type').val(splitted[2]);
        $('#rooms').val(splitted[3]);
        $('#beds').val(splitted[4]);


    });

    $('.delete_h').click(function() {
        var id = $(this).attr('id');
        var splitted = id.split('-');
        $('#D_HI').val(splitted[0]);
        $('#D_HN').val(splitted[1]);



    });

    $('.delete_m').click(function() {
        var id = $(this).attr('id');
        var splitted = id.split('-');
        $('#MSG').val(splitted[0]);



    });


    $('.remind').click(function() {
        var id = $(this).attr('id');

        var splitted = id.split('-');
        $('#SI').val(splitted[0]);
        $('#PB').val(splitted[1]);
        $('#NS').val(splitted[2]);
        $('#ND').val(splitted[3]);



    });




    $(document).ready(function() {

    });



});