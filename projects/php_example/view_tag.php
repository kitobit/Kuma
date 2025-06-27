<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<!-- saved from url=(0039)http://nebo.mobi/mail/read/id/952336267 -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <?php header('Content-type: text/html; charset=utf-8'); ?>
<?php 
// $db = mysqli_connect("localhost","garage","1234567890","garage");
include ("blocks/bd.php");
mysqli_set_charset($db,'utf8');

if (isset($_GET['id'])) {$id = $_GET['id'];}

$result = mysqli_query($db,"SELECT * FROM garage_tegs_html WHERE id='$id'");
$myrow = mysqli_fetch_array($result);
?>

<link rel="stylesheet" type="text/css" href="./files/style.css">
<title>index</title>

</head>

<body class="">
<?php include ("blocks/menu.php"); ?>

<div class="cntr tdn bl rc">
   <?php echo $myrow['tag_name'];?><br>
</div>

<div class="small nshd">
<?php
$tag_description = $myrow["description"];
$tag_description = str_replace('<','&lt',$tag_description);
$tag_description = str_replace('>','&gt',$tag_description);   
echo $tag_description;  
?>
</div>

<div class="cntr tdn bl rc">
   <p>Синтаксис</p>
</div>   
<div class="flhdr">  
     <?php
$tag_syntax = $myrow["tag_syntax"];
$tag_syntax = str_replace('<','&lt',$tag_syntax);
$tag_syntax = str_replace('>','&gt',$tag_syntax);
    print <<<HERE
    <code><pre>$tag_syntax</pre></code>
HERE;
?>
</div>
<br>
<div class="cntr tdn bl rc">
<p>Группа</p>
</div> 

<?php echo $myrow['tag_group'];?><br>
<div class="cntr tdn bl rc">
<p>Атрибуты</p>
</div>

<div class="flhdr"> 
<span class="state">
<?php   
$tag_atributes = $myrow["tag_atributes"];
$tag_atributes = str_replace('<','&lt',$tag_atributes);
$tag_atributes = str_replace('>','&gt',$tag_atributes);
    print <<<HERE
    <code>$tag_atributes</code>
HERE;
?> 
</span>
</div>

<div class="cntr tdn bl rc">
<p>Закрываюший тег</p>
</div>
<?php echo $myrow['closng_tag'];?><br>

<div class="cntr tdn bl rc">
<p>Примеры</p>
</div>
<?php   
$example = $myrow["example"];
$example = str_replace('<','&lt',$example);
$example = str_replace('>','&gt',$example);
    print <<<HERE
    <code><pre>$example</pre></code>
HERE;
?>

<p align="center">
<?php 
$image = $myrow["image"];
// if ($image!=="") {print("<img src='img/$image' width='191' height='190'>");}
if ($image!=="") {print("<img src='img/$image'>");}
?>
</p>

</div>

<div class="hr"></div>

</div>
<?php include ("blocks/footer.php"); ?>
</body>

</html>