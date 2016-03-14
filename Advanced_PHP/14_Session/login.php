<?php
if(!empty($_POST['uname']) && !empty($_POST['pass']) )
{
if(isset($_POST['uname']) && isset($_POST['pass']) )
{
	
$UName=$_POST["uname"];
$Pass=$_POST["pass"];

if($Pass=="mani4024")
{
	session_start();
	$_SESSION['username']=$_POST['uname'];
	echo "Welcome&nbsp&nbsp".$_SESSION['username']."&nbsp&nbspyou are login successful";
	echo "<br>"."View your profile :&nbsp&nbsp"."<a href=view.php>Clikhere</a>";

}
else
{
	echo "Invalid password";
	echo "<br>"."Go Home :&nbsp&nbsp"."<a href=home_login.php>Clikhere</a>";
}
}
}
else
{
	echo "Fill all filds";
}


?>
