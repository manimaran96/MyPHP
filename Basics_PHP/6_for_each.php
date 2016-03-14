<HTML>
    <HEAD>
    </HEAD>
	<body bgcolor="green">


<?Php
//Foreach
$mda=array("name"=>array("mani","maran","kumar"),"city"=>array("lpt","kmkoil","lalpet"));
foreach($mda as $ele=>$inner_ele)
{
echo "<br>"."Array elements:";
echo($ele);
echo "<br>"."Array elements with items details :";
foreach($inner_ele as $itm)
echo "<br>".$itm;
}
?>

	</body>
</HTML>