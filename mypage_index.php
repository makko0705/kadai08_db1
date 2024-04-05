<!DOCTYPE html>
<html lang="ja">
<?php include('tpl/head.php'); ?>


<body class="mypage">  
<?php include('tpl/header.php'); ?>

<!-- Main[Start] -->
<div class="main partner">
<form method="POST" action="mypage_insert.php">
   <fieldset>
     <label>
      <h2 class="q">自分の名前</h2>
      <input type="text" name="name">
    </label>
    <label>
      <h2 class="q">職業</h2>
      <select name="profession" id="profession">
      <option value="">--職業を選んでください--</option>
      <option value="高校生">高校生</option>
      <option value="大学生・大学院生">大学生・大学院生</option>
      <option value="専門学校生・短大生">専門学校生・短大生</option>
      <option value="会社員">会社員</option>
      <option value="自営業・自由業">自営業・自由業</option>
      <option value="その他">その他</option>
      </select>
     </label>
     <label>
      <h2 class="q">誕生日</h2>
      <input name="birthday" type="date"></input>
    </label>
     <label>
      <h2 class="q">自己紹介</h2>
      <textArea name="profile" rows="4" cols="40"></textArea>
    </label>
     <input class="btn_submit" type="submit" value="送信">
    </fieldset>
</form>
</div>
<!-- Main[End] -->

<?php include('tpl/footer.php'); ?>

</body>
</html>
