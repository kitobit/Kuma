<?php 
include ("../blocks/lock.php");
header('Content-type: text/html; charset=utf-8'); ?>
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

<div class="hr"></div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="new_lesson.php"><span><img src="./files/player-m-60.png" alt="м" height="16" width="16">
   <span class="user"><span></span></span><span class="minor"></span></span> Добавить Статью</a>
</div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="edit_lesson.php"><img alt="+" src="./files/guild.png" width="16" height="16"> Редактировать Статью
   <span style="font-weight:normal;"><span class="amount"></span></span></a>
</div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="del_lesson.php"><img alt="+" src="./files/guild.png" width="16" height="16"> Удалить Статью
   <span style="font-weight:normal;"><span class="amount"></span></span></a>
</div>

<div class="hr"></div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="edit_text.php"><img alt="+" src="./files/guild.png" width="16" height="16"> Редактировать тексты
   <span style="font-weight:normal;"><span class="amount"></span></span></a>
</div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="new_tag.php"><span><img src="./files/player-m-60.png" alt="м" height="16" width="16">
   <span class="user"><span></span></span><span class="minor"></span></span> Добавить тег</a>
</div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="edit_tag.php"><img alt="+" src="./files/guild.png" width="16" height="16"> Редактировать тег
   <span style="font-weight:normal;"><span class="amount"></span></span></a>
</div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="del_tag.php"><img alt="+" src="./files/guild.png" width="16" height="16"> Удалить тег
   <span style="font-weight:normal;"><span class="amount"></span></span></a>
</div>

<div class="hr"></div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="new_currency.php"><span><img src="./files/player-m-60.png" alt="м" height="16" width="16">
   <span class="user"><span></span></span><span class="minor"></span></span> Добавить курс</a>
</div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="edit_currency.php"><img alt="+" src="./files/guild.png" width="16" height="16"> Редактировать курс
   <span style="font-weight:normal;"><span class="amount"></span></span></a>
</div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="del_currency.php"><img alt="+" src="./files/guild.png" width="16" height="16"> Удалить курс
   <span style="font-weight:normal;"><span class="amount"></span></span></a>
</div>

<div class="hr"></div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="new_exchange.php"><span><img src="./files/player-m-60.png" alt="м" height="16" width="16">
   <span class="user"><span></span></span><span class="minor"></span></span> Добавить валюта</a>
</div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="edit_exchange.php"><img alt="+" src="./files/guild.png" width="16" height="16"> Редактировать валюта
   <span style="font-weight:normal;"><span class="amount"></span></span></a>
</div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="del_exchange.php"><img alt="+" src="./files/guild.png" width="16" height="16"> Удалить валюта
   <span style="font-weight:normal;"><span class="amount"></span></span></a>
</div>

</div>

<p>
<?php   
$today = date("Ymd"); 
echo $today;
?>
</p>

<!-- Тип кодирования данных, enctype, требуется указывать только так, как показывает пример -->
<form enctype="multipart/form-data" action="img/upload_file.php" method="POST">
    <!-- Поле MAX_FILE_SIZE требуется указывать перед полем загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
    <!-- Название элемента input определяет название элемента в суперглобальном массиве $_FILES -->
    Отправить файл: <input name="userfile" type="file" />
    <input type="submit" value="Отправить файл" />
</form>

</body>

</html>