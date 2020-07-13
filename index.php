<!DOCTYPE html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Margshree - Glass Handicraft </title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--====== Aos css ======-->
    <link rel="stylesheet" href="assets/css/aos.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!--====== portal css ======-->
    <link rel="stylesheet" href="assets/css/portal.css">

     <!--====== Table css ======-->
     <link rel="stylesheet" href="assets/css/table.css">

 

     
     

</head>

<body>
<div class="container">


<?php // include("./sections/preloader.php"); ?> 



    <!--====== HEADER PART START ======-->

    <header id="home" class="header-area pt-100">

        <?php // include ("./sections/header-shapes.php"); ?>  
        <?php include ("./sections/navigation.php"); ?>
        
        

    </header>   

    <!--====== HEADER PART ENDS ======-->

   <h3> Dashboard</h3><hr/><br/><br/>

    <div class="row section-box">
        <div class="col-md-6">
       
            <div class="chart-container">
                <canvas id="myChart1"></canvas>
            </div>
        </div>

        <div class="col-md-6">
       
            <div class="chart-container">
                <canvas id="myChart2"></canvas>
            </div>
        </div>

    </div>

        <br/> <br/> <br/><hr/>

    <div class="row section-box">
        <div class="col-md-6">
       
            <div class="chart-container">
                <canvas id="myChart3"></canvas>
            </div>
        </div>

        <div class="col-md-6">
       
            <div class="chart-container">
                <canvas id="myChart4"></canvas>
            </div>
        </div>

    </div>


    <br/> <br/> <br/><hr/>

<div class="row section-box">
    <div class="col-md-6">
    
        <div class="chart-container">
            <canvas id="myChart5"></canvas>
        </div>
    </div>

    <div class="col-md-6">
    
        <div class="chart-container">
            <canvas id="myChart6"></canvas>
        </div>
    </div>

</div>


   

    <!--====== BACK TO TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>



    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>


    <!--====== Popper Js =====-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <!--===== Jquery Table Js =====-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
   
    <!--==== Bootstrap Table Min Js ====-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.16.0/bootstrap-table.min.js"></script>

    <!--==== Bootstrap Table  Toolbar Min Js ====-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.16.0/extensions/toolbar/bootstrap-table-toolbar.min.js" integrity="sha256-qU3K3XqLVpOYRu6OvXcPJiqP2/ZtirdOREUGGvDZNRo=" crossorigin="anonymous"></script>

    <!--====  BootStrap Table Filter Control Min Js ====-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.16.0/extensions/filter-control/bootstrap-table-filter-control.min.js" integrity="sha256-LiySqypMLWn6xGWsvNvisHGgK/1X2xFw7hTJzs0B3f8=" crossorigin="anonymous"></script>

    <!--====  DataTable Buttons Min Js  ====-->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script> 

    <!--====  Buttons Html5 Min Js   ====-->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>


    <!--====== WOW js ======-->
    <script src="assets/js/wow.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/scrolling-nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>

    <!--====== Aos js ======-->
    <script src="assets/js/aos.js"></script>


    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
</div>
    
</body>
</html>


<script>
var ctx = document.getElementById('myChart1');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['JAN', 'FEB', 'MAR', 'APRIL', 'MAY', 'JUNE'],
        datasets: [{
            label: 'TOTAL COUNT',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132)',
                'rgba(54, 162, 235)',
                'rgba(255, 206, 86)',
                'rgba(75, 192, 192)',
                'rgba(153, 102, 255)',
                'rgba(255, 159, 64)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },

        title: {
        display: true,
        text: 'Manufacturing By Month'
      }
    }
});
</script>




<script>
var ctx = document.getElementById('myChart2');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['JAN', 'FEB', 'MAR', 'APRIL', 'MAY', 'JUNE'],
        datasets: [{
            label: 'TOTAL ORDER',
            data: [2, 19, 3, 15, 2, 13],
            backgroundColor: [
                'rgba(255, 99, 132)',
                'rgba(54, 162, 235)',
                'rgba(255, 206, 86)',
                'rgba(75, 192, 192)',
                'rgba(153, 102, 255)',
                'rgba(255, 159, 64)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        title: {
        display: true,
        text: 'Order By Month'
      }
    }
});
</script>


<!-- Chart 3 -->

<script>

new Chart(document.getElementById("myChart3"), {
    type: 'bar',
    data: {
      labels: ["2017", "2018", "2019", "2020"],
      datasets: [
        {
          label: "Order",
          backgroundColor: "rgba(255, 99, 132)",
          data: [133,221,783,2478]
        }, {
          label: "Manufacturing",
          backgroundColor: "rgba(54, 162, 235, 1)",
          data: [408,547,675,734]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Order vs Manufactuing'
      }
    }
});

</script>



<!-- Chart 4 -->

<script>

new Chart(document.getElementById("myChart4"), {
    type: 'doughnut',
    data: {
      labels: ["Kitchen", "Dining", "Bar", "Decoration", "Chandlier"],
      datasets: [
        {
          label: "Count",
          backgroundColor: ['rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
                ],
          data: [2478,5267,734,784,433]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Best Selling Product in 2019'
      }
    }
});

</script>



<!-- Chart 5 -->

<script>

new Chart(document.getElementById("myChart5"), {
    type: 'doughnut',
    data: {
      labels: ["Europe", "North America", "South America", "Asia", "Australia"],
      datasets: [
        {
          label: "Count",
          backgroundColor: ['rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
                ],
          data: [2478,5267,734,784,433]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Customer Engaged'
      }
    }
});

</script>


<!-- Chart 6 -->

<script>

new Chart(document.getElementById("myChart6"), {
    type: 'doughnut',
    data: {
      labels: ["Europe", "North America", "South America", "Asia", "Australia"],
      datasets: [
        {
          label: "Count",
          backgroundColor: ['rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
                ],
          data: [2478,5267,734,200,433]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Customer By Order'
      }
    }
});

</script>