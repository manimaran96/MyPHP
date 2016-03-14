<?php
echo "This current script name is :"."<br>".$_SERVER['SCRIPT_NAME'];
?>

<form action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="POST" >
<input type="submit" name="submit" value="Submit "/>
</form>