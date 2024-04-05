<?php
$name = $_POST["name"];
$omoide = $_POST["omoide"];
$favorite = $_POST["favorite"];
$episode = $_POST["episode"];
$c = ",";
$str = $name.$c.$omoide.$c.$favorite.$c.$episode;
 $file = fopen("data.csv","a");
//  fwrite($file,$str."\n");
//  fclose($file);


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=”icon” type=”image/png” href=“/img/favicon.png”>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Noroke maker</title>
</head>
<body class="page_write">
<div id="phone">
    <div id="screen" class="slide">
        <div class="scroll_bar">
            <h1 class="logo"><img src="img/logo.png" alt=""></h1>

            <form action="insert.php" method="post">
                <span class="q">パートナーの名前</span>
                <div class="a">
                    <?php echo $name; ?>
                </div>
                <span class="q">一番の思い出は?</span>
                <div class="a">
                    <?php echo $omoide; ?>   
                </div>
                <span class="q">好きなところは?</span>
                <div class="a">
                    <?php echo $favorite_point; ?>    
                </div>
                <span class="q">おのろけエピソード</span>
                <div class="a">
                    <?php echo $episode; ?>    
                </div>
                <button class="btn_submit" type="submit">送信する</button>
            </form>            
        </div>

    </div>
</div>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<?php
// header("Location: select.php");
?>
</body>
</html>
