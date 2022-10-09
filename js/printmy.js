
function printout(){ 

    $('#users').printThis({
        debug: false,               // show the iframe for debugging
        importCSS: true,            // import parent page css
        importStyle: false,         // import style tags
        printContainer: true,       // print outer container/$.selector
        loadCSS: "/StJohns/css/bootstrap2.css",                // path to additional css file - use an array [] for multiple
        pageTitle: "",              // add title to print page
        removeInline: false,        // remove inline styles from print elements
        removeInlineSelector: "*",  // custom selectors to filter inline styles. removeInline must be true
        printDelay: 333,            // variable print delay
        header: "",               // prefix to html
        footer: null,               // postfix to html
        base: false,                // preserve the BASE tag or accept a string for the URL
        formValues: true,           // preserve input/form values
        canvas: false,              // copy canvas content
        doctypeString: '',       // enter a different doctype for older markup
        removeScripts: false,       // remove script tags from print content
        copyTagClasses: true,      // copy classes from the html & body tag
        beforePrintEvent: null,     // function for printEvent in iframe
        beforePrint: null,          // function called before iframe is filled
        afterPrint: null            // function called before iframe is removed
    });

    //this 
            var pid = $('.title').attr('id');
           
             
            $.ajax({
                url: "patient1.php",
                    method: "POST",
                    data: { pid: pid },
                    dataType: "JSON",
                success: function (data) {
                    $('#pi').text(pid);
                    if(data.gn =='M'){
                        data.gn = 'Male';
                    }else{
                        data.gn = 'Female';
                    }

                    if(data.ad == 0){
                        data.ad = 'No';
                    }else{
                        data.ad = 'Yes';
                    
                    }
                    $('#gn').text(data.gn);
                    $('#fn').text(data.fn);
                       $('#ln').text(data.ln);
                      $('#ag').text(data.ag);
                      $('#mb').text(data.mb);
                      $('#oc').text(data.oc);
                      $('#pa').text(data.pa);
                      $('#rl').text(data.rl);
                      $('#le').text(data.le);
                      $('#ms').text(data.ms);
                      $('#hd').text(data.hd);
                      $('#ad').text(data.ad);
                      $('#dr').text(data.dr);
                      $('#du').text(data.du);
        
                }
            });
            
              
        }
function nurse(){

    var pid = $('.title').attr('id');
    
    $('#users').printThis({
        debug: false,               // show the iframe for debugging
        importCSS: true,            // import parent page css
        importStyle: false,         // import style tags
        printContainer: true,       // print outer container/$.selector
        loadCSS: "/StJohns/css/bootstrap2.css",                // path to additional css file - use an array [] for multiple
        pageTitle: "",              // add title to print page
        removeInline: false,        // remove inline styles from print elements
        removeInlineSelector: "*",  // custom selectors to filter inline styles. removeInline must be true
        printDelay: 333,            // variable print delay
        header: "",               // prefix to html
        footer: null,               // postfix to html
        base: false,                // preserve the BASE tag or accept a string for the URL
        formValues: true,           // preserve input/form values
        canvas: false,              // copy canvas content
        doctypeString: '',       // enter a different doctype for older markup
        removeScripts: false,       // remove script tags from print content
        copyTagClasses: true,      // copy classes from the html & body tag
        beforePrintEvent: null,     // function for printEvent in iframe
        beforePrint: null,          // function called before iframe is filled
        afterPrint: null            // function called before iframe is removed
    });
 
    $.ajax({
        url: "patientV.php",
            method: "POST",
            data: { pid: pid },
            dataType: "JSON",
        success: function (data) {
            $('#npi').text(data.id);
          
            
            $('#nfn').text(data.fn);
               $('#nln').text(data.ln);
              $('#nwt').text(data.nwt);
              $('#nbp').text(data.nbp);
              $('#nht').text(data.nht);
              $('#nrp').text(data.nrp);
              $('#ndt').text(data.ndt);
              $('#nbt').text(data.nbt);
              $('#nhr').text(data.nhr);

        }   
    });
    

}
      