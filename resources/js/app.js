require('./bootstrap');

import Swiper from 'swiper/dist/js/swiper.min.js';
import 'swiper/dist/css/swiper.min.css';
import 'foundation-sites';
import 'jquery-ui/ui/widgets/datepicker.js';
import 'jquery-ui/themes/base/all.css';

require('ion-rangeslider');
require('ion-rangeslider/css/ion.rangeSlider.css');
require('responsive-tabs');
require('@fancyapps/fancybox/dist/jquery.fancybox.css');
require('@fancyapps/fancybox');

$.fancybox.defaults.hash = false;
$.fancybox.defaults.touch = true;
$.fancybox.defaults.loop = true;

/*
* APP
*/

const App = {
    megaMenu () {
        const header = $("header");
        const megamenuHide = () => {
            header.removeClass('menuActive');
            $(document).find("header .act").removeClass('act');
        }

        $(document).on('click', '.megaMenuClose', () => {
            megamenuHide();
        })

        $(document).on("click", "header nav > ul > li > a", (e) => {
            e.preventDefault();
            e.stopPropagation();
            if( $(e.target).hasClass('act') ) {
                megamenuHide();
                return false;
            }

            megamenuHide();

            setTimeout( ()=>{
                let target = $(e.target);
                if(target.parent().find('.megaMenu').length){
                    target.addClass("act");
                    target.parent().addClass("act");
                    header.addClass('menuActive');
                    // disableScroll();
                } else{
                    window.location.href = target.attr('href');
                }
            },1);
        });

        $(document).on('mouseleave', 'header', () => {
            const _ = this;
            if( window.matchMedia("(max-width:1025px)").matches ) {
                return false
            }

            if (_.megamenuTimeout) {
                clearTimeout(_.megamenuTimeout)
            }
            _.megamenuTimeout = setTimeout( ()=> {
                megamenuHide();
            }, 500)
        })

        $(document).on('mouseenter', 'header', () => {
            const _ = this;

            if (_.megamenuTimeout) {
                clearTimeout(_.megamenuTimeout)
            }
        })



        $(document).on("keyup", (e) => {
            if (e.keyCode === 27) {
                megamenuHide();
            }
        });



        $(document).on('click', '.megamenuClose', () => {
            megamenuHide();
        })

        $(document).on('click', '.gotocart', (e) => {
            $(document).find('.cartWrapper > a').trigger('click');
        })

    },
    swiperSlider(){
        if ($(".home-slider").length) {
            new Swiper('.home-slider', {
                effect: 'fade',
                loop: false,
                preloadImages: true,
                updateOnImagesReady: true,
                autoHeight: true,
                lazy: {
                    loadPrevNext: true,
                    loadPrevNextAmount: 1,
                    loadOnTransitionStart: false,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                autoplay: {
                    delay: 6000,
                },
                on: {
                    init: function () {
                        $('.home-slider .swiper-slide-active').find('.swiper-head, .swiper-desc , .swiper-btn, .swiper-content-right').addClass('active')
                    },
                    slideChange: function () {
                        $('.home-slider .swiper-slide div, .home-slider .swiper-slide a').removeClass('active')
                    },
                    slideChangeTransitionEnd: function () {
                        $('.home-slider .swiper-slide-active').find('.swiper-head, .swiper-desc , .swiper-btn, .swiper-content-right').addClass('active')
                    }
                }
            })
        }
    },
    stepperSwiper(){
        var stepperSwiperS = $(".stepper-slider .swiper-container");
        if (stepperSwiperS.length) {
            var numbers = $('.stepper-slider .swiper-pagination').attr('data-pagination').split(',');
            new Swiper('.stepper-slider .swiper-container', {
                effect: 'fade',
                touchRatio: 1,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    renderBullet: function (index, className) {
                        return '<span class="' + className + '">' + (numbers[index]) + '</span>';
                    },
                },
                autoplay: {
                    delay: 6000,
                },
                on: {
                    init: function () {
                        $('.load-more').fadeOut()
                        $('.stepper-slider .swiper-slide-active').find('.swiper-head, .swiper-desc , .swiper-btn, .swiper-content-right').addClass('active')
                    },
                    slideChange: function () {
                        $('.stepper-slider .swiper-slide div, .stepper-slider .swiper-slide a').removeClass('active')
                    },
                    slideChangeTransitionEnd: function () {
                        $('.stepper-slider .swiper-slide-active').find('.swiper-head, .swiper-desc , .swiper-btn, .swiper-content-right').addClass('active')
                    }
                }
            })
        }
    },
    productsSwiper(){
        var productsSwiperS = $(".products-slider-content");
        if (productsSwiperS.length) {
            new Swiper(productsSwiperS, {
                slidesPerView: 3,
                // slidesPerGroup: 3,
                touchRatio: 1,
                autoHeight: false,
                spaceBetween: 95,
                autoplay: {
                    delay: 6000,
                },
                // pagination: {
                //     el: '.swiper-pagination',
                //     dynamicBullets: true,
                // },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                on: {
                    init: function() {
                        productsSwiperS.css('opacity', 1)
                    }
                },
                breakpoints: {
                    1200: {
                        spaceBetween: 20
                    },
                    1024: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
                    680: {
                        slidesPerView: 1,
                        spaceBetween: 10
                    },
                }
            })
        }
    },
    moreProductsSlider(){
        var productsSwiperS = $(".more-products .swiper-container");
        if (productsSwiperS.length) {
            new Swiper(productsSwiperS, {
                slidesPerView: 4,
                autoHeight: true,
                touchRatio: 1,
                // slidesPerGroup: 3,
                autoplay: {
                    delay: 6000,
                },
                pagination: {
                    el: '.swiper-pagination',
                    dynamicBullets: true,
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                on: {
                    init: function() {
                        productsSwiperS.css('opacity', 1)
                    }
                },
                breakpoints: {
                    1200: {
                        slidesPerView: 3
                    },
                    1024: {
                        slidesPerView: 2
                    },
                    680: {
                        slidesPerView: 1,
                        autoHeight: true,
                    },
                }
            })
        }
    },
    previewProductSlider(){
        var previewProductS = $(".previewSlider .swiper-container");
        if (previewProductS.length) {
            new Swiper(previewProductS, {
                autoHeight: true,
                autoplay: {
                    delay: 6000,
                },
                on: {
                    init: function() {
                        previewProductS.css('opacity', 1)
                    }
                }
            })
        }
    },
    scrollTo (element, scrollTo) {
        var $el = $(element);
        $el.click(function (event) {
            $('html,body').animate({
                scrollTop: $(scrollTo).offset().top
            }, 1000);
            event.preventDefault();
        });
    },
    initialize () {
        $('.fancybox').fancybox({
            padding: 0,
            loop : false
        });
        $(document).foundation();

        $("#search-form input").keypress(function(e) {
            if (e.which == 13) {
                $('#search-form').submit();
            }
        });
        $(".search-bar .search-trigger").click(function () {
            setTimeout(function () {
                $("#search-form input").select();
            }, 350)
        })

        $(document).on('click', '.closeAllPopups, .closeFancy', ()=>{
            $.fancybox.close();
        })

        $('header, .jumbotron').removeClass('hidden');
    },
    RWDMenu() {
        $('.menuTrigger').on('click', function(){
            $(this).toggleClass('is-active');
            $('header').toggleClass('is-active');
            $('body').toggleClass('is-active');
            $('.search-bar').removeClass('act')
        });

        $('.mobileTriggerMenu .button').on('click', function(){
            $('.client-view .wrapper > .login-form').toggleClass('act')
        })
    },
    searchForm() {
        $('.trigger-form-search').on('click', function(e){
            e.preventDefault();
            if ($('.search-bar--header').length) {
                $('.search-bar--header').stop(true, true).slideToggle("200");
                $('.search-bar input').focus();
            } else {
                let scTop = $('.search-bar').offset().top - $('.header__top-bar').outerHeight();
                $('html, body').animate({
                    scrollTop: scTop
                }, 600)
                setTimeout(function(){
                    $('.search-bar input').focus();
                }, 650);
            }
        });
    },
    bnp () {
        $(document).on('click', '.bbp', () =>{
            $('body').append("<div class='load-more abs bg fixed'></div>")
        })
    },
    footerFixed(){
        var fh = $('footer').outerHeight()
        $('#full-container').css('margin-bottom', fh)
    },
    accountAnchorClick: function () {
        $('.accountAnchor').on('click', (e) => {
            e.stopPropagation();
            $(e.currentTarget).toggleClass('open');
            $('body').on('click', () => {
                if ($('.accountAnchor').hasClass('open')) {
                    $('.accountAnchor').removeClass('open');
                    $('body').unbind('click');
                }
            });
        });
    },
    setHeaderHelperHeight() {
        if (window.matchMedia("(min-width: 1024px)").matches) {
            setTimeout(function(){
                let headerHeight = $('.header .header__top-bar').outerHeight();
                $('.header--helper-height').height(headerHeight);
            }, 230)
        }
    },
    stickyHeader() {
        let headerHeight = $('header').outerHeight();
        App.setHeaderHelperHeight();
        function headerAnimation() {
            if ($(window).scrollTop() > 50) {
                $('header').addClass('sticky');
            } else {
                $('header').removeClass('sticky');
            }
        }

        $(window).scroll(function () {
            headerAnimation();
        });
        headerAnimation();
    },
    urlHashScroll: function() {
        if (window.location.hash) {
            let hash = window.location.hash;

            if ($( hash).length) {
                let scrollTop = $(hash).offset().top;
                $('html, body').animate({
                    scrollTop: scrollTop + "px"
                }, 700);
            }
        }
    },
    clearSearchResponse() {
        var input = $('.autocomplete-input');
        var responseContent = input.closest('form').find('.response-autocomplete');
        responseContent.addClass('hidden');
        responseContent.html('');
    },
    updateSearchFormAction(value) {
        let url = $('.input-helper--category select').val();
        $('.input-helper--category select').closest('form').attr('action', url);
    },
    searchbarHeader() {
        let self = this;
        $('.input-helper--category select').on('change', function(){
            self.updateSearchFormAction();
        });
        $('.input-helper--category select').on('focus change', function(){
            self.clearSearchResponse();
        });
        $('.input-helper--product input').on('focus', function(){
            let $this = $(this);
            $('.header__nav__list__item__link').siblings('ul').removeClass('active');
            if ($this.val().length > 0) {
                $this.keyup();
            }
        });
    },
    myForm() {
        $('.product-settings').submit(function (e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            e.preventDefault();

            $.ajax({
                type: 'get',
                url: '/product/list',
                dataType: "html",
                contentType: 'multipart/form-data',
                data: {
                    sort: $('#sort').val(),
                    limit: $('#limit').val(),
                    priceRange: $('#priceRange').val(),
                    slug: $('#product-url').val(),
                    author: $("input[name='author']").serialize(),
                    publishing: $("input[name='publishing']").serialize(),
                    dateRange: $('#dateRange').val(),
                    phrase: $('#phrase').val()
                },
                cache: false,

                success: function(data) {
                    window.location.href = data;
                }
            });

            return false;
        });
    },
    sorting() {
        $('#limit').change(function() {
            $('.product-settings').submit();
        });
        $('#sort').change(function() {
            $('.product-settings').submit();
        });
        $('#filtr').on('click', function() {
            $('.product-settings').submit();
        });
        $('#close-filter').on('click', function() {
            $('.product-settings').submit();
        });
    },
    priceFilter() {
        const min = $('#priceMin').val();
        const max = $('#priceMax').val();
        const range = (''+$('#priceRange').val()).split(';');
        const from = range[0];
        const to = range[1];

        $('#priceRange').ionRangeSlider({
            skin: "flat",
            type: "double",
            grid: true,
            min: min,
            max: max,
            from: from,
            to: to,
            step: 0.01,
            postfix: "zł",
        })
    },
    dateFilter() {
        const min = $('#dateMin').val();
        const max = $('#dateMax').val();
        const range = (''+$('#dateRange').val()).split(';');
        const from = range[0];
        const to = range[1];

        $('#dateRange').ionRangeSlider({
            skin: "flat",
            type: "int",
            grid: true,
            min: min,
            max: max,
            from: from,
            to: to,
            step: 1,
            prettify_enabled: false
        })
    },
    showFiltersMobile(){
        const $toggler = $('#showFilters,#close-filter')
        $toggler.click(function () {
            $('html, body').toggleClass('show-filter');
            $('#filtr').toggle();
        });
    },
    windowDataLocation(){
        $(document).on('click', '.data-href', function() {
            window.location.href = $(this).attr('data-href');
        })
    },
    tabs() {
        const $el = $('.tabs-container');
        if (!$el.find('li').length || !$el.length || $el.find('div[id=""]').length) {
            return false;
        } else{
            $el.each(function () {
                $('#tab-respon').responsiveTabs({
                    startCollapsed: 'accordion',
                    animation: 'fade',
                    animationQueue: true,
                    duration:100,
                    load: function (e){
                        $('.product-tabs').removeClass('hidden');
                    },
                    activate: function (e) {
                        $('.product-tabs').removeClass('hidden');
                    }
                });
            })
        }
    },
    addToCart() {
        $('#addToCartForm').submit(function (e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            e.preventDefault();

            $.ajax({
                type: 'post',
                url: '/product/addToCart',
                data: {
                    final_price: $('#final-price').html(),
                    id_product: $('.id_product').val(),
                    id_item: $('#details-item').val(),
                    date_start: $('#date_start').val(),
                    date_end: $('#date_end').val()
                },
                cache: false,

                success: function(data) {
                    if (data.errors)
                    {
                        if (data.errors.date_start)
                        {
                            $('#error_start').parent().css('display', 'block');
                            $('#error_start').html(data.errors.date_start[0]);
                        }

                        if (data.errors.date_end)
                        {
                            $('#error_end').parent().css('display', 'block');
                            $('#error_end').html(data.errors.date_end[0]);
                        }

                        if (data.errors == "reservation")
                        {
                            $('#error_start').parent().css('display', 'block');
                            $('#error_start').html("Podaj poprawną datę");
                            $('#error_end').parent().css('display', 'block');
                            $('#error_end').html("Podaj poprawną datę");
                        }
                    }
                    else
                    {
                        $('#error_start').parent().css('display', 'none');
                        $('#error_end').parent().css('display', 'none');
                        var value = parseInt($('.badge').html()) + 1;
                        $('#hour-popup').html(data.time)
                        $('.badge').html(value);
                        App.showCartPopup();
                    }
                }
            });

            return false;
        });
    },
    showCartPopup() {
        $.fancybox.open($('#productSummaryPopup'));
        $('.fancybox-button--close').hide();
    },
    productItem() {
        $('#details-item').change(function() {
            $('#date_start').val('');
            $('#date_end').val('');
            $('#date_end').prop('disabled', true);

            $('#changeItem').submit(function (e) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                e.preventDefault();

                $.ajax({
                    type: 'post',
                    url: '/product/item',
                    data: {
                        item: $('#details-item').val(),
                        link: $('#link-site').val()
                    },
                    cache: false,

                    success: function(data) {
                        window.location.href = data;
                    }
                });

                return false;
            });

            $('#changeItem').submit();
        });

        $('#date_start').change(function() {
            $('#date_end').prop('disabled', false);
            App.productDateEnd();
        });

        $('#date_end').change(function() {
            var price = $('#current-price span').html();
            var value = $('#date_start').val().split("-");
            var date_start = value[2] + ',' + value[1] + ',' + value[0];
            date_start = new Date(date_start);
            value = $('#date_end').val().split("-");
            var date_end = value[2] + ',' + value[1] + ',' + value[0];
            date_end = new Date(date_end);
            var diff = Math.floor((Date.UTC(date_end.getFullYear(), date_end.getMonth(), date_end.getDate()) - Date.UTC(date_start.getFullYear(), date_start.getMonth(), date_start.getDate()) ) /(1000 * 60 * 60 * 24)) + 1;
            var cost = Math.ceil(diff/7) * price;
            $('#final-price').html(cost.toFixed(2));
            $('#cost-popup').html(cost.toFixed(2));
        });

        $('#date_start').datepicker({
            firstDay: 1,
            minDate: new Date(),
            dateFormat: 'dd-mm-yy',
            constrainInput: true,
            beforeShowDay: App.productDateStart
        });

        $('#login_cart').click(function() {
            window.location.replace('/login');
        });
    },
    productDateStart(date){
        var days = $('#disabledDays').val().split('"');
        var disabledDays = [];

        for (var i=3; i<days.length; i+=4)
        {
            disabledDays.push(days[i]);
        }

        var m = date.getMonth(), d = date.getDate(), y = date.getFullYear();
        var nodays = [];

        for (var i = 0; i < disabledDays.length; ++i){
            var date_start = disabledDays[i].toString().split("-");
            var date_end = disabledDays[++i].toString().split("-");

            for (var a=date_start[2]; a<=date_end[2]; ++a)
            {
                for (var b=date_start[1]; b<=date_end[1]; ++b)
                {
                    for (var c=date_start[0]; c<=date_end[0]; ++c)
                    {
                        var value = parseInt(b) + "-" + parseInt(a) + "-" + c;
                        nodays.push(value)
                    }
                }
            }
        }

        for (var i = 0; i < nodays.length; ++i) {
            if($.inArray((m+1) + '-' + d + '-' + y, nodays) != -1 || new Date() > date) {
                return [false];
            }
        }

        return [true];
    },
    productDateEnd(){
        var value = $('#date_start').val().split("-");
        var date_start = value[2] + ',' + value[1] + ',' + value[0];
        var days = $('#disabledDays').val().split('"');
        var date_end = new Date(new Date().setFullYear(new Date().getFullYear() + 100));
        var now = new Date(date_start);

        for (var i=3; i<days.length; i+=4)
        {
            var date_value = new Date(days[i]);

            if (date_value > now && date_end > date_value)
            {
                date_end = date_value;
                date_end.setDate(date_end.getDate()-1);
            }
        }

        $('#date_end').datepicker("destroy");

        $('#date_end').datepicker({
            firstDay: 1,
            minDate: new Date(date_start),
            maxDate: date_end,
            dateFormat: 'dd-mm-yy',
            constrainInput: true,
        });
    },
    ordersList () {
        const $title = $('.ordersList > table tr.title');
        $title.click(function () {
            $(this).siblings('.active').trigger('click')
            $(this).toggleClass('active')
            $(this).find('.toggle').toggleClass('active');
            $(this).next().toggle();
        });
    },
    updateRate () {
        $('.rate').change(function() {
            var rateValue = $(this).val();
            var idValue = $(this).prev().val();

            $('#updateRateForm').submit(function (e) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                e.preventDefault();

                $.ajax({
                    type: 'post',
                    url: '/client/updateRate',
                    data: {
                        id: idValue,
                        rate: rateValue
                    },
                    cache: false,

                    success: function(data) {
                    }
                });

                return false;
            });

            $('#updateRateForm').submit();
        });
    },
    init () {
        $(document).ready(() => {
            this.updateRate();
            this.ordersList();
            this.addToCart();
            this.productItem();
            this.tabs();
            this.windowDataLocation();
            this.showFiltersMobile();
            this.myForm();
            this.priceFilter();
            this.dateFilter();
            this.sorting();
            this.accountAnchorClick();
            this.initialize();
            this.swiperSlider();
            this.stepperSwiper();
            this.productsSwiper();
            this.moreProductsSlider();
            this.previewProductSlider();
            this.footerFixed();
            this.scrollTo('.to-top', 'header');
            this.stickyHeader();
            this.RWDMenu();
            this.updateSearchFormAction();
            this.searchForm();
            this.bnp();
            this.megaMenu();
        });

        window.onload = () => {
            this.urlHashScroll();
        };

        window.onresize = () => {
            this.setHeaderHelperHeight();
            this.footerFixed();
        };

        $('body').bind('productListRefresh', () => {
            $('.product-item .variant-size.active').each((index, item) => {
                let $this = $(item);
                let url = $this.attr('data-image');
                let price = $this.attr('data-price');
                let link = $this.attr('data-url');
                let $item = $this.closest('.product-item');

                $this.addClass('active').siblings().removeClass('active');
                $item.find('img').attr('src', url);
                $item.find('.price').html(price);
                $item.find('a').attr('href',link);
            });
        });
    }
};

App.init();