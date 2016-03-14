<?php
//get and post method are same work 
//post method is good and secure the password because not visible in the browser address bar
//receive the user name and password use post method 
if(!empty($_POST['uname']) && !empty($_POST['pass']) )
{
if(isset($_POST['uname']) && isset($_POST['pass']) )
{
	
$UName=$_POST["uname"];
$Pass=$_POST["pass"];

if($Pass=="mani4024")
{
	echo "Welcome"."$UName";
}
else
{
	echo "Invalid password";
}
}
}
else
{
	echo "Fill all filds";
}
//you can use also the get method in this program simply to change all POST to GET
?>
<form action="Get_and_Post_method.php" method="POST">
User Name:<br>
<input type="text" name="uname">
<br><br>
Password:<br>
<input type="password" name="pass">
<br><br>
<input type="submit" name="submit" value="Login"/>
</form>