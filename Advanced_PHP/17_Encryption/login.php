<?Php
if(!empty($_POST['uname']) && !empty($_POST['pass']) )
{
if(isset($_POST['uname']) && isset($_POST['pass']) )
{
	
$UName=$_POST["uname"];
$Pass=$_POST["pass"];
$md5_pass=md5($Pass);

$file='md5value.txt';
$fhand=fopen($file,'r');
$pass_md5_value=fread($fhand,filesize($file));

if($md5_pass==$pass_md5_value)
{
	echo "<br>"."login successful...! "."<br>"."Welcome ".$UName;
}
else
{
echo "Invalid login ...!";
}
}
}
?>

<form action="login.php" method="POST">
Username :<input type="text" name="uname">
<br>
<br>

Password :<input type="password" name="pass">
<br>
<br>
<input type="submit" value="register"/>

<br>