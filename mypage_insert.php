<?php
//1. POSTデータ取得
$name   = $_POST["name"];
$profession   = $_POST["profession"];
$birthday   = $_POST["birthday"];
$profile   = $_POST["profile"];



//2. DB接続します
try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DB_CONECT:'.$e->getMessage());//エラーが出たらここでexitでバチッと終わらせる
}


//３．データ登録SQL作成

$sql = "INSERT INTO gs_profile_table(name,profession,birthday,profile)VALUES(:name,:profession,:birthday,:profile);";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':profession', $profession, PDO::PARAM_STR);  //bindValueで入ってきたデータをクリーニングしてる
$stmt->bindValue(':birthday', $birthday, PDO::PARAM_STR);  //bindValueで入ってきたデータをクリーニングしてる
$stmt->bindValue(':profile', $profile, PDO::PARAM_STR);  //bindValueで入ってきたデータをクリーニングしてる
$status = $stmt->execute(); //true or falseが返ってくる

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("SQL_ERROR:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: mypage_select.php");//半角スペースとっちゃだめ！
  exit();
}

