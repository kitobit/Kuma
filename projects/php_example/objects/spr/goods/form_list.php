<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
header('Content-Type: text/html; charset=utf-8');
include ("../../../blocks/bd.php");
?>

<link rel="stylesheet" type="text/css" href="../../../files/style.css">
<title>index</title>

</head>

<body class="">

<?php // include ("../../../blocks/menu.php"); ?>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="../../../index.php"><img alt="" src="../../../files/home.png" width="16" height="16"> Главная</a>
</div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="../../../articles.php"><span><img src="../../../files/player-m-60.png" alt="м" height="16" width="16">
   <span class="user"><span></span></span><span class="minor"></span></span> Статьи</a>
</div>

<div class="ftr">
   <a style="width:99%;" class="btn fclr" href="../../../html_tags.php"><span><img src="../../../files/player-m-60.png" alt="м" height="16" width="16">
   <span class="user"><span></span></span><span class="minor"></span></span> Теги html</a>
</div>

<div class="m5">
      
<table class="rtg">
  
<?php
$result = mysqli_query($db,"SELECT name,description FROM spr_goods");
$myrow = mysqli_fetch_array($result,MYSQLI_ASSOC);
$result = mysqli_query($db,"SELECT id,name FROM spr_goods ORDER BY name");
$myrow = mysqli_fetch_array($result);
 do {    
   printf("<tr class='' style=''>
           <td class='usr' style=''>
           <a href='view_tag.php?id=%s'>
           <span class='user'>%s</span>
           </a>
           </td>
           </tr>
           <tr class='' style=''>",
                 $myrow["id"],
                 $myrow["name"]);
     } 
   while ($myrow = mysqli_fetch_array ($result));              
   ?>
</table>

</div>

</div>
</body>

</html>