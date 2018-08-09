<!DOCTYPE html>
<html>
  <head>
    <title>Talking with Pusher</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  </head>
  <body>
    <div class="container">
      <div class="content">
        <h1>Laravel 5 and Pusher is fun!</h1>
        <div id="chart"></div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://js.pusher.com/3.1/pusher.min.js"></script>
    <script>
      //instantiate a Pusher object with our Credential's key
      var pusher = new Pusher('yourpusherkey', {
          cluster: 'ap1',
          encrypted: true
      });

      //Subscribe to the channel we specified in our Laravel Event
      var channel = pusher.subscribe('coba-channel');

      //Bind a function to a Event (the full Laravel class)
      channel.bind('App\\Events\\CobaPusherEvent', chart);

    
    
    function chart(ichwan){
      if(ichwan == null){
        ichwan = {data : { label: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'], series: { name: "Desktop", data: [30, 41, 35, 51, 49, 62, 69, 91, 126] } } }
      }
      alert(JSON.stringify(ichwan));

      var options = {
            chart: {
                height: 380,
                type: 'line',
                zoom: {
                    enabled: false
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'straight'
            },
            series: [{
                name: ichwan.data.series.name,
                data: ichwan.data.series.data
            }],
            title: {
                text: 'Product Trends by Month',
                align: 'left'
            },
            grid: {
                row: {
                    colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                    opacity: 0.5
                },
            },
            labels: "Bulan",
            xaxis: {
                categories: ichwan.data.label
            },
        }

        var chart = new ApexCharts(
            document.querySelector("#chart"),
            options
        );

        chart.render();
    }    
    chart();

    </script>
  </body>
</html>