var elementoGanancias = document.getElementById('graficoGanancias').getContext('2d');
var elementoGanciaAnual = document.getElementById('graficoGananciaAnual').getContext('2d');
var elementoIVA = document.getElementById('graficoIVA').getContext('2d');
var elementoImpuestoRenta = document.getElementById('graficoImpuestoRenta').getContext('2d');



var ganciaNeta=[25500, 59000, 25500, 81000, 56000, 55000, 40000, 35000, 70000, 13000, 35000, 20000];
var IVA=[2550, 5900, 2550, 81000, 56000, 55000, 40000, 35000, 70000, 13000, 35000, 20000];

//Ganancias mensuales durante el anno
var graficoGanancias = new Chart(elementoGanancias, {
    type: 'bar',  //indico el tipo de gráfico
    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Setiembre', 'Octubre', 'Noviembre', 'Diciembre'],  //Defino las etiquetas del eje x
        datasets: 
        [   
            {
                label: 'Ganacia Neta', //titulo del grafico
                data: ganciaNeta  //indico los datos fuente de donde salen los graficos
            },
            {
                label: 'IVA Recaudado', //titulo del grafico
                data: IVA  //indico los datos fuente de donde salen los graficos
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

//Ganancia anual
var anualNeto=0, IVAAnual=0, ImpRenta=0;
ganciaNeta.forEach((element) => anualNeto+=element);
IVA.forEach((element) => IVAAnual+=element);


var greficoGanciaAnual = new Chart(elementoGanciaAnual, {
    type: 'bar',  //indico el tipo de gráfico
    data: {
        labels: ['Anual'],  //Defino las etiquetas del eje x
        datasets: 
        [   
            {
                label: 'Ganacia Neta', //titulo del grafico
                data: [anualNeto]  //indico los datos fuente de donde salen los graficos
            },
            {
                label: 'IVA Colectado', //titulo del grafico
                data: [IVAAnual]  //indico los datos fuente de donde salen los graficos
            }
        ]
    },
    options: {
        scales: {
            y: {
                stacked: true,
                grid: {
                    display: false,
                    drawOnChartArea: false,
                    drawTicks: false
                }
            },
            x: {
                stacked: true,
                grid: {
                    display: false,
                    drawOnChartArea: false,
                    drawTicks: false
                }
            }
            
          },
        indexAxis: 'y',
        // Elements options apply to all of the options unless overridden in a dataset
        // In this case, we are setting the border of each horizontal bar to be 2px wide
        
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            }
        }
    }
    
});

var graficoIVA = new Chart(elementoIVA, {
    type: 'line',  //indico el tipo de gráfico
    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Setiembre', 'Octubre', 'Noviembre', 'Diciembre'],  //Defino las etiquetas del eje x
        datasets: [{
            label: 'Reporte Impuesto Valor Agregado', //titulo del grafico
            data: [65, 59, 80, 81, 56, 55, 40, 35, 70, 13, 35, 20],  //indico los datos fuente de donde salen los graficos
            fill: false,  //indico si marca o no la altura de la linea
            borderColor: 'rgb(75, 192, 192)',  //indico el color de la linea
            tension: 0.1  //indico la curvatura de la linea
        }]
    }
});

var graficoImpuestoRenta = new Chart(elementoImpuestoRenta, {
    type: 'bar', //indico el tipo de grafico
    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Setiembre', 'Octubre', 'Noviembre', 'Diciembre'],  //indico las etiquetas del eje x
        datasets: [{
            label: 'Reporte Impuesto Sobre Renta', //indico el nombre del grafico
            data: [65, 59, 80, 81, 56, 55, 40, 35, 70, 13, 35, 20],  //defino la fuente de los datos a graficar
            fill: true,  //inidico si marca o no la altura de la linea
            borderColor: 'rgb(75, 192, 192)',  //indico el color de la linea
        }]
    }
});