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

</div>


<form id="form1" name="form1" method="post" action="add_tag.php">
            <p>
          <label>Введите имя тега<br />
          <input type="text" name="tag_name" id="tag_name" />
          </label>
            </p>

            <p>
              <label>Введите краткое описание урока с тегами абзацев
              <textarea name="description" id="description" cols="39" rows="10"></textarea>
              </label>
            </p>
            <p>
              <label>Введите синтаксис для тега
              <textarea name="tag_syntax" id="tag_syntax" cols="39" rows="10"></textarea>
              </label>
            </p>
            <p>
              <label>Введите группу для тега
              <input type="text" name="tag_group" id="tag_group"/>
              </label>
            </p>
            <p>
              <label>Введите сортировку
              <input type="text" name="tag_sort" id="tag_sort"/>
              </label>
            </p>
            <p>
              <label>Введите атрибуты
              <textarea name="tag_atributes" id="tag_atributes" cols="39" rows="10"></textarea>
              </label>
            </p>    
            <p>
              <label>Закрывающий тег
              <input type="text" name="closng_tag" id="closng_tag"/>
              </label>
            </p> 
            <p>
              <label>Примеры
              <textarea name="example" id="example" cols="39" rows="10"></textarea>
              </label>
            </p>                                                     
            <p>
              <label>
              <input type="submit" name="submit" id="submit" value="Добавить тег" />
              </label>
            </p>
        </form>

</body>

</html>