<?Php

//a-append
//every refresh no erase old data
$fhand2=fopen('myfile2.txt','a');
fwrite($fhand2,'My 2nd File');
fwrite($fhand2,'Hi this is myfile2.txt');
fwrite($fhand2,'Use w-write and a-append methods');
fclose($fhand2);

echo "write this content in myfile2.txt";
echo "</br>"."Use w-write and a-append methods.so, every refresh no erase old data and insert new data";
?>

