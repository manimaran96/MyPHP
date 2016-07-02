<?php

//link to mysql_config.php
require "mysql_config.php";

//check the null values
if(!empty($_POST['fname']) && !empty($_POST['fpass']) && !empty($_POST['fmail']) && !empty($_POST['fmobile']) )
{
if(isset($_POST['fname']) && isset($_POST['fpass'])  && isset($_POST['fmail']) && isset($_POST['fmobile']))
{
	
//values assign to particular variable
$fname=$_POST["fname"];
$fpass=$_POST["fpass"];
$fmail=$_POST["fmail"];
$fmobile=$_POST["fmobile"];

//declare the query statement - use sql query
//use this method - $sql = "INSERT INTO `mani`.`sample_login` (`username`, `password`, `email`, `mobile`) VALUES (\'ram\', \'ram1234\', \'ram54@gmail.com\', \'7432896174\');";
$query="INSERT INTO `sample_login` (`username`, `password`, `email`, `mobile`) VALUES ('$fname','$fpass','$fmail','$fmobile')";

//run the query with checking - use mysql_query() function
mysql_query($query);

echo "Your profile regiseted successfully !. Thanks..".$fname;
}
}
else
{
	echo "Fill the details";
}

?>





