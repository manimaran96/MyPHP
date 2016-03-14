<?php
//this program to find user browser then suggestion to your browser

//get_browser function used to find all details about browser
$browser = get_browser(null,true);
//find only browser_name
$browser_name=$browser['browser'];
echo "You are used browser name is &nbsp:".$browser_name;
//find only browser_version
$browser_ver=$browser['version'];
echo "<br>"."Your browser version is &nbsp:".$browser_ver;

echo "<br>"."<br>"."<br>"."About Your browser details &nbsp:"."<br>"."<br>";
foreach($browser as $br_ar=>$new)
{
	echo $br_ar."&nbsp&nbsp&nbsp:".$new."<br>";
}

?>