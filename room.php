<?php include('./header.php'); ?>


<script>
$(function() {
$('.tab_list_content_wrapper>div').hide();
$('.tab_list_content_wrapper>div').first().slideDown();

var width = $('.tab_first').innerWidth();
var li_positon = $('.tab_first').position();
$('.tab_under_line').css('width', width);
$('.tab_under_line').css('left', li_positon.left);

$('.tab_name').click(function(){
$(this).addClass("current_tab");
$(".tab_name").not(this).removeClass("current_tab");
var width = $(this).innerWidth();
var li_positon = $(this).position();
$('.tab_under_line').css('width', width);
$('.tab_under_line').css('left', li_positon.left);

var thisclass=$(this).children("span").attr('class');
console.log(thisclass);

$('.tab_list_content_wrapper>div').each(function(){
if($(this).hasClass(thisclass)){
$(this).fadeIn(400);
}
else{
$(this).hide();
}
});


});

var h = $(window).height();
var room_store_display_height = $('.room_store_display').innerHeight();
var room_flex_left_under_height = h - room_store_display_height - 45;
var tab_list_content_height = h - room_store_display_height - 45 - 50;
$('.room_flex_left_under').css('height', room_flex_left_under_height);
$('.tab_list_content').css('height', tab_list_content_height);

var customer_action_box_height = $('.customer_action_box').innerHeight();
var operation_pannel_height = h - customer_action_box_height - 70 -45;
$('.operation_pannel').css('height', operation_pannel_height);

$(window).resize(function(){
var room_store_display_height = $('.room_store_display').innerHeight();
var h = $(window).height();
var room_flex_left_under_height = h - room_store_display_height - 45;
var tab_list_content_height = h - room_store_display_height - 45 - 50;
$('.room_flex_left_under').css('height', room_flex_left_under_height);
$('.tab_list_content').css('height', tab_list_content_height);

var customer_action_box_height = $('.customer_action_box').innerHeight();
var operation_pannel_height = h - customer_action_box_height - 70 -45;
$('.operation_pannel').css('height', operation_pannel_height);
});

$('.photo_movie').click(function(){
$(this).addClass("active");
$(".photo_movie").not(this).removeClass("active");
});

$('.speach').click(function(){
$(this).addClass("active");
$(".speach").not(this).removeClass("active");
});

$('.operation_list_pannel_img_43').each(function() {
    var src = $(this).children('img').attr('src');
    $(this).append('<a target="_black" href="' + src + '" class="btn_operation_list_pannel_img_confirm"><img class="desvg" src="icon/blank.svg"></a>')
  });

});
</script>



<div class="room_flex">
    <div class="room_flex_left">
        <div class="room_store_display">
        <div class="room_store_video">
        <img src="./img/store.png">
        </div>
        <div class="room_store_video_info">
        <p class="room_name">倉敷駅前店</p>
        <div class="room_store_video_info_status">
            <div class="icon_text">
            <img class="desvg room_store_video_info_icon" src="./icon/android.svg">
            <p>android</p>
            </div>
            <div class="room_store_video_volume">
            <img class="desvg room_store_video_info_icon" src="./icon/volume_high.svg">
            <div class="slidecontainer">
            <input type="range" min="5" max="100" value="10" step='1' class="slider" list='tickmarks'>
            </div>
            </div>
            <div class="room_store_video_select">
            <img class="desvg room_store_video_info_icon" src="./icon/viedo.svg">
            <div class="border_select">
            <select>
            <option>Integrated Webcam (0c45:6401)</option>
            </select>
            </div>
            </div>
        </div>
        </div>
        </div>



        <div class="room_flex_left_under">

        <div class="tab_list_box">
            <ul class="tab_list">
                <li class="tab_first tab_name">
                <img class="desvg" src="./icon/note.svg"><span class="tab_note">ノート</span></li>
                <li class="tab_name"><span class="tab_memo">メモ</span></li>
                <li class="tab_name"><span class="tab_welcome">入店処理</span></li>
                <li class="tab_name"><span class="tab_out"></span>退店処理</li>
                <li class="tab_name"><span class="tab_member"></span>新規会員登録</li>
                <li class="tab_name"><span class="tab_price"></span>料金説明</li>
                <li class="tab_name"><span class="tab_features"></span>特徴説明</li>
                 <li class="tab_under_line"></li>
            </ul>


            <div class="tab_list_content_wrapper">

            <div class="content_scroll tab_list_content tab_note">
            <div class="tab_list_content_inner">
                <p>
                    1. お声がけ　「こんにちは。ご予約のお客様ですか？」<br>
                    2. QRコードを読み取りいただきます。<br>
                    　・予約：Web会員登録いただき、入店ボタンを押していただきます。<br>
                    　・アプリ：入店ボタンを押すだけでOK<br>
                    3. WiFiのSSIDとパスワードを提示します。<br>
                    4. マップを提示して、お部屋・お手洗いをご案内します。<br>
                    5. お声がけがないので時間管理の徹底をお願いします。
<br><br>
                    1. お声がけ　「こんにちは。ご予約のお客様ですか？」<br>
                    2. QRコードを読み取りいただきます。<br>
                    　・予約：Web会員登録いただき、入店ボタンを押していただきます。<br>
                    　・アプリ：入店ボタンを押すだけでOK<br>
                    3. WiFiのSSIDとパスワードを提示します。<br>
                    4. マップを提示して、お部屋・お手洗いをご案内します。<br>
                    5. お声がけがないので時間管理の徹底をお願いします。
<br><br>

                    1. お声がけ　「こんにちは。ご予約のお客様ですか？」<br>
                    2. QRコードを読み取りいただきます。<br>
                    　・予約：Web会員登録いただき、入店ボタンを押していただきます。<br>
                    　・アプリ：入店ボタンを押すだけでOK<br>
                    3. WiFiのSSIDとパスワードを提示します。<br>
                    4. マップを提示して、お部屋・お手洗いをご案内します。<br>
                    5. お声がけがないので時間管理の徹底をお願いします。


                </p>
            </div>
            </div>

            <div class="content_scroll tab_list_content tab_memo">
            <div class="tab_list_content_inner">
                <p>
                めも
                </p>
            </div>
            </div>
            <div class="content_scroll tab_list_content tab_welcome">
            <div class="tab_list_content_inner">
                <p>
                入店処理

                </p>
            </div>
            </div>
            <div class="content_scroll tab_list_content tab_out">
            <div class="tab_list_content_inner">
                <p>
                    退店処理

                </p>
            </div>
            </div>
            <div class="content_scroll tab_list_content tab_member">
            <div class="tab_list_content_inner">
                <p>
                   新規会員登録

                </p>
            </div>
            </div>
            <div class="content_scroll tab_list_content tab_price">
            <div class="tab_list_content_inner">
                <p>
                 料金説明

                </p>
            </div>
            </div>
            <div class="content_scroll tab_list_content tab_features">
            <div class="tab_list_content_inner">
                <p>
                特徴説明
                </p>
            </div>
            </div>

            </div>

        </div>

        <div class="operation_scroll_box operation_scroll_box_qr">
        <div class="operation_scroll_box_headline">
        <div class="icon_text">
        <img class="desvg" src="icon/qr.svg">
        <p>バーコード</p>
        </div>
        </div>
           <div class="content_scroll operation_scroll_box_content_scroll">
            <div class="operation_scroll_box_content_scroll_inner">
                <ul class="operation_list_pannel">
                    <li class="">
                        <p>        <img class="desvg" src="icon/note.svg">0010113001-03-25 19:48:37</p>
                    </li>
                    <li class="">
                        <p>        <img class="desvg" src="icon/note.svg">0010113001-03-25 19:48:37</p>
                    </li>
                    <li class="">
                        <p>        <img class="desvg" src="icon/note.svg">0010113001-03-25 19:48:37</p>
                    </li>
                    <li class="">
                        <p>        <img class="desvg" src="icon/note.svg">0010113001-03-25 19:48:37</p>
                    </li>
                    <li class="">
                        <p>        <img class="desvg" src="icon/note.svg">0010113001-03-25 19:48:37</p>
                    </li>
                    <li class="">
                        <p>        <img class="desvg" src="icon/note.svg">0010113001-03-25 19:48:37</p>
                    </li>
                    <li class="">
                        <p>        <img class="desvg" src="icon/note.svg">0010113001-03-25 19:48:37</p>
                    </li>
                    <li class="">
                        <p>        <img class="desvg" src="icon/note.svg">0010113001-03-25 19:48:37</p>
                    </li>
                    <li class="">
                        <p>        <img class="desvg" src="icon/note.svg">0010113001-03-25 19:48:37</p>
                    </li>
                    <li class="">
                        <p>        <img class="desvg" src="icon/note.svg">0010113001-03-25 19:48:37</p>
                    </li>
                    <li class="">
                        <p>        <img class="desvg" src="icon/note.svg">0010113001-03-25 19:48:37</p>
                    </li>
                    <li class="">
                        <p>        <img class="desvg" src="icon/note.svg">0010113001-03-25 19:48:37</p>
                    </li>
                    <li class="">
                        <p>        <img class="desvg" src="icon/note.svg">0010113001-03-25 19:48:37</p>
                    </li>
                    <li class="">
                        <p>        <img class="desvg" src="icon/note.svg">0010113001-03-25 19:48:37</p>
                    </li>
                    <li class="">
                        <p>        <img class="desvg" src="icon/note.svg">0010113001-03-25 19:48:37</p>
                    </li>
                    <li class="">
                        <p>        <img class="desvg" src="icon/note.svg">0010113001-03-25 19:48:37</p>
                    </li>
                    <li class="">
                        <p>        <img class="desvg" src="icon/note.svg">0010113001-03-25 19:48:37</p>
                    </li>
                    <li class="">
                        <p>        <img class="desvg" src="icon/note.svg">0010113001-03-25 19:48:37</p>
                    </li>
                    <li class="">
                        <p>        <img class="desvg" src="icon/note.svg">0010113001-03-25 19:48:37</p>
                    </li>

                </ul>
            </div>
        </div>
        </div>


    </div>
    </div>

    <div class="room_flex_right">
        <div class="operation_pannel">
                <div class="operation_pannel_left">

                <div class="operation_pannel_box">
                <div class="icon_text normal_headline">
                <img class="desvg" src="icon/comment.svg">
                <p>再生中のスピーチ</p>
                </div>
                </div>

                <div class="operation_pannel_box">
                <div class="icon_text normal_headline">
                <img class="desvg" src="icon/mike_on.svg">
                <p>スタッフマイク</p>
                </div>
                </div>

                <div class="operation_pannel_box">
                <button class="btn btn_border"><img class="desvg" src="icon/upload.svg">画面共有</button>
                </div>


                </div>
                <div class="operation_pannel_right">

                <div class="operation_scroll_box oparation_photo_movie">
                <div class="operation_scroll_box_headline">
                <div class="icon_text">
                <img class="desvg" src="icon/photo.svg">
                <p>表示画像・動画一覧（10件）</p>
                </div>
                </div>
                <div class="content_scroll operation_scroll_box_content_scroll">
                    <div class="operation_scroll_box_content_scroll_inner">
                        <ul class="operation_list_pannel">
                            <li class="photo_movie">
                            <div class="operation_list_pannel_img_43">
                                <img src="./img/pannel_img_1.png">
                            </div>
                             <p>カナディアンロッキー（カナダ）</p>
                            </li>
                            <li class="photo_movie">
                            <div class="operation_list_pannel_img_43">
                                <img src="./img/pannel_img_2.png">
                            </div>
                             <p>キューケンホフ公園（オランダ）</p>
                            </li>
                            <li class="photo_movie">
                            <div class="operation_list_pannel_img_43">
                                <img src="./img/pannel_img_3.png">
                            </div>
                             <p>ウユニ塩湖（ボリビア）</p>
                            </li>

                            <li class="photo_movie">
                            <div class="operation_list_pannel_img_43">
                                <img src="./img/pannel_img_5.png">
                            </div>
                             <p>イエローナイフのオーロラ（カナダ）</p>
                            </li>
                            <li class="photo_movie">
                            <div class="operation_list_pannel_img_43">
                                <img src="./img/pannel_img_6.png">
                            </div>
                             <p>モニュメントバレー（アメリカ）</p>
                            </li>

                            <li class="photo_movie">
                            <div class="operation_list_pannel_img_43">
                                <img src="./img/pannel_img_8.png">
                            </div>
                             <p>アンテロープキャニオン（アメリカ）</p>
                            </li>
                            <li class="photo_movie">
                            <div class="operation_list_pannel_img_43">
                                <img src="./img/pannel_img_9.png">
                            </div>
                             <p>パムッカレ（トルコ）</p>
                            </li>
                        </ul>
                    </div>
                </div>
                </div>

                <div class="operation_scroll_box">
                <div class="operation_scroll_box_headline">
                <div class="icon_text">
                <img class="desvg" src="icon/comment.svg">
                <p>スピーチ</p>
                </div>
                </div>
                   <div class="content_scroll operation_scroll_box_content_scroll">
                    <div class="operation_scroll_box_content_scroll_inner">
                        <ul class="operation_list_pannel">
                            <li class="speach">
                                <p>お見送りA</p>
                            </li>
                            <li class="speach">
                                <p>お見送りB</p>
                            </li>
                               <li class="speach">
                                <p>お見送りC</p>
                            </li>
                               <li class="speach">
                                <p>お見送りD</p>
                            </li>
                               <li class="speach">
                                <p>お見送りE</p>
                            </li>
                               <li class="speach">
                                <p>お見送りF</p>
                            </li>
                               <li class="speach">
                                <p>お見送りG</p>
                            </li>
                               <li class="speach">
                                <p>お見送りH</p>
                            </li>
                            <li class="speach">
                                <p>お見送りA</p>
                            </li>
                            <li class="speach">
                                <p>お見送りB</p>
                            </li>
                               <li class="speach">
                                <p>お見送りC</p>
                            </li>
                               <li class="speach">
                                <p>お見送りD</p>
                            </li>
                               <li class="speach">
                                <p>お見送りE</p>
                            </li>
                               <li class="speach">
                                <p>お見送りF</p>
                            </li>
                               <li class="speach">
                                <p>お見送りG</p>
                            </li>
                               <li class="speach">
                                <p>お見送りH</p>
                            </li>
                        </ul>
                    </div>
                </div>
                </div>

                </div>

        </div>
        <div class="customer_action_box">
            <div class="customer_action_box_inner">
            <div class="customer_action_box_tilte">
                <p>分析用にお客様の反応が読み取れたときに押してください</p>
            </div>
            <div class="customer_action_box_btn_wrapper">
                <button class="btn btn_border">怒り</button>
                <button class="btn btn_border">不安</button>
                <button class="btn btn_border">驚き</button>
                <button class="btn btn_border">笑顔</button>
                <button class="btn btn_border btn_tool_tip">個人情報<span class="btn_tool_tip_btn">            <img class="desvg room_store_video_info_icon" src="./icon/help.svg"></span></button>
            </div>
            </div>
        </div>

            <div class="list_page_flex_right_bottom_content">
        <div class="list_page_flex_right_bottom_content_inner">

            <div class="list_page_flex_right_bottom_right">
                <button class="btn btn_red">接客終了</button>
            </div>
    </div>
</div>
    </div>
</div>


<?php include('./footer.php'); ?>
