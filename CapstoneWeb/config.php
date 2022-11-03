<?php session_start();

define( 'DB_HOST', 'localhost' );
define( 'DB_PORT', '3306' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', '' );
define( 'DB_DB', 'project' );

$dbh  = new PDO('mysql:dbname='.DB_DB.';charset=UTF8;host='.DB_HOST.';port='.DB_PORT,DB_USER,DB_PASS);

include("includes/function.php"); 

?>

