<HTML>
    <HEAD>
    </HEAD>
	<body bgcolor="green">

<?Php
//target file 
$target_file="upload_folder/".$_FILES["fupload"]["name"];

//File upload use post method
echo "<br>"."Filename:".$_FILES["fupload"]["name"]."<br>";
echo "<br>"."Type:".$_FILES["fupload"]["type"]."<br>";
echo "<br>"."Size:".$_FILES["fupload"]["size"]."<br>";

//check image already exits
if(file_exists($target_file))
{
	echo $FILES["fupload"]["name"]." Already exits";
}
else
{ 
    //move uploded image to target folder
	move_uploaded_file($_FILES["fupload"]["tmp_name"], $target_file);
    echo "The file ".$_FILES["fupload"]["name"]. " has been uploaded.";
}
	
?>
	</body>
</HTML>