</div> <!-- //scroll_bar -->
    <div class="menu img-wrap">
        <p id="btn_close"><img src="img/btn_close_white.png"></p>
        <ul>
            <li><a href="top.php">トップページ</a></li>
            <li><a href="select.php">のろけを見る</a></li>
            <li><a href="lovedeta.php">みんなの恋愛データ</a></li>
            <li><a href="mypage.php">プロフィールを入力する</a></li>
            <li><a href="mypage_select.php">プロフィール</a></li>
        </ul>
    </div>
    <p id="btn_menu"><img src="img/btn_menu.png"></p>
</div> <!-- //screen -->
</div> <!-- //phone -->

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
$('#btn_menu').click(function() {
  $('.menu').fadeIn(500);
  console.log('おしました');
  $('#btn_menu').hide();
});
$('#btn_close').click(function() {
  $('.menu').fadeOut(500);
  console.log('とじるをおしました');
  $('#btn_menu').fadeIn(500);
});
  
</script>
