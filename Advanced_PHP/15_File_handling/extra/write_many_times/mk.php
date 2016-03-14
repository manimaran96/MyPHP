<?Php
for($i=0;$i<=1000;$i++)
{
$fhand=fopen('mkfile.txt','a');
fwrite($fhand,'Mani');
fwrite($fhand,'Maran');
}
fclose($fhand);
echo "write this content ";
?>

