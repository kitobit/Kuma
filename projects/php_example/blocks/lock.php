<?php
include("bd.php");
//echo($_SERVER['PHP_AUTH_USER']);
//echo($_SERVER['PHP_AUTH_PW']);

//if (!isset($_SERVER['PHP_AUTH_USER']))

//{
//        Header ("WWW-Authenticate: Basic realm=\"Admin Page\"");
//        Header ("HTTP/1.0 401 Unauthorized");
        //exit();
//}

//else {
//        if (!get_magic_quotes_gpc()) {
//                $_SERVER['PHP_AUTH_USER'] = mysqli_real_escape_string($db,$_SERVER['PHP_AUTH_USER']);
//                $_SERVER['PHP_AUTH_PW'] = mysqli_real_escape_string($db,$_SERVER['PHP_AUTH_PW']);
//        }

//        $query = "SELECT pass FROM userlist WHERE user='".$_SERVER['PHP_AUTH_USER']."'";
//        $lst = mysqli_query($db,$query);

//        if (!$lst)
//        {
//            Header ("WWW-Authenticate: Basic realm=\"Admin Page\"");
//        Header ("HTTP/1.0 401 Unauthorized");
        //exit();
//        }

//        if (mysqli_num_rows($lst) == 0)
//        {
//           Header ("WWW-Authenticate: Basic realm=\"Admin Page\"");
//           Header ("HTTP/1.0 401 Unauthorized");
          // exit();
//        }

//        $pass =  @mysqli_fetch_array($lst);
//        if ($_SERVER['PHP_AUTH_PW']!= $pass['pass'])
//        {
//            Header ("WWW-Authenticate: Basic realm=\"Admin Page\"");
//           Header ("HTTP/1.0 401 Unauthorized");
           //exit();
//        }


//}




?>