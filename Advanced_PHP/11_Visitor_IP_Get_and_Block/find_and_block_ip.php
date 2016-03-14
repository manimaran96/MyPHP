<?php
$ip_addr = $_SERVER['REMOTE_ADDR'];
$ip_block = array($ip_addr,'127.0.0.2');
foreach($ip_block as $ip)
{
	if($ip==$ip_addr)
	{
		die("your ip address blocked");
	}
	else
	{
		echo "welcome my page";
	}
}

?>