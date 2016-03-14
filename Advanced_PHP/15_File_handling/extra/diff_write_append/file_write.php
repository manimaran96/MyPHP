<?Php

if(!empty($_POST['uname']) )
{
if(isset($_POST['uname']))
{
$UName=$_POST["uname"];
//change w to a you can see diff of the w and a
$fhand=fopen('mynewfile.txt','w');
fwrite($fhand,$UName.',');
fclose($fhand);


$readin = file("mynewfile.txt");
foreach($readin as $newreadin)
{
	echo "the current user :".$newreadin;
}

}

}
else
{
	echo "Fill the filds";
}

?>

<form action="file_write.php" method="POST">
User Name:<br>
<input type="text" name="uname">
<br><br>
<input type="submit" name="submit" value="Login"/>
</form>