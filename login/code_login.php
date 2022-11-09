<?php

header('Content-Type: text/html; charset=utf-8');


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
 

 
if (isset($_REQUEST['sub1'])) {
  
    
        

    if (isset($_SESSION['email_bad'])){
        session_destroy();
        
    }
    $login = $_REQUEST['login'];
    $password = $_REQUEST['password'];
    $con=  mysqli_connect($host, $user, $pass, $db);
        $sql = "SELECT f_logout_user('$login', '$password') AS 'logout_user'";
        $query = mysqli_query($con, $sql);
        $r = mysqli_fetch_assoc($query);
        
 
    
    if ($r['logout_user'] == 1){
        $_SESSION['email_logout_user'] = $login;
        exit("<meta http-equiv='refresh' content='0; url= ../user.php'>");

    }else {
        $string = 'Неправильный логин или пароль';
        $_SESSION['email_bad'] = $login;

    }

}



if (isset($_REQUEST["exit"])){
    session_destroy();
    exit("<meta http-equiv='refresh' content='0; url=$_SERVER[PHP_SELF]'>");
}

?> 

