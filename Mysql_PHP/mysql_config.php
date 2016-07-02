<?php

//declare variable host,user,password
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";

//declare Database value
$mysql_db="mani";

//conn_error variable
$conn_error="Could not connect";

//mysql_connect(host,user,password)
if(mysql_connect($mysql_host,$mysql_user,$mysql_pass) && mysql_select_db($mysql_db))
{

}
else
{
	die($conn_error);
}

?>
