
<?php
//find and replace the string

if(!empty($_POST['textbox']) && !empty($_POST['search_box']) && !empty($_POST['replace_box']))
{
	
if(isset($_POST['textbox']) && isset($_POST['search_box']) && isset($_POST['replace_box']))
{
	//set the all values to another variable
	$text= $_POST['textbox'];
	$search_val=$_POST['search_box'];
	$replace_val=$_POST['replace_box'];
	
	//search and replace working program
	
	$search_val_len=strlen($search_val);
	//string position function 1st value is over all content 2nd value find value 
	while($str_pos=strpos($text,$search_val))
	{
		//$offset=$str_pos + $search_val_len;
		$text=substr_replace($text,$replace_val,$str_pos,$search_val_len);
	}
	
	echo $text."<br><br>";
}

}
else
{
	echo "fill all filds"."<br><br>";
}
?>


<form action="find_and_replace.php" method="POST" >
Text Area Box:<br><br>
<textarea rows="6" cols="30" name="textbox">
</textarea>
<br><br>
Search Box:<br>
<input type="text" name="search_box">
<br><br>
Replace Box:<br>
<input type="text" name="replace_box">
<br><br>
<input type="submit" name="submit" value="Replace"/>
</form>

