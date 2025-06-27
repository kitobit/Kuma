<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
header('Content-Type: text/html; charset=utf-8');
// $db = mysqli_connect("localhost","garage","1234567890","garage");
include ("blocks/bd.php");
mysqli_set_charset($db,'utf8');
include ("blocks/bd.php");
?>

<link rel="stylesheet" type="text/css" href="./files/style.css">
<title>index</title>

</head>

<body class="">

<?php include ("blocks/menu.php"); ?>

<div class="m5">
      
<table class="rtg">
  
<?php
// $result = mysqli_query($db,"SELECT currency,course,multiplicity,date FROM exchange_rates");
// $myrow = mysqli_fetch_array($result,MYSQLI_ASSOC);
$result = mysqli_query($db,"SELECT id,object_name,description,image FROM objects ORDER BY object_name");
$myrow = mysqli_fetch_array($result);
 do {    
   printf("<tr class='' style=''>
           <td class='usr' style=''>
           <span class='user'>%s %s %s</span>
           </td>
           </tr>
           <tr class='' style=''>",
                 $myrow["object_name"],
                 $myrow["description"],
                 $myrow["image"]);
     } 
   while ($myrow = mysqli_fetch_array ($result));              
   ?>
</table>

</div>

</div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="docs/php"><span><img src="./files/player-m-60.png" alt="м" height="16" width="16">
   <span class="user"><span></span></span><span class="minor"></span></span> PHP КНИГИ</a>
</div>

<!-- Тип кодирования данных, enctype, требуется указывать только так, как показывает пример -->
<form enctype="multipart/form-data" action="docs/php/upload_file.php" method="POST">
    <!-- Поле MAX_FILE_SIZE требуется указывать перед полем загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
    <!-- Название элемента input определяет название элемента в суперглобальном массиве $_FILES -->
    Отправить файл: <input name="userfile" type="file" />
    <input type="submit" value="Отправить файл" />
</form>

<?php include ("blocks/footer.php"); ?>

</body>

</html>