
$(function () {

    var header_btn_other_witdh = $('.header_btn_other').innerWidth();
    var header_device_setting_btn_right = header_btn_other_witdh + 20;
    $('.header_device_setting_btn').css('right', header_device_setting_btn_right)


    $('select[name=page_link]').change(function () {
        if ($(this).val() != '') {
            window.location.href = $(this).val();
        }
    });

    $('.shop_list_enabled').click(function () {
        window.location.href = 'room.php';
    });

    var li_cnt = $("ul.list_staff li").length;
    $('.staff_number').html(li_cnt);

    $('.btn_device_setting').click(function () {
        $('.modal_device_setting').fadeIn(150);
        $('.modal_ovarlay').fadeIn(150);
        var setting_preview_display_height = $('.setting_preview_display').innerHeight();
        $('.modal_device_setting_left_photo_scroll').css('height', setting_preview_display_height);

    });
    $('.modal_close_btn').click(function () {
        $('.modal_device_setting').fadeOut(150);
        $('.modal_ovarlay').fadeOut(150);
    });
    $('.modal_ovarlay').click(function () {
        $('.modal_device_setting').fadeOut(150);
        $('.modal_ovarlay').fadeOut(150);
    });

    $('.btn_user_setting').click(function () {
        $('.modal_user_setting').fadeIn(150);
        $('.modal_ovarlay_2').fadeIn(150);
    });
    $('.modal_close_btn').click(function () {
        $('.modal_user_setting').fadeOut(150);
        $('.modal_ovarlay_2').fadeOut(150);
    });
    $('.modal_ovarlay_2').click(function () {
        $('.modal_user_setting').fadeOut(150);
        $('.modal_ovarlay_2').fadeOut(150);
    });


    $('.bg_color_select').click(function () {
        $(this).addClass("active");
        $(".bg_color_select").not(this).removeClass("active");
    });



    $('.btn_play_recording').click(function () {
        $(this).toggleClass("btn_stop");
        if ($(this).hasClass('btn_stop') == false) {
            $(this).html('<img class="desvg" src="icon/play.svg">録音開始');
            deSVG('.desvg', true);
        } else {
            $(this).html('<img class="desvg" src="icon/stop.svg">録音終了');
            deSVG('.desvg', true);
        }
    });
    $('.btn_play_test').click(function () {
        $(this).toggleClass("btn_stop");
        if ($(this).hasClass('btn_stop') == false) {
            $(this).html('<img class="desvg" src="icon/volume_high.svg">テスト開始');
            deSVG('.desvg', true);
        } else {
            $(this).html('<img class="desvg" src="icon/stop.svg">テスト終了');
            deSVG('.desvg', true);
        }
    });



    $('.store_list_info_volume').click(function () {
        if ($(this).hasClass('btn_max') == true) {
            $(this).addClass("btn_medium").removeClass('btn_max');
            $(this).html('<img class="desvg" src="icon/volume_medium.svg">');
            deSVG('.desvg', true);
        }
        else if ($(this).hasClass('btn_medium') == true) {
            $(this).addClass("btn_minimum").removeClass('btn_medium');
            $(this).html('<img class="desvg" src="icon/volume_minimum.svg">');
            deSVG('.desvg', true);
        }
        else if ($(this).hasClass('btn_minimum') == true) {
            $(this).addClass("btn_mute").removeClass('btn_minimum');
            $(this).html('<img class="desvg" src="icon/volume_mute.svg">');
            deSVG('.desvg', true);
        }
        else if ($(this).hasClass('btn_mute') == true) {
            $(this).addClass("btn_max").removeClass('btn_mute');
            $(this).html('<img class="desvg" src="icon/volume_max.svg">');
            deSVG('.desvg', true);
        }

    });












    $(window).resize(function () {
        var setting_preview_display_height = $('.setting_preview_display').innerHeight();
        $('.modal_device_setting_left_photo_scroll').css('height', setting_preview_display_height);
    });

    window.addEventListener('load', function () {
        deSVG('.desvg', true);
    });


    $('.store_list_setting').click(function () {
        $(this).next('.store_list_setting_modal').toggleClass('setting_modal_open');
    });

    $('.toggle_staff_volume_off').click(function () {
        $(this).toggleClass('toggle_staff_volume_on');
    });




    var w = $('.list_page_flex_left').innerWidth();
    var cnt = $(".store_list_box").length;

    if (cnt <= 1) {
        $('.store_list_box').css('width', 'calc(100% - 16px)');

    }
    else if (cnt <= 2) {
        $('.store_list_box').css('width', 'calc(50% - 16px)');
        if (w < 684) {
            $('.store_list_box').css('width', 'calc(100% - 16px)');
        }
    }
    else if (cnt <= 3) {
        $('.store_list_box').css('width', 'calc(33.3333% - 16px)');
        if (w < 1026) {
            $('.store_list_box').css('width', 'calc(50% - 16px)');
        }
        if (w < 684) {
            $('.store_list_box').css('width', 'calc(100% - 16px)');
        }
    }
    else {

        if (w < 1368) {
            $('.store_list_box').css('width', 'calc(33.33333% - 16px)');
        }
        if (w < 1026) {
            $('.store_list_box').css('width', 'calc(50% - 16px)');
        }
        if (w < 684) {
            $('.store_list_box').css('width', 'calc(100% - 16px)');
        }
    }

    $(window).resize(function () {
        var w = $('.list_page_flex_left').innerWidth();

        if (cnt <= 1) {
            $('.store_list_box').css('width', 'calc(100% - 16px)');

        }
        else if (cnt <= 2) {
            $('.store_list_box').css('width', 'calc(50% - 16px)');
            if (w < 684) {
                $('.store_list_box').css('width', 'calc(100% - 16px)');
            }
        }
        else if (cnt <= 3) {
            $('.store_list_box').css('width', 'calc(33.3333% - 16px)');
            if (w < 1026) {
                $('.store_list_box').css('width', 'calc(50% - 16px)');
            }
            if (w < 684) {
                $('.store_list_box').css('width', 'calc(100% - 16px)');
            }
        }
        else {
            if (w > 1368) {
                $('.store_list_box').css('width', 'calc(25% - 16px)');
            }
            if (w < 1368) {
                $('.store_list_box').css('width', 'calc(33.33333% - 16px)');
            }
            if (w < 1026) {
                $('.store_list_box').css('width', 'calc(50% - 16px)');
            }
            if (w < 684) {
                $('.store_list_box').css('width', 'calc(100% - 16px)');
            }
        }

    });


    // スタッフ一覧ミニマム
    $('.btn_list_page_right_mini_close').click(function () {
        $('.list_page_flex').addClass('list_page_flex_right_mini');
        var w = $('.list_page_flex_left').innerWidth();
        var cnt = $(".store_list_box").length;

        if (cnt <= 1) {
            $('.store_list_box').css('width', 'calc(100% - 16px)');

        }
        else if (cnt <= 2) {
            $('.store_list_box').css('width', 'calc(50% - 16px)');
            if (w < 684) {
                $('.store_list_box').css('width', 'calc(100% - 16px)');
            }
        }
        else if (cnt <= 3) {
            $('.store_list_box').css('width', 'calc(33.3333% - 16px)');
            if (w < 1026) {
                $('.store_list_box').css('width', 'calc(50% - 16px)');
            }
            if (w < 684) {
                $('.store_list_box').css('width', 'calc(100% - 16px)');
            }
        }
        else {

            if (w < 1368) {
                $('.store_list_box').css('width', 'calc(33.33333% - 16px)');
            }
            if (w < 1026) {
                $('.store_list_box').css('width', 'calc(50% - 16px)');
            }
            if (w < 684) {
                $('.store_list_box').css('width', 'calc(100% - 16px)');
            }
        }
    });
    $('.btn_list_page_right_mini_open').click(function () {
        $('.list_page_flex').removeClass('list_page_flex_right_mini');
        var w = $('.list_page_flex_left').innerWidth();
        var cnt = $(".store_list_box").length;

        if (cnt <= 1) {
            $('.store_list_box').css('width', 'calc(100% - 16px)');

        }
        else if (cnt <= 2) {
            $('.store_list_box').css('width', 'calc(50% - 16px)');
            if (w < 684) {
                $('.store_list_box').css('width', 'calc(100% - 16px)');
            }
        }
        else if (cnt <= 3) {
            $('.store_list_box').css('width', 'calc(33.3333% - 16px)');
            if (w < 1026) {
                $('.store_list_box').css('width', 'calc(50% - 16px)');
            }
            if (w < 684) {
                $('.store_list_box').css('width', 'calc(100% - 16px)');
            }
        }
        else {

            if (w < 1368) {
                $('.store_list_box').css('width', 'calc(33.33333% - 16px)');
            }
            if (w < 1026) {
                $('.store_list_box').css('width', 'calc(50% - 16px)');
            }
            if (w < 684) {
                $('.store_list_box').css('width', 'calc(100% - 16px)');
            }
        }
    });



});
