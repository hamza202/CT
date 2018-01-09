"use strict"; // Start of use strict

/*************************
 Contect open
 *************************/
var menu       = $(".contact-content"),
    toggle     = $(".contact-toggle"),
    toggleIcon = $(".contact-toggle span");
function toggleThatNav() {
    if (menu.hasClass("show-contact")) {
        if (!Modernizr.csstransforms) {
            menu.removeClass("show-contact");
            toggle.removeClass("show-contact");
            menu.animate({
                right: "-=300"
            }, 500);
            toggle.animate({
                right: "-=300"
            }, 500);
        } else {
            menu.removeClass("show-contact");
            toggle.removeClass("show-contact");
        }
    } else {
        if (!Modernizr.csstransforms) {
            menu.addClass("show-contact");
            toggle.addClass("show-contact");
            menu.css("right", "0px");
            toggle.css("right", "330px");
        } else {
            menu.addClass("show-contact");
            toggle.addClass("show-contact");
        }
    }
}
function changeToggleClass() {
    toggleIcon.toggleClass("ti-close");
    toggleIcon.toggleClass("ti-comments");
}
toggle.on("click", function(e) {
    toggleThatNav();
    changeToggleClass();
    return false;
});
// Keyboard Esc event support
$(document).keyup(function(e) {
    if (e.keyCode == 27) {
        if (menu.hasClass("show-contact")) {
            if (!Modernizr.csstransforms) {
                menu.removeClass("show-contact");
                toggle.removeClass("show-contact");
                menu.css("right", "-300px");
                toggle.css("right", "30px");
                changeToggleClass();
            } else {
                menu.removeClass("show-contact");
                toggle.removeClass("show-contact");
                changeToggleClass();
            }
        }
    }
});

/*************************
 End Contect open
 *************************/

jQuery(document).ready(function ($) {
    jQuery('.stellarnav').stellarNav({
        theme: 'light'
    });
});
$(window).bind('scroll', function () {
    if ($(window).scrollTop() > 200) {
        $('.min-header').addClass('min-fixed');
    } else {
        $('.min-header').removeClass('min-fixed');
    }
});
function bootstrapAnimatedLayer() {

    /* Demo Scripts for Bootstrap Carousel and Animate.css article
     * on SitePoint by Maria Antonietta Perna
     */

    //Function to animate slider captions
    function doAnimations(elems) {
        //Cache the animationend event in a variable
        var animEndEv = 'webkitAnimationEnd animationend';

        elems.each(function() {
            var $this = $(this),
                $animationType = $this.data('animation');
            $this.addClass($animationType).one(animEndEv, function() {
                $this.removeClass($animationType);
            });
        });
    }

    //Variables on page load
    var $myCarousel = $('#minimal-bootstrap-carousel'),
        $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

    //Initialize carousel
    $myCarousel.carousel({
        interval: 7000
    });

    //Animate captions in first slide on page load
    doAnimations($firstAnimatingElems);

    //Pause carousel
    $myCarousel.carousel('pause');


    //Other slides to be animated on carousel slide event
    $myCarousel.on('slide.bs.carousel', function(e) {
        var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
        doAnimations($animatingElems);
    });
}
function projectCarousel() {
    if ($('.project-carousel').length) {
        $('.project-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            autoWidth: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            navText: [
                '<i class="fa fa-angle-left"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    autoWidth: false
                },
                480: {
                    items: 1,
                    autoWidth: false
                },
                600: {
                    items: 1,
                    autoWidth: false
                },
                1000: {
                    items: 1,
                    autoWidth: false
                }
            }
        });
    };
}

function clientCarousel() {
    if ($('.client-carousel').length) {
        $('.client-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            autoWidth: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    autoWidth: false
                },
                480: {
                    items: 2,
                    autoWidth: false
                },
                600: {
                    items: 3,
                    autoWidth: false
                },
                1000: {
                    items: 6,
                    autoWidth: false
                }
            }
        });
    };
}
function clientCarousel2() {
    if ($('.client-carousel2').length) {
        $('.client-carousel2').owlCarousel({
            loop: false,
            margin: 30,
            nav: false,
            dots: false,
            autoWidth: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1,
                    autoWidth: false
                },
                480: {
                    items: 2,
                    autoWidth: false
                },
                600: {
                    items: 3,
                    autoWidth: false
                },
                1000: {
                    items: 6,
                    autoWidth: false
                }
            }
        });
    };
}
function teamCarousel() {
    if ($('.team-carousel').length) {
        $('.team-carousel').owlCarousel({
            loop: false,
            margin: 30,
            nav: true,
            dots: false,
            autoWidth: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: false,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    autoWidth: false
                },
                480: {
                    items: 2,
                    autoWidth: false
                },
                600: {
                    items: 3,
                    autoWidth: false
                },
                1000: {
                    items: 3,
                    autoWidth: false
                }
            }
        });
    };
}
function causesCarousel() {
    if ($('.causes-carousel').length) {
        $('.causes-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            autoWidth: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    autoWidth: false
                },
                480: {
                    items: 2,
                    autoWidth: false
                },
                600: {
                    items: 3,
                    autoWidth: false
                },
                1000: {
                    items: 4,
                    autoWidth: false
                }
            }
        });
    };
}
function thmProjectFilter() {
    if ($('.mixit-gallery').length) {
        $('.mixit-gallery').mixItUp();
    };
}

function thmBarChart() {
    if ($('#thm-bar-chart').length) {
        var ctx = $("#thm-bar-chart");
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "Company dataset",
                    backgroundColor: "rgba(248,248,248,0.8)",
                    borderColor: "rgba(218,218,218,1)",
                    borderWidth: 1,
                    hoverBackgroundColor: "rgba(59,65,94,0.5)",
                    hoverBorderColor: "rgba(218,218,218,1)",
                    data: [55, 65, 90, 85, 75, 95, 98],
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    };
}

function doughnutChartBox() {
    if ($('#doughnut-chartBox').length) {
        var ctx = $("#doughnut-chartBox");
        var myDoughnutChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [
                    "65%",
                    "13%",
                    "22%"
                ],
                datasets: [{
                    data: [300, 50, 100],
                    backgroundColor: [
                        "#CEC2AB",
                        "#8D6DC4",
                        "#F79468"
                    ],
                    hoverBackgroundColor: [
                        "#3B415E",
                        "#3B415E",
                        "#3B415E"
                    ],
                    hoverBorderColor: [
                        "#fff",
                        "#fff",
                        "#fff"
                    ]
                }]
            },
            option: {
                position: "left",
                responsive: true,
            }
        });
    };
}

function testiCarousel() {
    if ($('.testi-carousel').length) {
        $('.testi-carousel').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            dots: true,
            autoWidth: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    autoWidth: false
                },
                480: {
                    items: 1,
                    autoWidth: false
                },
                600: {
                    items: 1,
                    autoWidth: false
                },
                1000: {
                    items: 1,
                    autoWidth: false
                }
            }
        });
    };
}

function maineNavToggle() {
    if ($('#main-navigation-wrapper .navbar-nav li .dropdown-submenu').length) {
        $('#main-navigation-wrapper .navbar-nav li .dropdown-submenu').parent('li').children('a').append(function() {
            return '<button class="dopdown-nav-toggler"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>';
        });
        $('#main-navigation-wrapper .navbar-nav .dopdown-nav-toggler').on('click', function() {
            var Self = $(this);
			if(Self.hasClass("dopdown-nav-toggler-active"))
			{
				Self.removeClass("dopdown-nav-toggler-active");
			}
			else
			{
				Self.addClass("dopdown-nav-toggler-active");
			}
			if(Self.parent().parent("li.dropdown").hasClass("dropdown-active"))
			{
				Self.parent().parent("li.dropdown").removeClass("dropdown-active");
			}
			else
			{
				Self.parent().parent("li.dropdown").addClass("dropdown-active");
			}
            Self.parent().parent().children('.dropdown-submenu').slideToggle();
			if((Self.parent().parent().children('.dropdown-submenu')).hasClass("dropdown-submenu-active"))
			{
				Self.parent().parent().children('.dropdown-submenu').removeClass("dropdown-submenu-active");
			}
			else
			{
				Self.parent().parent().children('.dropdown-submenu').addClass("dropdown-submenu-active");
			}
            return false;
        });

    };
}

function thmCounter() {
    if ($('.counter').length) {
        $('.counter').counterUp({
            delay: 10,
            time: 3000
        });
    };
}
function scrollMenu()
{
	if ($('.finance-navbar').length > 0)
	{
		$(window).on('scroll', function(){
		var $topG = $('.finance-navbar').offset().top;
		if ( $(window).scrollTop() > $topG + 66 ) {
			$('.finance-navbar').addClass('affix-coming')
		}
		else {
			$('.finance-navbar').removeClass('affix-coming')
		}
		$('.finance-navbar').affix({
					offset: {
						top: $topG + 150
					}
				})
	})
	}
}
function scrollMenu2()
{
    if ($('.finance-navbar2').length > 0)
    {
        $(window).on('scroll', function(){
        var $topG = $('#main-navigation-wrapper').offset().top;
        if ( $(window).scrollTop() > $topG + 66 ) {
            $('.finance-navbar2').addClass('affix-coming2');
        }
        else {
            $('.finance-navbar2').removeClass('affix-coming2');
        }
		$('.finance-navbar2').affix({
			offset: {
				top: $topG + 15
			}

		})

    })
    }
}
function scrollMenu3()
{
	if ($('.finance-navbar3').length > 0)
	{
		$(window).on('scroll', function(){
		var $topG = $('.finance-navbar3').offset().top;
		if ( $(window).scrollTop() > $topG + 66 ) {
			$('.finance-navbar3').addClass('affix-coming')
		}
		else {
			$('.finance-navbar3').removeClass('affix-coming')
		}
		$('.finance-navbar3').affix({
					offset: {
						top: $topG + 150
					}
				})
	})
	}
}
function scrollMenu4()
{
    if ($('.finance-navbar4').length > 0)
    {
        $(window).on('scroll', function(){
        var $topG = $('.finance-navbar4').offset().top;
        if ( $(window).scrollTop() > $topG + 66 ) {
            $('.finance-navbar4').addClass('affix-coming')
        }
        else {
            $('.finance-navbar4').removeClass('affix-coming')
        }
        $('.finance-navbar4').affix({
                    offset: {
                        top: $topG + 150
                    }
                })
    })
    }
}

// instance of fuction while Document ready event
jQuery(document).on('ready', function() {
    (function($) {
        bootstrapAnimatedLayer();
        clientCarousel();
        thmProjectFilter();
        thmBarChart();
        doughnutChartBox();
        testiCarousel();
        maineNavToggle();
        thmCounter();
		scrollMenu();
        scrollMenu2();
        clientCarousel2();
        teamCarousel();
		scrollMenu3();
        scrollMenu4();
        causesCarousel();
        projectCarousel();
		$("li#search").click(function(e){
			if($("#main-navigation-wrapper").hasClass("active"))
			{
				$("#main-navigation-wrapper").removeClass("active");
			}
			else
			{
				$("#main-navigation-wrapper").addClass("active");
			}
		})
    })(jQuery);
});


$(function(){

    var url = window.location.pathname,
        urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
    // now grab every link from the navigation
    $('.single-service-list-widget ul li a').each(function(){
        // and test its normalized href against the url pathname regexp
        if(urlRegExp.test(this.href.replace(/\/$/,''))){
            $(this).addClass('active');
        }
    });

});


jQuery(document).ready(function(){

    "use strict";

    $(".popup-client > span").on("click", function(){
        $(".account-popup-sec").addClass("active");
        $("html").addClass("no-scroll");
    });

    $(".close-popup").on("click", function(){
        $(".account-popup-sec").removeClass("active");
        $("html").removeClass("no-scroll");
    });

    $('.menu-toggle').on("click", function(){
        $(".menu nav").slideToggle();
    });

    // Get Header Height //
    var stick = $(".simple-header.for-sticky").height();
    $(".simple-header.for-sticky").parent().css({
        "padding-top": stick
    });


    if($(window).width() <= 1200){
        $("header").on("click",function(e){
            e.stopPropagation();
        });
        $(".menu-item-has-children > a").on("click",function(){
            $(this).parent().siblings().children("ul").slideUp();
            $(this).parent().siblings().removeClass("active");
            $(this).parent().children("ul").slideToggle();
            $(this).parent().toggleClass("active");
            return false;
        });
    }


    /*** FIXED Menu APPEARS ON SCROLL DOWN ***/
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 50) {
            $(".for-sticky").addClass("sticky");
        }
        else{
            $(".for-sticky").removeClass("sticky");
            $("for-sticky").addClass("");
        }
    });


    /*=================== Parallax ===================*/

});