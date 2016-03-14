<?Php

if(!empty($_POST['pw']) && isset($_POST['pw']))
{	
$pw_value=$_POST["pw"];

//MD5 method used to encrypt the given value 
//Security purpose
//Not allowed decrypt this value
$md5_pass_value=md5($pw_value);
echo "Register successful"."<br>"."Your encryption value is :".$md5_pass_value;

$file='md5value.txt';
$fhand=fopen($file,'w');
fwrite($fhand,$md5_pass_value);
fclose($fhand);
}
?>
<form action="register.php" method="POST">
Password :<input type="password" name="pw">
<br>
<br>
<input type="submit" value="register"/>

<br>
