<?php header('Content-type: text/html; charset=utf-8'); ?>

<?php 
include ("../blocks/lock.php");
include ("../blocks/bd.php");
if (isset($_POST['currency'])) {$currency = $_POST['currency'];}
if (isset($_POST['course'])) {$course = $_POST['course'];}
if (isset($_POST['multiplicity'])) {$multiplicity = $_POST['multiplicity'];}
if (isset($_POST['date'])) {$date = $_POST['date'];}
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

<div class="hr"></div>

</div>

<?php 
		
		if  (isset($currency) && isset($course))
			 
			 {
			 $result = mysqli_query($db,"INSERT INTO exchange_rates (currency,course,multiplicity,date) VALUES ('$currency','$course','$multiplicity','$date')");
					
			  if ($result  == 'true') 
			  {
			  echo "<p>Курс успешно добавлен</p>"; 
			  }
			 else
			 { 
			 echo "<p>Курс не добавлен</p>";
			 }			  
			  
			 }
			 else
			 { 
			 echo "<p>Вы ввени не всю информацию. Курс не будет добавлен</p>";
			 }
		
		?>

</body>

</html>