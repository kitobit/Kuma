<?php header('Content-type: text/html; charset=utf-8'); ?>
<?php 
include("../blocks/lock.php");
include("../blocks/bd.php"); ?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<!-- saved from url=(0039)http://nebo.mobi/mail/read/id/952336267 -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">



<link rel="stylesheet" type="text/css" href="./files/style.css">
<title>Страница удаления валюты</title>

</head>

<body class="">

<div class="hr"></div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="../index.php"><img alt="" src="./files/home.png" width="16" height="16"> Главная</a>
</div>

<div class="hr"></div>

</div>

<p><strong>Выберите валюту для удаления</strong></p>

<form action="drop_exchange.php" method="post">
        
        <?php $result = mysqli_query($db,"SELECT exchange_name,description,id FROM exchange"); 
		      $myrow = mysqli_fetch_array($result);
			  
			  
			  do 
			  {

			  printf ("<p><input name = 'id' type = 'radio' value = '%s'> <lable>%s %s</lable></p>",$myrow["id"],$myrow["exchange_name"],$myrow["description"]);
			  
			  }
			  
			  while ($myrow = mysqli_fetch_array($result));
	
			  
		?>
        <p><input name="submit" type="submit" value="Удалить валюту" /></p>
        </form>


</body>

</html>