<HTML>
    <HEAD>
    </HEAD>
	<body bgcolor="lightgreen">


<?Php
//declare string
$v1="Mani"; //also $v1="<br>Mani";
$v2="Maran";
echo $v1 ."&nbsp"." connected with ".$v2;

//String operation
$v3="Mani";
$v4="maran";
echo "<br> <br><b>String Operations</b> <br>";
echo "<br>length of mani is : ".strlen($v3);
echo "<br>";
echo "Position of n in mani : ".strpos($v3,"n");
echo "<br>";
echo "compare two string : ".strcmp($v3,$v4);
echo "<br>";
$str="mani maran kumar";
echo "<br> Fully upper case: ".strtoupper($str);
echo "<br>Splite the sub string : ".substr($str,11,5);//substr(string,position,length);
echo "<br>";
echo "Replace the string : ".str_replace("maran","father's",$str);//str_replace("given str","replace str",string);
echo "<br>"."Count the value of no.of words : ";
echo str_word_count($str);
echo "<br>"."Use print(same output) : ";
print str_word_count($str);
echo "<br>"."String fully use print_r :";
print_r($str);
echo "<br>"."string with particular level 1 :";
print_r(str_word_count($str,1));
echo "<br>"."string with particular level 2 :";
print_r(str_word_count($str,2));
echo "<br>"."string with suffule when refresh the page   :";
print str_shuffle($str);
echo "<br>"."string reverse  :";
print strrev($str);
echo "<br>"."sub string  :";
print_r(substr($str,4,7));
echo "<br>"."string 1  :".$str;
$str2="mani maran k";
echo "<br>"."string 2  :".$str2;
echo "<br>"."string validation percentage  :";
similar_text($str,$str2,$result);
echo $result;


//trim function used to align the string correctly remove unwanted spaces
$str3="my name                       is       mani maran  ";
echo "<br>"."string3 after Trimming  :".trim($str3);

//addslashes function
$str4="my img tag is <img src='my.png'> show this use add slashes and htmlentities functions";
$re=htmlentities(addslashes($str4));
echo "<br>".$re;


?>

	</body>
</HTML>