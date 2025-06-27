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
<title>Страница редактирования тега</title>

</head>

<body class="">

<div class="hr"></div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="../index.php"><img alt="" src="./files/home.png" width="16" height="16"> Главная</a>
</div>

<div class="hr"></div>

</div>

<?php $result = mysqli_query($db,"SELECT tag_name,id FROM garage_tegs_html"); 
		      $myrow = mysqli_fetch_array($result);
			  
			  if (!isset($id))
			  
			  {
			  
			  do 
			  {

			  printf ("<p><a href='edit_tag.php?id=%s'> %s </a></p>",$myrow["id"],$myrow["tag_name"]);
			  
			  }
			  
			  while ($myrow = mysqli_fetch_array($result));
			  }
			  
			  else
			  {
			  
              $result = mysqli_query($db,"SELECT * FROM garage_tegs_html WHERE id=$id"); 
		      $myrow = mysqli_fetch_array($result);	
			  		  
			  
			 print <<<HERE
			  
<form id="form1" name="form1" method="post" action="update_tag.php">
<p>
<label>Введите имя тега<br />
<input value="$myrow[tag_name]" type="text" name="tag_name" id="tag_name" />
</label>
</p>
<p>
<label>Введите описание тега
<textarea name="description" id="description" cols="45" rows="5">$myrow[description]</textarea>
</label>
</p>
<p>
<label>Введите синтаксис для тега
<textarea name="tag_syntax" id="tag_syntax" cols="45" rows="5">$myrow[tag_syntax]</textarea>
</label>
</p>
<p>
<label>Введите группу для тега
<input value="$myrow[tag_group]" type="text" name="tag_group" id="tag_group"/>
</label>
</p>
<p>
<label>Введите сортировку
<input value="$myrow[tag_sort]" type="text" name="tag_sort" id="tag_sort"/>
</label>
</p>
<p>
<label>Введите атрибуты
<textarea name="tag_atributes" id="tag_atributes" cols="39" rows="10">$myrow[tag_atributes]</textarea>
</label>
</p>    
<p>
<label>Закрывающий тег
<input value="$myrow[closng_tag]" type="text" name="closng_tag" id="closng_tag"/>
</label>
</p> 
<p>
<label>Примеры
<textarea name="example" id="example" cols="39" rows="10">$myrow[example]</textarea>
</label>
</p>
<p>
<label>Введите имя файла в папке img
<input value="$myrow[image]" type="text" name="image" id="image"/>
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