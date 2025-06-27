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
$result = mysqli_query($db,"SELECT id,currency,course,multiplicity,date FROM exchange_rates ORDER BY date");
$myrow = mysqli_fetch_array($result);
 do {    
   printf("<tr class='' style=''>
           <td class='usr' style=''>
           <span class='user'>%s %s %s</span>
           </td>
           </tr>
           <tr class='' style=''>",
                 $myrow["date"],
                 $myrow["currency"],
                 $myrow["course"]);
     } 
   while ($myrow = mysqli_fetch_array ($result));              
   ?>
</table>

</div>

</div>

<?php include ("blocks/footer.php"); ?>

</body>

</html>