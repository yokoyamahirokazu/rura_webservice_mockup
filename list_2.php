<?php include('./header.php'); ?>

<script>
$(function() {
$('.store_list_setting').click(function () {
    $(this).next('.store_list_setting_modal').toggleClass('setting_modal_open');
  });

$('.toggle_staff_volume_off').click(function () {
    $(this).toggleClass('toggle_staff_volume_on');
  });


});
</script>




<div class="list_page_flex">
<div class="list_page_flex_right">
  <div class="list_staff_scroll_header"><p><span class="staff_number"></span>人のスタッフが出勤中</p>
</div>
<div class="content_scroll list_staff_scroll">
<div class="content_scroll_inner list_staff_scroll_inner">
    <ul class="list_staff">

        <li>
            <div class="list_staff_icon_name">
                <div class="list_staff_icon_img">
                    <div class="list_staff_icon_img_inner">
                    <img class="staff_name_img store_list_current_staff_name_img" src="img/dog.png" alt="">
                    </div>
                       <div class="icon_on_status">
                        <img class="desvg" src="icon/mike_off.svg" alt="">
                    </div>
                </div>
                <p>デモスタッフ</p>
            </div>
            <div class="list_staff_status"><p>待機中</p></div>
        </li>

        <li>
            <div class="list_staff_icon_name">
                <div class="list_staff_icon_img">
                    <div class="list_staff_icon_img_inner">
                    <img class="staff_name_img store_list_current_staff_name_img" src="img/dog.png" alt="">
                    </div>

                </div>
                <p>デモスタッフ</p>
            </div>
            <div class="list_staff_status"><p>待機中</p></div>
        </li>




    </ul>

</div>
</div>

    <div class="list_page_flex_right_bottom_content">
        <div class="list_page_flex_right_bottom_content_inner">

            <div class="list_page_flex_right_bottom_left">
            <button class="btn btn_red btn_red_cicle toggle_staff_volume_off">
                <img class="desvg" src="./icon/mike_off.svg" alt="">
            </button>
            </div>

            <div class="list_page_flex_right_bottom_right">
                <button class="btn btn_border">休憩する</button>
                <button class="btn btn_red">勤務終了</button>
            </div>
    </div>
</div>

</div>

<script>
$(function() {
  var w = $('.list_page_flex_left').innerWidth();
  var cnt = $(".store_list_box").length;
  console.log(cnt);

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

  $(window).resize(function(){
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
});


</script>



<div class="list_page_flex_left">
<div class="content_scroll">
    <div class="content_scroll_inner">
        <div class="store_list">

            <div class="store_list_box flex_col_3 ds_box_1 hover_border shop_list_enabled">
                <div class="ds_box_inner">
                    <div class="store_list_video_box">
                        <div class="store_list_video_box_inner">
                            <img src="./img/store_min.png" alt="">
                        </div>
                    </div>
                    <div class="store_list_info">
                        <div class="store_list_info_store_name">
                        <p class="headline_14">福山駅前本店</p>
                        </div>
                        <div class="store_list_info_under">
                            <div class="store_list_info_status">
                            <div class="store_list_info_status_box">
                            <p class="small">トリープン</p>
                            </div>
                            <div class="store_list_info_status_box">
                            <div class="icon_text icon_text_small">
                                <img class="desvg" src="icon/android.svg" alt="">
                                <p>android</p>
                            </div>
                            </div>
                            </div>
                            <div class="store_list_info_setting">
                                <div class="simple_hover icon_btn store_list_info_volume">
                                <img class="desvg" src="icon/volume_high.svg" alt="">
                                </div>

                                <div class="simple_hover icon_btn store_list_setting">
                                <img class="desvg" src="icon/more.svg" alt="">
                                </div>

                                <div class="ds_box_1 setting_modal setting_modal_top_right store_list_setting_modal">
                                    <div class="ds_box_inner setting_modal_inner">
                                            <div class="setting_modal_btn_box">
                                            <div class="setting_modal_inner_box">
                                            <div class="icon_text simple_hover">
                                            <img class="desvg" src="./icon/screensaver.svg" alt="">
                                            <p>スクリーンセーバー起動</p>
                                            </div>
                                            </div>
                                            <div class="setting_modal_inner_box">
                                            <div class="icon_text simple_hover">
                                            <img class="desvg" src="./icon/reload.svg" alt="">
                                            <p>アプリ再起動</p>
                                            </div>
                                            </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="store_list_box flex_col_3 ds_box_1 hover_border shop_list_enabled">
                <div class="ds_box_inner">
                    <div class="store_list_video_box">
                        <div class="store_list_video_box_inner">
                            <img src="./img/store_min.png" alt="">
                        </div>
                    </div>
                    <div class="store_list_info">
                        <div class="store_list_info_store_name">
                        <p class="headline_14">福山駅前本店</p>
                        <div class="store_network_unstable icon_text icon_text_small">
                        <img class="desvg" src="icon/wave_low.svg" alt="">
                        <p>ネットワークが不安定</p>
                        </div>
                        </div>
                        <div class="store_list_info_under">
                            <div class="store_list_info_status">
                            <div class="store_list_info_status_box">
                            <p class="small">トリープン</p>
                            </div>
                            <div class="store_list_info_status_box">
                            <div class="icon_text icon_text_small">
                                <img class="desvg" src="icon/android.svg" alt="">
                                <p>android</p>
                            </div>
                            </div>
                            </div>
                            <div class="store_list_info_setting">
                                <div class="simple_hover icon_btn store_list_info_volume">
                                <img class="desvg" src="icon/volume_high.svg" alt="">
                                </div>

                                <div class="simple_hover icon_btn store_list_setting">
                                <img class="desvg" src="icon/more.svg" alt="">
                                </div>        <div class="ds_box_1 setting_modal setting_modal_top_right store_list_setting_modal">
                                    <div class="ds_box_inner setting_modal_inner">
                                            <div class="setting_modal_btn_box">
                                            <div class="setting_modal_inner_box">
                                            <div class="icon_text simple_hover">
                                            <img class="desvg" src="./icon/screensaver.svg" alt="">
                                            <p>スクリーンセーバー起動</p>
                                            </div>
                                            </div>
                                            <div class="setting_modal_inner_box">
                                            <div class="icon_text simple_hover">
                                            <img class="desvg" src="./icon/reload.svg" alt="">
                                            <p>アプリ再起動</p>
                                            </div>
                                            </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





        </div>
    </div>
</div>

</div>
</div>


<?php include('./footer.php'); ?>
