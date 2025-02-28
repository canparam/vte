$(function (e) {
    'use strict'

    // CHARTJS SALES CHART OPEN
    var ctx = document.getElementById('saleschart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                barPercentage: 0.1,
                barThickness: 6,
                barGap: 0,
                maxBarThickness: 8,
                minBarLength: 2,
                label: 'Total Sales',
                data: [19, 10, 15, 8, 6, 10, 13],
                backgroundColor: [
                    'rgba(5, 195, 251, 0.2)',
                    'rgba(5, 195, 251, 0.2)',
                    '#007F6E',
                    'rgba(5, 195, 251, 0.2)',
                    'rgba(5, 195, 251, 0.2)',
                    '#007F6E',
                    '#007F6E'
                ],
                borderColor: [
                    'rgba(5, 195, 251, 0.5)',
                    'rgba(5, 195, 251, 0.5)',
                    '#007F6E',
                    'rgba(5, 195, 251, 0.5)',
                    'rgba(5, 195, 251, 0.5)',
                    '#007F6E',
                    '#007F6E'
                ],
                pointBorderWidth: 2,
                pointRadius: 2,
                pointHoverRadius: 2,
                borderRadius: 10,
                borderWidth: 1
            },]
        },
        options: {
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                    labels: {
                        display: false
                    }
                },
                tooltip: {
                    enabled: false
                }
            },
            responsive: true,
            scales: {
                x: {
                    categoryPercentage: 1.0,
                    barPercentage: 1.0,
                    barDatasetSpacing: 0,
                    display: false,
                    barThickness: 5,
                    barRadius: 0,
                    gridLines: {
                        color: 'transparent',
                        zeroLineColor: 'transparent'
                    },
                    ticks: {
                        fontSize: 2,
                        fontColor: 'transparent'
                    }
                },
                y: {
                    display: false,
                    ticks: {
                        display: false,
                    }
                }
            },
            title: {
                display: false,
            },
            elements: {
                point: {
                    radius: 0
                }
            }
        }
    });

    // CHARTJS SALES CHART CLOSED


    // CHARTJS LEADS CHART  OPEN
    var ctx1 = document.getElementById('leadschart').getContext('2d');
    new Chart(ctx1, {
        type: 'line',
        data: {
            labels: ['Date 1', 'Date 2', 'Date 3', 'Date 4', 'Date 5', 'Date 6', 'Date 7', 'Date 8', 'Date 9', 'Date 10', 'Date 11', 'Date 12', 'Date 13', 'Date 14', 'Date 15'],
            datasets: [{
                label: 'Total Sales',
                data: [45, 23, 32, 67, 49, 72, 52, 55, 46, 54, 32, 74, 88, 36, 36, 32, 48, 54],
                backgroundColor: 'transparent',
                borderColor: '#f46ef4',
                borderWidth: '2.5',
                pointBorderColor: 'transparent',
                pointBackgroundColor: 'transparent',
                lineTension: 0.3
            },]
        },
        options: {
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                    labels: {
                        display: false
                    }
                },
                tooltip: {
                    enabled: false
                }
            },
            responsive: true,
            scales: {
                x: {
                    ticks: {
                        beginAtZero: true,
                        fontSize: 10,
                        fontColor: "transparent",
                    },
                    title: {
                        display: false,
                    },
                    grid: {
                        display: true,
                        color: 'transparent																																					',
                        drawBorder: false,
                    },
                    categoryPercentage: 1.0,
                    barPercentage: 1.0,
                    barDatasetSpacing: 0,
                    display: false,
                    barThickness: 5,
                },
                y: {
                    display: false,
                    ticks: {
                        display: false,
                    }
                }
            },
            title: {
                display: false,
            },
            elements: {
                point: {
                    radius: 0
                }
            }
        }
    });
    // CHARTJS LEADS CHART CLOSED

    // PROFIT CHART OPEN
    var ctx2 = document.getElementById('profitchart').getContext('2d');
    new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                barPercentage: 0.1,
                barThickness: 6,
                maxBarThickness: 8,
                minBarLength: 2,
                label: 'Total Sales',
                barGap: 0,
                barSizeRatio: 1,
                data: [10, 12, 5, 6, 3, 11, 12],
                backgroundColor: '#4ecc48',
                borderColor: '#4ecc48',
                pointBackgroundColor: '#fff',
                pointHoverBackgroundColor: '#4ecc48',
                pointBorderColor: '#4ecc48',
                pointHoverBorderColor: '#4ecc48',
                pointBorderWidth: 2,
                pointRadius: 2,
                pointHoverRadius: 2,
                borderRadius: 10,
                borderWidth: 1
            },]
        },
        options: {
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                    labels: {
                        display: false
                    }
                },
                tooltip: {
                    enabled: false
                }
            },
            responsive: true,
            scales: {
                x: {
                    categoryPercentage: 1.0,
                    barPercentage: 1.0,
                    barDatasetSpacing: 0,
                    display: false,
                    barThickness: 5,
                    gridLines: {
                        color: 'transparent',
                        zeroLineColor: 'transparent'
                    },
                    ticks: {
                        fontSize: 2,
                        fontColor: 'transparent'
                    }
                },
                y: {
                    display: false,
                    ticks: {
                        display: false,
                    }
                }
            },
            title: {
                display: false,
            },
            elements: {
                point: {
                    radius: 0
                }
            }
        }
    });
    // PROFIT CHART CLOSED


    // COST CHART OPEN
    var ctx3 = document.getElementById('costchart').getContext('2d');
    new Chart(ctx3, {
        type: 'line',
        data: {
            labels: ['Date 1', 'Date 2', 'Date 3', 'Date 4', 'Date 5', 'Date 6', 'Date 7', 'Date 8', 'Date 9', 'Date 10', 'Date 11', 'Date 12', 'Date 13', 'Date 14', 'Date 15', 'Date 16', 'Date 17'],
            datasets: [{
                label: 'Total Sales',
                data: [28, 56, 36, 32, 48, 54, 37, 58, 66, 53, 21, 24, 14, 45, 0, 32, 67, 49, 52, 55, 46, 54, 130],
                backgroundColor: 'transparent',
                borderColor: '#f7ba48',
                borderWidth: '2.5',
                pointBorderColor: 'transparent',
                pointBackgroundColor: 'transparent',
                lineTension: 0.3
            },]
        },
        options: {
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                    labels: {
                        display: false
                    }
                },
                tooltip: {
                    enabled: false
                }
            },
            responsive: true,
            scales: {
                x: {
                    categoryPercentage: 1.0,
                    barPercentage: 1.0,
                    barDatasetSpacing: 0,
                    display: false,
                    barThickness: 5,
                    gridLines: {
                        color: 'transparent',
                        zeroLineColor: 'transparent'
                    },
                    ticks: {
                        fontSize: 2,
                        fontColor: 'transparent'
                    }
                },
                y: {
                    display: false,
                    ticks: {
                        display: false,
                    }
                }
            },
            title: {
                display: false,
            },
            elements: {
                point: {
                    radius: 0
                }
            }
        }
    });
    // COST CHART CLOSED

    // DATA TABLE
   
 // DATA TABLE
 

 $('#data-table').DataTable({
    "order": [
        [0, "desc"]
    ],
    order: [],
    columnDefs: [{ orderable: false, targets: [0, 4, 5] }],
    language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
    }
});


});
function getCssValuePrefix() {
    'use strict'

    var retuenValue = ''; //default to standard syntax
    var prefixes = ['-o-', '-ms-', '-moz-', '-webkit-'];

    // Create a temporary DOM object for testing
    var dom = document.createElement('div');

    for (var i = 0; i < prefixes.length; i++) {
        // Attempt to set the style
        dom.style.background = prefixes[i] + 'linear-gradient(#ffffff, #000000)';

        // Detect if the style was successfully set
        if (dom.style.background) {
            retuenValue = prefixes[i];
        }
    }

    dom = null;
    dom.remove();

    return retuenValue;
}

// TRANSACTIONS
var myCanvas = document.getElementById("transactions");
myCanvas.height = "370";

var myCanvasContext = myCanvas.getContext("2d");
var gradientStroke1 = myCanvasContext.createLinearGradient(0, 80, 0, 280);
gradientStroke1.addColorStop(0, 'rgba(108, 95, 252, 0.8)');
gradientStroke1.addColorStop(1, 'rgba(108, 95, 252, 0.2) ');

var gradientStroke2 = myCanvasContext.createLinearGradient(0, 80, 0, 280);
gradientStroke2.addColorStop(0, 'rgba(5, 195, 251, 0.8)');
gradientStroke2.addColorStop(1, 'rgba(5, 195, 251, 0.2) ');
document.getElementById('transactions').innerHTML = '';
var myChart;
myChart = new Chart(myCanvas, {
    type: 'bar',
    data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec"],
        type: 'line',
        datasets: [{
            label: 'Total Sales',
            data: [100, 210, 180, 454, 454, 230, 230, 656, 656, 350, 350, 210],
            backgroundColor: gradientStroke1,
            borderColor: "#007F6E",
            pointBackgroundColor: '#fff',
            pointHoverBackgroundColor: gradientStroke1,
            pointBorderColor: "#007F6E",
            pointHoverBorderColor: gradientStroke1,
            pointBorderWidth: 0,
            pointRadius: 0,
            pointHoverRadius: 0,
            borderWidth: 3,
            fill: 'origin',
            lineTension: 0.3
        }, {
            label: 'Total Orders',
            data: [200, 530, 110, 110, 480, 520, 780, 435, 475, 738, 454, 454],
            backgroundColor: 'transparent',
            borderColor: "#007F6E",
            pointBackgroundColor: '#fff',
            pointHoverBackgroundColor: gradientStroke2,
            pointBorderColor: "#007F6E",
            pointHoverBorderColor: gradientStroke2,
            pointBorderWidth: 0,
            pointRadius: 0,
            pointHoverRadius: 0,
            borderWidth: 3,
            fill: 'origin',
            lineTension: 0.3

        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false,
                labels: {
                    usePointStyle: false,
                }
            },
            tooltip: {
                enabled: true
            }
        },
        scales: {
            x: {
                display: true,
                grid: {
                    display: false,
                    drawBorder: false,
                    color: 'rgba(119, 119, 142, 0.08)'
                },
                ticks: {
                    autoSkip: true,
                    color: '#b0bac9'
                },
                scaleLabel: {
                    display: false,
                    labelString: 'Month',
                    fontColor: 'transparent'
                }
            },
            y: {
                ticks: {
                    min: 0,
                    max: 1050,
                    stepSize: 150,
                    color: "#b0bac9",
                },
                display: true,
                grid: {
                    display: true,
                    drawBorder: false,
                    zeroLineColor: 'rgba(142, 156, 173,0.1)',
                    color: "rgba(142, 156, 173,0.1)",
                },
                scaleLabel: {
                    display: false,
                    labelString: 'sales',
                    fontColor: 'transparent'
                }
            }
        },
        title: {
            display: false,
            text: 'Normal Legend'
        }
    }
});
/* Earnings Report Chart */
var options = {
    series:[{
        name: 'Income',
        data:[2, 15, 25, 20, 30, 26, 24, 15, 12, 20]
      },         
      {
        name: 'Expense',
        data:[10, 25, 15, 16, 10, 14, 28, 18, 20, 16]
      },
      {
        name: 'Profit',
        data:[16,20,18,28,14,10,16,15,25,10]
      }
    ],
    chart:{
      height: 155,
      type:'area',
      opacity:1 ,
      toolbar: {
        show:false,
      },
    },
    grid: {
      yaxis: {
        lines: {
          show: false,
        }
      }
    },
    dataLabels: {
      enabled: false
    },
    fill:{ 
      opacity: [0.5, 0.25, 1],        
    },
    stroke: {
      width:[3, 3],
      curve: 'smooth',
    },
    xaxis: {
      offsetX: 0,
      offsetY: 0,
      categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec", "Jan"],
      labels: {
          low: 0,
          offsetX: 0,
          show: false,
      },
      axisBorder: {
          low: 0,
          offsetX: 0,
          show: false,
      },
      axisTicks: {
          show: false,
      },
    },
    legend:{
      show: false
    },
    yaxis: {
      show: false,
    },
    tooltip: {
      x: {
          format: 'MM'
      },
    },
  };
  document.getElementById('reportChart').innerHTML='';
  var chart1 = new ApexCharts(document.querySelector("#reportChart"), options);
  chart1.render();
  function earningsReport() {
    chart1.updateOptions({
        colors: ["rgb(" + myVarVal + ")", '#ffdd99','rgba(5, 195, 251, 0.8)',],
    })
}
  /* Earnings Report Chart */
// WORLD MAP MARKER
 $('#world-map-markers1').vectorMap({
    map: 'world_mill_en',
    scaleColors: ['#0d9c1e', '#e82646', '#007F6E'],

    normalizeFunction: 'polynomial',

    hoverOpacity: 0.7,

    hoverColor: false,

    regionStyle: {

        initial: {

            fill: '#edf0f5'
        }
    },
    markerStyle: {
        initial: {
            r: 6,
            'fill': '#0d9c1e',
            'fill-opacity': 0.9,
            'stroke': '#fff',
            'stroke-width': 9,
            'stroke-opacity': 0.2
        },

        hover: {
            'stroke': '#fff',
            'fill-opacity': 1,
            'stroke-width': 1.5
        }
    },
    backgroundColor: 'transparent',
    markers: [{
        latLng: [40.3, -101.38],
        name: 'USA',
    }, {
        latLng: [22.5, 1.51],
        name: 'India'
    }, {
        latLng: [50.02, 80.55],
        name: 'Bahrain'
    }, {
        latLng: [3.2, 73.22],
        name: 'Maldives'
    }, {
        latLng: [35.88, 14.5],
        name: 'Malta'
    },]
});

function index(myVarVal, myVarVal1) {
    'use strict'
    let gradientStroke = myCanvasContext.createLinearGradient(0, 80, 0, 280);;
    gradientStroke.addColorStop(0, `rgba(${myVarVal}, 0.8)` || 'rgba(108, 95, 252, 0.8)');
    gradientStroke.addColorStop(1, `rgba(${myVarVal}, 0.2)` || 'rgba(108, 95, 252, 0.2) ');
    myChart.data.datasets[0] = {
        label: 'Total Sales',
        data: [100, 210, 180, 454, 454, 230, 230, 656, 656, 350, 350, 210],
        backgroundColor: gradientStroke,
        borderColor: `rgb(${myVarVal})`,
        pointBackgroundColor: '#fff',
        pointHoverBackgroundColor: gradientStroke,
        pointBorderColor: `rgb(${myVarVal})`,
        pointHoverBorderColor: gradientStroke,
        pointBorderWidth: 0,
        pointRadius: 0,
        pointHoverRadius: 0,
        borderWidth: 3,
        fill: 'origin',
        lineTension: 0.3
    }
    myChart.update();

    chart1.updateOptions({
        colors: ["rgb(" + myVarVal + ")", '#ffdd99','rgba(5, 195, 251, 0.8)',],
    })
    chart1.update();
    
}





  var options = {
    series: [{
    name : 'Online Sale',  
    data: [100,155, 175, 160, 200, 200, 250, 130, 145, 250, 150,250 ]
  },{
    name : 'Marketing Sale',  
    data: [45, 75 , 85, 45, 145, 90, 45, 110, 65, 35, 105, 105]
  }], 
    colors:['var(--primary-bg-color)' ,'#FFAE1A'],
    chart: {
      type: 'area',
      height: 400, 
      toolbar: {
        tools: {
          zoom: false,
          zoomin: false,
          zoomout: false, 
          reset: false,
          pan: false,
          download: false,
        },
      }, 
    },
    fill: {
      gradient:{
          opacityFrom: 0.2,
          opacityTo: 0,
          shadeIntensity: 0.2,
      },
    },
    markers: {
      discrete: [{
        seriesIndex: 0,
        dataPointIndex: 1,
        fillColor: '#fff',
        strokeColor: 'var(--primary-bg-color)',
        size: 3,
        shape: "circle"
      },
      {
        seriesIndex: 0,
        dataPointIndex: 2,
        fillColor: '#fff',
        strokeColor: 'var(--primary-bg-color)',
        size: 3,
        shape: "circle"
      },
      {
        seriesIndex: 0, 
        dataPointIndex: 3,
        fillColor: '#fff',
        strokeColor: 'var(--primary-bg-color)',
        size: 3,
        shape: "circle"
      },
      {
        seriesIndex: 0,
        dataPointIndex: 4,
        fillColor: '#fff',
        strokeColor: 'var(--primary-bg-color)',
        size: 3,
        shape: "circle"
      },
      {
        seriesIndex: 0,
        dataPointIndex: 5,
        fillColor: '#fff',
        strokeColor: 'var(--primary-bg-color)',
        size: 3,
        shape: "circle"
      },
      {
        seriesIndex: 0,
        dataPointIndex: 6,
        fillColor: '#fff',
        strokeColor: 'var(--primary-bg-color)',
        size: 3,
        shape: "circle"
      },
      {
        seriesIndex: 0,
        dataPointIndex: 7,
        fillColor: '#fff',
        strokeColor: 'var(--primary-bg-color)',
        size: 3,
        shape: "circle" 
      },
      {
        seriesIndex: 0,
        dataPointIndex: 8,
        fillColor: '#fff',
        strokeColor: 'var(--primary-bg-color)',
        size: 3,
        shape: "circle"
      },
      {
        seriesIndex: 0,
        dataPointIndex: 9, 
        fillColor: '#fff',
        strokeColor: 'var(--primary-bg-color)',
        size: 3, 
        shape: "circle"
      },
      {
        seriesIndex: 0,
        dataPointIndex: 10,
        fillColor: '#fff',
        strokeColor: 'var(--primary-bg-color)',
        size: 3, 
        shape: "circle"
      },
      {
        seriesIndex: 1,
        dataPointIndex: 1,
        fillColor: '#fff',
        strokeColor: '#FFAE1A',
        size: 3, 
        shape: "circle"
      },
      {
        seriesIndex: 1,
        dataPointIndex: 2,
        fillColor: '#fff',
        strokeColor: '#FFAE1A',
        size: 3,
        shape: "circle"
      },
      {
        seriesIndex: 1,
        dataPointIndex: 3,
        fillColor: '#fff',
        strokeColor: '#FFAE1A',
        size: 3,
        shape: "circle"
      },
      {
        seriesIndex: 1,
        dataPointIndex: 4,
        fillColor: '#fff',
        strokeColor: '#FFAE1A',
        size: 3,
        shape: "circle"
      },
      {
        seriesIndex: 1,
        dataPointIndex: 5,
        fillColor: '#fff',
        strokeColor: '#FFAE1A',
        size: 3,
        shape: "circle"
      },
      {
        seriesIndex: 1,
        dataPointIndex: 6,
        fillColor: '#fff',
        strokeColor: '#FFAE1A',
        size: 3,
        shape: "circle"
      },
      {
        seriesIndex: 1,
        dataPointIndex: 7,
        fillColor: '#fff',
        strokeColor: '#FFAE1A',
        size: 3,
        shape: "circle"
      },
      {
        seriesIndex: 1,
        dataPointIndex: 8,
        fillColor: '#fff',
        strokeColor: '#FFAE1A',
        size: 3,
        shape: "circle"
      },
      {
        seriesIndex: 1,
        dataPointIndex: 9,
        fillColor: '#fff',
        strokeColor: '#FFAE1A',
        size: 3, 
        shape: "circle"
      },
      {
        seriesIndex: 1,
        dataPointIndex: 10,
        fillColor: '#fff',
        strokeColor: '#FFAE1A',
        size: 3, 
        shape: "circle"
      },
      ],
    },
    legend:{
      show :false,
    },
    stroke: {
      curve: 'stepline',
      width: 2,
    }, 
    dataLabels: {
      enabled: false,
    },
    grid :{
      show: true,
      strokeDashArray: 3,
      borderColor: ['var(--chart-border)'],
      xaxis: { 
        lines: { 
          show: true,
        }
      },
      yaxis: {
        lines: {
          show: true,
        }
      },
    },
    xaxis: {
      categories: ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sep", "Oct", "Nov" ,"Dec"],
          labels: {
              style: { 
                  colors: ['var(--body-font-color)','var(--body-font-color)','var(--body-font-color)','var(--body-font-color)','var(--body-font-color)','var(--body-font-color)','var(--body-font-color)','var(--body-font-color)','var(--body-font-color)','var(--body-font-color)','var(--body-font-color)','var(--body-font-color)' ],
              } 
          }, 
          axisTicks: {
            show: false
          },
          axisBorder: {  
              show: false
          }, 
      },
      yaxis: {
        labels: {
            style: {
                colors: ['var(--body-font-color)'],
            },
            formatter: (value) => {
              return `${value}$`;
            },
        },

      },
      tooltip: {
        custom: function ({ series, seriesIndex, dataPointIndex,}) {
          return '<div class="apex-tooltip p-2">' + '<span>' + '<span class="bg-primary">' + '</span>' + 'Marketing Sale' + '<h3>' + '$'+ series[seriesIndex][dataPointIndex] + '<h3/>'  + '</span>' + '</div>';
        },
      },
      responsive: [{
        breakpoint: 425,
        options: { 
          series: [{
            name : 'Online Sale', 
            data: [100,155, 175, 160, 200, 200, 250 ]
          },{ 
            name : 'Marketing Sale',
            data: [45, 75 , 85, 45, 145, 90, 45]
          }],
        }
      }
    ],
  };
  var revenuegrowth = new ApexCharts(document.querySelector("#revenuegrowth"), options);
  revenuegrowth.render();

  //  visitsCharts
  
  var options = {
    series: [{
    name: 'Chrome',
    data: [44, 55, 41, 37, 22, 43, 21]
  }, {
    name: 'Firefox',
    data: [53, 32, 33, 52, 13, 43, 32]
  }, { 
    name: 'Firefox',
    data: [12, 17, 11, 9, 15, 11, 20]
  }],
    colors:['var(--primary-bg-color)' ,'var(--primary04)' ,'var(--primary03)'],
    chart: { 
    type: 'bar',
    height: 325,
    stacked: true, 
    toolbar: {
      show: false,
      tools: {
        download: false,
      }
    }, 
    zoom: {
      enabled: true,
    } 
  },
    responsive: [{
      breakpoint: 480,
      options: {
        legend: {
          position: 'bottom',
          offsetY: 2,
        }
      } 
    }], 
    plotOptions: {
      bar: {
        horizontal: true,
        barHeight: '28%',
      },
    },
    dataLabels: {
      enabled: false,
    },
    xaxis: {
      categories: ['Mon', 'Tue', 'Wed', 'Thu','Fri', 'Sat' ,'Sun'
      ],
      labels:{
        show: false,
      },
      axisTicks:{
        show: false,
      },
    },
    legend: {
      show: false,
    },
    fill: { 
      opacity: 1 
    },
    grid: {
      show: false,
    }
  };
  var  visitsCharts = new ApexCharts(document.querySelector("#visitsCharts"), options);
   visitsCharts.render();