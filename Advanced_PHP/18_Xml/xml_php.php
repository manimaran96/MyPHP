<?php

$xml=simplexml_load_file('xml_file.xml');
echo "Xml Document in one set of block"."<br>";
echo $xml->college[1]." code for ".$xml->college[1]->code." in ".$xml->college[1]->city;


echo "<br><br>"."Xml call to all elements in the xml document"."<br>";
foreach ($xml->college as $clg)
{
	echo "<br>".$clg."&nbsp&nbsp&nbsp&nbsp";
	echo $clg->code."&nbsp&nbsp&nbsp&nbsp";
	echo $clg->city."&nbsp&nbsp&nbsp&nbsp";
	
	foreach ($clg->dept as $dpt)
	{
		echo $dpt."&nbsp"."are"."&nbsp&nbsp&nbsp";
		echo $dpt->cse."&nbsp&nbsp".$dpt->it."&nbsp&nbsp".$dpt->mech."&nbsp&nbsp";
	}
}


?>