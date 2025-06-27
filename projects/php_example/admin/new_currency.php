<?php 
include ("../blocks/lock.php");
header('Content-type: text/html; charset=utf-8'); ?>
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


<form id="form1" name="form1" method="post" action="add_currency.php">
            <p>
          <label>Введите имя валюты<br />
          <input type="text" name="currency" id="currency" />
          </label>
            </p>
            <p>
              <label>Введите курс<br />
              <input name="course" id="course" />
              </label>
            </p>
            <p>
              <label>Введите кратность<br />
              <input name="multiplicity" id="multiplicity" />
              </label>
            </p>
            <p>
            <label>Введите дату<br />
            <input name="date" id="date" />
              </label>
            </p>                                                 
            <p>
              <label>
              <input type="submit" name="submit" id="submit" value="Добавить курс" />
              </label>
            </p>
        </form>


</body>

</html>