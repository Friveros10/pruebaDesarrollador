(function($){
   
    $('#select_indicador').change(function(){
    var precios = [];
    var fechas = [];
    var series= [];
    var nombre = "";
    var selector = $(this).val();
    $.ajax({
        url: "index.php/welcome/getapi",
        type:"GET",
        data: {tipo: selector},
        success:function(datos){
           var obj = JSON.parse(datos);
            $.each(obj, function(t, item){
                series.push(item);
            });  
            nombre = series[2];
            $.each(series[5], function(t, item){
               precios.push(item.valor);
               fechas.push(item.fecha);  
            });  
            $('#myChart').remove();
            $('#contenedor_graf').append("<canvas id='myChart' width='500' height='200'></canvas>");
           var ctx = $('#myChart');
           var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: fechas,
                    datasets: [{
                        axis: 'y',
                        label: "indicador: "+nombre ,
                        data: precios,
                        fill: false,
                        backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(255, 159, 64, 0.2)',
                                        'rgba(255, 205, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(201, 203, 207, 0.2)'
                                        ],
                        borderColor: [
                                    'rgb(255, 99, 132)',
                                    'rgb(255, 159, 64)',
                                    'rgb(255, 205, 86)',
                                    'rgb(75, 192, 192)',
                                    'rgb(54, 162, 235)',
                                    'rgb(153, 102, 255)',
                                    'rgb(201, 203, 207)'
                                    ],
                        borderWidth: 3
                    }]
                    },
                     options: {
                        scales: {
                                y: {
                        beginAtZero: true
                                    }
                                }
                             }
        });
        }, error:function(jqXHR, textStatus, errorThrown){
            console.log("error");
            }
        }); 
    });



})(jQuery);