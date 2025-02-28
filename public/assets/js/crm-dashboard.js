
/* Total Customers chart */
var crm1 = {
    chart: {
        type: 'line',
        height: 40,
        width: 100,
        sparkline: {
            enabled: true
        }
    },
    stroke: {
        show: true,
        curve: 'smooth',
        lineCap: 'butt',
        colors: undefined,
        width: 1.5,
        dashArray: 0,
    },
    fill: {
        type: 'gradient',
        gradient: {
            opacityFrom: 0.9,
            opacityTo: 0.9,
            stops: [0, 98],
        }
    },
    series: [{
        name: 'Value',
        data: [20, 14, 19, 10, 23, 20, 22, 9, 12]
    }],
    yaxis: {
        min: 0,
        show: false,
        axisBorder: {
            show: false
        },
    },
    xaxis: {
        show: false,
        axisBorder: {
            show: false
        },
    },
    tooltip: {
        enabled: false,
    },
    colors: ["rgb(132, 90, 223)"],
}
document.getElementById('crm-total-customers').innerHTML = '';
var crm1 = new ApexCharts(document.querySelector("#crm-total-customers"), crm1);
crm1.render();

function crmtotalCustomers() {
    crm1.updateOptions({
        colors: ["rgb(" + myVarVal + ")"],
    });
}
/* Total Customers chart */

/* Total revenue chart */
var crm2 = {
    chart: {
        type: 'line',
        height: 40,
        width: 100,
        sparkline: {
            enabled: true
        }
    },
    stroke: {
        show: true,
        curve: 'smooth',
        lineCap: 'butt',
        colors: undefined,
        width: 1.5,
        dashArray: 0,
    },
    fill: {
        type: 'gradient',
        gradient: {
            opacityFrom: 0.9,
            opacityTo: 0.9,
            stops: [0, 98],
        }
    },
    series: [{
        name: 'Value',
        data: [26, 14, 20, 22, 9, 12, 19, 10, 25]
    }],
    yaxis: {
        min: 0,
        show: false,
        axisBorder: {
            show: false
        },
    },
    xaxis: {
        show: false,
        axisBorder: {
            show: false
        },
    },
    tooltip: {
        enabled: false,
    },
    colors: ["rgb(35, 183, 229)"],

}
document.getElementById('crm-total-revenue').innerHTML = '';
var crm2 = new ApexCharts(document.querySelector("#crm-total-revenue"), crm2);
crm2.render();
/* Total revenue chart */

/* Conversion ratio Chart */
var crm3 = {
    chart: {
        type: 'line',
        height: 40,
        width: 100,
        sparkline: {
            enabled: true
        }
    },
    stroke: {
        show: true,
        curve: 'smooth',
        lineCap: 'butt',
        colors: undefined,
        width: 1.5,
        dashArray: 0,
    },
    fill: {
        type: 'gradient',
        gradient: {
            opacityFrom: 0.9,
            opacityTo: 0.9,
            stops: [0, 98],
        }
    },
    series: [{
        name: 'Value',
        data: [20, 20, 22, 9, 14, 19, 10, 25, 12]
    }],
    yaxis: {
        min: 0,
        show: false,
        axisBorder: {
            show: false
        },
    },
    xaxis: {
        show: false,
        axisBorder: {
            show: false
        },
    },
    tooltip: {
        enabled: false,
    },
    colors: ["rgb(232, 38, 70)"],

}
document.getElementById('crm-conversion-ratio').innerHTML = '';
var crm3 = new ApexCharts(document.querySelector("#crm-conversion-ratio"), crm3);
crm3.render();
/* Conversion ratio Chart */
/* Total Deals Chart */
var crm4 = {
    chart: {
        type: 'line',
        height: 40,
        width: 100,
        sparkline: {
            enabled: true
        }
    },
    stroke: {
        show: true,
        curve: 'smooth',
        lineCap: 'butt',
        colors: undefined,
        width: 1.5,
        dashArray: 0,
    },
    fill: {
        type: 'gradient',
        gradient: {
            opacityFrom: 0.9,
            opacityTo: 0.9,
            stops: [0, 98],
        }
    },
    series: [{
        name: 'Value',
        data: [20, 20, 22, 9, 12, 14, 19, 10, 25]
    }],
    yaxis: {
        min: 0,
        show: false,
        axisBorder: {
            show: false
        },
    },
    xaxis: {
        show: false,
        axisBorder: {
            show: false
        },
    },
    tooltip: {
        enabled: false,
    },
    colors: ["rgb(245, 184, 73)"],
}
document.getElementById('crm-total-deals').innerHTML = '';
var crm4 = new ApexCharts(document.querySelector("#crm-total-deals"), crm4);
crm4.render();
/* Total Deals Chart */
/* Revenue Analytics Chart */
var options = {
    series: [
        {
            type: 'line',
            name: 'Profit',
            data: [
                {
                    x: 'Jan',
                    y: 100
                },
                {
                    x: 'Feb',
                    y: 210
                },
                {
                    x: 'Mar',
                    y: 180
                },
                {
                    x: 'Apr',
                    y: 454
                },
                {
                    x: 'May',
                    y: 230
                },
                {
                    x: 'Jun',
                    y: 320
                },
                {
                    x: 'Jul',
                    y: 656
                },
                {
                    x: 'Aug',
                    y: 830
                },
                {
                    x: 'Sep',
                    y: 350
                },
                {
                    x: 'Oct',
                    y: 350
                },
                {
                    x: 'Nov',
                    y: 210
                },
                {
                    x: 'Dec',
                    y: 410
                }
            ]
        },
        {
            type: 'line',
            name: 'Revenue',
            chart: {
                dropShadow: {
                    enabled: true,
                    enabledOnSeries: undefined,
                    top: 5,
                    left: 0,
                    blur: 3,
                    color: '#000',
                    opacity: 0.1
                }
            },
            data: [
                {
                    x: 'Jan',
                    y: 180
                },
                {
                    x: 'Feb',
                    y: 620
                },
                {
                    x: 'Mar',
                    y: 476
                },
                {
                    x: 'Apr',
                    y: 220
                },
                {
                    x: 'May',
                    y: 520
                },
                {
                    x: 'Jun',
                    y: 780
                },
                {
                    x: 'Jul',
                    y: 435
                },
                {
                    x: 'Aug',
                    y: 515
                },
                {
                    x: 'Sep',
                    y: 738
                },
                {
                    x: 'Oct',
                    y: 454
                },
                {
                    x: 'Nov',
                    y: 525
                },
                {
                    x: 'Dec',
                    y: 230
                }
            ]
        },
        {
            type: 'area',
            name: 'Sales',
            chart: {
                dropShadow: {
                    enabled: true,
                    enabledOnSeries: undefined,
                    top: 5,
                    left: 0,
                    blur: 3,
                    color: '#000',
                    opacity: 0.1
                }
            },
            data: [
                {
                    x: 'Jan',
                    y: 220
                },
                {
                    x: 'Feb',
                    y: 580
                },
                {
                    x: 'Mar',
                    y: 130
                },
                {
                    x: 'Apr',
                    y: 150
                },
                {
                    x: 'May',
                    y: 500
                },
                {
                    x: 'Jun',
                    y: 540
                },
                {
                    x: 'Jul',
                    y: 800
                },
                {
                    x: 'Aug',
                    y: 460
                },
                {
                    x: 'Sep',
                    y: 490
                },
                {
                    x: 'Oct',
                    y: 750
                },
                {
                    x: 'Nov',
                    y: 470
                },
                {
                    x: 'Dec',
                    y: 520
                }
            ]
        }
    ],
    chart: {
        height: 350,
        animations: {
            speed: 500
        },
        dropShadow: {
            enabled: true,
            enabledOnSeries: undefined,
            top: 8,
            left: 0,
            blur: 3,
            color: '#000',
            opacity: 0.1
        },
    },
    colors: ["rgb(132, 90, 223)", "rgba(35, 183, 229, 0.85)", "rgba(119, 119, 142, 0.05)"],
    dataLabels: {
        enabled: false
    },
    grid: {
        borderColor: '#f1f1f1',
        strokeDashArray: 3
    },
    stroke: {
        curve: 'smooth',
        width: [2, 2, 0],
        dashArray: [0, 5, 0],
    },
    xaxis: {
        axisTicks: {
            show: false,
        },
    },
    yaxis: {
        labels: {
            formatter: function (value) {
                return "$" + value;
            }
        },
    },
    tooltip: {
        y: [{
            formatter: function (e) {
                return void 0 !== e ? "$" + e.toFixed(0) : e
            }
        }, {
            formatter: function (e) {
                return void 0 !== e ? "$" + e.toFixed(0) : e
            }
        }, {
            formatter: function (e) {
                return void 0 !== e ? e.toFixed(0) : e
            }
        }]
    },
    legend: {
        show: false,
        customLegendItems: ['Profit', 'Revenue', 'Sales'],
        inverseOrder: true
    },
    title: {
        text: 'Revenue Analytics with sales & profit (USD)',
        align: 'left',
        style: {
            fontSize: '.8125rem',
            fontWeight: 'semibold',
            color: '#8c9097'
        },
    },
    markers: {
        hover: {
            sizeOffset: 5
        }
    }
};
document.getElementById('crm-analytics').innerHTML = '';
var chart = new ApexCharts(document.querySelector("#crm-analytics"), options);
chart.render();
// crm-analytics end
var options = {
    chart: {
        type: "bar",
        height: 285,
        stacked: true,
        toolbar: {
            show: !1
        }
    },
    series: [{
        name: "PRODUCT A",
        data: [75, 50, 55, 60, 48, 82, 59]
    }, {
        name: "PRODUCT B",
        data: [25, 29, 32, 35, 34, 18, 30]
    }],
    plotOptions: {
        bar: {
            horizontal: !1,
            columnWidth: "40%",
            borderRadius: 10
            // startingShape: "10",
            // endingShape: "10"
        }
    },
    dataLabels: {
        enabled: !1
    },
    stroke: {
        curve: "smooth",
        width: 6,
        lineCap: "round",
        colors: ["#fff"]
    },
    legend: {
        show: !1
    },
    colors: ["#e82646", "#435971"],
    fill: {
        opacity: 1
    },
    grid: {
        show: !1,
        strokeDashArray: 7,
        padding: {
            top: -10,
            bottom: -12,
            left: 0,
            right: 0
        }
    },
    xaxis: {
        categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
        labels: {
            show: !0,
            style: {
                colors: ["#74829c"],
                fontSize: "13px"
            }
        },
        axisBorder: {
            show: !1
        },
        axisTicks: {
            show: 1
        }
    },
    yaxis: {
        show: !1,
    },
    responsive: [{
        breakpoint: 1440,
        options: {
            plotOptions: {
                bar: {
                    borderRadius: 10,
                    columnWidth: "50%"
                }
            }
        }
    }, {
        breakpoint: 1300,
        options: {
            plotOptions: {
                bar: {
                    borderRadius: 11,
                    columnWidth: "55%"
                }
            }
        }
    }, {
        breakpoint: 1200,
        options: {
            plotOptions: {
                bar: {
                    borderRadius: 10,
                    columnWidth: "45%"
                }
            }
        }
    }, {
        breakpoint: 1040,
        options: {
            plotOptions: {
                bar: {
                    borderRadius: 10,
                    columnWidth: "50%"
                }
            }
        }
    }, {
        breakpoint: 992,
        options: {
            plotOptions: {
                bar: {
                    borderRadius: 12,
                    columnWidth: "40%"
                }
            },
            chart: {
                type: "bar",
                height: 320
            }
        }
    }, {
        breakpoint: 768,
        options: {
            plotOptions: {
                bar: {
                    borderRadius: 11,
                    columnWidth: "25%"
                }
            }
        }
    }, {
        breakpoint: 576,
        options: {
            plotOptions: {
                bar: {
                    borderRadius: 10,
                    columnWidth: "35%"
                }
            }
        }
    }, {
        breakpoint: 440,
        options: {
            plotOptions: {
                bar: {
                    borderRadius: 10,
                    columnWidth: "45%"
                }
            }
        }
    }, {
        breakpoint: 360,
        options: {
            plotOptions: {
                bar: {
                    borderRadius: 8,
                    columnWidth: "50%"
                }
            }
        }
    }],
    states: {
        hover: {
            filter: {
                type: "none"
            }
        },
        active: {
            filter: {
                type: "none"
            }
        }
    }
};
document.getElementById('salesActivityChart').innerHTML = '';
var chart = new ApexCharts(document.querySelector("#salesActivityChart"), options);
chart.render();
// salesActivityChart end

/* Profits Earned Chart */
var options1 = {
    series: [{
        name: 'Profit Earned',
        data: [44, 42, 57, 86, 58, 55, 70],
    }, {
        name: 'Total Sales',
        data: [34, 22, 37, 56, 21, 35, 60],
    }],
    chart: {
        type: 'bar',
        height: 180,
        toolbar: {
            show: false,
        }
    },
    grid: {
        borderColor: '#f1f1f1',
        strokeDashArray: 3
    },
    colors: ["rgb(132, 90, 223)", "#e4e7ed"],
    plotOptions: {
        bar: {
            colors: {
                ranges: [{
                    from: -100,
                    to: -46,
                    color: '#ebeff5'
                }, {
                    from: -45,
                    to: 0,
                    color: '#ebeff5'
                }]
            },
            columnWidth: '60%',
            borderRadius: 5,
        }
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        show: true,
        width: 2,
        colors: undefined,
    },
    legend: {
        show: false,
        position: 'top',
    },
    yaxis: {
        title: {
            style: {
                color: '#adb5be',
                fontSize: '13px',
                fontFamily: 'poppins, sans-serif',
                fontWeight: 600,
                cssClass: 'apexcharts-yaxis-label',
            },
        },
        labels: {
            formatter: function (y) {
                return y.toFixed(0) + "";
            }
        }
    },
    xaxis: {
        type: 'week',
        categories: ['S', 'M', 'T', 'W', 'T', 'F', 'S'],
        axisBorder: {
            show: true,
            color: 'rgba(119, 119, 142, 0.05)',
            offsetX: 0,
            offsetY: 0,
        },
        axisTicks: {
            show: true,
            borderType: 'solid',
            color: 'rgba(119, 119, 142, 0.05)',
            width: 6,
            offsetX: 0,
            offsetY: 0
        },
        labels: {
            rotate: -90
        }
    }
};
document.getElementById('crm-profits-earned').innerHTML = '';
var chart1 = new ApexCharts(document.querySelector("#crm-profits-earned"), options1);
chart1.render();
// crm-profits-earned end

var options = {
    chart: {
        height: 157,
        width: 135,
        parentHeightOffset: 0,
        type: "donut"
    },
    labels: ["Electronic", "Sports", "Decor", "Fashion"],
    series: [45, 58, 30, 50],
    colors: ["rgba(113,221,55,1)", "rgba(113, 221, 55, 0.6)", "rgba(113, 221, 55, 0.4)","rgba(113, 221, 55, 0.2)"],
    stroke: {
        width: 0
    },
    dataLabels: {
        enabled: !1,
        formatter: function(o, e) {
            return parseInt(o) + "%"
        }
    },
    legend: {
        show: !1
    },
    tooltip: {
        theme: !1
    },
    grid: {
        padding: {
            top: 5,
            bottom: 5
        }
    },
    plotOptions: {
        pie: {
            donut: {
                size: "75%",
                labels: {
                    show: !0,
                    value: {
                        fontSize: "1.5rem",
                        fontFamily: "Public Sans",
                        color: "#000",
                        fontWeight: 500,
                        offsetY: -15,
                        formatter: function(o) {
                            return parseInt(o) + "%"
                        }
                    },
                    name: {
                        offsetY: 20,
                        fontFamily: "Public Sans"
                    },
                    total: {
                        show: !0,
                        fontSize: ".7rem",
                        label: "1 Week",
                        color: "#09ad95",
                        formatter: function(o) {
                            return "32%"
                        }
                    }
                }
            }
        }
    }
};
document.getElementById('leadsReportChart').innerHTML = '';
var chart1 = new ApexCharts(document.querySelector("#leadsReportChart"), options);
chart1.render();

function index(myVarVal, myVarVal1) {
    'use strict'
    crm1.updateOptions({
        colors: ["rgb(" + myVarVal +")"],
    });
    crm1.update();
}