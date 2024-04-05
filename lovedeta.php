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

<body id="">
<?php include('tpl/header.php'); ?>
<!-- Main[Start] -->
<?=$count?>
<!-- Main[End] -->

<?php include('tpl/footer.php'); ?>

<script>
  //JSON受け取り
 $a = '<?=$json?>';
 const obj = JSON.parse($a);
 console.log(obj);
const obj_num = Object.keys(obj).length; //出た

const love_status = obj.id;
console.log(love_status);

if(obj.type_couple == "片思い") {
    console.log("片思いだよ");
};

</script>


</body>
</html>
