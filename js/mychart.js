$(function () {
    var chart = document.getElementById('myChart2');
    var none = '';
 

  $.ajax({

      url: "charts.php",
      data: {none:none},
      method: "post",
      dataType: "json",
      success: function (data) {
       
        Chart.defaults.global.defaultFontFamily = 'pops';
        var myChart = new Chart(chart, {
            type: 'line',
            data: {
                labels: data.label,
                datasets: [{
                    label: 'Income',
                    data: data.final,
                    backgroundColor:[
                        '#ffc1076f'
                    ],
                    borderColor: [
                        '#ffc1076f'
                    ],
                    borderWidth: 3,
                    borderColor:'black',
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            callback: function(value,index,values){
                                return 'MWK ' + value;
                            }
                        }
                    }],
                    
    
    
                }
        
        
            }
        });



      }
  });
});