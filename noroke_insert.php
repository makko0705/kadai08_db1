<?php
//1. POSTデータ取得
$name   = $_POST["name"];
$type_couple = $_POST["type_couple"];
$episode = $_POST["episode"];
$omoide = $_POST["omoide"];
$favorite = $_POST["favorite"];


//2. DB接続します
try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DB_CONECT:'.$e->getMessage());//エラーが出たらここでexitでバチッと終わらせる
}


//３．データ登録SQL作成
$sql = "INSERT INTO gs_noroke_table(name,indate,type_couple,episode,omoide,favorite)VALUES(:name,sysdate(),:type_couple,:episode,:omoide,:favorite);";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':type_couple', $type_couple, PDO::PARAM_STR);  //bindValueで入ってきたデータをクリーニングしてる
$stmt->bindValue(':episode', $episode, PDO::PARAM_STR);  //bindValueで入ってきたデータをクリーニングしてる
$stmt->bindValue(':omoide', $omoide, PDO::PARAM_STR);  //bindValueで入ってきたデータをクリーニングしてる
$stmt->bindValue(':favorite', $favorite, PDO::PARAM_STR);  //bindValueで入ってきたデータをクリーニングしてる
$status = $stmt->execute(); //true or falseが返ってくる

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("SQL_ERROR:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: select.php");//半角スペースとっちゃだめ！
  exit();
}

