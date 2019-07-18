var url = "{{url('stock/chart')}}";
var Years = new Array();
var Labels = new Array();
var Prices = new Array();

$(document).ready(function(){
    $.get(url, function(response){
        response.forEach(function(data){
            Years.push(data.stockYear);
            Labels.push(data.stockName);
            Prices.push(data.stockPrice);
        });
    var ctx = document.getElementById("canvas").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels:Years,
            datasets: [{
                label: 'Infosys Price',
                data: Prices,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
});
});