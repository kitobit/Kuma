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


<form id="form1" name="form1" method="post" action="add_lesson.php">
            <p>
          <label>Введите название урока<br />
          <input type="text" name="title" id="title" />
          </label>
            </p>
            <p>
              <label>Введите краткое описание урока <br />
              <input type="text" name="meta_d" id="meta_d" />
            </label>
            </p>
            <p>
            <label>Введите ключевые слова для урока<br />
            <input type="text" name="meta_k" id="meta_d" />
            </label>
            </p>  
            <p>
            <label>Введите дату добавления урока<br />
            <input name="date" type="text" id="date" value="2017-09-06" />
            </label>
            </p>
            <p>
              <label>Введите краткое описание урока с тегами абзацев
              <textarea name="description" id="description" cols="45" rows="5"></textarea>
              </label>
            </p>
            <p>
              <label>Введите полный текст урока с тегами
              <textarea name="text" id="text" cols="45" rows="20"></textarea>
</label>
            </p>
            <p>
              <label>Введите автора урока<br />
              <input type="text" name="author" id="author" />
              </label>
            </p>
            <p>
              <label>
              <input type="submit" name="submit" id="submit" value="Занести урок в базу" />
              </label>
            </p>
        </form>

</body>

</html>