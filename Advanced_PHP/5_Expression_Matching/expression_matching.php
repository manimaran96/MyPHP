<HTML>
    <HEAD>
    </HEAD>
	<body bgcolor="green">


<?Php
//expresion matching 
$x="my name is mani";
if(preg_match('/is/',$x))
{
	echo "<br>"."available";
}
else
{
	echo "<br>"."not available";
}

?>
	</body>
</HTML>