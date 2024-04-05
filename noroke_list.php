<?php
//1.  DB接続します
try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DB_CONECT:'.$e->getMessage());
}

//２．データ登録SQL作成
$sql = "SELECT * FROM gs_noroke_table";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();//stmtの中のexecuteを実行

//３．データ表示
if($status==false) {
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("SQL_ERROR:".$error[2]);
}

//全データ取得
$values =  $stmt->fetchAll(PDO::FETCH_ASSOC); //PDO::FETCH_ASSOC[カラム名のみで取得できるモード]
//JSONい値を渡す場合に使う
$json = json_encode($values,JSON_UNESCAPED_UNICODE);

?>


<!DOCTYPE html>
<html lang="ja">
  
<?php include('tpl/head.php'); ?>

<body class="">  

<?php include('tpl/header.php'); ?>
<!-- Main[Start] -->
<div class="slide">
    <?php foreach($values as $value){ ?>
      <div class="partner">
      <h1 class="name">
        <span><?=$value["name"]?></span>
      </h1>
      <div class="omoide baloon">
        <h2>一番の思い出は?</h2>
        <div class="text">
          <?=$value["omoide"]?>
        </div>
      </div>
      <div class="sukinatokoro baloon">
        <h2>好きなところは?</h2>
        <div class="text">
          <?=$value["favorite_point"]?>
        </div>
      </div>
      <div class="episode baloon">
        <h2>おのろけエピソード</h2>
        <div class="text">
          <?=$value["episode"]?>
        </div>
      </div>
    </div>
    <?php } ?>
</div>
<!-- Main[End] -->

<?php include('tpl/footer.php'); ?>

<script>
  //JSON受け取り
 $a = '<?=$json?>';
 const obj = JSON.parse($a);
 console.log(obj);
</script>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
$(document).ready(function(){
  $('.slide').slick();
  $(".slick-arrow").text("")
});
</script>

</body>
</html>
