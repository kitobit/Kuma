<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<!-- saved from url=(0039)http://nebo.mobi/mail/read/id/952336267 -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <?php header('Content-type: text/html; charset=utf-8'); ?>
<?php 
// $db = mysqli_connect("localhost","garage","1234567890","garage");
include ("blocks/bd.php");
mysqli_set_charset($db,'utf8');

if (isset($_GET['id'])) {$id = $_GET['id'];}

$result = mysqli_query($db,"SELECT * FROM lessons WHERE id='$id'");
$myrow = mysqli_fetch_array($result);
?>

<link rel="stylesheet" type="text/css" href="./files/style.css">
<title>index</title>

</head>

<body class="">

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="index.php"><img alt="" src="./files/home.png" width="16" height="16"> Главная</a>
</div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="articles.php"><span><img src="./files/player-m-60.png" alt="м" height="16" width="16">
   <span class="user"><span></span></span><span class="minor"></span></span> Статьи</a>
</div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="contacts.php"><img alt="+" src="./files/guild.png" width="16" height="16"> О нас
   <span style="font-weight:normal;"><span class="amount">(+)</span></span></a>
</div>

<div class="m5">
   <?php echo $myrow['text'];?><br>
</div>
<div class="hr"></div>

</div>
<?php include ("blocks/footer.php"); ?>
</body>

</html>