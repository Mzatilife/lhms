$(function() {

    //Foutname
    $("input[name='FoutName']").keyup(function() {

        var get = $("input[name='FoutName']").val();
        var str = get;



        var takeall = str;
        if (takeall == '') {

            document.getElementById('Fnameerror').innerHTML = 'Please insert a value';
            $("input[name='FoutName']").attr('required', true);
            $("input[name='FoutName']").removeClass('is-invalid');
            $("input[name='FoutName']").removeClass('is-valid');

        }
        var patt = /[0-9]/g;
        var patt2 = /\//g;
        var patt3 = /\\/g;
        var patt4 = /[!@#$%^&*(){}|:;"',.<>?=]/g;
        var patt5 = /\[/g;
        var patt6 = /\]/g;
        var patt7 = /\-/g;
        var patt8 = /\+/g;

        var result = takeall.match(patt);
        var result = takeall.match(patt); // match result(contains characters);
        var result2 = takeall.match(patt2);
        var result3 = takeall.match(patt3);
        var result4 = takeall.match(patt4);
        var result5 = takeall.match(patt5);
        var result6 = takeall.match(patt6);
        var result7 = takeall.match(patt7);
        var result8 = takeall.match(patt8);

        if (takeall != '' && result != null) {
            document.getElementById('Fnameerror').innerHTML = ' ';
            var evr = takeall.charAt(0).toUpperCase() + takeall.substr(1);


            //if the data entered is not from these characters (hence if search ==null) print error
            //if result return thst
            $("input[name='FoutName']").val(evr);

            $("input[name='FoutName']").removeClass('is-valid');
            $("input[name='FoutName']").addClass('is-invalid');
            document.getElementById('Fnameerror').innerHTML = 'Only letters and whitespace allowed in this area';




        }
        if (takeall != '' && result == null) {
            document.getElementById('Fnameerror').innerHTML = ' ';
            var evr = takeall.charAt(0).toUpperCase() + takeall.substr(1);


            //if the data entered is not from these characters (hence if search ==null) print error
            //if result return thst
            $("input[name='FoutName']").val(evr);
            $("input[name='FoutName']").removeClass('is-invalid');
            $("input[name='FoutName']").addClass('is-valid');

        }
        if (takeall != '' && result2 != null) {
            document.getElementById('Fnameerror').innerHTML = ' ';
            var evr = takeall.charAt(0).toUpperCase() + takeall.substr(1);
            $("input[name='FoutName']").val(evr);
            $("input[name='FoutName']").removeClass('is-valid');
            $("input[name='FoutName']").addClass('is-invalid');
            document.getElementById('Fnameerror').innerHTML = 'Do not use symbols in this field';
        }
        if (takeall != '' && result3 != null) {
            document.getElementById('Fnameerror').innerHTML = ' ';
            var evr = takeall.charAt(0).toUpperCase() + takeall.substr(1);
            $("input[name='FoutName']").val(evr);
            $("input[name='FoutName']").removeClass('is-valid');
            $("input[name='FoutName']").addClass('is-invalid');
            document.getElementById('Fnameerror').innerHTML = 'Do not use symbols in this field';
        }
        if (takeall != '' && result4 != null) {
            document.getElementById('Fnameerror').innerHTML = ' ';
            var evr = takeall.charAt(0).toUpperCase() + takeall.substr(1);
            $("input[name='FoutName']").val(evr);
            $("input[name='FoutName']").removeClass('is-valid');
            $("input[name='FoutName']").addClass('is-invalid');
            document.getElementById('Fnameerror').innerHTML = 'Do not use symbols in this field';
        }
        if (takeall != '' && result5 != null) {
            document.getElementById('Fnameerror').innerHTML = ' ';
            var evr = takeall.charAt(0).toUpperCase() + takeall.substr(1);
            $("input[name='FoutName']").val(evr);
            $("input[name='FoutName']").removeClass('is-valid');
            $("input[name='FoutName']").addClass('is-invalid');
            document.getElementById('Fnameerror').innerHTML = 'Do not use symbols in this field';
        }
        if (takeall != '' && result6 != null) {
            document.getElementById('Fnameerror').innerHTML = ' ';
            var evr = takeall.charAt(0).toUpperCase() + takeall.substr(1);
            $("input[name='FoutName']").val(evr);
            $("input[name='FoutName']").removeClass('is-valid');
            $("input[name='FoutName']").addClass('is-invalid');
            document.getElementById('Fnameerror').innerHTML = 'Do not use symbols in this field';
        }
        if (takeall != '' && result7 != null) {
            document.getElementById('Fnameerror').innerHTML = ' ';
            var evr = takeall.charAt(0).toUpperCase() + takeall.substr(1);
            $("input[name='FoutName']").val(evr);
            $("input[name='FoutName']").removeClass('is-valid');
            $("input[name='FoutName']").addClass('is-invalid');
            document.getElementById('Fnameerror').innerHTML = 'Do not use symbols in this field';
        }
        if (takeall != '' && result8 != null) {
            document.getElementById('Fnameerror').innerHTML = ' ';
            var evr = takeall.charAt(0).toUpperCase() + takeall.substr(1);
            $("input[name='FoutName']").val(evr);
            $("input[name='FoutName']").removeClass('is-valid');
            $("input[name='FoutName']").addClass('is-invalid');
            document.getElementById('Fnameerror').innerHTML = 'Do not use symbols in this field';
        }










    });


    $("input[name='LoutName']").keyup(function() {

        var get = $("input[name='LoutName']").val();
        var str = get;



        var takeall = str;
        if (takeall == '') {

            document.getElementById('Fnameerror1').innerHTML = 'Please insert a value';
            $("input[name='LoutName']").attr('required', true);
            $("input[name='LoutName']").removeClass('is-invalid');
            $("input[name='LoutName']").removeClass('is-valid');

        }
        var patt = /[0-9]/g;
        var patt2 = /\//g;
        var patt3 = /\\/g;
        var patt4 = /[!@#$%^&*(){}|:;"',.<>?=]/g;
        var patt5 = /\[/g;
        var patt6 = /\]/g;
        var patt7 = /\-/g;
        var patt8 = /\+/g;

        var result = takeall.match(patt);
        var result = takeall.match(patt); // match result(contains characters);
        var result2 = takeall.match(patt2);
        var result3 = takeall.match(patt3);
        var result4 = takeall.match(patt4);
        var result5 = takeall.match(patt5);
        var result6 = takeall.match(patt6);
        var result7 = takeall.match(patt7);
        var result8 = takeall.match(patt8);

        if (takeall != '' && result != null) {
            document.getElementById('Fnameerror1').innerHTML = ' ';
            var evr = takeall.charAt(0).toUpperCase() + takeall.substr(1);


            //if the data entered is not from these characters (hence if search ==null) print error
            //if result return thst
            $("input[name='LoutName']").val(evr);

            $("input[name='LoutName']").removeClass('is-valid');
            $("input[name='LoutName']").addClass('is-invalid');
            document.getElementById('Fnameerror1').innerHTML = 'Only letters and whitespace allowed in this area';


        }
        if (takeall != '' && result == null) {
            document.getElementById('Fnameerror1').innerHTML = ' ';
            var evr = takeall.charAt(0).toUpperCase() + takeall.substr(1);


            //if the data entered is not from these characters (hence if search ==null) print error
            //if result return thst
            $("input[name='LoutName']").val(evr);
            $("input[name='LoutName']").removeClass('is-invalid');
            $("input[name='LoutName']").addClass('is-valid');

        }
        if (takeall != '' && result2 != null) {
            document.getElementById('Fnameerror1').innerHTML = ' ';
            var evr = takeall.charAt(0).toUpperCase() + takeall.substr(1);
            $("input[name='LoutName']").val(evr);
            $("input[name='LoutName']").removeClass('is-valid');
            $("input[name='LoutName']").addClass('is-invalid');
            document.getElementById('Fnameerror1').innerHTML = 'Do not use symbols in this field';
        }
        if (takeall != '' && result3 != null) {
            document.getElementById('Fnameerror1').innerHTML = ' ';
            var evr = takeall.charAt(0).toUpperCase() + takeall.substr(1);
            $("input[name='LoutName']").val(evr);
            $("input[name='LoutName']").removeClass('is-valid');
            $("input[name='LoutName']").addClass('is-invalid');
            document.getElementById('Fnameerror1').innerHTML = 'Do not use symbols in this field';
        }
        if (takeall != '' && result4 != null) {
            document.getElementById('Fnameerror1').innerHTML = ' ';
            var evr = takeall.charAt(0).toUpperCase() + takeall.substr(1);
            $("input[name='LoutName']").val(evr);
            $("input[name='LoutName']").removeClass('is-valid');
            $("input[name='LoutName']").addClass('is-invalid');
            document.getElementById('Fnameerror1').innerHTML = 'Do not use symbols in this field';
        }
        if (takeall != '' && result5 != null) {
            document.getElementById('Fnameerror1').innerHTML = ' ';
            var evr = takeall.charAt(0).toUpperCase() + takeall.substr(1);
            $("input[name='LoutName']").val(evr);
            $("input[name='LoutName']").removeClass('is-valid');
            $("input[name='LoutName']").addClass('is-invalid');
            document.getElementById('Fnameerror1').innerHTML = 'Do not use symbols in this field';
        }
        if (takeall != '' && result6 != null) {
            document.getElementById('Fnameerror1').innerHTML = ' ';
            var evr = takeall.charAt(0).toUpperCase() + takeall.substr(1);
            $("input[name='LoutName']").val(evr);
            $("input[name='LoutName']").removeClass('is-valid');
            $("input[name='LoutName']").addClass('is-invalid');
            document.getElementById('Fnameerror1').innerHTML = 'Do not use symbols in this field';
        }
        if (takeall != '' && result7 != null) {
            document.getElementById('Fnameerror1').innerHTML = ' ';
            var evr = takeall.charAt(0).toUpperCase() + takeall.substr(1);
            $("input[name='LoutName']").val(evr);
            $("input[name='LoutName']").removeClass('is-valid');
            $("input[name='LoutName']").addClass('is-invalid');
            document.getElementById('Fnameerror1').innerHTML = 'Do not use symbols in this field';
        }
        if (takeall != '' && result8 != null) {
            document.getElementById('Fnameerror1').innerHTML = ' ';
            var evr = takeall.charAt(0).toUpperCase() + takeall.substr(1);
            $("input[name='LoutName']").val(evr);
            $("input[name='LoutName']").removeClass('is-valid');
            $("input[name='FoutName']").addClass('is-invalid');
            document.getElementById('Fnameerror1').innerHTML = 'Do not use symbols in this field';
        }










    });


    $("input[name='outAge']").keyup(function() {

        var get = $("input[name='outAge']").val();
        var str = get;


        var takeall = str;
        if (takeall == '') {

            document.getElementById('Fnameerror3').innerHTML = 'Please insert a value';
            $("input[name='outAge']").attr('required', true);
            $("input[name='outAge']").removeClass('is-invalid');
            $("input[name='outAge']").removeClass('is-valid');

        }
        var patt = /[0-9]/g;
        var pattthis = /[a-zA-z]/g;
        var patt2 = /\//g;
        var patt3 = /\\/g;
        var patt4 = /[!@#$%^&*(){}|:;"',.<>?=]/g;
        var patt5 = /\[/g;
        var patt6 = /\]/g;
        var patt7 = /\-/g;
        var patt8 = /\+/g;


        var result = takeall.match(patt);
        var result2 = takeall.match(pattthis);
        var resultT = takeall.match(patt2);
        var result3 = takeall.match(patt3);
        var result4 = takeall.match(patt4);
        var result5 = takeall.match(patt5);
        var result6 = takeall.match(patt6);
        var result7 = takeall.match(patt7);
        var result8 = takeall.match(patt8);
        if (takeall != '' && result != null) {
            document.getElementById('Fnameerror3').innerHTML = '';
            var evr = takeall.charAt(0).toUpperCase() + takeall.substr(1);

            $("input[name='outAge']").val(evr);
            $("input[name='outAge']").removeClass('is-invalid');
            $("input[name='outAge']").addClass('is-valid');
        }
        if (takeall != '' && result == null) {
            document.getElementById('Fnameerror3').innerHTML = 'Only numbers allowed';
            var evr = takeall.charAt(0).toUpperCase() + takeall.substr(1);

            $("input[name='outAge']").val(evr);
            $("input[name='outAge']").addClass('is-invalid');
            $("input[name='outAge']").removeClass('is-valid');
        }

        if (takeall != '' && result2 != null && result != null) {
            document.getElementById('Fnameerror3').innerHTML = 'Only numbers allowed';

            $("input[name='outAge']").addClass('is-invalid');
            $("input[name='outAge']").removeClass('is-valid');
        }
        if (takeall != '' && resultT != null && result != null) {
            document.getElementById('Fnameerror3').innerHTML = 'Only numbers allowed';

            $("input[name='outAge']").addClass('is-invalid');
            $("input[name='outAge']").removeClass('is-valid');
        }
        if (takeall != '' && result3 != null && result != null) {
            document.getElementById('Fnameerror3').innerHTML = 'Only numbers allowed';

            $("input[name='outAge']").addClass('is-invalid');
            $("input[name='outAge']").removeClass('is-valid');
        }
        if (takeall != '' && result4 != null && result != null) {
            document.getElementById('Fnameerror3').innerHTML = 'Only numbers allowed';

            $("input[name='outAge']").addClass('is-invalid');
            $("input[name='outAge']").removeClass('is-valid');
        }
        if (takeall != '' && result5 != null && result != null) {
            document.getElementById('Fnameerror3').innerHTML = 'Only numbers allowed';

            $("input[name='outAge']").addClass('is-invalid');
            $("input[name='outAge']").removeClass('is-valid');
        }
        if (takeall != '' && result6 != null && result != null) {
            document.getElementById('Fnameerror3').innerHTML = 'Only numbers allowed';

            $("input[name='outAge']").addClass('is-invalid');
            $("input[name='outAge']").removeClass('is-valid');
        }
        if (takeall != '' && result7 != null && result != null) {
            document.getElementById('Fnameerror3').innerHTML = 'Only numbers allowed';

            $("input[name='outAge']").addClass('is-invalid');
            $("input[name='outAge']").removeClass('is-valid');
        }
        if (takeall != '' && result8 != null && result != null) {
            document.getElementById('Fnameerror3').innerHTML = 'Only numbers allowed';

            $("input[name='outAge']").addClass('is-invalid');
            $("input[name='outAge']").removeClass('is-valid');
        }










    });



    $("#Address1").click(function(e) {
        e.preventDefault();

    });


});




$(document).ready(function () {
     
});


