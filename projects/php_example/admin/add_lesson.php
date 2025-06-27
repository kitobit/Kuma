<?php header('Content-type: text/html; charset=utf-8'); ?>

<?php 
include ("../blocks/lock.php");
include ("../blocks/bd.php");
if (isset($_POST['title'])) {$title = $_POST['title'];}
if (isset($_POST['meta_d'])) {$meta_d = $_POST['meta_d'];}
if (isset($_POST['meta_k'])) {$meta_k = $_POST['meta_k'];}
if (isset($_POST['date'])) {$date = $_POST['date'];}
if (isset($_POST['description'])) {$description = $_POST['description'];}
if (isset($_POST['text'])) {$text = $_POST['text'];}
if (isset($_POST['author'])) {$author = $_POST['author'];}
// echo "<p> 555 '$title'</p>";
?>

<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<!-- saved from url=(0039)http://nebo.mobi/mail/read/id/952336267 -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">



<link rel="stylesheet" type="text/css" href="./files/style.css">
<title>админка</title>

</head>

<body class="">

<div class="hr"></div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="../index.php"><img alt="" src="./files/home.png" width="16" height="16"> Главная</a>
</div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="articles.php"><span><img src="./files/player-m-60.png" alt="м" height="16" width="16">
   <span class="user"><span></span></span><span class="minor"></span></span> Добавить</a>
</div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="contacts.php"><img alt="+" src="./files/guild.png" width="16" height="16"> Редактировать
   <span style="font-weight:normal;"><span class="amount"></span></span></a>
</div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="contacts.php"><img alt="+" src="./files/guild.png" width="16" height="16"> Удалить
   <span style="font-weight:normal;"><span class="amount"></span></span></a>
</div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="contacts.php"><img alt="+" src="./files/guild.png" width="16" height="16"> Редактировать тексты
   <span style="font-weight:normal;"><span class="amount"></span></span></a>
</div>

<div class="hr"></div>

</div>

<?php 
		
		if  (isset($title) && isset($meta_d) 
		     && isset($meta_k) && isset($date) 
			 && isset($description) && isset($text)
			 && isset($author))
			 
			 {
			 $result = mysqli_query($db,"INSERT INTO lessons (title,meta_d,meta_k,date,description,text,author) VALUES ('$title','$meta_d','$meta_k','$date','$description','$text','$author')");
					
			  if ($result  == 'true') 
			  {
			  echo "<p>Ваш урок успешно добавлен</p>"; 
			  }
			 else
			 { 
			 echo "<p>Ваш урок не добавлен</p>";
			 }			  
			  
			 }
			 else
			 { 
			 echo "<p>Вы ввени не всю информацию. Урок не будет добавлен</p>";
			 }
		
		?>

</body>

</html>