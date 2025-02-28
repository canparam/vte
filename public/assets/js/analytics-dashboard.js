$(function (e) {
    'use strict'
    
    const ps4 = new PerfectScrollbar('.country-list', {
        useBothWheelAxes: true,
        suppressScrollX: true,
        suppressScrollY: false,
    });
    
    // TotalUsers chart start
    var options = {
        series: [{
            name: "Total Users",
            data: [240, 160, 671, 414, 555, 257, 901, 613, 727, 414, 555, 257]
        }],
        chart: {
            type: "bar",
            height: 65,
            toolbar: {
                show: !1
            },
            zoom: {
                enabled: !1
            },
            dropShadow: {
                enabled: !0,
                top: 3,
                left: 14,
                blur: 4,
                opacity: .12,
                color: "#17a00e"
            },
            sparkline: {
                enabled: !0
            }
        },
        markers: {
            size: 0,
            colors: ["#17a00e"],
            strokeColors: "#fff",
            strokeWidth: 2,
            hover: {
                size: 7
            }
        },
        plotOptions: {
            bar: {
                horizontal: !1,
                columnWidth: "30%",
                endingShape: "rounded"
            }
        },
        dataLabels: {
            enabled: !1
        },
        stroke: {
            show: !0,
            width: 0,
            curve: "smooth"
        },
        colors: ["#17a00e"],
        xaxis: {
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            theme: "dark",
            fixed: {
                enabled: !1
            },
            x: {
                show: !1
            },
            y: {
                title: {
                    formatter: function (e) {
                        return ""
                    }
                }
            },
            marker: {
                show: !1
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#TotalUsers"), options);
    chart.render();
    // TotalUsers chart end
    // PageViews chart start
    var options = {
        series: [{
            name: "Page Views",
            data: [240, 160, 671, 414, 555, 257, 901, 613, 727, 414, 555, 257]
        }],
        chart: {
            type: "bar",
            height: 65,
            toolbar: {
                show: !1
            },
            zoom: {
                enabled: !1
            },
            dropShadow: {
                enabled: !0,
                top: 3,
                left: 14,
                blur: 4,
                opacity: .12,
                color: "#f41127"
            },
            sparkline: {
                enabled: !0
            }
        },
        markers: {
            size: 0,
            colors: ["#f41127"],
            strokeColors: "#fff",
            strokeWidth: 2,
            hover: {
                size: 7
            }
        },
        plotOptions: {
            bar: {
                horizontal: !1,
                columnWidth: "30%",
                endingShape: "rounded"
            }
        },
        dataLabels: {
            enabled: !1
        },
        stroke: {
            show: !0,
            width: 0,
            curve: "smooth"
        },
        colors: ["#f41127"],
        xaxis: {
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            theme: "dark",
            fixed: {
                enabled: !1
            },
            x: {
                show: !1
            },
            y: {
                title: {
                    formatter: function (e) {
                        return ""
                    }
                }
            },
            marker: {
                show: !1
            }
        }
    };
    var chart = new ApexCharts(document.querySelector("#PageViews"), options);
    chart.render();
    // PageViews chart end
    // SessionDuration chart start
    var options = {
        series: [{
            name: "Avg. Session Duration",
            data: [240, 160, 671, 414, 555, 257, 901, 613, 727, 414, 555, 257]
        }],
        chart: {
            type: "bar",
            height: 65,
            toolbar: {
                show: !1
            },
            zoom: {
                enabled: !1
            },
            dropShadow: {
                enabled: !0,
                top: 3,
                left: 14,
                blur: 4,
                opacity: .12,
                color: "#0d6efd"
            },
            sparkline: {
                enabled: !0
            }
        },
        markers: {
            size: 0,
            colors: ["#0d6efd"],
            strokeColors: "#fff",
            strokeWidth: 2,
            hover: {
                size: 7
            }
        },
        plotOptions: {
            bar: {
                horizontal: !1,
                columnWidth: "30%",
                endingShape: "rounded"
            }
        },
        dataLabels: {
            enabled: !1
        },
        stroke: {
            show: !0,
            width: 0,
            curve: "smooth"
        },
        colors: ["#0d6efd"],
        xaxis: {
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            theme: "dark",
            fixed: {
                enabled: !1
            },
            x: {
                show: !1
            },
            y: {
                title: {
                    formatter: function (e) {
                        return ""
                    }
                }
            },
            marker: {
                show: !1
            }
        }
    };
    var chart = new ApexCharts(document.querySelector("#SessionDuration"), options);
    chart.render();
    // SessionDuration chart end

    // BounceRate chart start
    var options = {
        series: [{
            name: "Bounce Rate",
            data: [240, 160, 671, 414, 555, 257, 901, 613, 727, 414, 555, 257]
        }],
        chart: {
            type: "bar",
            height: 65,
            toolbar: {
                show: !1
            },
            zoom: {
                enabled: !1
            },
            dropShadow: {
                enabled: !0,
                top: 3,
                left: 14,
                blur: 4,
                opacity: .12,
                color: "#ffb207"
            },
            sparkline: {
                enabled: !0
            }
        },
        markers: {
            size: 0,
            colors: ["#ffb207"],
            strokeColors: "#fff",
            strokeWidth: 2,
            hover: {
                size: 7
            }
        },
        plotOptions: {
            bar: {
                horizontal: !1,
                columnWidth: "30%",
                endingShape: "rounded"
            }
        },
        dataLabels: {
            enabled: !1
        },
        stroke: {
            show: !0,
            width: 0,
            curve: "smooth"
        },
        colors: ["#ffb207"],
        xaxis: {
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            theme: "dark",
            fixed: {
                enabled: !1
            },
            x: {
                show: !1
            },
            y: {
                title: {
                    formatter: function (e) {
                        return ""
                    }
                }
            },
            marker: {
                show: !1
            }
        }
    };
    var chart = new ApexCharts(document.querySelector("#BounceRate"), options);
    chart.render();
    // BounceRate chart end
    // SocialTraffic chart start
    var options = {
        series: [{
          name: "Desktops",
          data: [10, 41, 35, 51, 49,148]
      }],
        chart: {
            type: "area",
			height: 92,
			toolbar: {
				show: !1
			},
			zoom: {
				enabled: !1
			},
			dropShadow: {
				enabled: !1,
				top: 3,
				left: 14,
				blur: 4,
				opacity: .12,
				color: "#f41127"
			},
			sparkline: {
				enabled: !0
			}
      },
      markers: {
        size: 0,
        colors: ["#008cff"],
        strokeColors: "#fff",
        strokeWidth: 2,
        hover: {
            size: 7
        }
    },
    dataLabels: {
        enabled: !1
    },
    stroke: {
        show: !0,
        width: 2,
        curve: "smooth"
    },
    colors: ["#008cff"],
    xaxis: {
        categories: ["Facebook", "YouTube", "Linkedin", "Twitter", "Dribbble", "Instagram"]
    },
    fill: {
        opacity: 1
    },
    tooltip: {
        theme: "dark",
        fixed: {
            enabled: !1
        },
        x: {
            show: true
        },
        y: {
            title: {
                formatter: function(e) {
                    return ""
                }
            }
        },
        marker: {
            show: !1
        }
    },
      };
      var chart = new ApexCharts(document.querySelector("#SocialTraffic"), options);
      chart.render();
    // SocialTraffic chart end
    jQuery("#geographic-map").vectorMap({
		map: "world_mill_en",
		backgroundColor: "transparent",
		borderColor: "#818181",
		borderOpacity: .25,
		borderWidth: 1,
		zoomOnScroll: !1,
		color: "#009efb",
		regionStyle: {
			initial: {
				fill: "#6c757d"
			}
		},
		markerStyle: {
			initial: {
				r: 9,
				fill: "#fff",
				"fill-opacity": 1,
				stroke: "#000",
				"stroke-width": 5,
				"stroke-opacity": .4
			}
		},
		enableZoom: !0,
		hoverColor: "#009efb",
		
		series: {
			regions: [{
				values: {
					IN: "#046A38",
					US: "#3c3b6e",
					RU: "#0039a6",
					AU: "#00008B"
				}
			}]
		},
		hoverOpacity: null,
		normalizeFunction: "linear",
		scaleColors: ["#b6d6ff", "#005ace"],
		selectedColor: "#c9dfaf",
		selectedRegions: [],
		showTooltip: !0,
		
	})
    // Gender chart start
    var options = {
        series: [{
			name: "Male",
			data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
		}, {
			name: "Female",
			data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
		}, {
			name: "Others",
			data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
		}],
		chart: {
			foreColor: "#9ba7b2",
			type: "bar",
			height: 300,
			toolbar: {
				show: !1
			}
		},
		plotOptions: {
			bar: {
				horizontal: !1,
				columnWidth: "55%",
				endingShape: "rounded"
			}
		},
		dataLabels: {
			enabled: !1
		},
		stroke: {
			show: !0,
			width: 2,
			colors: ["transparent"]
		},
		colors: ["#0dcaf0", "#0d6efd", "#e5e7e8"],
		xaxis: {
			categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"]
		},
		grid: {
			show: true,
			borderColor: 'rgba(0, 0, 0, 0.15)',
			strokeDashArray: 4,
		},
		fill: {
			opacity: 1
		},
		tooltip: {
			y: {
				formatter: function(e) {
					return "$ " + e + " thousands"
				}
			}
		}
    };
    var chart = new ApexCharts(document.querySelector("#Gender"), options);
    chart.render();
    // Gender chart end
    var options = {
        series: [42, 47, 52, 58, 65],
		chart: {
            foreColor: "#9ba7b2",
			height: 340,
			type: "polarArea"
		},
		labels: ["Chrome", "Firefox", "Edge", "Opera", "Safari"],
		fill: {
			opacity: 1
		},
		stroke: {
			width: 1,
			colors: void 0
		},
		colors: ["#17a00e", "#0dcaf0", "#f41127", "#ffc107", "#0d6efd"],
		yaxis: {
			show: !1
		},
		dataLabels: {
			enabled: !1
		},
		legend: {
			show: true,
			position: "bottom"
		},
		plotOptions: {
			polarArea: {
				rings: {
					strokeWidth: 0
				}
			}
		}
    };
    var chart = new ApexCharts(document.querySelector("#BrowserStatistics"), options);
    chart.render();
    
});


//Audience chart start
var options = {
    series: [{
        name: "Sessions",
        data: [14, 3, 10, 9, 29, 19, 22, 9, 12, 7, 19, 5],
    }],
    chart: {
        foreColor: "#9ba7b2",
        height: 310,
        type: "area",
        zoom: {
            enabled: !1
        },
        toolbar: {
            show: false
        },
        dropShadow: {
            enabled: !0,
            top: 3,
            left: 14,
            blur: 4,
            opacity: .1
        }
    },
    stroke: {
        width: 5,
        curve: "smooth"
    },
    xaxis: {
        categories: ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC']
    },
    
    fill: {
        type: "gradient",
        gradient: {
            shade: "light",
            shadeIntensity: 1,
            type: "vertical",
            opacityFrom: .7,
            opacityTo: .2,
            stops: [0, 100, 100, 100]
        }
    },
    markers: {
        size: 5,
        colors: ["#0d6efd"],
        strokeColors: "#fff",
        strokeWidth: 2,
        hover: {
            size: 7
        }
    },
    dataLabels: {
        enabled: !1
    },
    colors: ["#0d6efd"],
    grid: {
        show: true,
        borderColor: 'rgba(0, 0, 0, 0.15)',
        strokeDashArray: 4,
    },
    
};
document.getElementById('Audience').innerHTML='';
var chart1 = new ApexCharts(document.querySelector("#Audience"), options);
chart1.render();
function audienceReport() {
chart1.updateOptions({
    colors: ["rgb(" + myVarVal + ")",],
    gradient:{
        gradientToColors: ["rgb(" + myVarVal + ")"],
    }
})
}

function index(myVarVal, myVarVal1) {
    'use strict'
    chart1.updateOptions({
        colors: ["rgb(" + myVarVal + ")",],
        gradient:{
            gradientToColors: ["rgb(" + myVarVal + ")"],
        }
    })
    chart1.update();
    
}


