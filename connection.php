<?php
$db_host = "localhost";
$db_user = "synaspe";
$db_password = "ss1123";
$db_name = "synapse";
mysql_connect("$db_host","$db_user","$db_password") or die ("could not connect to mysql");
mysql_select_db("$db_name") or die ("no database");              
?>