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
<title>Страница редактирования валюты</title>

</head>

<body class="">

<div class="hr"></div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="../index.php"><img alt="" src="./files/home.png" width="16" height="16"> Главная</a>
</div>

<div class="hr"></div>

</div>

<?php $result = mysqli_query($db,"SELECT id,exchange_name,description,image FROM exchange"); 
		      $myrow = mysqli_fetch_array($result);
			  
			  if (!isset($id))
			  
			  {
			  
			  do 
			  {

			  printf ("<p><a href='edit_exchange.php?id=%s'> %s %s %s </a></p>",$myrow["id"],$myrow["exchange_name"],$myrow["description"],$myrow["image"]);
			  
			  }
			  
			  while ($myrow = mysqli_fetch_array($result));
			  }
			  
			  else
			  {
			  
              $result = mysqli_query($db,"SELECT * FROM exchange WHERE id=$id"); 
		      $myrow = mysqli_fetch_array($result);	
			  		  
			  
			 print <<<HERE
			  
<form id="form1" name="form1" method="post" action="update_exchange.php">
<p>
<label>Введите имя валюты
<input value="$myrow[exchange_name]" type="text" name="exchange_name" id="exchange_name" />
</label>
</p>
<p>
<label>Введите описание
<input value="$myrow[description]" type="text" name="description" id="description"/>
</label>
</p>
<p>
<label>Введите имя файла картинки
<input value="$myrow[image]" type="text" name="image" id="image"/>
</label>
</p>
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