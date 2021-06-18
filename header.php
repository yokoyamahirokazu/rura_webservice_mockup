<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Script-Type" content="text/javascript">
  <title>mockup RURA webservice</title>
  <link rel="stylesheet" href="./style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/desvg@1.0.2/desvg.min.js"></script>
<script>


$(function() {

var header_btn_other_witdh = $('.header_btn_other').innerWidth();
var header_device_setting_btn_right = header_btn_other_witdh + 20;
$('.header_device_setting_btn').css('right',header_device_setting_btn_right)


$('select[name=page_link]').change(function() {
if ($(this).val() != '') {
window.location.href = $(this).val();
}
});

$('.shop_list_enabled').click(function(){
window.location.href = 'room.php';
});

var li_cnt = $("ul.list_staff li").length;
console.log(li_cnt);
$('.staff_number').html(li_cnt);

$('.btn_device_setting').click(function(){
  $('.modal_device_setting').fadeIn(150);
  $('.modal_ovarlay').fadeIn(150);
  var setting_preview_display_height = $('.setting_preview_display').innerHeight();
console.log(setting_preview_display_height);
$('.modal_device_setting_left_photo_scroll').css('height',setting_preview_display_height);

});
$('.modal_close_btn').click(function(){
  $('.modal_device_setting').fadeOut(150);
  $('.modal_ovarlay').fadeOut(150);
});
$('.modal_ovarlay').click(function(){
  $('.modal_device_setting').fadeOut(150);
  $('.modal_ovarlay').fadeOut(150);
});

$('.btn_user_setting').click(function(){
  $('.modal_user_setting').fadeIn(150);
  $('.modal_ovarlay_2').fadeIn(150);
});
$('.modal_close_btn').click(function(){
  $('.modal_user_setting').fadeOut(150);
  $('.modal_ovarlay_2').fadeOut(150);
});
$('.modal_ovarlay_2').click(function(){
  $('.modal_user_setting').fadeOut(150);
  $('.modal_ovarlay_2').fadeOut(150);
});


$('.bg_color_select').click(function(){
$(this).addClass("active");
$(".bg_color_select").not(this).removeClass("active");
});



  $('.btn_play_recording').click(function(){
    $(this).toggleClass("btn_stop");
		if($(this).hasClass('btn_stop') == false){
    $(this).html('<img class="desvg" src="icon/play.svg">録音開始');
          deSVG('.desvg', true);
		}else{
    $(this).html('<img class="desvg" src="icon/stop.svg">録音終了');
      deSVG('.desvg', true);
		}
	});
  $('.btn_play_test').click(function(){
    $(this).toggleClass("btn_stop");
		if($(this).hasClass('btn_stop') == false){
        $(this).html('<img class="desvg" src="icon/volume_high.svg">テスト開始');
          deSVG('.desvg', true);
		}else{
    $(this).html('<img class="desvg" src="icon/stop.svg">テスト終了');
      deSVG('.desvg', true);
		}
	});




$(window).resize(function(){
var setting_preview_display_height = $('.setting_preview_display').innerHeight();
console.log(setting_preview_display_height);
$('.modal_device_setting_left_photo_scroll').css('height',setting_preview_display_height);
});

window.addEventListener('load', function(){
  deSVG('.desvg', true);
});

});


</script>


</head>

<body>




  <div class="container">

  <header class="header">

  <div class="header_left_content">
    <img class="header_logo" src="./img/rura_logo_blue.svg" alt="">

    <div class="borderless_select simple_hover">
      <select name="page_link">
      <option value="">ルームを選択</option>
      <option value="list_1.php">1店舗の場合</option>
      <option value="list_2.php">2店舗の場合</option>
      <option value="list_3.php">3店舗の場合</option>
      <option value="list.php">3店舗以上の場合</option>
      </select>
    </div>

  </div>






<div class="header_user_btn">
  <div class="modal_ovarlay modal_ovarlay_2"></div>
<button class="staff_name simple_hover btn_user_setting">
<img class="staff_name_img" src="img/dog.png" alt="">
<p>デモスタッフ</p>
</button>
<?php include('./modal_user_setting.php'); ?>
</div>


<div class="header_device_setting_btn">
<div class="header_error_text">
<img class="desvg" src="icon/error-01.svg" alt="">
<p>サーバーに問題が発生しています</p></div>
  <div class="modal_ovarlay"></div>
<button class="icon_text simple_hover btn_device_setting">
<img class="desvg" src="icon/setting.svg" alt="">
<p>デバイス設定</p>
</button>
<?php include('./modal_device_setting.php'); ?>
</div>





  </header>


<div class="content">
