
    
        
    

    $(document).ready(function () {

        
    var set = "";
    var set2 = "";
    var set3 = "";
    $.ajax({
        url: "data1.php",
            method: "POST",
            data: { set: set},
            dataType: "JSON",
        success: function (data) {
         
      $('.table1').html(data.table1);
      var d =new Date();
      $('#user').DataTable({
        dom:'Bfrtip',
        extend:'collection',
         buttons: [{
           extend: 'pdf',  
                            
                               text: '<i class="far fa-file-pdf"></i>  Export as PDF',
                               title:'Outpatient Operations Daily Report '+d.getUTCDate()+'-'+ d.getUTCMonth()+'-' + d.getUTCFullYear() ,
                              
                               orientation:'potrait',
                            
         },
         {
           extend: 'excel',  
                            
                               text: '<i class="far fa-file-excel"></i>  Export as Excel',
                               title:'Outpatient Operations  Report '+d.getUTCDate()+'-'+ d.getUTCMonth()+'-' + d.getUTCFullYear(),
                             
                               
                               orientation:'potrait',
         },
       
       
       ]

       
       });

        }
    });
     


    

            $.ajax({
                url: "data2.php",
                    method: "POST",
                    data: { set2: set2},
                    dataType: "JSON",
                success: function (data) {
                 
             
              $('.table2').html(data.table2);
              var d =new Date();
           $('#user2').DataTable({
            dom:'Bfrtip',
            extend:'collection',
             buttons: [{
               extend: 'pdf',  
                                
                                   text: '<i class="far fa-file-pdf"></i>  Export as PDF',
                                   title:'Bill Daily Report '+d.getUTCDate()+'-'+ d.getUTCMonth()+'-' + d.getUTCFullYear(),
                                  
                                   orientation:'potrait',
                                
             },
             {
               extend: 'excel',  
                                
                                   text: '<i class="far fa-file-excel"></i>  Export as Excel',
                                   title:'Bill Daily Report '+d.getUTCDate()+'-'+ d.getUTCMonth()+'-' + d.getUTCFullYear(),
                                 
                                   
                                   orientation:'potrait',
             },
           
           
           ]

           
           });
        
                }
            });
            
            $.ajax({
                url: "data3.php",
                    method: "POST",
                    data: { set3: set3},
                    dataType: "JSON",
                success: function (data) {
           
                    $('.table3').html(data.table3);
                    var d =new Date();
                    $('#user3').DataTable({
                        dom:'Bfrtip',
                        extend:'collection',
                         buttons: [{
                           extend: 'pdf',  
                                            
                                               text: '<i class="far fa-file-pdf"></i>  Export as PDF',
                                               title:'Stock Daily Report '+d.getUTCDate()+'-'+ d.getUTCMonth()+'-' + d.getUTCFullYear(),
                                              
                                               orientation:'potrait',
                                            
                         },
                         {
                           extend: 'excel',  
                                            
                                               text: '<i class="far fa-file-excel"></i>  Export as Excel',
                                               title:'Stock Daily Report '+d.getUTCDate()+'-'+ d.getUTCMonth()+'-' + d.getUTCFullYear(),
                                             
                                               
                                               orientation:'potrait',
                         },
                       
                       
                       ]
            
                       
                       });
                  

        
                }
            });

            
        
     
    });