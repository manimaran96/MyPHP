<?Php

function hit_count()
{
	//first read to counterfile.txt value (initially 0 in this file)
	$file='counterfile.txt';
	$fhand=fopen($file,'r');
	$value=fread($fhand,filesize($file));
	fclose($fhand);
	
	//increase the value for this file so use write the increment value every time call this function
	$value_inc=$value+1;
	$hand=fopen($file,'w');
	fwrite($hand,$value_inc);

	//read finally the value for this file. 	
	$fhand=fopen($file,'r');
	$value=fread($fhand,filesize($file));
	echo "<br>"."Your hit count is :";
	echo $value;

}
echo "Hi User...!";
hit_count();
?>

