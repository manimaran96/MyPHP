<HTML>
    <HEAD>
    </HEAD>
	<body bgcolor="green">


<?Php

//This sending method get the values like to,subject,body,message..etc
//action mailto particular mail id
$to="cseucev13@gmail.com";
$subject="message";
$body=$_REQUEST['message'];
$email=$_REQUEST['mail'];
$header="From:$email"; 

$send=mail($to,$subject,$body,$header);

if($send)
{
	echo "mail is send";
}
else
{
	echo "mail is not send";
}
?>


	</body>
</HTML>