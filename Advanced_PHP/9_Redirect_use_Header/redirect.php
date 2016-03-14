
<?php

$redirect_page="http://google.com";
//amount value used for pay amount for 500 to online when redirect another page
$amount=500;

//check the paying amount
if($amount==500)
{
	header('Location:'.$redirect_page);
}

/*
Note:
html tags are not working in this program
because,use header function of this program 
when use error occur
*/


?>