<?php

header('Content-Type: text/html; charset=utf-8');

$host="localhost";
$user="root";
$pass="vertrigo";

$db="board";

 $string = '';
 $password = '';
 $password2 = '';
 $first_name = '';
 $last_name = '';
 $pasport= 0;
 $login = '';
 $accaunt = 0;
 $email__moderator = '';
 $email_broker = '';
 
 
//echo 'AAAAAAAAAAAAA';
 
if (isset($_REQUEST['sub1'])) {
  
    
        
//       echo 'BBBBBBBBBBBBBBBBB';
   // echo 'FFFF'.$r;
    if (isset($_SESSION['email_bad'])){
        session_destroy();
        //echo 'AAAAAAAAAAAAA';
    }
    $login = $_REQUEST['login'];
    $password = $_REQUEST['password'];
    $con=  mysqli_connect($host, $user, $pass, $db);
        $sql = "SELECT f_logout_user('$login', '$password') AS 'logout_user'";
        $query = mysqli_query($con, $sql);
        $r = mysqli_fetch_assoc($query);
        
    //mysql_close();

    
    if ($r['logout_user'] == 1){
        $_SESSION['email_logout_user'] = $login;
        header ('Location: ../user.php');
        exit("<meta http-equiv='refresh' content='0; url=$_SERVER[PHP_SELF]'>");
//        echo 'CCCCCCCCCCC';
    }else {
        $string = 'Неправильный логин или пароль';
        $_SESSION['email_bad'] = $login;
//        header ('Location: ../Login/login.php');
//        echo 'BBBBBBBBBBBBBBBBB';
    }
    //if (($r['logout_user'] != 1)  && ($r1['logout_moderator'] != 1) && ($r2['logout_broker'] != 1)  )

}



if (isset($_REQUEST["exit"])){
    session_destroy();
    exit("<meta http-equiv='refresh' content='0; url=$_SERVER[PHP_SELF]'>");
}

?> 

