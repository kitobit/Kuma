<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
header('Content-Type: text/html; charset=utf-8');
include ("blocks/bd.php");
?>
<link rel="stylesheet" type="text/css" href="./files/style.css">
<title>index</title>
</head>
<body class="">
<?php include ("blocks/menu.php"); ?>
<div class="hr"></div>
<div class="m5">
<?php 
$result = mysqli_query($db,"SELECT title,meta_d,meta_k,text FROM settings WHERE page='index'");
$myrow = mysqli_fetch_array($result,MYSQLI_ASSOC);
echo $myrow['text'];?>
<br>

<?php include ("blocks/footer.php"); ?>

</div>
<div class="hr"></div>
</div>

</body>
</html>