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
window.addEventListener('load', function(){
  deSVG('.desvg', true);
});

$(function() {

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


  <div class="header_right_content">
    <!-- <div class="header_error_text">
    <img class="desvg" src="icon/error-01.svg" alt="">
    <p>サーバーに問題が発生しています</p></div> -->
  <button class="icon_text simple_hover header_right_component">
<img class="desvg" src="icon/setting.svg" alt="">
<p>デバイス設定</p>
</button>

<button class="staff_name simple_hover header_right_component">
<img class="staff_name_img" src="img/dog.png" alt="">
<p>デモスタッフ</p>
</button>
  </div>


  </header>


<div class="content">
