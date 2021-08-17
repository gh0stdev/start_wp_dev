"use strict";

function _classCallCheck(e, t) {
    if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
}

function getProductFromDataLayerByid(e) {
    var t = !1;
    if (void 0 !== window.dataLayer && e)
        for (var i in window.dataLayer)
            if (void 0 !== window.dataLayer[i].ecommerce)
                for (var o in window.dataLayer[i].ecommerce)
                    for (var n in window.dataLayer[i].ecommerce[o].products)
                        if (window.dataLayer[i].ecommerce[o].products[n].id == e) {
                            t = window.dataLayer[i].ecommerce[o].products[n];
                            break
                        }
    return t
}

function numberFormat(e) {
    return $.isNumeric(e) ? new Intl.NumberFormat("ru", {
        maximumFractionDigits: 0
    }).format(parseFloat(e)) : null
}

function number_format(e, t, i, o) {
    e = (e + "").replace(/[^0-9+\-Ee.]/g, "");
    var n = isFinite(+e) ? +e : 0,
        s = isFinite(+t) ? Math.abs(t) : 0,
        a = void 0 === o ? "," : o,
        r = void 0 === i ? "." : i,
        l = "";
    return l = (s ? function (e, t) {
        var i = Math.pow(10, t);
        return "" + (Math.round(e * i) / i).toFixed(t)
    }(n, s) : "" + Math.round(n)).split("."), l[0].length > 3 && (l[0] = l[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, a)), (l[1] || "").length < s && (l[1] = l[1] || "", l[1] += new Array(s - l[1].length + 1).join("0")), l.join(r)
}

function getPrevNextUrls(e, t) {
    var i = {},
        o = e.match(t);
    if (o) {
        var n = parseInt(o[3]);
        n - 1 == 1 ? (i.prev = e.replace(t, "$1?PAGEN_$2=1"), i.next = e.replace(t, "$1?PAGEN_$2=" + (n + 1))) : (i.prev = e.replace(t, "$1?PAGEN_$2=" + (n - 1)), i.next = e.replace(t, "$1?PAGEN_$2=" + (n + 1)))
    }
    return i
}

function updatePrevNextTags(e, t) {
    $('head link[rel="prev"]').length ? $('head link[rel="prev"]').attr("href", e.prev) : $("head").append('<link rel="prev" href="' + e.prev + '">'), t ? $('head link[rel="next"]').remove() : $('head link[rel="next"]').length ? $('head link[rel="next"]').attr("href", e.next) : $("head").append('<link rel="next" href="' + e.next + '">')
}

function onPlayerReady(e) {
    e.target.setVolume(0), $customBtn.on("click", function (t) {
        $(this).fadeOut(300), e.target.playVideo()
    })
}

function onPlayerStateChange(e) {
    e.data === YT.PlayerState.PLAYING ? $customBtn.fadeOut(300) : $customBtn.fadeIn(300)
}

var _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (e) {
        return typeof e
    } : function (e) {
        return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
    },
    _createClass = function () {
        function e(e, t) {
            for (var i = 0; i < t.length; i++) {
                var o = t[i];
                o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
            }
        }

        return function (t, i, o) {
            return i && e(t.prototype, i), o && e(t, o), t
        }
    }();
$(function () {
    $(".js-lazy").Lazy({
        beforeLoad: function (e) {
            e.addClass("js-lazy-loaded")
        },
        afterLoad: function (e) {
            e.removeClass("js-lazy-loaded")
        }
    }),
        function () {
            $(document).on("click", ".js-visible-phone", function (e) {
                e.preventDefault();
                var t = ($(e.target), $(this).data("phone"));
                return $(this).addClass('detail-comagic-phone').html(t), !1
            })
        }(),
        function () {
            $(document).on("click", ".js-dropdown-trigger", function (e) {
                e.preventDefault();
                var t = $(this);
                t.toggleClass("js-dropdown-open"), t.next(".js-dropdown-list").slideToggle()
            })
        }(),
        function () {
            $(document).on("click", ".js-goto", function (e) {
                e.preventDefault(), $.fancybox.close();
                var t = $(this),
                    i = t.attr("href");
                if ($(i).length) {
                    var o = $(i).offset().top;
                    $("body,html").animate({
                        scrollTop: o
                    }, 1e3)
                }
            }), $(".js-zoom-img").fancybox({
                padding: 0,
                margin: 50,
                closeBtn: !0,
                aspectRatio: !0,
                autoFocus: !0,
                beforeLoad: function () {
                    $(".js-preloader-Wait").show()
                },
                afterShow: function (e, t) {
                    $(".js-preloader-Wait").hide(), $(".fancybox-wrap").css("z-index", 99995), $(".fancybox-inner").zoom({
                        magnify: 1,
                        callback: function () {
                            $(this).css("opacity", 1)
                        }
                    })
                }
            })
        }()
}), $(function () {
    !function () {
        function e(e, t) {
            var i = (t - 100) / 1e3;
            e.hasClass("_moved") || (t <= 100 ? e.removeClass("_show") : t > 100 && e.addClass("_show").removeClass("_active").css("opacity", i))
        }

        function t() {
            i = !0
        }

        e($(".b-start-arrow"), $(window).scrollTop());
        var i = !0;
        /*$(window).on("scroll load `", function () {
            function o() {
                var e = $("#main-header"),
                    o = e.is(":visible"),
                    a = $("#pre-header"),
                    r = $(".fixed-header"),
                    l = $(".js-kitchen-menu");
                l.length && o && window.innerWidth > 900 && n > 120 ? (i = !1, l.addClass("_fixed"), e.slideUp(s, t)) : l.length && !o && (window.innerWidth <= 900 || window.innerWidth > 900 && n < 120) ? (i = !1, l.removeClass("_fixed"), e.slideDown(s, t)) : !l.length && n > 120 ? (i = !1, r.addClass("fixed-header_scroll"), a.slideUp(s, t)) : !l.length && n <= 120 && (i = !1, r.removeClass("fixed-header_scroll"), a.slideDown(s, t))
            }

            var n = $(window).scrollTop();
            e($(".b-start-arrow"), n);
            var s = 300;
            i ? o() : 0 === n && setTimeout(o, s)
        }), */$(document).on("click", ".b-start-arrow", function (e) {
            e.preventDefault();
            var t = $(this),
                i = $(window).scrollTop();
            t.hasClass("_active") && !t.hasClass("_moved") ? (t.addClass("_moved"), $("body,html").animate({
                scrollTop: t.data("prev-pos")
            }, 800, function () {
                t.removeClass("_active").removeClass("_moved")
            })) : t.hasClass("_moved") || (t.addClass("_moved"), $("body,html").animate({
                scrollTop: 0
            }, 800, function () {
                t.addClass("_active").data("prev-pos", i).removeClass("_moved")
            }))
        })
    }(),
        function () {
            var e;
            0 !== $(".js-kitchen-menu").length || $("#header-wrapper-new").hover(function () {
                e = setTimeout(function () {
                    $("#pre-header").slideDown(300)
                }, 500)
            }, function () {
                clearTimeout(e)
            })
        }()
}), $(function () {
    $(".add-good-profits__dropdown").each(function () {
        $(this).height() <= 77 ? $(this).next().hide() : $(this).addClass("close")
    }), window.yandexReachGoal = function (e) {
        var t = $.cookie("firedEvents"),
            i = void 0 === t ? [] : JSON.parse(t);
        BX.util.in_array(e, i) || i.push(e), $.cookie("firedEvents", JSON.stringify(i), {
            expires: 7,
            path: "/"
        }), void 0 !== window.popupsManager && window.popupsManager.initPopups(), yaCounter31874381.reachGoal(e, function () {
            console.log(e + " fired!")
        })
    }, $("#credit-popup-btn").on("click", function () {
        $("#credit-popup").find(".item-name").text($(this).data("item-name")), $("#credit-popup").find("input[name=prId]").val($(this).data("id")), $("#credit-popup").find("input[name=prPrice]").val($('.good-item').find('.add_cart').data("price")), ga("send", "event", "BTN_CLICK", "knopka_rassrochka"), yandexReachGoal("knopka_rassrochka")
    }), $("body").on("click", ".add-good-profits__dropdown-link", function (e) {
        e.preventDefault(), "Развернуть" == $(this).text() ? ($(this).prev().addClass("open"), $(this).text("Свернуть")) : ($(this).prev().removeClass("open"), $(this).text("Развернуть"))
    }),
        function () {
            $("#choose-city-button").click(function () {
                $("#choose-city-balloon").fadeOut(300)
            }), $("#choose-city-balloon .box-modal__close").click(function () {
                $(this).parent().hide()
            })
        }(),
        function () {
            "function" == typeof $.fn.mask && ($("#phone").mask("+7 (999) 999 99 99"), $(".phone").mask("+7 (999) 999 99 99"), $("#basket-form-phone").mask("+7 (999) 999-99-99"), $("input[rel=PHONE]").mask("+7 (999) 999 99 99"), $("input[type=tel]").mask("+7 (999) 999 99 99"))
        }(),
        function () {
            $(window).width() <= 768 ? $(".js-video-block-link").fancybox({
                padding: 0,
                margin: 0,
                width: "100%",
                height: "100%",
                closeBtn: !0,
                aspectRatio: !0,
                allowfullscreen: "true",
                wrapCSS: "fullscreen kitchen",
                fs: "1",
                afterShow: function () {
                    $("#header-hide-for-video").fadeOut(300), $(".fancybox-overlay").css("z-index", 99990)
                },
                afterClose: function () {
                    $("#header-hide-for-video").fadeIn(300)
                }
            }) : $(".js-video-block-link").fancybox({
                padding: 0,
                margin: 50,
                closeBtn: !0,
                aspectRatio: !0,
                allowfullscreen: "true",
                fs: "1",
                afterShow: function () {
                    $("#header-hide-for-video").fadeOut(300), $(".fancybox-overlay").css("z-index", 99990), $(".fancybox-wrap").css("z-index", 99999)
                },
                afterClose: function () {
                    $("#header-hide-for-video").fadeIn(300)
                }
            })
        }(),
        function () {
            "function" == typeof $.fn.mask && ($("input[name=tel]").mask("+7 (999) 999 99 99"), $("input[type=tel]").mask("+7 (999) 999 99 99"))
        }(),
        function () {
            var e = $(".js-popup-link");
            window.openPopup = function (e) {
                var t;
                return "string" != typeof e ? (console.log("Target does not defined"), !1) : (t = $(e), t.length < 1 ? (console.log("Target does not exist"), !1) : (t.arcticmodal({
                    overlay: {
                        css: {
                            backgroundColor: "rgba(34, 34, 34, 0.90)",
                            opacity: 1
                        }
                    },
                    openEffect: {
                        type: "fade",
                        speed: 400
                    },
                    closeEffect: {
                        type: "none",
                        speed: 0
                    },
                    afterOpen: function () {
                        $(".test-popup__select").chosen({
                            disable_search: !1
                        }), $(".test-popup__photo-block-item").remove(), $(".test-popup__uploaded-file").prev().remove(), $(".test-popup__uploaded-file").remove(), $(".js-clear-all-inputs").find("input[type=text], textarea").val(""), $(".js-clear-input-comment").find(".js-REVIEW").val("")
                    }
                }), t.addClass("animated fadeInDown"), t.one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function () {
                    t.removeClass("animated fadeInDown")
                }), !1))
            }, e.click(function () {
                var e = $(this),
                    t = e.attr("data-href");
                return "#personal-info" !== t && ($.arcticmodal("close"), console.log("!")), openPopup(t), !1
            });
            var t = $(".js-popup-link-testimonials");
            window.openPopupTestimonials = function (e) {
                var t;
                return "string" != typeof e ? (console.log("Target does not defined"), !1) : (t = $(e), t.length < 1 ? (console.log("Target does not exist"), !1) : (t.arcticmodal({
                    overlay: {
                        css: {
                            backgroundColor: "rgba(34, 34, 34, 0.90)",
                            opacity: 1
                        }
                    },
                    openEffect: {
                        type: "fade",
                        speed: 400
                    },
                    closeEffect: {
                        type: "none",
                        speed: 0
                    },
                    afterOpen: function () {
                        $(".test-popup__select").chosen({
                            disable_search: !1
                        })
                    },
                    afterClose: function () {
                        var e = t.find("form").attr("data-current-url");
                        window.history.pushState(null, null, e)
                    }
                }), t.addClass("animated fadeInDown"), t.one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function () {
                    t.removeClass("animated fadeInDown")
                }), !1))
            }, t.click(function () {
                var e = $(this),
                    t = e.attr("data-href");
                return $.arcticmodal("close"), openPopupTestimonials(t), !1
            })
        }(),
        function () {
            var e = $("#city-popup__view-all"),
                t = $("#city-popup-content");
            e.click(function () {
                var i = $("#city-popup__list-to-hide"),
                    o = $("#city-popup__content-to-show");
                i.hide(), e.hide(), o.fadeIn(200), t.addClass("city-popup__content_with-slider"),
                    function () {
                        new Swiper("#city-popup-slider", {
                            direction: "horizontal",
                            slidesPerView: 1,
                            spaceBetween: 50,
                            preventClicks: false,
                            paginationClickable: !0,
                            nextButton: "#city-popup-arrow-next",
                            prevButton: "#city-popup-arrow-prev",
                            pagination: ".city-popup__pagination"
                        })
                    }()
            })
        }(),
        function () {
            var e = (new Date, $(".js-menu-link"));
            $("#main-header");
            e.hover(function () {
                $(".js-dropdown").removeClass("active");
                var e = $(this),
                    t = e.find(".js-dropdown"),
                    i = t.find(".js-dropdown-content:eq(0)"),
                    o = i.find(".js-dropdown-slider:eq(0)"),
                    n = o.parent().find(".dropdown__select-color");
                e.addClass("fixed-header__menu-item_active"), t.addClass("active"), 1 == o.data("init") || (o.slick({
                    dots: !1,
                    arrows: !1,
                    infinite: !1,
                    speed: 300,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    pauseOnHover: !0,
                    accessibility: !1,
                    fade: !0,
                    draggable: !1
                }), o.attr("data-init", !0)), n.click(function () {
                    var e = $(this),
                        t = e.data("slide");
                    return n.removeClass("select-color_active"), e.addClass("select-color_active"), o.slick("slickGoTo", t), !1
                })
            }, function () {
                var e = $(this);
                e.find(".js-dropdown").removeClass("active"), e.removeClass("fixed-header__menu-item_active")
            }), $(".js-menu-link .fixed-header__menu-item-link").click(function () {
            }), $(".js-fixed-header__menu").mouseleave(function () {
                $(".js-dropdown").removeClass("active")
            });
            !function () {
                var e = document.createElement("p");
                e.style.width = "100%", e.style.height = "200px";
                var t = document.createElement("div");
                t.style.position = "absolute", t.style.top = "0px", t.style.left = "0px", t.style.visibility = "hidden", t.style.width = "200px", t.style.height = "150px", t.style.overflow = "hidden", t.appendChild(e), document.body.appendChild(t);
                var i = e.offsetWidth;
                t.style.overflow = "scroll";
                var o = e.offsetWidth;
                i == o && (o = t.clientWidth), document.body.removeChild(t)
            }()
        }(), $(".good-item__slider-sales-for").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: !1,
        fade: !0,
        asNavFor: ".good-item__slider-sales-nav"
    }), $(".good-item__slider-sales-nav").slick({
        slidesToShow: 9,
        slidesToScroll: 1,
        asNavFor: ".good-item__slider-sales-for",
        dots: !1,
        arrows: !1,
        focusOnSelect: !0,
        responsive: [{
            breakpoint: 375,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: !1,
                arrows: !1
            }
        }]
    }),
        function () {
            $(".js-dropdown-collection").mouseenter(function () {
                var e, t, i = $(this),
                    o = i.data("id"),
                    n = i.closest(".js-parent"),
                    s = $("#dropdown-content_" + o),
                    a = s.find(".js-dropdown-slider:eq(0)"),
                    r = a.parent().find(".dropdown__select-color"),
                    l = $("#dropdown-content_" + o);
                n.find(".js-dropdown-collection").removeClass("active"), n.find(".js-dropdown-content").removeClass("active");
                for (var c = 0; l.find(".js-parent").length > 0 && c < 5;) l = l.find(".js-parent:eq(0)"), e = l.find(".js-dropdown-content:eq(0)"), t = l.find(".js-dropdown-collection:eq(0)"), e.addClass("active"), t.addClass("active"), c++;
                return i.addClass("active"), s.addClass("active"), 1 == a.data("init") && a.slick("unslick"), a.slick({
                    dots: !1,
                    arrows: !1,
                    infinite: !1,
                    speed: 300,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    pauseOnHover: !0,
                    accessibility: !1,
                    fade: !0,
                    draggable: !1
                }), a.attr("data-init", !0), r.click(function () {
                    var e = $(this),
                        t = e.data("slide");
                    return r.removeClass("select-color_active"), e.addClass("select-color_active"), a.slick("slickGoTo", t), !1
                }), !1
            })
        }(), $(".add-good-wrap .add-good__tab-item").not(":first").hide(), $(".add-good-wrap .add-good__tab").click(function () {
        $(".add-good-wrap .add-good__tab").removeClass("active").eq($(this).index()).addClass("active"), $(".add-good-wrap .add-good__tab-item").hide().eq($(this).index()).fadeIn()
    }).eq(0).addClass("active"), $(".add-good-wrap-2 .add-good__tab-item").not(":first").hide(), $(".add-good-wrap-2 .add-good__tab").click(function () {
        setTimeout(function () {
            0 == $("#testimonials-slider .swiper-slide").length && ($(".testimonials_no-testimonials").show(), $("#testimonials-slider").hide());
            var e = new Swiper("#testimonials-slider", {
                direction: "horizontal",
                loop: !1,
                effect: "fade",
                speed: 600,
                preventClicks: false,
                slidesPerView: 1,
                nextButton: ".testimonials__button-next",
                prevButton: ".testimonials__button-prev",
                onProgress: function (e) {
                    e.isBeginning ? ($(".testimonials__button-prev").hide(), $(".testimonials__button-next").show()) : e.isEnd ? ($(".testimonials__button-next").hide(), $(".testimonials__button-prev").show()) : ($(".testimonials__button-prev").show(), $(".testimonials__button-next").show())
                }
            });
            1 == $("#testimonials-slider .swiper-slide").length && ($(".testimonials__button-next").hide(), $(".testimonials__button-prev").hide(), e.destroy())
        }, 100), $(".add-good-wrap-2 .add-good__tab").removeClass("active").eq($(this).index()).addClass("active"), $(".add-good-wrap-2 .add-good__tab-item").hide().eq($(this).index()).fadeIn()
    }).eq(0).addClass("active"),
        function () {
            $(".js-dropdown-nav-scrollable").mCustomScrollbar({
                axis: "y",
                theme: "light",
                scrollInertia: .5
            }), $(".js-dropdown-text-wrap").mCustomScrollbar({
                axis: "y",
                theme: "light",
                scrollInertia: .5
            }), $(".js-dropdown__collection-list").mCustomScrollbar({
                axis: "y",
                theme: "light",
                scrollInertia: .5
            })
        }(),
        function () {
            $(".account-checkbox").iCheck({
                checkboxClass: "account-checkbox"
            })
        }(),
        function () {
            $(".js-select").select2({
                minimumResultsForSearch: -1,
                width: "style",
                dropdownAutoWidth: !0
            }), $(".js-select-fw").select2({
                minimumResultsForSearch: -1,
                width: "style",
                dropdownCssClass: "fw"
            }), $(".js-select-fw").on("select2:open", function (e) {
                $(".select2-dropdown").css("min-width", $(this).next(".select2").outerWidth())
            }), $(".js-select-green").select2({
                minimumResultsForSearch: -1,
                dropdownCssClass: "green-wrap"
            })
        }(),
        function () {
            var e = $(".js-response-text-change"),
                t = $(window).width();
            e.each(function () {
                var e = $(this),
                    i = e.data("text-desktop"),
                    o = e.data("text-response");
                t < 900 ? e.text(o) : e.text(i)
            })
        }(),
        function () {
            var e = $(".js-header-burger"),
                t = $("#mobile-menu"),
                i = $("#mobile-menu-close");
            e.click(function () {
                return t.addClass("mobile-menu_open"), !1
            }), i.click(function () {
                return t.removeClass("mobile-menu_open"), !1
            })
        }(),
        function () {
            var e = $("#main-video"),
                t = $("#main-bg-under-video");
            $(window).width() > 1e3 && (t.hide(), e.on("ended", function () {
                e.fadeOut(300), t.fadeIn(400)
            }))
        }(),
        function () {
            var e = $("#main-video");
            e.prop("muted", !0), $("#mute-button").click(function () {
                var t = $(this);
                e.prop("muted") ? (e.prop("muted", !1), t.addClass("top-image-block__video-mute-button_unmuted").removeClass("top-image-block__video-mute-button_muted")) : (e.prop("muted", !0), t.addClass("top-image-block__video-mute-button_muted").removeClass("top-image-block__video-mute-button_unmuted"))
            })
        }(),
        function () {
            FlipClock.Lang.Russian = {
                years: "Год",
                months: "Месяц",
                days: "День",
                hours: "Час",
                minutes: "Минута",
                seconds: "Секунда"
            }, FlipClock.Lang.ru = FlipClock.Lang.Russian;
            var e = $("#bf-timer").FlipClock({
                    clockFace: "DailyCounter",
                    autoStart: !1,
                    language: "ru"
                }),
                t = new Date,
                i = new Date(2017, 10, 23, 19, 0, 0, 0);
            e.setTime((i - t) / 1e3), e.setCountdown(!0), e.start()
        }(),
        function () {
            var e = $(".js-good-slider-button"),
                t = $(window).width(),
                i = e.data("text-desc"),
                o = e.data("text-response");
            t > 500 ? (e.text(i), e.removeClass("btn_block")) : (e.text(o), e.addClass("btn_block"))
        }(),
        function () {
            var e = $(".checkbox-styled-green-border"),
                t = $(".checkbox-styled-red-border"),
                i = $(".checkbox-lite-style");
            e.each(function () {
                var e = $(this),
                    t = e.attr("data-value");
                e.iCheck({
                    checkboxClass: "checkbox-styled-green-border",
                    insert: t
                })
            }), t.each(function () {
                var e = $(this),
                    t = e.attr("data-value");
                e.iCheck({
                    checkboxClass: "checkbox-styled-red-border",
                    insert: t
                })
            }), i.each(function () {
                var e = $(this),
                    t = e.attr("data-value");
                e.iCheck({
                    checkboxClass: "checkbox-lite-style",
                    insert: t
                })
            })
        }(),
        function () {
            var e = $(".checkbox-styled-green-text"),
                t = $(".checkbox-styled-red-text"),
                i = $(".js-checkbox"),
                o = $(".js-checkbox-icon"),
                n = $(".js-checkbox-default"),
                s = $(".checkbox-circle");
            e.each(function () {
                var e = $(this),
                    t = e.attr("data-value");
                e.iCheck({
                    checkboxClass: "checkbox-styled-green-text",
                    insert: t
                })
            }), n.each(function () {
                var e = $(this),
                    t = e.attr("data-value");
                e.iCheck({
                    checkboxClass: "checkbox-styled-green-default",
                    insert: t
                })
            }), t.each(function () {
                var e = $(this),
                    t = e.attr("data-value");
                e.iCheck({
                    checkboxClass: "checkbox-styled-red-text",
                    insert: t
                })
            }), o.each(function () {
                var e = $(this),
                    t = e.attr("data-value"),
                    i = e.attr("data-icon");
                e.iCheck({
                    checkboxClass: "where-to-buy-checkbox",
                    insert: '<i class="shop-filters__checkbox-icon shop-filters__checkbox-icon_' + i + ' "></i>' + t
                })
            }), i.on("ifChecked", function (e) {
                var t, i = $(this),
                    o = i.data("index"),
                    n = i.closest(".js-checkbox-parent");
                void 0 !== o && (t = n.find(".js-checkbox"), t.each(function (e) {
                    if (e === o) return !0;
                    $(this).iCheck("uncheck")
                }))
            }), s.each(function () {
                var e = $(this),
                    t = e.attr("data-value");
                e.iCheck({
                    checkboxClass: "checkbox-circle",
                    insert: t
                })
            })
        }(),
        function () {
            var e = $(".radio-styled-green"),
                t = $(".js-radio-default");
            e.each(function () {
                var e = $(this),
                    t = e.attr("data-value");
                e.iCheck({
                    radioClass: "radio-styled-green",
                    insert: t
                })
            }), t.each(function () {
                var e = $(this),
                    t = e.attr("data-value");
                e.iCheck({
                    radioClass: "radio-styled-green-default",
                    insert: t
                })
            })
        }(),
        function () {
            if ($(window).width() > 1024) {
                var e, t = function () {
                    var t = $(this);
                    return e = t.clone(), e.addClass(function () {
                        return "cart-item_hover cart-item_hover-cloned"
                    }).hide(), e.fadeIn(300), e.find(".cart-item__value-select").chosen({
                        disable_search: !0
                    }), t.append(e), !1
                };
                $(document).one({
                    "mouseenter.catalog": t
                }, ".js-cart-item"), $(document).on({
                    "mouseleave.catalog": function () {
                        return $(this), e = null, $(".cart-item_hover").remove(), $(document).one({
                            mouseenter: t
                        }, ".js-cart-item"), !1
                    }
                }, ".js-cart-item")
            }
        }(),
        function () {
            var e = $(".js-point-star"),
                t = $(".js-choose-good-type"),
                i = $(".js-cards-container"),
                o = $(".js-blocks-wrapper"),
                n = $(window).width();
            e.click(function () {
                var e = $(this),
                    s = e.clone(),
                    a = e.position(),
                    r = a.left,
                    l = a.top,
                    c = e.offset(),
                    d = c.left,
                    p = c.top,
                    u = e.data("item"),
                    f = $("#composition-good-cart-" + u),
                    h = f.height(),
                    m = f.width(),
                    _ = i.width(),
                    v = f.hasClass("cart-item_visible");
                if ($(".point_active").remove(), t.removeClass("choose-good-type_visible"), r > _ - m) {
                    if (!v) return s.remove(), t.removeClass("choose-good-type_visible"), o.append(s), s.addClass("point_active"), s.addClass("point_right"), f.addClass("choose-good-type_visible"), f.addClass("choose-good-type_right"), s.css({
                        top: p + "px",
                        left: d + "px"
                    }), n <= 1440 ? f.css({
                        top: l - h / 2 + "px",
                        left: r - m - 18 + "px"
                    }) : f.css({
                        top: l - h / 2 + "px",
                        left: r - m - 24 - 9 + "px"
                    }), i.click(function () {
                        s.remove(), f.removeClass("choose-good-type_visible")
                    }), !1;
                    s.remove(), t.removeClass("choose-good-type_visible")
                } else v ? (s.remove(), t.removeClass("choose-good-type_visible")) : (s.remove(), t.removeClass("choose-good-type_visible"), o.append(s), s.addClass("point_active"), f.addClass("choose-good-type_visible"), s.css({
                    top: p + "px",
                    left: d + "px"
                }), n <= 1440 ? f.css({
                    top: l - h / 2 + "px",
                    left: r + 18 + 30 + "px"
                }) : f.css({
                    top: l - h / 2 + "px",
                    left: r + 24 + 30 + "px"
                }), i.click(function () {
                    s.remove(), f.removeClass("choose-good-type_visible")
                }));
                return s.one("click", function () {
                    return s.remove(), f.removeClass("choose-good-type_visible"), !1
                }), !1
            })
        }(),
        function () {
            var e = $(".js-pin-centered"),
                t = $(".js-detail-news-cart"),
                i = $(window).width();
            t.removeClass("cart-item_visible"), e.click(function () {
                var o = $(this),
                    n = o.position(),
                    s = n.left,
                    a = n.top,
                    r = o.data("item"),
                    l = $("#news-detail-" + r),
                    c = (l.width(), l.height());
                return l.hasClass("cart-item_visible") ? (e.removeClass("point_active"), t.removeClass("cart-item_visible")) : (e.removeClass("point_active"), t.removeClass("cart-item_visible"), o.addClass("point_active"), l.addClass("cart-item_visible"), i <= 1440 ? l.css({
                    top: a - c / 2 + "px",
                    left: s - 7 + "px"
                }) : l.css({
                    top: a - c / 2 + "px",
                    left: s + "px"
                })), !1
            })
        }(),
        function () {
            $(".js-filters-button").click(function () {
                var e = $(this),
                    t = e.parents(".filters-block__item-list");
                e.hasClass("filters-block__item-list-button_all") ? t.find(".js-filters-button").removeClass("filters-block__item-list-button_active") : t.find(".filters-block__item-list-button_all").removeClass("filters-block__item-list-button_active"), e.toggleClass("filters-block__item-list-button_active")
            })
        }(),
        function () {
            $(".js-filter-color").click(function () {
                var e = $(this),
                    t = e.parents(".filters-block__item-list");
                e.hasClass("filters-block__item-list-button_all") ? (t.find(".js-filter-color").removeClass("select-color_active"), e.toggleClass("filters-block__item-list-button_active")) : (t.find(".filters-block__item-list-button_all").removeClass("filters-block__item-list-button_active"), e.toggleClass("select-color_active"))
            })
        }(),
        function () {
            $(".js-search-page__content-text").trunk8({
                lines: 2,
                fill: "&hellip;"
            }), $(".js-features-balloon-text").trunk8({
                lines: 5,
                fill: '&hellip; <a id="read-more" href="#" class="features-block__item-balloon-link">пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ</a>'
            }), $(document).on("click", "#read-more", function (e) {
                return $(this).parent().trunk8("revert").append(' <a id="read-less" href="#" class="features-block__item-balloon-link">пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ</a>'), !1
            }), $(document).on("click", "#read-less", function (e) {
                return $(this).parent().trunk8(), !1
            })
        }(),
        function () {
            var e = $(".js-context"),
                t = $(".js-search-input"),
                i = t.val();
            e.length > 0 && (e.unhighlight(), e.highlight(i))
        }(),
        function () {
            if (window.innerWidth > 1024) {
                var e, t = function () {
                    var t = $(this);
                    return e = t.clone(), e.addClass("shop-list__item_hover").hide(), e.fadeIn(300), t.append(e), !1
                };
                $(document).one({
                    "mouseenter.contacts": t
                }, ".js-shop-list-item"), $(document).on({
                    "mouseleave.contacts": function () {
                        return $(this), e = null, $(".shop-list__item_hover").remove(), $(document).one({
                            "mouseenter.contacts": t
                        }, ".js-shop-list-item"), !1
                    }
                }, ".js-shop-list-item")
            }
        }(),
        function () {
            var e = $(".js-vacancy-item");
            e.removeClass("vacancy__item_open"), e.click(function () {
                var t = $(this);
                t.hasClass("vacancy__item_open") ? (t.removeClass("vacancy__item_open"), e.removeClass("vacancy__item_open")) : (e.removeClass("vacancy__item_open"), t.addClass("vacancy__item_open"))
            })
        }(),
        function () {
            $("#toggle-password").hideShowPassword({
                show: !1,
                innerToggle: !0,
                toggle: {
                    className: "hideShowPassword-toggle"
                }
            })
        }(),
        function () {
            $(window).width() < 700 && $(".js-lk-goods-item-name").trunk8({
                lines: 1,
                fill: "&hellip;"
            })
        }(),
        function () {
            var e = $(".js-faq-item"),
                t = $(".js-faq-item-answer");
            t.hide(), e.click(function () {
                var i = $(this),
                    o = i.hasClass("faq__item_open"),
                    n = i.find(".js-faq-item-answer");
                o ? (e.removeClass("faq__item_open"), t.slideUp(300)) : (e.removeClass("faq__item_open"), i.addClass("faq__item_open"), t.slideUp(300), n.slideDown(300))
            })
        }(),
        function () {
            var e = $(".js-buyer-nav-item"),
                t = $(".js-buyer-content");
            e.click(function () {
                var i = $(this),
                    o = i.data("id"),
                    n = i.text(),
                    s = $("#buyer-content_" + o),
                    a = $(".js-page-title");
                return t.removeClass("buyer__content_active"), e.removeClass("buyer__nav-item_active"), s.addClass("buyer__content_active"), i.addClass("buyer__nav-item_active"), a.text(n), !1
            })
        }(),
        function () {
            $(".js-buyer-top-line").click(function () {
                $(this).closest(".js-buyer-content-item").toggleClass("buyer__content-item_open")
            })
        }(),
        function () {
            $(".js-features-block-balloon-text-open").click(function () {
                var e = $(this),
                    t = e.data("text-hide"),
                    i = e.data("text-show"),
                    o = e.closest(".js-features-block-balloon"),
                    n = o.find(".js-features-block-balloon-text");
                return n.hasClass("features-block__item-balloon-text-wrap_open") ? (n.removeClass("features-block__item-balloon-text-wrap_open"), e.text(i)) : (n.addClass("features-block__item-balloon-text-wrap_open"), e.text(t)), !1
            })
        }(),
        function () {
            var e = $(".js-scroll-link"),
                t = $("html, body");
            e.click(function () {
                var e = $(this),
                    i = e.attr("href"),
                    o = $(i),
                    n = o.offset().top;
                return t.animate({
                    scrollTop: n - 200
                }, 300), !1
            })
        }(),
        function () {
            $(document).on("click", ".js-visible-phone", function (e) {
                e.preventDefault();
                var t = ($(e.target), $(this).data("phone"));
                $(this);
                return $(this).html(t), $(this).closest(".js-shop-list-item").parent(".js-shop-list-item").find(".js-visible-phone").each(function () {
                    $(this).addClass('list-comagic-phone').html($(this).data("phone"))
                }), $(this).closest(".shop-flagman").length ? (ga("send", "event", "showNumber", "click"), yaCounter31874381.reachGoal("showNumber_click")) : $(this).closest(".shop-list__item__kitchen").length ? (ga("send", "event", "showNumberRed", "click"), yaCounter31874381.reachGoal("showNumberRed_click")) : (ga("send", "event", "showNumberGreen", "click"), yaCounter31874381.reachGoal("showNumberGreen_click")), !1
            })
        }(),
        function () {
            $(".js-star-rating__ico").on("click", function () {
                var e = $(this).closest(".js-form__input-holder__" + $(this).data("property-id"));
                e.find(".js-rating-selector").prop("selectedIndex", 0), e.find(".js-rating-selector").prop("selectedIndex", parseInt($(this).data("num")) + 1), $(".js-form__input-holder__" + $(this).data("property-id") + " .js-star-rating__ico").removeClass("active");
                for (var t = 1; t <= $(this).data("num"); t++) $(".js-form__input-holder__" + $(this).data("property-id") + " .js-star-rating__ico__" + t).addClass("active")
            })
        }(),
        function () {
            jQuery.validator.addMethod("checkMask", function (e, t) {
                return /\+\d{1} \(\d{3}\) \d{3}-\d{2}-\d{2}/g.test(e)
            }), $("#basket_form").validate({
                errorClass: "field-error",
                focusInvalid: !1,
                focusCleanup: !0,
                onclick: !1,
                onkeyup: !1,
                rules: {
                    ORDER_PROP_8: "required",
                    ORDER_PROP_3: {
                        checkMask: !0
                    },
                    ORDER_PROP_2: {
                        required: !0,
                        email: !0
                    }
                },
                messages: {
                    ORDER_PROP_8: $(".basket-form").find('[name="ORDER_PROP_8"]').attr("data-error-message"),
                    ORDER_PROP_3: {
                        checkMask: $(".basket-form").find('[name="ORDER_PROP_3"]').attr("data-error-message")
                    },
                    ORDER_PROP_2: $(".basket-form").find('[name="ORDER_PROP_2"]').attr("data-error-message")
                },
                submitHandler: function (e) {
                    console.log('test-basket');
                    $(".js-preloader-Wait").show();
                    var t = $("#basket_form").attr("action"),
                        i = $("#basket_form").serialize(),
                        fbqa = [],
                        gtaga = [];
                    return $.post(t, i, function (t) {
                        if (t.order.ERROR) {
                            var i = "";
                            for (var o in t.order.ERROR.PROPERTY) {
                                var n = e.find('[data-key="' + o + '"]');
                                n.addClass("input-error"), n.next().html(t.order.ERROR.PROPERTY[o]), i += '<p class="global-error__visible">' + t.order.ERROR.PROPERTY[o] + "</p>"
                            }
                            $(".js-basket-form__error-text").html(i)
                        } else {
                            for (var s, a = [], adm = [], r = [], l = 0; l < t.order.ORDER_DATA.items.length; l++) s = t.order.ORDER_DATA.items[l], a.push({
                                id: s.id,
                                name: s.name,
                                price: s.price,
                                brand: "Дятьково",
                                category: s.category,
                                quantity: s.quantity
                            }), adm.push({
                                id: s.itemId,
                                name: s.name,
                                price: s.price,
                                brand: "Дятьково",
                                category: s.category,
                                quantity: s.quantity
                            }), r.push({
                                id: s.criteoCodeId + "-" + s.itemId,
                                name: s.name,
                                price: number_format(s.price, 0, ".", ""),
                                brand: "Дятьково",
                                category: s.category,
                                quantity: s.quantity
                            }), fbqa.push({
                                'id': s.id,
                                'quantity': s.quantity,
                                'item_price': s.price,
                            }), gtaga.push({
                                'id': s.itemId,
                                'google_business_vertical': 'retail'
                            });
                            /*fbq('track', 'Purchase', {
                                value: t.order.ORDER_DATA.order.price,
                                currency: 'RUB',
                                contents: fbqa,
                                content_type: 'product'
                            });*/
                            gtag('event', 'purchase ', {
                                'send_to': 'AW-416282273',
                                'value': t.order.ORDER_DATA.order.price,
                                'items': gtaga
                            });
                            dataLayer.push({
                                ecommerce: {
                                    purchase: {
                                        actionField: {
                                            id: t.order.ID,
                                            affiliation: "Дятьково",
                                            revenue: t.order.ORDER_DATA.order.price,
                                            shipping: "0"
                                        },
                                        products: a
                                    }
                                }
                            }), ga("require", "ecommerce", "ecommerce.js"), ga("ecommerce:addTransaction", {
                                id: t.order.ID,
                                affiliation: "Дятьково",
                                revenue: t.order.ORDER_DATA.order.price,
                                shipping: "0"
                            });
                            for (l in t.order.ORDER_DATA.items) s = t.order.ORDER_DATA.items[l], ga("ecommerce:addItem", {
                                id: s.id,
                                sku: s.id,
                                name: s.name,
                                price: s.price,
                                category: s.category,
                                quantity: s.quantity
                            });
                            ga("ecommerce:send"), ga("ecommerce:clear");
                            (new Admitad).sendOrder(t.order.ID, adm), ga("send", "event", $("#basket_form").data("analytics-category"), $("#basket_form").data("analytics-action")), yaCounter31874381.reachGoal($("#basket_form").data("metrika-goal")), window.criteo_q = window.criteo_q || [], window.criteo_q.push({
                                event: "setAccount",
                                account: accountId
                            }, {
                                event: "setSiteType",
                                type: siteType
                            }, {
                                event: "setEmail",
                                email: userEmail
                            }, {
                                event: "trackTransaction",
                                id: t.order.ORDER_DATA.order.id,
                                item: r
                            }), openPopup("#added-order"), window.location.href = "/personal/order/success/?order_id=" + t.order.ORDER_DATA.order.id
                        }
                        $(".js-preloader-Wait").hide()
                    }, "json"), !1
                },
                showErrors: function (e, t) {
                    $(".basket-form").find(".basket-form__input").removeClass("input-error"), $(".basket-form").find(".basket-form__input").next().html("");
                    for (var i in e) {
                        var o = $(".basket-form").find('[name="' + i + '"]');
                        o.addClass("input-error"), o.next().html(e[i])
                    }
                    this.defaultShowErrors()
                },
                errorPlacement: function (e, t) {
                }
            }), $(".js-addresses-slider-item").click(function () {
                if ($(this).hasClass("addresses-slider__item_active")) {
                    var e = $(this).find(".input_address_id").val();
                    $(".basket-form").find(".input_address_id").val(e), $(this).find(".input_address").each(function () {
                        var e = $(this).attr("data-id");
                        $(".basket-form").find('[name="ORDER_PROP_' + e + '"]').val($(this).val())
                    })
                } else $(".basket-form").find(".input_address_id").val("")
            }), $(".link_one_click").click(function (e) {
                var t = $(".link_one_click").attr("data-artnumber"),
                    i = $(".link_one_click").attr("data-price");
                window.criteo_q = window.criteo_q || [], window.criteo_q.push({
                    event: "setAccount",
                    account: accountId
                }, {
                    event: "setSiteType",
                    type: siteType
                }, {
                    event: "setEmail",
                    email: userEmail
                }, {
                    event: "viewBasket",
                    item: [{
                        id: t,
                        price: i,
                        quantity: 1
                    }]
                })
            }), $(".composition-item__button .add_cart").click(function (e) {
                var t = $(".composition-item__button .link_one_click"),
                    i = t.attr("data-artnumber"),
                    o = t.attr("data-price");
                window.criteo_q = window.criteo_q || [], window.criteo_q.push({
                    event: "setAccount",
                    account: accountId
                }, {
                    event: "setSiteType",
                    type: siteType
                }, {
                    event: "setEmail",
                    email: userEmail
                }, {
                    event: "viewBasket",
                    item: [{
                        id: i,
                        price: o,
                        quantity: 1
                    }]
                })
            })
        }()
}), Array.prototype.UContains = function (e) {
    var t, i = this.length;
    for (t = 0; t < i; t++)
        if (e(this[t])) return t;
    return -1
}, $(function () {
    $(document).on("input change", ".range-js input[type=range]", function () {
        var e = $(this).val(),
            t = e.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, "$1 ");
        $(this).prev().val(t + " &#8381;")
    }), $(document).on("input change", "#periodrange", function () {
        $(this).prev().val($(this).val())
    }), $(document).on("input change", "#payrange", function () {
        var e = $(this).val(),
            t = e.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, "$1 ");
        $(this).prev().prev().text(t)
    })
}), $(function () {
    function e(e) {
        var t = e.find(".menu-content:visible").first();
        if (t) {
            var i = e.closest(".menu-dropdown__inner"),
                o = i.find(".menu-dropdown__items").outerWidth();
            t.parents(".menu-dropdown__subitems").each(function () {
                o += $(this).outerWidth()
            }), o = i.width() - o, t.outerWidth(o)
        }
    }

    function t(e) {
        var t = e.find(".menu-content:visible").first(),
            i = t.outerHeight(),
            o = 0;
        e.closest(".menu-dropdown__items").children(".js-menu-dropdown-item").each(function () {
            o += $(this).outerHeight()
        });
        var n = i > o ? i : o;
        e.closest(".menu-dropdown").height(n)
    }

    function i(i) {
        i.addClass("_opened"), e(i.find(".menu-dropdown__item:visible")), t(i.find(".menu-dropdown__item:visible")), i.find(".js-menu-slider:visible").first().slick("reinit")
    }

    function o() {
        var e = $(".menu-dropdown_horizontal"),
            t = $(".menu-dropdown-ag");
        e.each(function () {
            var e = $(this).find(".menu-dropdown-hor__img"),
                t = e.find("img"),
                i = e.find(".menu-dropdown-hor__img-text"),
                o = $(this).find(".menu-dropdown-hor__link").first(),
                n = o.attr("data-img"),
                s = o.text();
            t.attr("src", n), i.text(s)
        }), t.each(function () {
            var e = $(this).find(".menu-dropdown-ag__img"),
                t = e.find("img"),
                i = e.find(".menu-dropdown-ag__img-text"),
                o = $(this).find(".menu-dropdown-ag__link").first(),
                n = o.attr("data-img"),
                s = o.text();
            t.attr("src", n), i.text(s)
        })
    }

    var n = 0;
    $(".js-menu-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: !1,
        infinite: !1,
        waitForAnimate: !1
    }).on("beforeChange", function (e, t, i, o) {
        var n = $(this);
        n.closest(".menu-content__images").find(".js-menu-thumb").removeClass("select-color_active"), n.closest(".menu-content__images").find(".js-menu-thumb[data-slide='" + o + "']").addClass("select-color_active")
    }), $(document).on("click", ".js-menu-thumb", function (e) {
        e.preventDefault();
        var t = $(this),
            i = t.data("slide");
        return t.closest(".menu-content__images").find(".js-menu-thumb").removeClass("select-color_active"), t.addClass("select-color_active"), t.closest(".menu-content__images").find(".js-menu-slider").slick("slickGoTo", i), !1
    }), $(".js-menu-dropdown-link").on("mouseover", function (e) {
		
		if ( false )
		{
			var t = $(".js-cart-on-pin");
			$(".point_active").remove(), t.removeClass("cart-item_visible");
			var s = $(this),
				a = s.closest(".js-menu-dropdown");
			if (o(),
				n = $(document).scrollTop(), !a.hasClass("_opened")) {
				var r = (a.find(".menu-dropdown"), $(".js-overlay"));
				$(".js-menu-dropdown._opened").length ? ($(".js-menu-dropdown._opened").each(function () {
					$(this).removeClass("_opened")
				}), i(a)) : (r.addClass("_active"), i(a))
			}
		}
		else
		{
			var s = $(this);
			
			hoverInterval = setInterval(
				function ()
				{
					if ( hoverTime == 1 )
					{
						var t = $(".js-cart-on-pin");
						$(".point_active").remove(), t.removeClass("cart-item_visible");
						
						var a = s.closest(".js-menu-dropdown");
						if (o(),
							n = $(document).scrollTop(), !a.hasClass("_opened")) {
							var r = (a.find(".menu-dropdown"));
							$(".js-menu-dropdown._opened").length ? ($(".js-menu-dropdown._opened").each(function () {
								$(this).removeClass("_opened")
							}), i(a)) : (r.addClass("_active"), i(a))
						}
					}
				},
				100
			);
		}
			
    }), $(document).mouseup(function (e) {
        var t = $(".js-menu-dropdown._opened").find(".menu-dropdown"),
            i = $(".js-menu-dropdown-link");
        t.is(e.target) || 0 !== t.has(e.target).length || !t.length || i.is(e.target) && 0 === i.has(e.target).length || ($(".js-menu-dropdown._opened").removeClass("_opened"), $(".js-overlay").removeClass("_active"))
    }), $(window).on("scroll", function () {
        var e = $(document).scrollTop();
        $(".js-menu-dropdown._opened").length && e > n && ($(".js-menu-dropdown._opened").removeClass("_opened"), $(".js-overlay").removeClass("_active")), n = e
    }), $(".js-menu-dropdown-item").hover(function () {
        var i = $(this);
        i.closest(".js-menu-dropdown").hasClass("_opened") && (i.siblings(".menu-dropdown__item").removeClass("menu-dropdown__item_active"), i.addClass("menu-dropdown__item_active"), i.find(".menu-dropdown__subitems>.menu-dropdown__item_active").length || i.find(".menu-dropdown__subitems .menu-dropdown__item:first-child").addClass("menu-dropdown__item_active"), e(i), t(i), i.find(".js-menu-slider:visible").first().slick("reinit"))
    }), $(".menu-dropdown-ag__link").hover(function () {
        var e = $(this).data("img"),
            t = $(this).text(),
            i = $(".menu-dropdown-ag__img img");
        $(".menu-dropdown-ag__img-text").text(t), i.attr("src", e)
    }), $(".menu-dropdown-hor__link").hover(function () {
        var e = $(this).data("img"),
            t = $(this).text(),
            i = $(".menu-dropdown-hor__img img");
        $(".menu-dropdown-hor__img-text").text(t), i.attr("src", e)
    })
}), $(function () {
    !function () {
        var e = $(".js-basket-tab-item"),
            t = $(".js-basket-content");
        e.click(function () {
            var i = $(this),
                o = i.data("id"),
                n = $("#basket-content_" + o);
            return i.hasClass("basket-tabs__item_active") ? (e.removeClass("basket-tabs__item_active"), t.removeClass("basket__content_active")) : (e.removeClass("basket-tabs__item_active"), t.removeClass("basket__content_active"), i.addClass("basket-tabs__item_active"), n.addClass("basket__content_active")), !1
        })
    }(),
        function () {
            new Swiper("#addresses-slider", {
                direction: "horizontal",
                loop: !1,
                slidesPerView: 3,
                spaceBetween: 30,
                preventClicks: false,
                nextButton: ".addresses-slider__button-next",
                prevButton: ".addresses-slider__button-prev",
                onInit: function () {
                    var e = $(".js-addresses-slider-item");
                    e.click(function () {
                        var t = $(this);
                        t.hasClass("addresses-slider__item_active") ? e.removeClass("addresses-slider__item_active") : (e.removeClass("addresses-slider__item_active"), t.addClass("addresses-slider__item_active"))
                    })
                },
                breakpoints: {
                    1e3: {
                        slidesPerView: 2
                    },
                    700: {
                        slidesPerView: 1
                    }
                }
            })
        }(),
        function () {
            var e = $(".js-basket-item");
            e.find(".js-basket-goods-list").hide(), e.hover(function () {
                $(this).find(".js-basket-goods-list").slideDown(300)
            }, function () {
                $(this).find(".js-basket-goods-list").slideUp(300)
            })
        }(),
        function () {
            var e = $(".js-basket-form__select__CREDIT_CHECKBOX"),
                t = $(".js-basket-form__item-inner-block__CREDIT_TIME");
            e.on("change", function () {
                return "N" == $(this).val() ? (t.hide(), t.find(".basket-form__input").prop("required", !1)) : (t.show(), t.find(".basket-form__input").prop("required", !0)), !1
            })
        }()
}), $(function () {
    !function () {
        var e = $(".js-popup-link");
        window.openPopup = function (t) {
            var i;
            if ("string" != typeof t) return console.log("Target does not defined"), !1;
            if (i = $(t), i.length < 1) return console.log("Target does not exist"), !1;
            var o = "";
            return "#video-about-us" == t && e.each(function (e, t) {
                "#video-about-us" == $(t).attr("data-href") && (o = $(t).data("video-link"))
            }), i.arcticmodal({
                overlay: {
                    css: {
                        backgroundColor: "rgba(34, 34, 34, 0.90)",
                        opacity: 1
                    }
                },
                openEffect: {
                    type: "fade",
                    speed: 400
                },
                closeEffect: {
                    type: "none",
                    speed: 0
                },
                afterOpen: function () {
                    $(".test-popup__select").chosen({
                        disable_search: !1
                    }), $(".test-popup__photo-block-item").remove(), $(".test-popup__uploaded-file").prev().remove(), $(".test-popup__uploaded-file").remove(), $(".js-clear-all-inputs").find("input[type=text], textarea").val(""), $(".js-clear-input-comment").find(".js-REVIEW").val(""), o && $("#video-about-us").find("video").attr("src", o)
                }
            }), i.addClass("animated fadeInDown"), i.one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function () {
                i.removeClass("animated fadeInDown")
            }), !1
        }, e.click(function () {
            var e = $(this),
                t = e.attr("data-href");
            return "#personal-info" !== t && ($.arcticmodal("close"), console.log("!")), openPopup(t), !1
        });
        var t = $(".js-popup-link-testimonials");
        window.openPopupTestimonials = function (e) {
            var t;
            return "string" != typeof e ? (console.log("Target does not defined"), !1) : (t = $(e), t.length < 1 ? (console.log("Target does not exist"), !1) : (t.arcticmodal({
                overlay: {
                    css: {
                        backgroundColor: "rgba(34, 34, 34, 0.90)",
                        opacity: 1
                    }
                },
                openEffect: {
                    type: "fade",
                    speed: 400
                },
                closeEffect: {
                    type: "none",
                    speed: 0
                },
                afterOpen: function () {
                    $(".test-popup__select").chosen({
                        disable_search: !1
                    })
                },
                afterClose: function () {
                    var e = t.find("form").attr("data-current-url");
                    window.history.pushState(null, null, e)
                }
            }), t.addClass("animated fadeInDown"), t.one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function () {
                t.removeClass("animated fadeInDown")
            }), !1))
        }, t.click(function () {
            var e = $(this),
                t = e.attr("data-href");
            return $.arcticmodal("close"), openPopupTestimonials(t), !1
        }), $("#add-to-cart .add-to-cart__continue-shopping").click(function (e) {
            e.preventDefault(), $.arcticmodal("close")
        })
    }()
});
var CookieManager = function () {
        function e() {
            _classCallCheck(this, e)
        }

        return _createClass(e, null, [{
            key: "getUnserialized",
            value: function (e) {
                var t = $.cookie(e);
                return void 0 !== t ? JSON.parse(t) : []
            }
        }, {
            key: "setSerialized",
            value: function (e, t, i) {
                void 0 === i && (i = 365), $.cookie(e, JSON.stringify(t), {
                    path: "/",
                    expires: i
                })
            }
        }, {
            key: "getInt",
            value: function (e) {
                return void 0 !== $.cookie(e) ? parseInt($.cookie(e)) : 0
            }
        }, {
            key: "setInt",
            value: function (e, t, i) {
                void 0 === i && (i = 365), $.cookie(e, t, {
                    path: "/",
                    expires: i
                })
            }
        }]), e
    }(),
    PopupsManager = function () {
        function PopupsManager(e) {
            var t = this;
            _classCallCheck(this, PopupsManager), this.eventsInit = function () {
                var e = t;
                $(function () {
                    e.initPopups(), setInterval(e.checkTimerForShowPopup, 1e4)
                })
            }, this.initPopups = function () {
                var e = t;
                for (var i in e.params)
                    if (e.params.hasOwnProperty(i)) {
                        var o = !1;
                        switch (e.params[i].startPage) {
                            case "TARGET_PAGE":
                                var n = e.calcNeedShowPopup(e.params[i].startPageUrl, "visitedUrls"),
                                    s = e.calcNeedShowPopup(e.params[i].eventFired, "firedEvents");
                                switch (e.params[i].concatCondition) {
                                    case "AND":
                                        o = n && s;
                                        break;
                                    case "OR":
                                        o = n || s
                                }
                                break;
                            case "ANY_PAGE":
                                o = e.calcNeedShowPopup(e.params[i].eventFired, "firedEvents")
                        }
                        e.params[i].showPageUrl && e.params[i].showPageUrl.length > 0 && (o = o && e.isShowPage(i)), o && (e.needShowStack && !BX.util.in_array(i, e.needShowStack) && e.params[i].showCount > 0 && (e.needShowStack.push(i), CookieManager.setSerialized("needShowPopups", e.needShowStack, 1)), (void 0 !== e.params[i].time || parseInt(e.params[i].time) > 0) && e.startVisitTimer(i))
                    }
            }, this.checkTimerForShowPopup = function () {
                var e = t,
                    i = CookieManager.getInt("visitTime");
                if (i > 0)
                    if (e.needShowStack.length > 0) {
                        if (0 === $(".arcticmodal-container").length) {
                            var o = e.needShowStack.shift();
                            if (!BX.util.in_array(o, e.submittedForms)) {
                                var n = e.alreadyShowPopups[o] || 0;
                                n < parseInt(e.params[o].showCount) && i > parseInt(t.params[o].time) / 1e3 && (t.showPopup(o), CookieManager.setSerialized("needShowPopups", e.needShowStack, 1), e.alreadyShowPopups[o] > 0 ? e.alreadyShowPopups[o]++ : e.alreadyShowPopups[o] = 1, CookieManager.setSerialized("alreadyShowPopups", e.alreadyShowPopups, 1))
                            }
                        }
                    } else if (t.trackingTimersId.length > 0) {
                        var s = !0,
                            a = !1,
                            r = void 0;
                        try {
                            for (var l, c = t.trackingTimersId[Symbol.iterator](); !(s = (l = c.next()).done); s = !0) {
                                var d = l.value;
                                clearInterval(d)
                            }
                        } catch (e) {
                            a = !0, r = e
                        } finally {
                            try {
                                !s && c.return && c.return()
                            } finally {
                                if (a) throw r
                            }
                        }
                        CookieManager.setSerialized("alreadyShowPopups", e.alreadyShowPopups, 1)
                    }
            }, this.isShowPage = function (e) {
                var i = t,
                    o = !0,
                    n = !1,
                    s = void 0;
                try {
                    for (var a, r = i.params[e].showPageUrl[Symbol.iterator](); !(o = (a = r.next()).done); o = !0) {
                        var l = a.value,
                            c = "^" + l;
                        /\*/.test(l) ? c = l.replace(/\*/g, ".*") : c += "$";
                        if (new RegExp(c).test(window.location.pathname)) return !0
                    }
                } catch (e) {
                    n = !0, s = e
                } finally {
                    try {
                        !o && r.return && r.return()
                    } finally {
                        if (n) throw s
                    }
                }
                return !1
            }, this.params = e, this.trackingTimersId = [], this.needShowStack = CookieManager.getUnserialized("needShowPopups"), this.alreadyShowPopups = CookieManager.getUnserialized("alreadyShowPopups"), this.submittedForms = CookieManager.getUnserialized("BITRIX_SM_submittedForms"), 0 === this.alreadyShowPopups.length && (this.alreadyShowPopups = {}), this.eventsInit()
        }

        return _createClass(PopupsManager, [{
            key: "startVisitTimer",
            value: function (e) {
                this.trackingTimersId[e] = setInterval(function () {
                    var e = CookieManager.getInt("visitTime");
                    CookieManager.setInt("visitTime", e + 10)
                }, 1e4)
            }
        }, {
            key: "showPopup",
            value: function (e) {
                $.arcticmodal("close"), $("#popup-" + e).arcticmodal({
                    afterClose: function () {
                        CookieManager.setInt("visitTime", 0)
                    }
                })
            }
        }, {
            key: "calcNeedShowPopup",
            value: function calcNeedShowPopup(expressions, cookieName) {
                var items = CookieManager.getUnserialized(cookieName),
                    resultPrevExpr = !0;
                if (expressions.length > 0) {
                    var indexExpr = 1,
                        _iteratorNormalCompletion3 = !0,
                        _didIteratorError3 = !1,
                        _iteratorError3 = void 0;
                    try {
                        for (var _iterator3 = expressions[Symbol.iterator](), _step3; !(_iteratorNormalCompletion3 = (_step3 = _iterator3.next()).done); _iteratorNormalCompletion3 = !0) {
                            var expr = _step3.value,
                                and = /&/g.test(expr),
                                or = /\|/g.test(expr),
                                concatDefault = " && ";
                            if (indexExpr > 1) {
                                var firstSym = expr.charAt(0);
                                "|" == firstSym && (concatDefault = " || ")
                            }
                            if (and) {
                                var operands = expr.split("&"),
                                    localExprRes = !0,
                                    _iteratorNormalCompletion4 = !0,
                                    _didIteratorError4 = !1,
                                    _iteratorError4 = void 0;
                                try {
                                    for (var _iterator4 = operands[Symbol.iterator](), _step4; !(_iteratorNormalCompletion4 = (_step4 = _iterator4.next()).done); _iteratorNormalCompletion4 = !0) {
                                        var op = _step4.value;
                                        op && (localExprRes = localExprRes && BX.util.in_array(op.trim(), items))
                                    }
                                } catch (e) {
                                    _didIteratorError4 = !0, _iteratorError4 = e
                                } finally {
                                    try {
                                        !_iteratorNormalCompletion4 && _iterator4.return && _iterator4.return()
                                    } finally {
                                        if (_didIteratorError4) throw _iteratorError4
                                    }
                                }
                                resultPrevExpr = 1 == indexExpr ? localExprRes : eval("resultPrevExpr" + concatDefault + "localExprRes")
                            } else if (or) {
                                var _operands = expr.split("|"),
                                    _localExprRes = !1,
                                    _iteratorNormalCompletion5 = !0,
                                    _didIteratorError5 = !1,
                                    _iteratorError5 = void 0;
                                try {
                                    for (var _iterator5 = _operands[Symbol.iterator](), _step5; !(_iteratorNormalCompletion5 = (_step5 = _iterator5.next()).done); _iteratorNormalCompletion5 = !0) {
                                        var _op = _step5.value;
                                        _op && (_localExprRes = _localExprRes || BX.util.in_array(_op.trim(), items))
                                    }
                                } catch (e) {
                                    _didIteratorError5 = !0, _iteratorError5 = e
                                } finally {
                                    try {
                                        !_iteratorNormalCompletion5 && _iterator5.return && _iterator5.return()
                                    } finally {
                                        if (_didIteratorError5) throw _iteratorError5
                                    }
                                }
                                resultPrevExpr = 1 == indexExpr ? _localExprRes : eval("resultPrevExpr" + concatDefault + "localExprRes")
                            } else if (resultPrevExpr = resultPrevExpr && BX.util.in_array(expr, items), 1 == indexExpr) resultPrevExpr = BX.util.in_array(expr, items);
                            else {
                                var _localExprRes2 = BX.util.in_array(expr, items);
                                resultPrevExpr = eval("resultPrevExpr" + concatDefault + "localExprRes")
                            }
                            indexExpr++
                        }
                    } catch (e) {
                        _didIteratorError3 = !0, _iteratorError3 = e
                    } finally {
                        try {
                            !_iteratorNormalCompletion3 && _iterator3.return && _iterator3.return()
                        } finally {
                            if (_didIteratorError3) throw _iteratorError3
                        }
                    }
                }
                return resultPrevExpr
            }
        }]), PopupsManager
    }(),
    PopupsTracking = function () {
        function e(t) {
            var i = this;
            _classCallCheck(this, e), this.eventsInit = function () {
                var e = i;
                $(function () {
                    e.trackInit()
                })
            }, this.setTrackUrls = function (e) {
                var t = [];
                i.params[e].startPageUrl.forEach(function (e) {
                    if (/&/g.test(e)) {
                        var i = e.split("&");
                        i.length > 0 && i.forEach(function (e) {
                            e && t.push(e.trim())
                        })
                    } else if (/\|/g.test(e)) {
                        var o = e.split("|");
                        o.length > 0 && o.forEach(function (e) {
                            e && t.push(e.trim())
                        })
                    } else t.push(e.trim())
                }), i.trackingUrls = t
            }, this.getUrlParameter = function (sParam) {
                var sPageURL = decodeURIComponent(window.location.search.substring(1)),
                    sURLVariables = sPageURL.split('&'),
                    sParameterName,
                    i;

                for (i = 0; i < sURLVariables.length; i++) {
                    sParameterName = sURLVariables[i].split('=');

                    if (sParameterName[0] === sParam) {
                        return sParameterName[1] === undefined ? true : sParameterName[1];
                    }
                }
            }, this.trackInit = function () {
                for (var e in i.params)
                    console.log(1);
                for (let utmId in i.params[e]['utmHidden']) {
                    if (this.getUrlParameter(i.params[e]['utmHidden'][utmId]['utmName']) != undefined) {
                        document.cookie = "utmHidden=1; path=/";
                        return false;
                    }
                }
                if (CookieManager.getInt('utmHidden')) {
                    return false;
                }
                console.log(2);
                if (console.log(i.params[e].startPage), "TARGET_PAGE" == i.params[e].startPage) {
                    i.setTrackUrls(e);
                    var t = !0,
                        o = !1,
                        n = void 0;
                    try {
                        for (var s, a = i.trackingUrls[Symbol.iterator](); !(t = (s = a.next()).done); t = !0) {
                            var r = s.value;
                            i.checkUrl(r)
                        }
                    } catch (e) {
                        o = !0, n = e
                    } finally {
                        try {
                            !t && a.return && a.return()
                        } finally {
                            if (o) throw n
                        }
                    }
                }
            }, this.params = t, this.trackingUrls = [], this.eventsInit()
        }

        return _createClass(e, [{
            key: "getCurrentUrl",
            value: function () {
                return window.location.pathname
            }
        }, {
            key: "checkUrl",
            value: function (e) {
                var t = this.getCurrentUrl();
                e = e.replace(/\//g, "/"), e = e.replace(/&/g, ""), e = e.replace(/\|/g, "");
                var i = "^" + e;
                /\*/.test(e) ? i = e.replace(/\*/g, ".*") : i += "$", new RegExp(i).test(t) && this.setVisitUrl(e)
            }
        }, {
            key: "setVisitUrl",
            value: function (e) {
                var t = CookieManager.getUnserialized("visitedUrls");
                BX.util.in_array(e, t) || t.push(e), CookieManager.setSerialized("visitedUrls", t, 3)
            }
        }]), e
    }();
$(function () {
    !function () {
        var e = $("#open-search"),
            t = $("#header-search"),
            i = $("#open-search-close"),
            o = $("#open-search-input"),
            n = o.next(),
            s = e.hasClass("fixed-header__search-open_active"),
            a = $(".js-search-page__info-line-query");
        s ? (e.show(), i.click(function () {
            return e.hide(), s = !1, !1
        })) : e.hide(), t.click(function () {
            e.fadeIn(300), i.click(function () {
                return e.hide(), !1
            })
        }), o.click(function () {
            n.hide(), $(this).attr("placeholder", "")
        });
        var r = o.attr("placeholder");
        o.keyup(function () {
            $(this).val() ? (n.hide(), $(this).attr("placeholder", "")) : (n.show(), $(this).attr("placeholder", r))
        }), e.hasClass("fixed-header__search-open_active") && (o.val(a.attr("data-query")), n.hide())
    }(),
        function () {
            var e = $("#search-open-link");
            e.click(function () {
                var t = $(this),
                    i = t.closest(".fixed-header__search-open-input-holder"),
                    o = i.find("#open-search-input"),
                    n = e.text();
                return o.val(n), e.hide(300), o.focus(), o.parent("form").submit(), !1
            })
        }(),
        function () {
            $(".js-search-page__content-text").trunk8({
                lines: 2,
                fill: "&hellip;"
            }), $(".js-features-balloon-text").trunk8({
                lines: 5,
                fill: '&hellip; <a id="read-more" href="#" class="features-block__item-balloon-link">пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ</a>'
            }), $(document).on("click", "#read-more", function (e) {
                return $(this).parent().trunk8("revert").append(' <a id="read-less" href="#" class="features-block__item-balloon-link">пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ</a>'), !1
            }), $(document).on("click", "#read-less", function (e) {
                return $(this).parent().trunk8(), !1
            })
        }(),
        function () {
            var e = $(".js-context"),
                t = $(".js-search-input"),
                i = t.val();
            e.length > 0 && (e.unhighlight(), e.highlight(i))
        }()
}), $(function () {
    function e(e) {
        new Swiper(e.find(".swiper-container"), {
            direction: "vertical",
            loop: !1,
            slidesPerView: 3,
            preventClicks: false,
            nextButton: e.find(".b-pic-slider__arrow._next"),
            prevButton: e.find(".b-pic-slider__arrow._prev"),
            breakpoints: {
                700: {
                    direction: "horizontal"
                }
            }
        });
        e.find(".b-pic-slider__slider-item").on("click", function (t) {
            t.preventDefault();
            var i = $(this),
                o = e.find(".b-pic-slider__img-link");
            e.find(".b-pic-slider__slider-item").removeClass("_current"), i.addClass("_current"), o.attr("href", i.data("full-img")), o.attr("title", i.data("description")), o.find(".b-pic-slider__img-img").attr("src", i.data("preview-img")), o.find(".b-pic-slider__img-img").attr("alt", i.data("description"))
        })
    }

    function t() {
        var e = $(".js-one-point"),
            t = $(".js-cart-on-pin"),
            o = $(".js-cards-container"),
            n = $(".js-blocks-wrapper"),
            s = $(window).width();
        e.off("click"), e.click(function () {
            i = $(window).scrollTop();
            var e = $(this),
                a = e.clone(),
                r = e.position(),
                l = r.left + (n.width() / 2 - o.width() / 2),
                c = r.top,
                d = e.offset(),
                p = d.left,
                u = d.top,
                f = e.data("item"),
                h = $("#good-card-" + f),
                m = h.height(),
                _ = h.width(),
                v = o.width(),
                g = h.hasClass("cart-item_visible");
            return console.log(n.width(), "__", o.width()), console.log((n.width() - o.width()) / 2), $(".point_active").remove(), t.removeClass("cart-item_visible"), l > v - _ ? g ? (a.remove(), t.removeClass("cart-item_visible")) : (a.remove(), t.removeClass("cart-item_visible"), n.append(a), a.addClass("point_active"), a.addClass("point_right"), h.addClass("cart-item_visible"), h.addClass("cart-item_right"), a.css({
                top: u + "px",
                left: p + "px"
            }), o.click(function () {
                a.remove(), h.removeClass("cart-item_visible")
            }), s <= 1440 ? h.css({
                top: c - m / 2 + "px",
                left: l - _ + 18 + "px"
            }) : h.css({
                top: c - m / 2 + "px",
                left: l - _ + 24 + "px"
            })) : g ? (a.remove(), t.removeClass("cart-item_visible")) : (a.remove(), t.removeClass("cart-item_visible"), n.append(a), a.addClass("point_active"), h.addClass("cart-item_visible"), h.css({
                top: c - m / 2 + "px",
                left: l + 24 + "px"
            }), a.css({
                top: u + "px",
                left: p + "px"
            }), s <= 1440 ? h.css({
                top: c - m / 2 + "px",
                left: l + 18 + "px"
            }) : h.css({
                top: c - m / 2 + "px",
                left: l + 24 + "px"
            }), o.click(function () {
                a.remove(), h.removeClass("cart-item_visible")
            })), a.one("click", function () {
                return a.remove(), h.removeClass("cart-item_visible"), !1
            }), !1
        })
    }

    $(".js-pic-slider").each(function () {
        e($(this))
    }), window.picSliderInit = e, $(window).on("load", function () {
        $(".good-item__slider-for").trigger("reInit")
    });
    var i = $(window).scrollTop();
    $(window).on("scroll", function () {
        var e = $(".js-cart-on-pin"),
            t = $(".point_active");
        $(this).scrollTop() - i > 300 && (t.remove(), e.removeClass("cart-item_visible"))
    }),
        function () {
            t()
        }(), $(window).resize(function () {
        $("#interactive-slider").slick("unslick")
    }),
        function () {
            var e = $("#interactive-slider"),
                i = $(".js-interactive__select-color");
            $(".js-interactive-outer").on("init", function (e) {
                t()
            }).on("reInit", function (e) {
                t()
            }).on("afterChange", function (e, i, o) {
                t();
                var n = $(this).find('[data-slick-index="' + o + '"]').data("color");
                $(".js-interactive__select-color").removeClass("interactive__select-color_active"), $(".js-interactive__select-color[data-slide='" + n + "']").addClass("interactive__select-color_active")
            }).on("beforeChange", function (e, i, o, n) {
                t()
            }).slick({
                arrows: !0,
                dots: !1,
                fade: !0,
                infinite: !0,
                speed: 600,
                slidesToShow: 1,
                draggable: !1
            }), e.on("init", function (e) {
                t()
            }).on("reInit", function (e) {
                t()
            }).on("afterChange", function (e) {
                t()
            }).slick({
                dots: !1,
                arrows: !1,
                infinite: !0,
                speed: 600,
                fade: !0,
                slidesToShow: 1,
                slidesToScroll: 1,
                pauseOnHover: !0,
                accessibility: !1,
                draggable: !1
            }), i.on("click", function () {
                var t = $(this),
                    o = t.data("slide");
                i.removeClass("interactive__select-color_active"), t.addClass("interactive__select-color_active");
                var n = e.find(".js-interactive-slide-inner__first[data-color='" + o + "']").data("slick-index");
                return $(".js-interactive-outer").slick("slickGoTo", n), !1
            }), e.on("beforeChange", function (e, t, i, o) {
                var n = $(t.$slides.get(o));
                n.data("color")
            })
        }(),
        function () {
            function e() {
                o.css("padding", "0");
                var e = o.width(),
                    t = $(".js-collection-new-previews-item").first().outerWidth(!0) * $(".js-collection-new-previews-item").length;
                if (e > t) {
                    var i = (e - t) / 2;
                    o.css("padding", "0 " + i + "px")
                }
            }

            var i = $(".js-collection-new-slider"),
                o = $(".js-collection-new-previews");
            i.length && o.length && (i.on("init", function (e) {
                t()
            }).on("reInit", function (e) {
                t()
            }).slick({
                arrows: !0,
                dots: !1,
                infinite: !0,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1,
                fade: !1,
                asNavFor: ".js-collection-new-previews"
            }), o.on("init", function (t) {
                e()
            }).on("reInit", function (t) {
                e()
            }).slick({
                arrows: !1,
                dots: !1,
                infinite: !1,
                speed: 300,
                slidesToShow: 20,
                slidesToScroll: 20,
                fade: !1,
                asNavFor: ".js-collection-new-slider",
                focusOnSelect: !0,
                variableWidth: !0,
                responsive: [{
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 18,
                        slidesToScroll: 18
                    }
                }, {
                    breakpoint: 1420,
                    settings: {
                        slidesToShow: 16,
                        slidesToScroll: 16
                    }
                }, {
                    breakpoint: 1230,
                    settings: {
                        slidesToShow: 14,
                        slidesToScroll: 14
                    }
                }, {
                    breakpoint: 1130,
                    settings: {
                        slidesToShow: 12,
                        slidesToScroll: 12
                    }
                }, {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 10,
                        slidesToScroll: 10
                    }
                }, {
                    breakpoint: 700,
                    settings: {
                        slidesToShow: 8,
                        slidesToScroll: 8
                    }
                }, {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 6,
                        slidesToScroll: 6
                    }
                }, {
                    breakpoint: 420,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4
                    }
                }]
            })), $(window).resize(function () {
                e()
            })
        }(),
        function () {
            new Swiper("#top-main-slider", {
                direction: "horizontal",
                effect: "fade",
                speed: 600,
                loop: !0,
                slidesPerView: 1,
                autoplay: 5000,
                preventClicks: false,
                autoplayDisableOnInteraction: !1,
                nextButton: ".top-slider__button_right",
                prevButton: ".top-slider__button_left",
                pagination: ".main-slide__pagination",
                paginationClickable: !0,
                onSlideChangeEnd: function (e, t, i) {
                    var o = Number($("#top-main-slider .swiper-slide-active").data("swiper-slide-index")) + 1;
                    e.slideTo(o, 0)
                }
            })
        }(),
        function () {
            new Swiper("#dmi-slider", {
                direction: "horizontal",
                loop: !0,
                effect: "fade",
                speed: 600,
                slidesPerView: 1,
                preventClicks: false,
                nextButton: ".dmi-slider__slide-button-right",
                prevButton: ".dmi-slider__slide-button-left"
            })
        }(),
        function () {
            new Swiper("#good-slider", {
                direction: "horizontal",
                loop: !0,
                effect: "fade",
                speed: 600,
                slidesPerView: 1,
                preventClicks: false,
                nextButton: ".good-slider__button-next",
                prevButton: ".good-slider__button-prev"
            })
        }(),
        function () {
            new Swiper("#news-slider", {
                direction: "horizontal",
                loop: !0,
                speed: 600,
                slidesPerView: 3,
                spaceBetween: 30,
                preventClicks: false,
                nextButton: ".news-slider__button-next",
                prevButton: ".news-slider__button-prev",
                breakpoints: {
                    1e3: {
                        spaceBetween: 15
                    },
                    900: {
                        slidesPerView: 2
                    }
                }
            })
        }(),
        function () {
            $(".js-news-slider-desc").trunk8({
                lines: 3,
                fill: "&hellip;"
            })
        }(),
        function () {
            new Swiper("#collection-slider", {
                direction: "horizontal",
                loop: !0,
                effect: "fade",
                speed: 600,
                slidesPerView: 1,
                preventClicks: false,
                nextButton: ".col-slider__button-next",
                prevButton: ".col-slider__button-prev"
            })
        }(),
        function () {
            new Swiper("#features-slider", {
                direction: "horizontal",
                loop: !0,
                effect: "fade",
                speed: 600,
                slidesPerView: 1,
                preventClicks: false,
                nextButton: ".features-slider__button-next",
                prevButton: ".features-slider__button-prev"
            })
        }(),
        function () {
            var e = !0;
            1 == $("#designer-slider .swiper-slide").length && (e = !1);
            new Swiper("#designer-slider", {
                direction: "horizontal",
                loop: e,
                slidesPerView: 1,
                effect: "fade",
                speed: 600,
                preventClicks: false,
                nextButton: ".designer-slider__button-right",
                prevButton: ".designer-slider__button-left"
            })
        }(),
        function () {
            var e = $(".styled-select");
            e.chosen({
                disable_search: !0
            }), e.on("chosen:hiding_dropdown", function (e, t) {
                setTimeout(function () {
                    $("body").click()
                }, 100)
            })
        }(),
        function () {
            var e = $("#composition-item-slider"),
                t = $(".js-composition-item__select-color"),
                i = $(".js-composition-item-inner"),
                o = $(".js-composition-arrow-next"),
                n = $(".js-composition-arrow-prev");
            i.each(function () {
                var e = $(this);
                e.on("init", function (t) {
                    e.find(".slick-slide").length < 2 && (n.hide(), o.hide())
                }).slick({
                    arrows: !1,
                    dots: !1,
                    infinite: !1,
                    speed: 600,
                    slidesToShow: 1,
                    draggable: !1,
                    fade: !0
                })
            }), e.slick({
                dots: !1,
                arrows: !1,
                infinite: !1,
                speed: 600,
                slidesToShow: 1,
                slidesToScroll: 1,
                pauseOnHover: !0,
                accessibility: !1,
                draggable: !1,
                fade: !0
            }), e.on("beforeChange", function (e, t, i, s) {
                var a = $(t.$slides.get(s));
                a.data("color");
                if (a.hasClass("composition-item__item")) {
                    $(".js-composition-item-inner:eq(" + s + ") .slick-slide").length < 2 ? (n.hide(), o.hide()) : (n.show(), o.show())
                }
            }), t.click(function () {
                var i = $(this),
                    o = i.data("slide");
                return t.removeClass("composition-item__select-color_active"), i.addClass("composition-item__select-color_active"), e.slick("slickGoTo", o), !1
            }), n.on("click", function () {
                var t = e.slick("slickCurrentSlide");
                $(".js-composition-item-inner:eq(" + t + ")").slick("slickPrev")
            }), o.on("click", function () {
                var t = e.slick("slickCurrentSlide");
                $(".js-composition-item-inner:eq(" + t + ")").slick("slickNext")
            })
        }(),
        function () {
            $("#news-inner-slider").slick({
                dots: !1,
                arrows: !0,
                infinite: !0,
                speed: 600,
                slidesToShow: 1,
                slidesToScroll: 1,
                pauseOnHover: !0,
                accessibility: !1,
                draggable: !1,
                fade: !0
            })
        }(),
        function () {
            new Swiper("#accessory-slider", {
                direction: "horizontal",
                loop: !0,
                effect: "fade",
                speed: 600,
                slidesPerView: 3,
                spaceBetween: 30,
                preventClicks: false,
                nextButton: ".accessory-slider__button-next",
                prevButton: ".accessory-slider__button-prev"
            })
        }(),
        function () {
            new Swiper("#where-to-buy-top-slider", {
                direction: "horizontal",
                loop: !0,
                effect: "fade",
                speed: 600,
                slidesPerView: 1,
                spaceBetween: 30,
                preventClicks: false,
                nextButton: ".where-to-buy-top__button-next",
                prevButton: ".where-to-buy-top__button-prev"
            })
        }(),
        function () {
            new Swiper("#mattresses-slider", {
                direction: "horizontal",
                slidesPerView: 1,
                spaceBetween: 50,
                effect: "fade",
                speed: 600,
                preventClicks: false,
                nextButton: ".composition-item__arrow_right",
                prevButton: ".composition-item__arrow_left"
            })
        }(),
        function () {
            $(window).width() > 1e3 && $(".js-collection-item-slider").each(function (e, i) {
                new Swiper(i, {
                    direction: "horizontal",
                    slidesPerView: 1,
                    spaceBetween: 50,
                    effect: "fade",
                    speed: 600,
                    preventClicks: false,
                    nextButton: ".collection__item-arrow_next",
                    prevButton: ".collection__item-arrow_prev",
                    onInit: function () {
                        t()
                    },
                    onSlideChangeEnd: function () {
                        t()
                    }
                })
            })
        }(),
        function () {
            var e = $(".js-goods-menu__list"),
                t = $(".categories__menu-slide"),
                i = $(window).width();
            if (e.length) {
                var o = function (i) {
                    switch ($(".js-goods-menu__list").hasClass("slick-slider") && $(".js-goods-menu__list").slick("unslick"), !0) {
                        case t.length > 10 && i >= 1500:
                            e.slick({
                                dots: !1,
                                arrows: !0,
                                infinite: !1,
                                speed: 300,
                                slidesToShow: 10,
                                slidesToScroll: 10
                            });
                            break;
                        case t.length > 6 && i < 1500 && i >= 1e3:
                            e.slick({
                                dots: !1,
                                arrows: !0,
                                infinite: !1,
                                speed: 300,
                                slidesToShow: 6,
                                slidesToScroll: 6
                            });
                            break;
                        case t.length > 5 && i < 1e3 && i >= 800:
                            e.slick({
                                dots: !1,
                                arrows: !0,
                                infinite: !1,
                                speed: 300,
                                slidesToShow: 5,
                                slidesToScroll: 5
                            });
                            break;
                        case t.length > 4 && i < 800 && i >= 480:
                            e.slick({
                                dots: !1,
                                arrows: !0,
                                infinite: !1,
                                speed: 300,
                                slidesToShow: 4,
                                slidesToScroll: 4
                            });
                            break;
                        case t.length > 2 && i < 480:
                            e.slick({
                                dots: !1,
                                arrows: !0,
                                infinite: !1,
                                speed: 300,
                                slidesToShow: 2,
                                slidesToScroll: 2
                            })
                    }
                };
                o(i), $(window).on("resize", function () {
                    var e = $(window).width();
                    o(e)
                })
            }
        }()
}), $(function () {
    $(".js-select-kitchen").chosenCustom(), $(document).on("click", ".js-comment-toggle", function (e) {
        e.preventDefault(), $(".js-comment-wrap").slideToggle("slow")
    }),
        function () {
            function e() {
                var e = Number(document.documentElement.clientWidth),
                    t = $(".js-constructor-items");
                if (e <= 768) {
                    var i = Number(t.outerWidth());
                    t.outerHeight(i / (5 / 3))
                } else t.outerHeight("auto")
            }

            function t() {
                window.innerWidth > 768 ? $(".kitchen-constructor__colors").mCustomScrollbar({
                    axis: "y",
                    setWidth: 5,
                    scrollbarPosition: "outside",
                    theme: "light",
                    scrollInertia: .5
                }) : $(".kitchen-constructor__colors").hasClass("mCustomScrollbar") && $(".kitchen-constructor__colors").mCustomScrollbar("destroy")
            }

            !function () {
                var e = $(".js-constructor-color-current");
                $(".kitchen-constructor__type:not(:last-child) .js-constructor-color").hover(function (t) {
                    if (window.innerWidth > 768) {
                        var i = ($(".kitchen-constructor__colors .mCSB_container").height(), $(this).position().top),
                            o = $(this).attr("data-text");
                        e.text(o), e.css("top", 55 + i + "px"), e.css("bottom", "auto")
                    }
                }), $(".kitchen-constructor__type:last-child .js-constructor-color").hover(function (t) {
                    if (window.innerWidth > 768) {
                        var i = $(this).closest(".kitchen-constructor__type-colors").height();
                        console.log(i);
                        var o = ($(".kitchen-constructor__colors .mCSB_container").height(), $(this).position().top),
                            n = $(this).attr("data-text");
                        e.text(n), e.css("top", "auto"), e.css("bottom", i - o + "px")
                    }
                })
            }(), t(), e(), $(window).resize(function () {
                e(), t()
            }), $(document).on("click", ".js-constructor-color", function (e) {
                e.preventDefault();
                var t = $(this),
                    i = t.data("type"),
                    o = t.data("color");
                if (i && o) {
                    t.closest(".kitchen-constructor__type-colors").find(".js-constructor-color").removeClass("_active"), t.addClass("_active"), $(".js-constructor-item[data-type='" + i + "']").removeClass("_active"), $(".js-constructor-item[data-type='" + i + "'][data-color='" + o + "']").addClass("_active")
                }
            })
        }(),
        function () {
            $(document).on("click", ".js-kitchen-file-btn", function (e) {
                e.preventDefault(), $(this).siblings('input[type="file"]').last().trigger("click")
            }), $(document).on("click", ".js-test-popup__photo-block-item-close.kitchen-design__file-close", function (e) {
                e.preventDefault();
                var t = $(this).data("num");
                $(".js-input-file-" + t).remove(), $(".js-input-file-block-" + t).remove()
            }), $(document).on("change", ".js-kitchen-file-input", function () {
                var e = this.files[0],
                    t = new FileReader,
                    i = $(this).closest("form").find(".js-kitchen-file-wrap"),
                    o = '                    <div class="test-popup__photo-block-item kitchen-design__file js-input-file-block-{num}">                        <div class="test-popup__photo-block-item-img js-input-file-img-{num}"></div>                        <div class="test-popup__photo-block-item-text">                            <p class="test-popup__photo-block-item-name kitchen-design__file-name">' + e.name + '</p>                            <p class="test-popup__photo-block-item-size">' + (e.size / 1024 / 1024).toFixed(2) + 'MB</p>                        </div>                        <a href="#" class="test-popup__photo-block-item-close kitchen-design__file-close js-test-popup__photo-block-item-close"                         data-num="{num}"></a>                    </div>',
                    n = i.find(".test-popup__photo-block-item").length,
                    s = Number(i.data("files-number"));
                o = o.replace(/\{num\}/g, s), 0 === n ? i.html(o) : i.find(".test-popup__photo-block-item").last().after(o);
                var a = $(this).clone();
                a.removeClass("js-input-file-" + s);
                var r = s + 1;
                i.data("files-number", r), a.addClass("js-input-file-" + r), $(this).after(a), t.addEventListener("load", function () {
                    e.type.indexOf("image") >= 0 ? $(".js-input-file-img-" + s).css("background-image", 'url("' + t.result + '")') : $(".js-input-file-img-" + s).remove()
                }, !1), e && t.readAsDataURL(e)
            })
        }(),
        function () {
            $(".js-select-red").select2({
                minimumResultsForSearch: -1,
                dropdownCssClass: "red-wrap"
            })
        }(),
        function () {
            function e(e) {
                var t = e.find(".js-sublist");
                if (window.innerWidth < 768 && t.length) {
                    var i = t.offset().left,
                        o = t.position().left,
                        n = t.outerWidth(),
                        s = document.documentElement.clientWidth,
                        a = s - i - n + o;
                    a < 0 ? t.css("left", Number(a - 10) + "px") : t.css("left", "0")
                } else t.css("left", "-20px")
            }

            $(document).on("click", ".js-category", function (t) {
                t.preventDefault();
                var i = $(this),
                    o = i.closest(".kitchen-filter__item");
                o.hasClass("_clicked") ? o.removeClass("_clicked") : ($(".kitchen-filter__item").removeClass("_clicked"), o.addClass("_clicked"), e(o))
            }), $(document).mouseup(function (e) {
                var t = $(".kitchen-filter__item");
                !t.is(e.target) && 0 === t.has(e.target).length && t.hasClass("_clicked") && t.removeClass("_clicked")
            }), $(window).on("resize", function () {
                e($(".kitchen-filter__item._clicked"))
            })
        }()
}), $(function () {
    !function () {
        $(document).on("click", ".js-item-desc__detail-button", function (e) {
            e.preventDefault(), $(this).closest(".js-item-desc").find(".js-item-desc__detail").toggleClass("display-none");
            var t = $(this).data("text-detail"),
                i = $(this).data("text-preview");
            return $(this).text() === t ? $(this).text(i) : $(this).text(t), !1
        })
    }()
}), $(function () {
    !function () {
        new Swiper("#kitchen-slider", {
            direction: "horizontal",
            effect: "fade",
            loop: !0,
            speed: 600,
            preventClicks: false,
            slidesPerView: 1,
            autoplay: 5e3,
            autoplayDisableOnInteraction: !1,
            nextButton: ".kitchen-slider__button-next",
            prevButton: ".kitchen-slider__button-prev"
        })
    }(),
        function () {
            new Swiper("#kitchen-options-slider", {
                direction: "horizontal",
                loop: !0,
                slidesPerView: 1,
                preventClicks: false,
                speed: 600,
                nextButton: ".kitchen-options__button-next",
                prevButton: ".kitchen-options__button-prev"
            })
        }(),
        function () {
            function e() {
                var e = $("#kitchen-collection-slider"),
                    t = document.documentElement.clientWidth,
                    i = e.find(".swiper-slide").length;
                t > 768 && i <= 2 || t <= 768 && 1 === i ? e.find(".swiper-wrapper").addClass("_centered") : e.find(".swiper-wrapper").removeClass("_centered")
            }

            new Swiper("#kitchen-collection-slider", {
                direction: "horizontal",
                loop: !1,
                slidesPerView: 2,
                spaceBetween: 60,
                touchRatio: 0,
                speed: 600,
                simulateTouch: !1,
                preventClicks: false,
                autoplayDisableOnInteraction: !1,
                nextButton: ".kitchen-collection__compositions-wrap .news-slider__button-next",
                prevButton: ".kitchen-collection__compositions-wrap .news-slider__button-prev",
                breakpoints: {
                    1440: {
                        spaceBetween: 30,
                        slidesPerView: 2
                    },
                    768: {
                        slidesPerView: 1
                    }
                }
            });
            e(), $(window).resize(function () {
                e()
            }), $(document).on("click", ".js-composition-cart-toggle", function (e) {
                var t = $(this).closest(".js-composition-cart");
                t.hasClass("_clicked") ? (t.removeClass("_clicked"), $(".js-kitchen-arrow").css("z-index", "100")) : ($(".js-composition-cart").removeClass("_clicked"), t.addClass("_clicked"), $(".js-kitchen-arrow").css("z-index", "-1"))
            }), $(document).mouseup(function (e) {
                var t = $(".js-composition-cart");
                !t.is(e.target) && 0 === t.has(e.target).length && t.hasClass("_clicked") && (t.removeClass("_clicked"), $(".js-kitchen-arrow").css("z-index", "100"))
            })
        }(),
        function () {
            new Swiper("#kitchen-features-slider", {
                direction: "horizontal",
                loop: !1,
                speed: 600,
                effect: "fade",
                spaceBetween: 10,
                preventClicks: false,
                autoplayDisableOnInteraction: !1,
                nextButton: ".kitchen-collection__features-wrap .news-slider__button-next",
                prevButton: ".kitchen-collection__features-wrap .news-slider__button-prev"
            })
        }(),
        function () {
            function e(e) {
                var t = $("#kitchen-projects-slider"),
                    i = document.documentElement.clientWidth,
                    o = t.find(".swiper-slide").length;
                i > 1440 && o <= 3 || i > 768 && o <= 2 || i <= 768 && 1 === o ? t.find(".swiper-wrapper").addClass("_centered") : t.find(".swiper-wrapper").removeClass("_centered")
            }

            var t = new Swiper("#kitchen-projects-slider", {
                direction: "horizontal",
                loop: !1,
                spaceBetween: 20,
                slidesPerView: 3,
                speed: 600,
                preventClicks: false,
                autoplayDisableOnInteraction: !1,
                nextButton: ".kitchen-collection__projects-wrap .news-slider__button-next",
                prevButton: ".kitchen-collection__projects-wrap .news-slider__button-prev",
                breakpoints: {
                    1440: {
                        spaceBetween: 20,
                        slidesPerView: 2
                    },
                    767: {
                        slidesPerView: 1
                    }
                }
            });
            e(t), $(window).resize(function () {
                e(t)
            })
        }(),
        function () {
            function e() {
                var e = $("#shop-list-slider"),
                    t = document.documentElement.clientWidth,
                    i = e.find(".swiper-slide").length;
                t > 992 && i <= 3 || t > 700 && i <= 2 || t <= 767 && 1 === i ? e.find(".swiper-wrapper").addClass("_centered") : t <= 767 || e.find(".swiper-wrapper").removeClass("_centered")
            }

            function t() {
                window.innerWidth < 768 && i.length ? (i.destroy(!0, !0), i = "") : window.innerWidth >= 768 && !i.length && (i = new Swiper("#shop-list-slider", {
                    direction: "horizontal",
                    loop: !1,
                    slidesPerView: 3,
                    nextButton: ".shop-list__button-next",
                    prevButton: ".shop-list__button-prev",
                    breakpoints: {
                        992: {
                            slidesPerView: 2
                        },
                        767: {
                            slidesPerView: 1
                        }
                    }
                }))
            }

            var i = "";
            t(), e(), $(window).resize(function () {
                e(), t()
            })
        }(),
        function () {
            new Swiper("#partners-slider", {
                direction: "horizontal",
                loop: !0,
                effect: "fade",
                slidesPerView: 1,
                autoplay: 5e3,
                speed: 600,
                preventClicks: false,
                autoplayDisableOnInteraction: !1,
                nextButton: ".kitchen-slider__button-next",
                prevButton: ".kitchen-slider__button-prev"
            }), new Swiper("#platter-slider", {
                direction: "horizontal",
                effect: "fade",
                loop: !1,
                slidesPerView: 1,
                speed: 600,
                preventClicks: false,
                nextButton: ".kitchen-slider__button-next",
                prevButton: ".kitchen-slider__button-prev"
            })
        }(),
        function () {
            new Swiper(".kitchen-collection__project-pic-slider", {
                direction: "horizontal",
                nextButton: ".kitchen-collection__project-pic-slider__button-next",
                prevButton: ".kitchen-collection__project-pic-slider__button-prev",
                loop: !1,
                preventClicks: false,
                slidesPerView: 1,
                speed: 600,
                nested: !0,
                touchRatio: 0
            });
            $("a.kitchen-collection__project-pic, a.kitchen-collection__project-pic-slider__image").fancybox({
                beforeLoad: function () {
                    if ($(window).width() < 768) return !1
                },
                openEffect: "none",
                closeEffect: "none",
                wrapCSS: "kitchen-overlay-fancybox",
                tpl: {
                    next: '<a class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>',
                    prev: '<a class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>'
                },
                helpers: {
                    overlay: {
                        css: {
                            background: "rgba(0, 0, 0, 0.65)"
                        }
                    }
                }
            })
        }()
}), $(function () {
    !function () {
        var e = function () {
            $.get(document.location.href, $("#items_sections").serialize(), function (e) {
                $(".js-catalog-items").html($(e).find(".js-catalog-items").html()), $("#items_sections").html($(e).find("#items_sections").html()), $(".js-catalog-items a").removeAttr("onclick"), $(".js-preloader-Wait").hide()
            })
        };
        !function () {
            $(document).on("click", ".js-good-item", function () {
                $(this).find(".js-good-item-checkbox").trigger("click")
            }), $(document).on("click", ".js-good-item-checkbox", function () {
                $(".js-preloader-Wait").show(), $(this).parent().toggleClass("goods-menu__item_active"), e()
            }), $(document).on("click", ".js-select-color", function (e) {
                e.preventDefault(), $(this).next(".js-select-color-checkbox").trigger("click")
            }), $(document).on("click", ".js-select-color-checkbox", function () {
                $(".js-preloader-Wait").show(), $(this).prev(".select-color").toggleClass("select-color_active"), e()
            })
        }()
    }(),
        function () {
            var e = function (e, t) {
                    var i = !1;
                    for (var o in e) {
                        var n = !0;
                        if (t.forEach(function (t) {
                            n *= e[o].PROPERTIES[t.CODE].VALUE_ENUM_ID == t.VALUE
                        }), n) {
                            i = o;
                            break
                        }
                    }
                    return i
                },
                t = function (t, i) {
                    t.find(".js-cart-item-select").each(function () {
                        var o = $(this),
                            n = o.data("code");
                        o.find("option").each(function () {
                            var s = $(this),
                                a = [{
                                    CODE: n,
                                    VALUE: s.attr("value")
                                }];
                            t.find(".js-cart-item-select").not(o).each(function () {
                                a.push({
                                    CODE: $(this).data("code"),
                                    VALUE: $(this).val()
                                })
                            }), e(i, a) ? (s.removeAttr("disabled"), o.trigger("chosen:updated")) : (s.attr("disabled", "disabled"), o.trigger("chosen:updated"))
                        })
                    })
                };
            !function () {
                $(document).on("change", ".js-cart-item-select", function (i) {
                    var o = $(this),
                        pr = o.parents('.js-cart-item'),
                        n = o.closest(".js-cart-item:not(.cart-item_hover-cloned)"),
                        s = o.closest(".cart-item__hover"),
                        a = o.closest(".js-cart-item.cart-item_hover-cloned");
                    if (void 0 !== window.OFFERS) {
                        var r = n.data("id"),
                            l = window.OFFERS[r],
                            c = [];
                        a.find(".js-cart-item-select").each(function () {
                            c.push({
                                CODE: $(this).data("code"),
                                VALUE: $(this).val()
                            })
                        });
                        var d = e(l, c);
                        if (d) {
                            pr.find(".cart-item__text-wrap .cart-item__name").text(l[d].NAME);
                            var p = n.find(".js-cart-item__basket-button");
                            p.attr("data-id", l[d].ID), p.attr("data-artnumber", l[d].CRITEO_CODE), p.attr("data-price", number_format(l[d].CUR_PRICE, 0, ".", "")), n.hasClass("collection_new__cart") ? (n.find(".cart-item__image-wrap img").attr("src", l[d].DETAIL_PICTURE.SRC), n.find(".cart-item__text-wrap h4").text(l[d].NAME), n.find(".cart-item__image-wrap a").attr("href", l[d].DETAIL_PAGE_URL), n.find(".cart-item__button").attr("href", l[d].DETAIL_PAGE_URL), n.find(".cart-item__price-value").text(l[d].CUR_PRICE_FORMATTED), $(".cart-item__credit-notify").length && s.find(".cart-item__credit-notify span").html(number_format(l[d].CUR_PRICE / 24, 0, ".", "") + " &#8381;"), l[d].DISCOUNT ? (n.addClass("cart-item_discount"), n.find(".cart-item__discount").length || n.find(".cart-item__price").append('<span class="cart-item__discount"></span>'), n.find(".cart-item__discount").text(l[d].DISCOUNT + "%"), n.find(".cart-item__old-price").text(l[d].OLD_PRICE_FORMATTED)) : (n.removeClass("cart-item_discount"), n.find(".cart-item__discount").remove()), p.attr("action", l[d].DETAIL_PAGE_URL)) : (n.find(".cart-item__img").attr("src", l[d].DETAIL_PICTURE.SRC), n.find(".cart-item__series").text(l[d].XML_ID), n.find(".cart-item__price-value").text(l[d].CUR_PRICE_FORMATTED), n.find(".cart-item__old-price").text(l[d].OLD_PRICE_FORMATTED), n.find(".cart-item__button").attr("href", l[d].DETAIL_PAGE_URL), n.find("a").first().attr("href", l[d].DETAIL_PAGE_URL), $(".cart-item__credit-notify").length && s.find(".cart-item__credit-notify span").html(number_format(l[d].CUR_PRICE / 24, 0, ".", "") + " &#8381;"), p.attr("action", l[d].ADD_BASKET));
                            var u = n.find(".js-cart-item-select[data-code=" + o.data("code") + "]").first();
                            u.find("option").removeAttr("selected"), u.find("option[value=" + o.val() + "]").attr("selected", "selected"), a.find(".js-cart-item-no-select").each(function () {
                                var e = $(this),
                                    t = e.data("code");
                                e.find(".cart-item__features-value").text(l[d].PROPERTIES[t.toString()].VALUE)
                            }), o.trigger("chosen:updated")
                        }
                        t(a, l)
                    }
                }), $(document).on("mouseenter.catalog", ".js-cart-item.cart-item_hover-cloned", function () {
                    var e = $(this),
                        i = e.closest(".js-cart-item:not(.cart-item_hover-cloned)");
                    if (void 0 !== window.OFFERS) {
                        var o = i.data("id"),
                            n = window.OFFERS[o];
                        t(e, n)
                    }
                })
            }()
        }()
}), $(function () {
    var e = {
        "list-items-template": '{{#each items}}\n    <div class="col-catalog__item col-catalog__item_bgw" {{#if_mn_int @index 7}}style="display:none;"{{/if_mn_int}}>\n        <div class="cart-item js-cart-item" data-id="{{ID}}">\n            <a href="{{DETAIL_PAGE_URL}}">\n                <div class="cart-item__image-wrap">\n                    <div class="cart-item__image-vertical-align">\n                        <img class="cart-item__img" src="{{#if SLIDER}}{{SLIDER.0.SRC}}{{/if}}" alt="">\n                    </div>\n                </div>\n            </a>\n            <div class="cart-item__text-wrap">\n                <p class="cart-item__name">{{NAME}}</p>\n                <p class="cart-item__series">{{PROPERTIES.ARTNUMBER.VALUE}}</p>\n                <p class="cart-item__price">\n                    {{CUR_PRICE_FORMATTED}}\n                    <span class="rub"></span>\n                </p>\n                {{#if_mn OLD_PRICE CUR_PRICE}}\n                <div class="b-add-goods__item-discount">\n                    {{DISCOUNT}}%\n                </div>\n                {{/if_mn}}\n                {{#if_mn OLD_PRICE CUR_PRICE }}\n                <div class="b-add-goods__item-old-price">\n                    {{OLD_PRICE_FORMATTED}}\n                </div>\n                {{/if_mn}}\n            </div>\n\n            <div class="cart-item__hover">\n\n                <form action="" class="cart-item__form js-cart-item__basket-button" data-id="{{ID}}" data-name="{{NAME}}" data-list="true" data-artnumber="{{CRITEO_CODE}}" data-price="{{CUR_PRICE}}"><input type="hidden" name="" value=""><input type="hidden" name="AJAX_CALL" value="Y">\n\n                    <div class="cart-item__features">\n                        {{#if PROP.SELECTS}}\n                        {{#each PROP.SELECTS}}\n                        <div class="cart-item__features-line">\n                            <p class="cart-item__features-key">{{#get_name ../PROPERTIES @key}}{{/get_name}}:</p>\n                            <div class="cart-item__features-value">\n                                <div class="cart-item__value-chooser">\n                                    <select class="cart-item__value-select">\n                                        {{#each this}}\n                                        <option value="{{@key}}">{{this}}</option>\n                                        {{/each}}\n                                    </select>\n                                </div>\n                            </div>\n                        </div>\n                        {{/each}}\n                        {{/if}}\n                        {{#if PROP.STATIC}}\n                        {{#each PROP.STATIC}}\n                        {{#if this}}\n                            <div class="cart-item__features-line">\n                                <p class="cart-item__features-key">{{#get_name ../PROPERTIES @key}}{{/get_name}}:</p>\n                                {{#if_obj this}}\n                                <p class="cart-item__features-value">{{this.TEXT}}</p>\n                                {{else}}\n                                <p class="cart-item__features-value">{{this}}</p>\n                                {{/if_obj}}\n                            </div>\n                        {{/if}}\n                        {{/each}}\n                        {{/if}}\n                    </div>\n\n                    <a href="{{DETAIL_PAGE_URL}}" class="cart-item__button">\n\n                        <span class="cart-item__button-span">подробнее</span>\n                    </a>\n                </form>\n            </div>\n        </div>\n    </div>\n    {{/each}}',
        "add-assort-items-template": '<div class="container">\n        <div class="tabs">\n            {{#each tabs}}\n            {{#if this}}\n            <span class="add-good__tab">{{this.TITLE}}</span>\n            {{/if}}\n            {{/each}}\n        </div>\n    </div>\n    <div class="add-good__tab-content">\n        <div class="container">\n            {{#each tabs}}\n            {{#if this}}\n            <div class="add-good__tab-item">\n                <form class="b-add-goods__list">\n                    {{#each this}}\n                    <label for="{{this.TAB_ID}}{{this.ID}}" class="b-add-goods__item">\n                        <div class="b-add-goods__item-check">\n                            <div class="checkbox-styled-green-default">\n                                <input type="checkbox"\n                                       name="{{this.TAB_ID}}"\n                                       id="{{this.TAB_ID}}{{this.ID}}"\n                                       class="js-checkbox-default"\n                                       data-price="{{this.PRICE}}"\n                                       data-old-price="{{this.OLD_PRICE}}"\n                                       data-id="{{this.ID}}"\n                                       data-quantity="{{this.QUANTITY}}"\n                                                                              style="position: absolute; opacity: 0;"\n                                >\n                                <ins class="iCheck-helper"\n                                     style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"\n                                ></ins>\n                            </div>\n                        </div>\n                        <div class="b-add-goods__item-img" style="background-image: url({{this.PICTURE}})"></div>\n                        <div class="b-add-goods__item-title">{{this.NAME}}</div>\n                        <div class="b-add-goods__item-price">\n                            + {{this.PRICE_FORMAT}}\n                            <span class="rub" style="margin-left: 6px"></span>\n                        </div>\n                        {{#if_mn this.OLD_PRICE this.CUR_PRICE}}\n                        <div class="b-add-goods__item-discount">\n                            {{this.DISCOUNT}}%\n                        </div>\n                        <div class="b-add-goods__item-old-price">\n                            {{this.OLD_PRICE_FORMAT}}\n                        </div>\n                        {{/if_mn}}\n                        <div class="b-add-goods__item-count">Количество: {{this.QUANTITY}} шт.</div>\n                    </label>\n                    {{/each}}\n                </form>\n            </div>\n            {{/if}}\n            {{/each}}\n        </div>\n    </div>',
        "slider-items-template": '{{#if_mn slides.length 0}}\n    <div class="b-pic-slider js-pic-slider">\n        <div class="b-pic-slider__col">\n            <a href="#" class="b-pic-slider__arrow _prev"></a>\n            <a href="#" class="b-pic-slider__arrow _next"></a>\n\n            <div class="b-pic-slider__slider swiper-container">\n                <div class="swiper-wrapper">\n                    {{#each slides}}\n                        <div class="swiper-slide">\n                            <a href="" class="b-pic-slider__slider-item {{#if_eq @index 0}}_current{{/if_eq}}"\n                               data-full-img="{{this.ORIGINAL}}"\n                               data-preview-img="{{this.SRC}}"\n                               data-description="{{this.DESCRIPTION}}"\n                            >\n                                <img src="{{this.PREVIEW}}" alt="" />\n                            </a>\n                        </div>\n                    {{/each}}\n                </div>\n            </div>\n        </div>\n        <div class="b-pic-slider__img">\n            <a href="{{slides.0.ORIGINAL}}" class="b-pic-slider__img-link js-zoom-img">\n                <img class="b-pic-slider__img-img" src="{{slides.0.SRC}}" alt="{{slides.0.DESCRIPTION}}">\n            </a>\n        </div>\n    </div>\n{{/if_mn}}',
        "static-props-template": '{{#if props}}\n    {{#each props}}\n    <li class="good-item-property__row prop-{{@key}}">\n        <span class="good-item-property__key">{{this.NAME}}:</span>\n    {{#if this.PICTURE}}\n    <div class="good-item-property__value good-item-property__value_icon">\n        <img src="{{this.PICTURE}}" alt="" width="30">\n        {{this.TEXT}}\n    </div>\n    {{else}}\n    <div class="good-item-property__value" >{{this.VALUE}}</div>\n    {{/if}}\n    </li>\n    {{/each}}\n    {{/if}}',
        "price-box-template": '<p class="composition-item__price" data-price="{{#if price.CUR_PRICE_WITHOUT_DOP}}{{price.CUR_PRICE_WITHOUT_DOP}}{{else}}{{price.CUR_PRICE}}{{/if}}">{{price.CUR_PRICE_FORMATTED}}\n        <span class="rub"></span></p>\n    {{#if_mn price.OLD_PRICE price.CUR_PRICE}}\n    <span class="composition-item__price-sale is_active">{{price.DISCOUNT}}%</span>\n    <span class="composition-item__price-old" data-old-price="{{#if price.OLD_PRICE_WITHOUT_DOP}}{{price.OLD_PRICE_WITHOUT_DOP}}{{else}}{{price.OLD_PRICE}}{{/if}}">{{price.OLD_PRICE_FORMATTED}}<span class="rub"></span></span>\n    {{/if_mn}}',
        "benefits-block-items": '{{#if benefits}}\n    {{#each benefits}}\n        <li class="add-good-profits__item">\n            <span class="add-good-profits__icon" style="background-image: url({{this.ICON_SRC}})"></span>\n            <h3 class="h3">{{{this.HEADER}}}</h3>\n            {{#if this.ITEMS}}\n                <div class="add-good-profits__dropdown">\n                    {{#each this.ITEMS}}\n                        <h4 class="h4">{{this.NAME}}</h4>\n                        <p>{{this.PREVIEW_TEXT}}</p>\n                    {{/each}}\n                </div>\n            {{else}}\n                <p>{{this.PREVIEW_TEXT}}</p>\n            {{/if}}\n            <a class="add-good-profits__dropdown-link" href="#">Развернуть</a>\n        </li>\n    {{/each}}\n    {{/if}}'
    };
    Handlebars.registerHelper("if_mn", function (e, t, i) {
        return parseFloat(e) > parseFloat(t) ? i.fn(this) : i.inverse(this)
    }), Handlebars.registerHelper("if_eq", function (e, t, i) {
        return e == t ? i.fn(this) : i.inverse(this)
    }), Handlebars.registerHelper("if_mn_int", function (e, t, i) {
        return parseInt(e) > parseInt(t) ? i.fn(this) : i.inverse(this)
    }), Handlebars.registerHelper("checkFirstWithoutRecommend", function (e, t, i) {
        return 0 == e && "RECOMMENDED" !== t ? i.fn(this) : i.inverse(this)
    }), Handlebars.registerHelper("get_name", function (e, t, i) {
        return e[t].NAME
    }), Handlebars.registerHelper("if_obj", function (e, t) {
        return "object" === (void 0 === e ? "undefined" : _typeof(e)) ? t.fn(this) : t.inverse(this)
    }), Handlebars.registerHelper("if_arr", function (e, t) {
        return "object" === (void 0 === e ? "undefined" : _typeof(e)) && e instanceof Array ? t.fn(this) : t.inverse(this)
    }),
        function () {
            var t = function (e, t) {
                    e.find(".seo-block-offer-name").each(function () {
                        $(this).text(t.NAME)
                    })
                },
                i = function (e) {
                    $("title").text(e.NAME + " купить " + BX.message("CURRENT_CITY_IN") + " по лучшей цене от производителя - Дятьково"), $('meta[name="description"]').attr("content", e.NAME + " купить " + BX.message("CURRENT_CITY_IN") + " от мебельной фабрики Дятьково. Доставка по Москве и городам России. Расширенная гарантия на 5 лет от производителя"), $("h1.page-title .page-title__span").text(e.NAME)
                },
                o = function (t, i) {
                    var o = e["benefits-block-items"],
                        n = Handlebars.compile(o),
                        s = n({
                            benefits: i
                        });
                    t.empty(), t.html(s), $(".add-good-profits__dropdown").each(function () {
                        $(this).height() <= 77 ? $(this).next().hide() : $(this).addClass("close")
                    })
                },
                n = function (t, i) {
                    var o = e["list-items-template"],
                        n = [];
                    $.each(i, function (e, t) {
                        n.push(t)
                    });
                    var s = Handlebars.compile(o),
                        a = s({
                            items: n
                        });
                    t.empty(), t.html(a), n.length > 7 ? $('.composition-visible-rows[data-container="#' + t.attr("id") + '"]').show() : $('.composition-visible-rows[data-container="#' + t.attr("id") + '"]').hide()
                },
                s = function (t, i) {
                    var o = e["add-assort-items-template"],
                        n = Handlebars.compile(o),
                        s = {};
                    t.empty(), t.closest(".add-good").show(), $.each(i, function (e, t) {

                        var i = BX.message("ADD_GOODS_TITLE_" + e);
                        t.length && t.forEach(function (t) {
                            t.TAB_ID = e
                        }), s[e] = t, s[e].TITLE = i
                    });
                    var a = n({
                        tabs: s
                    });
                    t.html(a), $(".add-good-wrap .add-good__tab-item").not(":first").hide(), $(".add-good-wrap .add-good__tab").click(function () {
                        $(".add-good-wrap .add-good__tab").removeClass("active").eq($(this).index()).addClass("active"), $(".add-good-wrap .add-good__tab-item").hide().eq($(this).index()).fadeIn()
                    }).eq(0).addClass("active"), t.find(".js-checkbox-default").each(function () {
                        var e = $(this),
                            t = e.attr("data-value");
                        e.iCheck({
                            checkboxClass: "checkbox-styled-green-default",
                            insert: t
                        })
                    })
                },
                a = function (t, i) {
                    var o = e["slider-items-template"],
                        n = Handlebars.compile(o),
                        s = n({
                            slides: i
                        });
                    t.html(s), picSliderInit(t), $(window).trigger("resize")
                },
                r = function (e, t) {
                    var i = !1;
                    for (var o in e) {
                        var n = !0;
                        if (t.forEach(function (t) {
                            void 0 !== e[o].PROPERTIES && (n *= e[o].PROPERTIES[t.CODE].VALUE_ENUM_ID == t.VALUE)
                        }), n) {
                            i = o;
                            break
                        }
                    }
                    return i
                },
                l = function (e, t) {
                    e.find(".js-offer-item-select").each(function () {
                        var i = $(this),
                            o = i.data("code");
                        i.find("option").each(function () {
                            var n = $(this),
                                s = [{
                                    CODE: o,
                                    VALUE: n.attr("value")
                                }];
                            e.find(".js-offer-item-select").not(i).each(function () {
                                s.push({
                                    CODE: $(this).data("code"),
                                    VALUE: $(this).val()
                                })
                            }), r(t, s) ? (n.removeAttr("disabled"), i.trigger("chosen:updated")) : (n.attr("disabled", "disabled"), i.trigger("chosen:updated"))
                        })
                    })
                };
            !function () {
                var c = $(".good-head");
                c.length && void 0 !== window.OFFERS && l(c, window.OFFERS), $(document).on("change", ".js-offer-item-select", function (c) {
                    var d = $(this),
                        p = d.closest(".good-head"),
                        u = $(".good-item-cost__box"),
                        f = $(".good-item-buttons"),
                        h = $(".good-item__slider-box"),
                        m = $("#col-catalog__list"),
                        _ = $("#col-catalog__list_2"),
                        v = $(".add-good .add-good-wrap"),
                        g = $(".add-good__tab-content"),
                        b = $("#static-props"),
                        w = $("#benefits-block"),
                        k = $("#detail-text-block"),
                        C = p.data("id");
                    if (void 0 !== window.OFFERS && C) {
                        var y = [];
                        p.find(".js-offer-item-select").each(function () {
                            y.push({
                                CODE: $(this).data("code"),
                                VALUE: $(this).val()
                            })
                        });
                        var x = r(window.OFFERS, y);
                        if (x) {
                            //console.log("OFFER: " + x);

                            var E = window.OFFERS[x];
                            //console.log(E);
                            void 0 !== E.STOCK && E.STOCK ? $("#stock-message-prop").find(".good-item-property__value").text(BX.message("DETAIL_STOCK_IN")) : $("#stock-message-prop").find(".good-item-property__value").text(BX.message("DETAIL_STOCK_OUT")), void 0 !== E.STRENGTH && E.STRENGTH.VALUE && (E.STRENGTH.VALUE = E.STRENGTH.VALUE.join(",")), void 0 !== E.STRENGTH_DETAIL && E.STRENGTH_DETAIL.VALUE && (E.STRENGTH.NAME = E.STRENGTH_DETAIL.NAME, E.STRENGTH.VALUE = E.STRENGTH_DETAIL.VALUE.join(","), delete E.STRENGTH_DETAIL);
                            var j = e["static-props-template"],
                                S = Handlebars.compile(j),
                                T = {};
                            $.each(STATIC_KEYS, function (e, t) {
                                void 0 !== E.PROPERTIES[t] && (T[t] = E.PROPERTIES[t])
                            });
                            var R = S({
                                props: T
                            });
                            if (b.empty(), b.html(R), $(".good-head").length && $(".good-head").attr("data-id", E.ID), u.length) {
                                //void 0 !== E.ADD_PRODUCTS_PRICE && (E.CUR_PRICE = parseFloat(E.CUR_PRICE) + parseFloat(E.ADD_PRODUCTS_PRICE), E.CUR_PRICE_FORMATTED = number_format(E.CUR_PRICE, 0, ",", " ")), void 0 !== E.ADD_PRODUCTS_OLD_PRICE && (E.OLD_PRICE = parseFloat(E.OLD_PRICE) + parseFloat(E.ADD_PRODUCTS_OLD_PRICE), E.OLD_PRICE_FORMATTED = number_format(E.OLD_PRICE, 0, ",", " "));
                                var I = e["price-box-template"],
                                    S = Handlebars.compile(I),
                                    R = S({
                                        price: E
                                    });
                                u.html(R)
                            }
                            f.length && (f.find(".add_cart").attr("href", E.ADD_BASKET), f.find(".add_cart").attr("data-id", E.ID), f.find(".add_cart").attr("data-price", number_format(E.CUR_PRICE, 0, ",", "")), f.find(".add_cart").attr("data-artnumber", E.CRITEO_CODE), f.find(".add_cart").attr("data-name", E.NAME), f.find(".link_credit_click .credit-sum").text(number_format(E.CUR_PRICE / 24, 0, ".", "")), f.find(".link_credit_click").attr("data-item-name", E.NAME), f.find(".link_one_click").attr("data-price", number_format(E.CUR_PRICE, 0, ",", "")), f.find(".link_one_click").attr("data-artnumber", E.CRITEO_CODE)), k.length && k.text(E.DETAIL_TEXT), !h.length || void 0 === E.SLIDER || !E.SLIDER.length && $.isEmptyObject(E.SLIDER) || a(h, E.SLIDER), m.length && void 0 !== E.COMPOSITION_ITEMS && n(m, E.COMPOSITION_ITEMS), !_.length || void 0 === E.RECOMMEND_ITEMS || !E.RECOMMEND_ITEMS.length && $.isEmptyObject(E.RECOMMEND_ITEMS) ? ($("#page-title-recommend").hide(), _.hide(), n(_, E.RECOMMEND_ITEMS)) : ($("#page-title-recommend").show(), _.show(), n(_, E.RECOMMEND_ITEMS)), !w.length || void 0 === E.BENEFITS || !E.BENEFITS.length && $.isEmptyObject(E.BENEFITS) || o(w, E.BENEFITS), !v.length || void 0 === E.ADD_PRODUCTS || !E.ADD_PRODUCTS.length && $.isEmptyObject(E.ADD_PRODUCTS) ? (v.empty(), v.closest(".add-good").hide()) : s(v, E.ADD_PRODUCTS), g.length && t(g, E), i(E), history.pushState({}, "", E.DETAIL_PAGE_URL)
                        }
                        l(p, window.OFFERS)
                    }
                    d.trigger("chosen:updated")
                })
            }()
        }()
}), $(function () {
    window.initAddAssort = function (e, t) {
        return function () {
            var i = $(e),
                o = $(t),
                n = 0,
                s = 0;
            i.find(".js-checkbox-default:checked, .js-radio-default:checked").each(function () {
                var e = parseFloat($(this).data("price")),
                    t = parseFloat($(this).data("old-price"));
                e > 0 && (n += e, s += t)
            });
            var a = o.find(".composition-item__price"),
                r = o.find(".composition-item__price-old"),
                l = o.find(".composition-item__price-sale"),
                c = $(".link_credit_click .credit-sum"),
                d = $(".link_one_click"),
                p = $(".add_cart");
            if (a.length) {
                var u = parseFloat(a.data("price"));
                if (u += n, a.html(numberFormat(u) + ' <span class="rub"></span>'), c.length && c.html(number_format(u / 24, 0, ".", "") + "&#8381;"), d.length && d.attr("data-price", u), p.length && p.attr("data-price", u), r.length) {
                    var f = parseFloat(r.data("old-price"));
                    f += s, f > u ? r.html(numberFormat(f) + ' <span class="rub"></span>') : r.html("");
                    var h = Math.round((f - u) / f * 100);
                    l.html("-" + h + "%"), h > 0 ? l.addClass("is_active") : l.removeClass("is_active")
                }
            }
        }
    }, $(".composition-item__content").length && ($(document).on("ifToggled", ".b-add-goods__item .js-checkbox-default, .b-add-goods__item .js-radio-default", initAddAssort(".b-add-goods__wrap", ".composition-item__content")), $(document).on("ifChecked", ".b-add-goods__item .js-checkbox-default", function () {
        $(this).closest(".b-add-goods__item").siblings(".b-add-goods__item").each(function (e, t) {
            /RECOMMENDED.*/g.test($(t).attr("for")) || $(t).find("input.js-checkbox-default").iCheck("uncheck")
        })
    })), $(".good-head").length && ($(document).on("ifToggled", ".b-add-goods__item .js-checkbox-default, .b-add-goods__item .js-radio-default", initAddAssort(".add-good-wrap", ".good-item-cost__box")), $(document).on("ifChecked", ".b-add-goods__item .js-checkbox-default", function () {
        $(this).closest(".b-add-goods__item").siblings(".b-add-goods__item").each(function (e, t) {
            /RECOMMENDED.*/g.test($(t).attr("for")) || $(t).find("input.js-checkbox-default").iCheck("uncheck")
        })
    }))
});
var Filter = function () {
    function e(t) {
        var i = this;
        _classCallCheck(this, e), this.checkBoxViewEnable = function (e) {
            var t = e.prev();
            e.closest(".js-filter-item").addClass("is-active");
            var o = e.data("value-with-name"),
                n = "string" == typeof o && o.length ? o : t.text();
            i.$filterActives.prepend('<button class="catalog-filter__active-item js-filter-actives-item" data-id="' + e.attr("id") + '">' + n + "</button>"), e.closest(".catalog-filter__group").addClass("js-active-filter"), i.cleanFilter = !1, i.updateFilterLine()
        }, this.checkBoxViewDisable = function (e) {
            e.closest(".js-filter-item").removeClass("is-active"), i.$filterActives.find("[data-id=" + e.attr("id") + "]").remove(), i.$filterActives.find(".js-filter-actives-item").length || (i.cleanFilter = !0);
            var t = e.closest(".catalog-filter__group");
            t.find(".js-filter-item.is-active").length || t.removeClass("js-active-filter"), e.closest(".js-filter-range-item").removeClass("js-active-filter"), i.updateFilterLine()
        }, this.unsetCheckBox = function (e) {
            e.prop("checked", !1), i.checkBoxViewDisable(e)
        }, this.unsetRangeItem = function (e) {
            var t = e.find(".js-filter-range-slider"),
                o = e.find("input").first(),
                n = e.find("input").last();
            o.val(Number(t.attr("data-min"))), n.val(Number(t.attr("data-max"))), t.slider("values", [Number(t.attr("data-min")), Number(t.attr("data-max"))]), i.checkBoxViewDisable(e)
        }, this.rangeViewUpdate = function (e) {
            var t = e.data("name"),
                o = e.data("units"),
                n = e.find("input").first(),
                s = e.find("input").last(),
                a = t + " от " + n.val() + " " + o + " до " + s.val() + " " + o,
                r = '<button class="catalog-filter__active-item js-filter-actives-item" data-id="' + e.attr("id") + '">' + a + "</button>",
                l = i.$filterActives.find("[data-id=" + e.attr("id") + "]");
            l.length ? l.replaceWith(r) : i.$filterActives.prepend(r), e.closest(".js-filter-range-item").addClass("js-active-filter"), i.updateFilterLine()
        }, this.updateFilterLine = function () {
            i.$filterActives.find(".js-filter-actives-item").length ? i.$filterActives.addClass("is-active") : i.$filterActives.removeClass("is-active")
        }, this.initRange = function () {
            i.$filterRangeItem.each(function (e) {
                var t = $(i.$filterRangeItem[e]),
                    o = t.find(".js-filter-range-slider"),
                    n = t.find("input").first(),
                    s = t.find("input").last();
                n.val(Number(o.attr("data-val-min"))), s.val(Number(o.attr("data-val-max"))), o.slider({
                    range: !0,
                    min: Number(o.attr("data-min")),
                    max: Number(o.attr("data-max")),
                    values: [Number(o.attr("data-val-min")), Number(o.attr("data-val-max"))],
                    slide: function (e, a) {
                        n.val(a.values[0]), s.val(a.values[1]), i.rangeViewUpdate(t), Number(a.values[0]) === Number(o.attr("data-min")) && Number(a.values[1]) === Number(o.attr("data-max")) && i.checkBoxViewDisable(t), i.$formSubmit.addClass("is-active"), i.$formSubmit.offset({
                            top: o.offset().top - 24
                        }), i.$formSubmit.css({
                            left: "240px"
                        }), i.$formSubmitTime = e.timeStamp, i.closeSubmit(i.$formSubmitTime)
                    },
                    change: function (e, a) {
                        n.val(a.values[0]), s.val(a.values[1]), i.rangeViewUpdate(t), Number(a.values[0]) === Number(o.attr("data-min")) && Number(a.values[1]) === Number(o.attr("data-max")) && i.checkBoxViewDisable(t)
                    }
                })
            })
        }, this.closeSubmit = function (e) {
            setTimeout(function () {
                e === i.$formSubmitTime && i.$formSubmit.removeClass("is-active")
            }, 5e3)
        }, t.length && (this.$filter = t, this.$catalogList = $(".js-catalog-list"), this.$filterCheckbox = this.$filter.find(".js-filter-item-check"), this.$filterActives = this.$catalogList.find(".js-filter-actives"), this.$filterClear = this.$catalogList.find(".js-filter-clear"), this.$filterShow = this.$catalogList.find(".js-show-filter"), this.$filterRangeItem = this.$catalogList.find(".js-filter-range-item"), this.$filterRangeInput = this.$catalogList.find(".js-filter-item-input-range"), this.$formSubmit = this.$catalogList.find(".js-filter-submit"), this.$formSubmitTime = 0, this.$filterClose = this.$catalogList.find(".js-hide-filter"), this.$sorter = $(".js-sorter"), this.$sorterHidden = $(".js-sorter-hidden"), this.cleanFilter = !1, this.initRange(), this.events(), this.openFilters())
    }

    return _createClass(e, [{
        key: "events",
        value: function () {
            var e = this;
            this.$filterCheckbox.on("change", function (t) {
                var i = $(t.target);
                i.prop("checked") ? e.checkBoxViewEnable(i) : e.checkBoxViewDisable(i);
                var o = i.prev().offset().top - e.$filter.offset().top - e.$filter.scrollTop() - 13;
                e.$formSubmit.addClass("is-active"), e.$formSubmit.css({
                    top: o + "px",
                    left: i.prev().outerWidth() + 40 + "px"
                }), e.$formSubmitTime = t.timeStamp, e.closeSubmit(e.$formSubmitTime)
            }), this.$filterClear.on("click", function () {
                e.cleanFilter = !0, e.$filterCheckbox.filter(":checked").each(function (t, i) {
                    $(i).prop("checked", !1), e.unsetCheckBox($(i))
                }), e.$filterRangeItem.each(function (t, i) {
                    e.unsetRangeItem($(i))
                }), e.$formSubmit.removeClass("is-active"), e.$filter.submit()
            }), this.$filterShow.off("click"), this.$filterShow.on("click", function () {
                e.$filter.toggleClass("is-active")
            }), this.$filterClose.off("click"), this.$filterClose.on("click", function (t) {
                t.preventDefault(), e.$filter.toggleClass("is-active")
            }), $(document).on("click", ".js-filter-actives-item", function (t) {
                var i = $(t.target);
                e.unsetCheckBox(e.$filterCheckbox.filter("[id=" + i.data("id") + "]")), e.unsetRangeItem(e.$filterRangeItem.filter("[id=" + i.data("id") + "]")), e.$filter.submit()
            }), this.$filterRangeInput.on("change", function (t) {
                var i = $(t.target),
                    o = i.closest(".js-filter-range-item").find(".js-filter-range-slider"),
                    n = Number(i.val());
                if (i.hasClass("is-start")) {
                    var s = Number(i.closest(".js-filter-range-item").find(".js-filter-item-input-range.is-end").val()),
                        a = Number(o.attr("data-min"));
                    n = isNaN(n) || n < a ? a : n > s ? s : n, o.slider("values", 0, n)
                } else if (i.hasClass("is-end")) {
                    var r = Number(i.closest(".js-filter-range-item").find(".js-filter-item-input-range.is-start").val()),
                        l = Number(o.attr("data-max"));
                    n = isNaN(n) || n > l ? l : n < r ? r : n, o.slider("values", 1, n)
                }
                i.val(n), e.$formSubmit.addClass("is-active"), e.$formSubmit.offset({
                    top: i.offset().top
                }), e.$formSubmit.css({
                    left: "240px"
                }), e.$formSubmitTime = t.timeStamp, e.closeSubmit(e.$formSubmitTime)
            }), this.$sorter.on("change", function (t) {
                var i = $(t.target),
                    o = i.val();
                e.$sorterHidden.val(o), e.$filter.submit()
            }), this.$filter.on("submit", function (t) {
                t.preventDefault(), "undefined" != typeof BX && BX.showWait();
                var i = $(t.target),
                    o = i.data("base-url"),
                    n = "";
                !0 === e.cleanFilter ? (e.cleanFilter = !1, n = i.find('input[type="hidden"]').serialize(), n += "" !== n ? "&del_filter=Y" : "del_filter=Y", n = n.replace("set_filter=Y&", "")) : n = i.find('.js-active-filter :input, input[type="hidden"]').serialize(), $.get(o, n).success(function (t) {
                    var i = $(t),
                        o = i.find(".js-catalog-items"),
                        n = i.find(".js-filter");
                    if (o.length && n.length) {
                        e.$catalogList.find(".col-catalog").html(o.html() || "");
                        var s = i.closest(".page-title");
                        $("html, body").animate({
                            scrollTop: e.$catalogList.offset().top - 300
                        }, 1e3), s.length && (document.title = s.data("browser-title"), $(".page-title").html(s.html())), e.$filter.hasClass("is-active") && e.$filterClose.trigger("click"), e.$filter.html(n.html());
                        var a = i.find("script#offerScript");
                        a.length && ($("script#offerScript").remove(), $("body").append(a)), e.reInitFilter(), window.history.pushState({}, "", n.attr("action"))
                    }
                }).always(function () {
                    "undefined" != typeof BX && BX.closeWait()
                })
            })
        }
    }, {
        key: "openFilters",
        value: function () {
            this.$filter.find(".js-dropdown-trigger").each(function (e, t) {
                var i = $(t);
                i.hasClass("js-dropdown-open") && i.next(".js-dropdown-list").slideToggle(0)
            })
        }
    }, {
        key: "offEvents",
        value: function () {
            this.$filterCheckbox.off("change"), this.$filterClear.off("click"), this.$filterRangeInput.off("change"), this.$filterRangeInput.off("change"), this.$filterClose.off("click"), this.$sorter.off("change"), this.$filter.off("submit"), $(document).off("click", ".js-filter-actives-item")
        }
    }, {
        key: "reInitFilter",
        value: function () {
            this.$filter.length && (this.offEvents(), this.$catalogList = $(".js-catalog-list"), this.$filterCheckbox = this.$filter.find(".js-filter-item-check"),
                this.$filterActives = this.$catalogList.find(".js-filter-actives"), this.$filterClear = this.$catalogList.find(".js-filter-clear"), this.$filterShow = this.$catalogList.find(".js-show-filter"), this.$filterRangeItem = this.$catalogList.find(".js-filter-range-item"), this.$filterRangeInput = this.$catalogList.find(".js-filter-item-input-range"), this.$formSubmit = this.$catalogList.find(".js-filter-submit"), this.$formSubmitTime = 0, this.$filterClose = this.$catalogList.find(".js-hide-filter"), this.$sorter = $(".js-sorter"), this.$sorterHidden = $(".js-sorter-hidden"), this.initRange(), this.events(), this.openFilters())
        }
    }]), e
}();
$(function () {
    new Filter($(".js-filter"))
}), $(function () {
    var e = new RegExp(/(.*)\?PAGEN_(\d+)=(\d+)/);
    if ($(".js-pagination-ajax").length && $(".js-pagination-ajax").data("url")) {
        var t = $(".js-pagination-ajax").data("url").replace(e, "$1?PAGEN_$2=2");
        $("head").append('<link rel="next" href="' + t + '">')
    }
    $(document).on("click", ".js-pagination-ajax", function (t) {
        t.preventDefault(), $(".js-preloader-Wait").show();
        var i = $(this),
            o = i.parent(),
            n = $(this).data("url"),
            s = i.data("container"),
            a = $(s),
            r = $(this).data("wrapper-component");
        void 0 !== n && 0 !== a.length && (i.attr("disabled", "disabled"), $.get(n).done(function (t) {
            var l = $(t).find(s);
            if (0 !== l.length) {
                a.append(l.html());
                var c = void 0 !== r ? l.closest(r).find(".js-pagination-ajax") : l.parent().find(".js-pagination-ajax");
                i.remove(), 0 !== c.length && o.append(c), updatePrevNextTags(getPrevNextUrls(n, e), 0 == c.length)
            }
        }).always(function () {
            i.removeAttr("disabled"), $(".js-preloader-Wait").hide()
        }))
    })
}), $(document).on("click", ".composition-visible-rows", function () {
    var e = $(this).data("items-col") || 4,
        t = $(this).data("container");
    if ($(t).length) {
        $(".js-preloader-Wait").show(), setInterval(function () {
            $(".js-preloader-Wait").hide()
        }, 1e3);
        var i = $(t).find(".col-catalog__item:hidden");
        i.length > 0 && i.each(function (t, i) {
            t < e && $(i).show()
        }), i.length <= e && $(this).hide()
    }
}),
    function () {
        var e = $(".js-collections-video"),
            t = $(".js-collections-play"),
            i = $(".js-collection-new-slider");
        i.length && e.length && t.length && (t.each(function () {
            $(this).on("click", function () {
                $(this).hide(), $(this).siblings(".js-collections-video")[0].play()
            })
        }), e.each(function () {
            $(this).on("ended", function () {
                $(this).siblings(".js-collections-play").show()
            })
        }), i.on("beforeChange", function () {
            e.each(function () {
                $(this)[0].pause()
            }), t.show(), player && (player.stopVideo(), $(".js-collections-play-yt").fadeIn(100))
        }))
    }(),
    function () {
        var e = $(".js-select-green");
        e.length && e.select2({
            minimumResultsForSearch: -1,
            dropdownCssClass: "green-wrap"
        })
    }();
var videoId, $customBtn, player;
$(document).ready(function () {
    var e = document.createElement("script");
    e.src = "https://youtube.com/iframe_api";
    var t = document.getElementsByTagName("script")[0];
    t.parentNode.insertBefore(e, t), console.log("test2"), videoId = $("#youtubeVideoSlide").data("youtube-video-id"), $customBtn = $(".js-collections-play-yt")
});
var onYouTubeIframeAPIReady = function () {
    player = new YT.Player("youtubeVideoSlide", {
        videoId: videoId,
        playerVars: {
            rel: 0
        },
        events: {
            onReady: onPlayerReady,
            onStateChange: onPlayerStateChange
        }
    })
};
$(function () {
    function e() {
        function e() {
            o.behaviors.disable("scrollZoom"), l.bind("click", function () {
                o.setZoom(o.getZoom() + 1)
            }), c.bind("click", function () {
                o.setZoom(o.getZoom() - 1)
            }), r.bind("click", function () {
                a.get({
                    provider: "yandex",
                    mapStateAutoApply: !0
                }).then(function (e) {
                    e.geoObjects.options.set("preset", "islands#redCircleIcon"), e.geoObjects.get(0).properties.set({
                        balloonContentBody: "Мое местоположение"
                    }), o.geoObjects.add(e.geoObjects)
                }), a.get({
                    provider: "browser",
                    mapStateAutoApply: !0
                }).then(function (e) {
                    e.geoObjects.options.set("preset", "islands#blueCircleIcon"), o.geoObjects.add(e.geoObjects)
                })
            })
        }

        function t() {
            n = ymaps.templateLayoutFactory.createClass("$[[options.contentLayout observeSize minWidth=370 maxWidth=370 maxHeight=310]]</div>", {
                build: function () {
                    this.constructor.superclass.build.call(this), this._$element = $(".sh-balloon", this.getParentElement()), this.applyElementOffset(), this._$element.find(".close").on("click", $.proxy(this.onCloseClick, this))
                },
                clear: function () {
                    this._$element.find(".close").off("click"), this.constructor.superclass.clear.call(this)
                },
                onSublayoutSizeChange: function () {
                    n.superclass.onSublayoutSizeChange.apply(this, arguments), this._isElement(this._$element) && (this.applyElementOffset(), this.events.fire("shapechange"))
                },
                applyElementOffset: function () {
                    this._$element.css({
                        left: -this._$element[0].offsetWidth / 2,
                        top: -this._$element[0].offsetHeight
                    })
                },
                onCloseClick: function (e) {
                    e.preventDefault(), this.events.fire("userclose")
                },
                getShape: function () {
                    if (!this._isElement(this._$element)) return n.superclass.getShape.call(this);
                    var e = this._$element.position();
                    return new ymaps.shape.Rectangle(new ymaps.geometry.pixel.Rectangle([
                        [e.left, e.top],
                        [e.left + this._$element[0].offsetWidth, e.top + this._$element[0].offsetHeight]
                    ]))
                },
                _isElement: function (e) {
                    return e && e[0]
                }
            }), s = ymaps.templateLayoutFactory.createClass('<div class="sh-balloon sh-balloon_$[properties.balloonClass] sh-balloon__$[properties.balloonType]"><div class="sh-balloon__close close"></div><div class="sh-balloon__content"><p class="sh-balloon__title">$[properties.balloonTitle]</p><div class="sh-balloon__flagman-wrap"><p class="sh-balloon__flagman">Флагманский магазин</p></div>$[properties.balloonAddress]<br><p class="shop-list__item-phone js-visible-phone" data-phone="$[properties.balloonPhone]">+7 XXXXXXXXXX <span class="js-sh-balloon__content-phone-button sh-balloon__content-phone-button">показать номер</span></p>$[properties.balloonOpenTime]<div class="sh-balloon__status $[properties.balloonStatusClass]">$[properties.balloonStatus]</div></div><div class="sh-balloon__link-wrap">$[properties.balloonHref]</div><div class="sh-balloon__label $[properties.balloonType]"></div></div>')
        }

        function i() {
            a = ymaps.geolocation;
            var i = $(".shops-page__map");
            o = new ymaps.Map("js-shops-page-map", {
                center: [i.data("center-lat"), i.data("center-lng")],
                zoom: 11,
                controls: []
            }, {
                searchControlProvider: "yandex#search"
            }), e(), t(),
                function () {
                    $(".shop-list").find(".js-shop-list-item").each(function () {
                        var e = $(this),
                            t = new ymaps.Placemark([e.data("lat"), e.data("lng")], {
                                balloonTitle: e.data("title"),
                                balloonAddress: e.data("address"),
                                balloonPhone: e.data("phone"),
                                balloonOpenTime: e.data("open-time"),
                                balloonStatus: "open" === e.data("status") ? "открыто" : "закрыто",
                                balloonStatusClass: e.data("status"),
                                balloonHref: e.data("href"),
                                balloonType: e.data("type"),
                                balloonClass: e.data("balloon-class")
                            }, {
                                balloonShadow: !1,
                                balloonLayout: n,
                                balloonContentLayout: s,
                                balloonPanelMaxMapArea: 0,
                                balloonOffset: [0, -15],
                                iconLayout: "default#image",
                                iconImageHref: e.data("icon-href"),
                                iconImageSize: [68, 50],
                                iconImageOffset: [-20, -50]
                            });
                        o.geoObjects.add(t);
                        var i = e.data("id");
                        window.placemarks = window.placemarks || [], window.placemarks[i] = t
                    })
                }(),
                function () {
                    $(document).on("click", ".shop-list__item-show-on-map", function (e) {
                        e.preventDefault();
                        var t = $(this).closest(".swiper-slide").find(".js-shop-list-item"),
                            i = t.data("lat"),
                            n = t.data("lng"),
                            s = t.data("id");
                        i && n && (o.setCenter([i, n], 16), $("html, body").stop().animate({
                            scrollTop: $(".shops-page__map").offset().top - 150
                        }, 1e3)), void 0 !== window.placemarks && void 0 !== window.placemarks[s] && setTimeout(function () {
                            window.placemarks[s].balloon.open(window.placemarks[s].geometry.getCoordinates())
                        }, 1e3)
                    })
                }()
        }

        ymaps.ready(i);
        var o, n, s, a, r = $("#map-my-location"),
            l = $("#map-zoom-plus"),
            c = $("#map-zoom-minus")
    }

    function t() {
        function e() {
            var e = $("#shop-list-slider"),
                t = document.documentElement.clientWidth,
                i = e.find(".swiper-slide").length;
            t > 992 && i <= 3 || t > 700 && i <= 2 || t <= 767 && 1 === i ? e.find(".swiper-wrapper").addClass("_centered") : t <= 767 || e.find(".swiper-wrapper").removeClass("_centered")
        }

        function t() {
            window.innerWidth < 768 && i.length ? (i.destroy(!0, !0), i = "") : window.innerWidth >= 768 && !i.length && (i = new Swiper("#shop-list-slider", {
                direction: "horizontal",
                loop: !1,
                slidesPerView: 3,
                preventClicks: false,
                nextButton: ".shop-list__button-next",
                prevButton: ".shop-list__button-prev",
                breakpoints: {
                    992: {
                        slidesPerView: 2
                    },
                    767: {
                        slidesPerView: 1
                    }
                }
            }))
        }

        var i = "";
        t(), e(), $(window).resize(function () {
            e(), t()
        })
    }

    e(),
        function () {
            var i = $(".js-shop-filters"),
                o = i.find(".js-select.shop-filters__choose-country"),
                n = i.find(".js-select.shop-filters__choose-region"),
                s = function () {
                    var e = o.val(),
                        t = n.find("option:selected");
                    n.find("option").removeAttr("disabled"), t.data("country") != parseInt(e) && n.val(n.find('option[data-country="' + e + '"]').first().attr("value")).trigger("change"), n.find('option:not([data-country="' + e + '"])').attr("disabled", "disabled"), n.select2("destroy"), n.select2({
                        minimumResultsForSearch: -1,
                        width: "style",
                        dropdownAutoWidth: !0
                    })
                },
                a = function () {
                    $(".js-preloader-Wait").show(), $.get(i.data("url"), i.serialize(), function (i) {
                        $(".shop-list--slider").html($(i).find(".shop-list--slider").html() || ""), $(".shops-page__map").replaceWith($(i).find(".shops-page__map")), e(), t(), $(".js-preloader-Wait").hide()
                    })
                };
            s(),
                function () {
                    i.find(".js-select:not(.js-select.shop-filters__choose-country)").change(function (e) {
                        a()
                    }), o.change(function (e) {
                        s()
                    })
                }()
        }()
});
var Admitad = function e() {
    var t = this;
    _classCallCheck(this, e), this.setSourceCookie = function () {
        var e = t,
            i = e.getSourceParamFromUri();
        i && $.cookie(e.cookie_name, i, {
            path: "/",
            expires: e.days_to_store
        })
    }, this.getSourceParamFromUri = function () {
        var e = t,
            i = e.channel_name + "=([^&]+)";
        return (new RegExp(i).exec(document.location.search) || [])[1] || ""
    }, this.getSourceCookie = function () {
        var e = t,
            i = document.cookie.match(new RegExp("(?:^|; )" + e.cookie_name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, "\\$1") + "=([^;]*)"));
        return i ? decodeURIComponent(i[1]) : void 0
    }, this.getSource = function () {
        var e = t;
        return e.getSourceCookie(e.cookie_name) ? e.getSourceCookie(e.cookie_name) != e.default_cookie_value ? e.getSourceCookie(e.cookie_name) : "adm" : "na"
    }, this.sendOrder = function (e, i) {
        var o = t,
            n = window.ADMITAD || {};
        n.Invoice = n.Invoice || {}, n.Invoice.broker = o.getSource(), n.Invoice.category = o.target_code;
        var s = [];
        for (var a in i)
            if (i.hasOwnProperty(a)) {
                var r = i[a];
                s.push({
                    Product: {
                        productID: r.id,
                        category: o.fare_code,
                        price: r.price,
                        priceCurrency: "RUB"
                    },
                    orderQuantity: r.quantity,
                    additionalType: "sale"
                })
            }
        n.Invoice.referencesOrder = n.Invoice.referencesOrder || [], n.Invoice.referencesOrder.push({
            orderNumber: e,
            orderedItem: s
        }), n.Tracking.processPositions()
    }, this.cookie_name = "deduplication_cookie", this.days_to_store = 90, this.default_cookie_value = "admitad", this.channel_name = "utm_source", this.target_code = "1", this.fare_code = "1"
};