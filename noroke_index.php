<!DOCTYPE html>
<html lang="ja">

<?php include('tpl/head.php'); ?>

<body id="">

<?php include('tpl/header.php'); ?>

<!-- Main[Start] -->
<div class="main">
<form method="POST" action="insert.php">
   <fieldset>
     <label>
      <h2 class="q">パートナーの名前</h2>
      <input type="text" name="name">
    </label>
     <label>
      <h2 class="q">片思い?両思い?</h2>
      <input type="radio" class="type_couple" name="type_couple" value="両思い">両思い
      <input type="radio" class="type_couple" name="type_couple" value="片思い">片思い
      <input type="radio" class="type_couple" name="type_couple" value="好きな人はいない">好きな人はいない
    </label>
     <label>
      <h2 class="q">思い出の場所</h2>
      <textArea name="omoide" rows="4" cols="40"></textArea>
    </label>
     <label>
      <h2 class="q">エピソード</h2>
      <textArea name="episode" rows="4" cols="40"></textArea>
    </label>
     <label>
      <h2 class="q">すきなところ</h2>
      <textArea name="favorite" rows="4" cols="40"></textArea>
    </label>
     <input class="btn_submit" type="submit" value="送信">
    </fieldset>
</form>
</div>
<!-- Main[End] -->

<?php include('tpl/footer.php'); ?>

</body>
</html>
