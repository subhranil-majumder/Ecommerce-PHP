<?php 
//Database connect..........
define("host_name","localhost");
define("user_name","root");
define("password","");
define("db_name","rfospl");

$db_conn = mysqli_connect(host_name,user_name,password,db_name) OR die("DATABASE NOT CONNECT!!!!");

?>