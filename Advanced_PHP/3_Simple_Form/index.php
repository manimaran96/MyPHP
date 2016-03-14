<HTML>
    <HEAD>
    </HEAD>
	<body bgcolor="green">

<?Php

//Form values from ex_form.php UName POST method
$fname=$_POST['UName'];
echo "<br>Your name is :";
echo $fname;

// similar to GET method but change POST to GET .
//then,click send button when you are entered value is displayed in the address bar of the browser

//Form values from ex_form.php UName GET method
/*
$fname=$_GET['UName'];
echo "<br>";
echo $fname;
*/


//get the values 
if(isset($_POST['UName']) && !empty($_POST['UName']))
{
	$tu= $_POST['UName'];
	$tuf=strtoupper($tu);
	$tlf=strtolower($tu);
	echo "<br>Upper value is :".$tuf;
	echo "<br>Lower value is :".$tlf;
	
}

?>

	</body>
</HTML>