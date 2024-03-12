<?php 
$host="localhost";
$port=3306;
$socket="/var/run/mysqld/mysqld.sock";
$user="root";
$password="2003";
$dbname="pr";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();

return $con;
?>

