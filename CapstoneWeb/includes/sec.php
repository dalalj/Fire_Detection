<?php session_start();

date_default_timezone_set('Europe/Istanbul');
define( 'DB_HOST', 'localhost' );
define( 'DB_PORT', '3306' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', '' );
define( 'DB_DB', 'project' );


$dbh  = new PDO('mysql:dbname='.DB_DB.';charset=UTF8;host='.DB_HOST.';port='.DB_PORT,DB_USER,DB_PASS);

include("includes/function.php");

$gradUser = @$_SESSION['gradUser'];
$gradPass = @$_SESSION['gradPass'];


if($gradUser!='' and $gradPass!=''){

     $sql=$dbh->prepare("SELECT * FROM accounts WHERE username=?");
     $sql->execute(array($gradUser));
     while($r=$sql->fetch()){
      $Y_user=$r['username'];
      $Y_pass=$r['password'];
      $Y_id=$r['id'];
      $Y_yetki=$r['authorization'];
      $Y_ad=$r['name']." ".$r['surname'];
     }

     define( 'YETKI', $Y_yetki);
     define( 'Yuser', $Y_user);

     if($Y_pass != $gradPass and $Y_user != $gradUser){
         $_SESSION['gradUser']="";
         $_SESSION['gradPass']="";
         redirecLink("logout.php");
        die();
     }


}  else {
    $_SESSION['gradUser']="";
        $_SESSION['gradPass']="";
        redirecLink("logout.php");
        die();
}


?>