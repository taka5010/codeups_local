"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  //ハンバーガーメニュークリックでメニューのモーダル
$('.js-hamburger').on('click', function () {
    if ($('.js-hamburger').hasClass('is-open')) {
        $("html").css("overflow", "auto");
        $("body").css("overflow", "auto");
        $('.js-drawer-menu').fadeOut();
        $(this).removeClass('is-open');
        // スクロールを再度有効にする
        $(window).off('.noScroll');
    } else {
        $("html").css("overflow", "hidden");
        $("body").css("overflow", "hidden");
        $('.js-drawer-menu').fadeIn();
        $(this).addClass('is-open');
        // スクロールを無効にする
        $(window).on('touchmove.noScroll', function(e) {
            e.preventDefault();
        });
    }
});


  //mvのswiper
  var js_mv_swiper = new Swiper(".js_mv_Swiper", {
    loop: true,
    speed: 1500,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    // spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false
    }
  });

  //campaignのswiper
  var js_mySwiper = new Swiper(".js_mySwiper", {
    loop: true,
    spaceBetween: 24,
    slidesPerView: 1.31,
    breakpoints: {
      768: {
        slidesPerView: 3,
        spaceBetween: 40
      },
      1180: {
        slidesPerView: 3.96,
        spaceBetween: 40
      }
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  });

  // inviewの設定
  var box = $('.js-inview'),
    speed = 700;
  box.each(function () {
    $(this).append('<div class="color"></div>');
    var color = $(this).find($('.color')),
      image = $(this).find('img');
    var counter = 0;
    image.css('opacity', '0');
    color.css('width', '0%');
    color.on('inview', function () {
      if (counter == 0) {
        $(this).delay(200).animate({
          'width': '100%'
        }, speed, function () {
          image.css('opacity', '1');
          $(this).css({
            'left': '0',
            'right': 'auto'
          });
          $(this).animate({
            'width': '0%'
          }, speed);
        });
        counter = 1;
      }
    });
  });

  //information-page ----------------------------

  $(function () {
    function getParam(name, url) {
      if (!url) url = window.location.href;
      name = name.replace(/[\[\]]/g, "\\$&");
      var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
      if (!results) return null;
      if (!results[2]) return '';
      return decodeURIComponent(results[2].replace(/\+/g, " "));
    }
    var tabPram = ['tab-1', 'tab-2', 'tab-3'];
    var pram = getParam('active-tab');
    if (pram && $.inArray(pram, tabPram) !== -1) {
      $('.js-tab-cts,.js-tab-switch').removeClass('is-active');
      $('[data-tab="' + pram + '"]').addClass('is-active');
    }
    $('.js-tab-switch').on('click', function () {
      var dataPram = $(this).data('tab');
      $('.js-tab-cts,.js-tab-switch').removeClass('is-active');
      $('[data-tab="' + dataPram + '"]').addClass('is-active');
    });
  });
$(".js-modal img").click(function () {
    $("html").css("overflow", "hidden");
    $("body").css("overflow", "hidden");
    $(".about-gallery__grayDisplay").html($(this).prop("outerHTML"));
    $(".about-gallery__grayDisplay").fadeIn(200);
    // スクロールを無効にする
    $(window).on('touchmove.noScroll', function(e) {
        e.preventDefault();
    });
    return false;
});
$(".about-gallery__grayDisplay").click(function () {
    $("html").css("overflow", "auto");
    $("body").css("overflow", "auto");
    $(".about-gallery__grayDisplay").fadeOut(200);
    // スクロールを再度有効にする
    $(window).off('.noScroll');
    return false;
});

  //faq-page ----------------------------
  var accordionDetails = '.js-faq-item';
  var accordionSummary = '.js-faq-item__summary';
  var accordionContent = '.js-faq-item__content';
  var speed2 = 300;
  $(accordionSummary).each(function () {
    if ($(this).parent($(accordionDetails)).attr("open")) {
      $(this).addClass("is-active");
    }
    $(this).on("click", function (event) {
      event.preventDefault();
      $(this).toggleClass("is-active");
      if ($(this).parent($(accordionDetails)).attr("open")) {
        $(this).nextAll($(accordionContent)).slideUp(speed2, function () {
          $(this).parent($(accordionDetails)).removeAttr("open");
        });
      } else {
        $(this).parent($(accordionDetails)).attr("open", "true");
        $(this).nextAll($(accordionContent)).hide().slideDown(speed2);
      }
    });
  });

  // リンク先でヘッダーの重なりを防ぐ
  var url = $(location).attr('href'),
    headerHeight = $('header').outerHeight() + 30;
  if (url.indexOf("#") != -1) {
    var anchor = url.split("#"),
      target = $('#' + anchor[anchor.length - 1]),
      position = Math.floor(target.offset().top) - headerHeight;
    $("html, body").animate({
      scrollTop: position
    }, 500);
  }
  ;

  // サイドバーアーカイブのトグル実装と矢印アニメーション発火
  $(".sideber__year").on("click", function () {
    $(this).next().slideToggle();
    if ($(this).hasClass('is-open')) {
      $(this).removeClass('is-open');
    } else {
      $(this).addClass('is-open');
    }
  });

  //ページトップボタンの調整  
  $(function () {
    var pageTop = $(".footer__pageTop");
    pageTop.hide();
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        pageTop.fadeIn();
      } else {
        pageTop.fadeOut();
      }
    });
    pageTop.click(function () {
      $("body,html").animate({
        scrollTop: 0
      }, 500);
      return false;
    });
    $(".footer__pageTop").hide();
    $(window).on("scroll", function () {
      var scrollHeight = $(document).height();
      var scrollPosition = $(window).height() + $(window).scrollTop();
      var footHeight = $("footer").innerHeight();
      if (scrollHeight - scrollPosition <= footHeight) {
        $(".footer__pageTop").css({
          position: "absolute",
          bottom: footHeight + 20
        });
      } else {
        $(".footer__pageTop").css({
          position: "fixed",
          bottom: "20px"
        });
      }
    });
  });
});