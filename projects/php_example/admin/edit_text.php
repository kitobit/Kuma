<?php header('Content-type: text/html; charset=utf-8'); ?>
<?php 
include ("../blocks/lock.php");
include("../blocks/bd.php"); 
if (isset($_GET['id'])) {$id = $_GET['id'];} ?>
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

<?php $result = mysqli_query($db,"SELECT title,id FROM settings"); 
		      $myrow = mysqli_fetch_array($result);
			  
			  if (!isset($id))
			  
			  {
			  
			  do 
			  {

			  printf ("<p><a href='edit_text.php?id=%s'> %s </a></p>",$myrow["id"],$myrow["title"]);
			  
			  }
			  
			  while ($myrow = mysqli_fetch_array($result));
			  }
			  
			  else
			  {
			  
              $result = mysqli_query($db,"SELECT * FROM settings WHERE id=$id"); 
		      $myrow = mysqli_fetch_array($result);	
			  		  
			  
			 print <<<HERE
			  
<form id="form1" name="form1" method="post" action="update_text.php">
<p>
<label>Введите название страницы (тег title)<br />
<input value="$myrow[title]" type="text" name="title" id="title" />
</label>
</p>
<p>
<label>Введите краткое описание страницы <br />
<input value="$myrow[meta_d]" type="text" name="meta_d" id="meta_d" />
</label>
</p>
<p>
<label>Введите ключевые слова для страницы <br />
<input value="$myrow[meta_k]" type="text" name="meta_k" id="meta_d" />
</label>
</p> 
<p>
<label>Введите полный текст страницы с тегами
<textarea name="text" id="text" cols="45" rows="20">$myrow[text]</textarea>
</label>
</p>
<input name="id" type="hidden" value="$myrow[id]" />
<p>
<label>
<input type="submit" name="submit" id="submit" value="Сохранить изменения" />
</label>
</p>
</form> 
HERE;
}
			  
		?>


</body>

</html>