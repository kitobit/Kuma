<?php header('Content-type: text/html; charset=utf-8'); ?>

<?php
include ("../blocks/lock.php"); 
include ("../blocks/bd.php");
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

<div class="hr"></div>

</div>

      
        <?php 
		
		if  (isset($id))
			 
			 {
			 $result = mysqli_query($db,"DELETE FROM exchange WHERE id = '$id'");
					
			  if ($result  == 'true') 
			  {
			  echo "<p>валюта успешно удалена</p>"; 
			  }
			 else
			 { 
			 echo "<p>валюта не удалена</p>";
			 }			  
			  
			 }
			 else
			 { 
			 echo "<p>Не выбрана валюта для удаления</p>";
			 }
		
		?>

</body>

</html>