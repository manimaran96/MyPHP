<?php
//below 3 ways are use for find ip for visitor of your page
$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
$http_x_forword_for = $_SERVER['HTTP_X_FORWORD_FOR'];
$remote_ip = $_SERVER['REMOTE_ADDR'];
if(!empty($http_client_ip))
{
	$ip_addr=$http_client_ip;
	echo "1.Your ip is :".$ip_addr;
}
elseif(!empty($http_x_forword_for))
{
	$ip_addr=$http_x_forword_for;
	echo "2.Your ip is :".$ip_addr;
}
elseif(!empty($remote_ip))
{
	$ip_addr=$remote_ip;
	echo "3.Your ip is :".$ip_addr;
}

?>