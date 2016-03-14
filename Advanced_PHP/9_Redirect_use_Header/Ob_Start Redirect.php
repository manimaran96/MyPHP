
<!--html tags are used in this 
"redirect page use header function program" 
when use this ob_start function.
use for this not displayed html tags and errors -->
   
<!--start ob-->
<?php ob_start(); ?>
<!--html tag used in this redirect php program-->  
<h1>This is header not displayed</h1>

<?php

$redirect_page="http://google.com";
//amount value used for pay amount for 500 to online when redirect another page
$amount=500;

//check the paying amount
if($amount==500)
{
	header('Location:'.$redirect_page);
}
ob_end_flush();
?>