<?php
session_start();
if(isset($_SESSION['username']))
{
	echo "Hi...!,&nbsp&nbsp".$_SESSION['username']."&nbsp&nbspThis is your profile"."<br>";
	echo "<br>"."You want to Logout :&nbsp&nbsp"."<a href=logout.php>Clikhere</a>";
}
else
{
	echo "Please Login";
	echo "<br>"."You want to Login :&nbsp&nbsp"."<a href=login.php>Clikhere</a>";
}
?>