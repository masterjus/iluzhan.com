var sticky = $(".menu").offset().top;
var is_navbar_fixed = false;

function showPage() {
    $(".preload").fadeOut(200, function() {});
}

function lzld(elem) {
    var dataSrc = elem.getAttribute('data-src');
    if (!dataSrc) {
        return;
    }
    elem.setAttribute('src', dataSrc);
    elem.onload = function() {
        elem.removeAttribute('data-src');
    };
}

$(window).scroll(function() {
    if(document.documentElement.clientWidth >= 1200) {
        if (window.pageYOffset >= sticky && !is_navbar_fixed) {
            $(".menu").addClass("menu-fixed-top");
            is_navbar_fixed = true;
        }
        if(window.pageYOffset < sticky && is_navbar_fixed) {
            $(".menu").removeClass("menu-fixed-top");
            is_navbar_fixed = false;
        }
        if (window.pageYOffset >= (sticky - 80)) {
            $("#lang").addClass("dropdown");
            $("#lang").removeClass("dropup");
        } else {
            $("#lang").addClass("dropup");
            $("#lang").removeClass("dropdown");
        }
    }
});

$('document').ready(function(){
    if(document.documentElement.clientWidth < 1200) {
        var wss1 = $('#audio');
        var wss2 = $('#events');
        var wss3 = $('#rider');

        wss1.waypoint({
            handler: function(direction){
                if(direction == 'up') {
                    $(".menu-btn").removeClass("dark");
                } else {
                    $(".menu-btn").addClass("dark");
                }
            },
            offset: '26px'
        });
        wss2.waypoint({
            handler: function(direction){
                if(direction == 'up') {
                    $(".menu-btn").addClass("dark");
                } else {
                    $(".menu-btn").removeClass("dark");
                }
            },
            offset: '26px'
        });
        wss3.waypoint({
            handler: function(direction){
                if(direction == 'up') {
                    $(".menu-btn").removeClass("dark");
                } else {
                    $(".menu-btn").addClass("dark");
                }
            },
            offset: '26px'
        });
    }
});

$(function() {
    $('a.page-scroll').bind('click', function(e) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1000, 'easeInOutCubic');
        e.preventDefault();
        e.stopPropagation();
    });
});


$(document).ready(function(){

    $('.slick-musicians').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 7,
        centerMode: false,
        appendArrows: $('.about-section .slick-arrows'),
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 6,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 690,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 518,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 356,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ],
        variableWidth: true
    });

    $('.slick-albums').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        centerMode: false,
        appendArrows: $('.audio-section .slick-arrows'),
        responsive: [
            {
                breakpoint: 1900,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1300,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 610,
                settings: {
                    slidesToShow: 1,
                    infinite: true,
                    slidesToScroll: 1,
                    centerMode: true
                }
            }
        ],
        variableWidth: true
    });
    if(document.documentElement.clientWidth < 610) {
        $('#album-0').addClass('focused');
        $('.slick-albums').on('beforeChange', function(event, slick, currentSlide, nextSlide){
            $('#album-'+nextSlide).addClass('focused');
            $('#album-'+currentSlide).removeClass('focused');
        });
    }

    $('.slick-photo').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: false,
        appendArrows: $('.photo-section .slick-arrows'),
        responsive: [
            {
                breakpoint: 1650,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ],
        variableWidth: true
    });

    $('.slick-video').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        centerMode: false,
        appendArrows: $('.video-section .slick-arrows'),
        responsive: [
            {
                breakpoint: 1900,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1500,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ],
        variableWidth: true
    });

    $('.slick').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 7,
        centerMode: false,
        variableWidth: true
    });

    $('.album-modal-slick').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    appendArrows: $('.album-slick-btns')
                }
            }
        ]
    });
    $('.album-modal-slick').on('afterChange', function(event, slick, currentSlide){
        var slug = $('#album-'+currentSlide).attr('data-slug');
        slug = slug == '' ? '' : '-'+slug;
        window.location.hash = '#album-'+currentSlide+slug;
        if(document.documentElement.clientWidth > 768) {
            $(document).find('#albumf-'+currentSlide).attr('tabindex', 0).focus();
        }
    });
    $('.photo-modal-slick').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        lazyLoad: 'progressive',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    appendArrows: $('.photo-slick-btns')
                }
            }
        ]
    });
    $('.photo-modal-slick').on('afterChange', function(event, slick, currentSlide){
        window.location.hash = '#gallery-'+currentSlide;
    });

    var modal_id = location.href.split('#');
    modal_id = (modal_id.length > 1) ? modal_id[1] : '';
    var modal_to_open = modal_id.split('-');
    switch (modal_to_open[0]) {
        case 'gallery': openPhotoGallery(modal_to_open[1]); break;
        case 'album': openAlbumModal(modal_to_open[1]); break;
    }

});

function openAlbumToListen(id) {
    var btn = $('#listen-btn-'+id);
    btn.prop('disabled', true);
    var temp = btn.html();
    btn.html('<span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span>');
    $('.soundcloud_iframe').html($('#soundcloud-'+id).html());
    var tag = $("#listen");
    setTimeout(function () {
        closeModal();
        btn.html(temp);
        $('html body').animate({scrollTop: tag.offset().top},'fast');
        btn.prop('disabled', false);
    }, 1000);
}

function showMenu() {
    $('.modal').modal('hide');
    $('#mobileMenu').modal('show');
}
function closeModal() {
    $('.modal').modal('hide');
    history.pushState('', document.title, window.location.pathname);
    window.location.hash = '';
}
function openAlbumModal(slide_num) {
    $('#albumCarousel').modal({backdrop: false});
    $('#albumCarousel .slide').hide();
    $('.album-modal-slick').slick('slickGoTo', slide_num);
    setTimeout(function() {
        $('#albumCarousel .slide').show();
        if(document.documentElement.clientWidth > 768) {
            $(document).find('#albumf-'+slide_num).attr('tabindex', 0).focus();
        }
    }, 700);
}
function openPhotoGallery(slide_num) {
    $('#photosCarousel').modal({backdrop: false});
    $('#photosCarousel .slide-content').hide();
    $('.photo-modal-slick').slick('slickGoTo', slide_num);
    setTimeout(function() {
        $('#photosCarousel .slide-content').show();
        $(document).find('#photo-'+slide_num).attr('tabindex', 0).focus();
    }, 400);
}

