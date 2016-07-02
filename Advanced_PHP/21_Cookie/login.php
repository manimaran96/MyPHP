<?php
//check the values
if(!empty($_POST['uname']) && !empty($_POST['pass']) )
{
if(isset($_POST['uname']) && isset($_POST['pass']) )
{
	
$UName=$_POST["uname"];
$Pass=$_POST["pass"];

//check the password
if($Pass=="mani4024")
{
	//start the session
	session_start();
	$_SESSION['username']=$_POST['uname'];
	$name=$_SESSION['username'];
	//set the cookie
	setcookie("username",$name,time()+15);
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
