<?Php

    $file='myfile.txt';
	$fhand=fopen($file,'r');
	$value=fread($fhand,filesize($file));
	fclose($fhand);
	echo $value;

?>

