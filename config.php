<?php

$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pasw = "root";
$mysql_db   = "db";
    
$conn = mysql_connect($mysql_host,$mysql_user,$mysql_pasw)or die(mysql_error());
mysql_select_db($mysql_db);


?>