<?Php

//w-write
//every refresh erase old data and insert new data
$fhand=fopen('myfile1.txt','w');
fwrite($fhand,'My 1st file');
fwrite($fhand,'Hi this is myfile1.txt');
fwrite($fhand,'Use only w-write method');
fclose($fhand);

echo "write this content in myfile1.txt";
echo "</br>"."Use only w-write method.so, every refresh erase old data and insert new data";

?>

