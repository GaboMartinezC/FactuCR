<?php
?>
<link rel="stylesheet" href="Recursos/CSS/DashboardKPI.css"/>
<div>
    <div class=""></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-10 offset-1">
                <div class="row">
                    <div class="col-4">
                        <canvas id="myChart1"></canvas>
                    </div>
                    <div class="col-4">
                        <canvas id="myChart2"></canvas>
                    </div>
                    <div class="col-4">
                        <canvas id="myChart3"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gran-contenedor">
        <canvas id="myChart"></canvas>
    </div>
</div>









<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
        
    function lechar(uwu)
    {
        new Chart(uwu, {
    type: 'bar',
    data: {
        labels: ['Requerimientos Totales', 'Requerimientos Nuevos'],
        datasets: 
        [
            {
                label: 'Reqs. Cumplidos',
                data: [15, ]
            },
            {
                label: 'Reqs. No Cumplidos',
                data: [2, 0]
            },
            {
                label: 'Reqs. Nuevos',
                data: [0, 3]
            },
            {
                label: 'Reqs. Removidos',
                data: [0, 3]
            }
        ]
    },
    options: {
      scales: {
        y: {
            
            stacked: true
        },
        x: {
            
            stacked: true
        }
      }
    }
  });
    }
  const ctx = document.getElementById('myChart');
    lechar(document.getElementById('myChart1'));
    lechar(document.getElementById('myChart2'));
    lechar(document.getElementById('myChart3'));
  
</script>