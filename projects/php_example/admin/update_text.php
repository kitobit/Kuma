<?php header('Content-type: text/html; charset=utf-8'); ?>

<?php
include ("../blocks/lock.php"); 
include ("../blocks/bd.php");
if (isset($_POST['title'])) {$title = $_POST['title'];}
if (isset($_POST['meta_d'])) {$meta_d = $_POST['meta_d'];}
if (isset($_POST['meta_k'])) {$meta_k = $_POST['meta_k'];}
if (isset($_POST['text'])) {$text = $_POST['text'];}
if (isset($_POST['id'])) {$id = $_POST['id'];}
?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<!-- saved from url=(0039)http://nebo.mobi/mail/read/id/952336267 -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">



<link rel="stylesheet" type="text/css" href="./files/style.css">
<title>Обработчик</title>

</head>

<body class="">

<div class="hr"></div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="../index.php"><img alt="" src="./files/home.png" width="16" height="16"> Главная</a>
</div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="new_lesson.php"><span><img src="./files/player-m-60.png" alt="м" height="16" width="16">
   <span class="user"><span></span></span><span class="minor"></span></span> Добавить</a>
</div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="edit_lesson.php"><img alt="+" src="./files/guild.png" width="16" height="16"> Редактировать
   <span style="font-weight:normal;"><span class="amount"></span></span></a>
</div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="del_lesson.php"><img alt="+" src="./files/guild.png" width="16" height="16"> Удалить
   <span style="font-weight:normal;"><span class="amount"></span></span></a>
</div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="edit_text.php"><img alt="+" src="./files/guild.png" width="16" height="16"> Редактировать тексты
   <span style="font-weight:normal;"><span class="amount"></span></span></a>
</div>

<div class="hr"></div>

</div>

<?php 
		
		if  (isset($title) && isset($meta_d) && isset($meta_k) && isset($text))
			 
			 {
			 $result = mysqli_query($db,"UPDATE settings SET title = '$title',
			 meta_d = '$meta_d',
			 meta_k = '$meta_k',
			 text = '$text' 
			 WHERE id = '$id'");
					
			  if ($result  == 'true') 
			  {
			  echo "<p>Ваша страница успешно обновлена</p>"; 
			  }
			 else
			 { 
			 echo "<p>Ваша страница не обновлена</p>";
			 }			  
			  
			 }
			 else
			 { 
			 echo "<p>Вы ввени не всю информацию. Страница не будет обновлена</p>";
			 }
		
		?>

</body>

</html>