/*Global variables*/

function isMobileDeviceUsed() {
    var isMobile = false;
    // device detection
    if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) isMobile = true;
    return isMobile;
}

function popularSlider() {
    var swiper = new Swiper('.popular-slider', {
        slidesPerView: 4,
        slidesPerColumn: 2,
        slidesPerColumnFill: 'row',
        spaceBetween: 30,
        navigation: {
            nextEl: '.popular-slider-next',
            prevEl: '.popular-slider-prev',
        },
        breakpoints: {
            991: {
                slidesPerView: 3,
            },
            767: {
                slidesPerView: 2,
            },
            450: {
                slidesPerView: 1,
            }
        }
    });
}

function proposalTimer() {
    jQuery('#future_date_single').countdowntimer({
        dateAndTime: jQuery('#future_date_single').attr('data-future-date'),
        labelsFormat: true,
        displayFormat: 'DHMS',
        size: 'lg'
    });
}

function reviewsSlider() {
    var swiper = new Swiper('.reviews-slider', {
        slidesPerView: 1,
        pagination: {
            el: '.reviews-pagination',
            clickable: true,
        },
    });
}

function instagramSlider() {
    var swiper = new Swiper('.instagram-gallery', {
        slidesOffsetBefore: -140,
        slidesPerView: 7,
        spaceBetween: 10,
        loop: true,
        autoplay: {
            delay: 2000,
        },
        breakpoints: {
            991: {
                slidesPerView: 5,
                slidesOffsetBefore: -95
            },
            767: {
                slidesPerView: 4,
                slidesOffsetBefore: -92
            },
            575: {
                slidesPerView: 3,
                slidesOffsetBefore: -92
            }
        }
    });
}

function toggleMenu() {
    var tbtn = jQuery('.menu-toggle');
    var tmenu = jQuery('.menu-wrap');
    tbtn.click(function () {
        jQuery(this).toggleClass("on");
        tmenu.toggleClass("on");
    });
}

function productSlider() {
    var galleryThumbs = new Swiper('.product-card-slider-thumbs', {
        spaceBetween: 30,
        slidesPerView: 3,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        navigation: {
            nextEl: '.next-gallery-thumbs-slider',
            prevEl: '.prev-gallery-thumbs-slider'
        },
    });
    var galleryTop = new Swiper('.product-card-slider-main', {
        spaceBetween: 20,
        thumbs: {
            swiper: galleryThumbs
        }
    });
}

function productSliderGallery() {
    jQuery('.product-card-slider-main').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function (item) {
                return item.el.attr('title');
            }
        },
        zoom: {
            enabled: true,
            duration: 300, // don't foget to change the duration also in CSS
            opener: function (element) {
                return element.find('img');
            }
        }
    });
}







function modalForm() {
    jQuery('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
    });
}


function initEvents() {

    /*Actions on 'DOM ready' event*/
    jQuery(function () {
        popularSlider();
        proposalTimer();
        reviewsSlider();
        instagramSlider();
        toggleMenu();
        productSlider();
        productSliderGallery();
    });

    jQuery(document).mouseup(function (e) {

        if (isMobileDeviceUsed()) {
        }
    });

    jQuery(window).resize(function () {
    });

    /*Actions on 'Window load' event*/
    jQuery(window).on("load", function () {

    });
}

/*Start all functions and actions*/
initEvents();
