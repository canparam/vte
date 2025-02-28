 /********* On scroll heder Sticky *********/
 $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 50) {
      $("header").addClass("head-sticky");
    } else {
      $("header").removeClass("head-sticky");
    }
  });

//   ------------- particles -----------------//

$(document).ready(function () {


particlesJS("particles-js", {
    "particles": {
        "number": {
            "value": 80,
            "density": {
                "enable": true,
                "value_area": 800
            }
        },
        "color": {
            "value": "#5e5e5e"
        },
        "shape": {
            "type": "circle",
            "stroke": {
                "width": 0,
                "color": "#5e5e5e"
            },
            "polygon": {
                "nb_sides": 3
            }
        },
        "opacity": {
            "value": 0.5,
            "random": false,
            "anim": {
                "enable": false,
                "speed": 1,
                "opacity_min": 0.1,
                "sync": false
            }
        },
        "size": {
            "value": 3,
            "random": true,
            "anim": {
                "enable": false,
                "speed": 40,
                "size_min": 0.1,
                "sync": false
            }
        },
        "line_linked": {
            "enable": true,
            "distance": 100,
            "color": "#999",
            "opacity": 0.4,
            "width": 1
        },
        "move": {
            "enable": true,
            "speed": 6,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "bounce": false,
            "attract": {
                "enable": false,
                "rotateX": 600,
                "rotateY": 1200
            }
        }
    },
    "interactivity": {
        "detect_on": "canvas",
        "events": {
            "onhover": {
                "enable": true,
                "mode": "repulse"
            },
            "onclick": {
                "enable": true,
                "mode": "push"
            },
            "resize": true
        },
        "modes": {
            "grab": {
                "distance": 400,
                "line_linked": {
                    "opacity": 1
                }
            },
            "bubble": {
                "distance": 400,
                "size": 40,
                "duration": 2,
                "opacity": 8,
                "speed": 3
            },
            "repulse": {
                "distance": 200
            },
            "push": {
                "particles_nb": 4
            },
            "remove": {
                "particles_nb": 2
            }

        }
    }
});

//   ------------- numbers counter -----------------//
    var options = {
        root: null, // Use the viewport as the root
        rootMargin: '0px',
        threshold: 0.5, // Trigger when 50% of the element is visible
    };
    // Function to handle the intersection
    function handleIntersection(entries, observer) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                // Start the counter animation when the element is visible
                startCounterAnimation(entry.target);
                observer.unobserve(entry.target); // Stop observing once triggered
            }
        });
    }
    // Create an Intersection Observer instance
    var observer = new IntersectionObserver(handleIntersection, options);
    // Target each .stat-number element
    $('.counter').each(function () {
        // Observe each .stat-number element
        observer.observe(this);
    });
    // Function to start the counter animation
    function startCounterAnimation(element) {
        var size = $(element).text().split(".")[1] ? $(element).text().split(".")[1].length : 0;
        $(element).prop('Counter', 0).animate({
            Counter: $(element).text()
        }, {
            duration: 5000,
            step: function (func) {
                $(element).text(parseFloat(func).toFixed(size));
            }
        });
    };

});
$(document).ready(function() {
    var isRTL = $('html').attr('dir') === 'rtl';

    $('#ReviewsCarousel').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows: false,
        rtl: isRTL,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});
