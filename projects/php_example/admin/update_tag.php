<?php 
include ("../blocks/lock.php");
header('Content-type: text/html; charset=utf-8'); ?>
<?php 
include ("../blocks/bd.php");
if (isset($_POST['tag_name'])) {$tag_name = $_POST['tag_name'];}
if (isset($_POST['description'])) {$description = $_POST['description'];}
if (isset($_POST['tag_syntax'])) {$tag_syntax = $_POST['tag_syntax'];}
if (isset($_POST['tag_group'])) {$tag_group = $_POST['tag_group'];}
if (isset($_POST['tag_sort'])) {$tag_sort = $_POST['tag_sort'];}
if (isset($_POST['tag_atributes'])) {$tag_atributes = $_POST['tag_atributes'];}
if (isset($_POST['closng_tag'])) {$closng_tag = $_POST['closng_tag'];}
if (isset($_POST['example'])) {$example = $_POST['example'];}
if (isset($_POST['image'])) {$image = $_POST['image'];}
if (isset($_POST['id'])) {$id = $_POST['id'];}
// echo "<p> 555 '$title'</p>";
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
		
		if  (isset($tag_name) && isset($description))
			 
			 {
			 $result = mysqli_query($db,"UPDATE garage_tegs_html SET tag_name = '$tag_name',
			                                                         description = '$description', 
																	 tag_syntax = '$tag_syntax',
																	 tag_sort = '$tag_sort',
																	 tag_group = '$tag_group',
																	 tag_atributes = '$tag_atributes',
																	 closng_tag = '$closng_tag',
																	 example = '$example',
																	 image = '$image'
																	 WHERE id = '$id'");
					
			  if ($result  == 'true') 
			  {
			  echo "<p>Тег успешно обновлен</p>"; 
			  }
			 else
			 { 
			 echo "<p>Тег не обновлен</p>";
			 }			  
			  
			 }
			 else
			 { 
			 echo "<p>Вы ввени не всю информацию. Тег не будет обновлен</p>";
			 }
		
		?>


</body>

</html>