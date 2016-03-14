<?php
if(!empty($_POST['without']) && !empty($_POST['with']) )
{
if(isset($_POST['without']) && isset($_POST['with']) )
{
	
$without_htmlentities=$_POST["without"];
//use this html entities for security purpose like not play our website for hackers
$with_htmlentities=htmlentities($_POST["with"]);
echo "Not use Html entities :".$without_htmlentities;
echo "<br>"."Use Html entities :".$with_htmlentities;

}
}
else
{
	echo "Fill all filds";
}
?>

<form action="with_and_without_htmlentities.php" method="POST">
<br>
<p>*** Box 1 =>Without htmlentities user input html tag into this box 1 ex: h1 tags,iframe tags,....etc***
 <br>>>>***when output is <b><u>run this html tags  </u></b>on run time ***<<<</p>
<br>
 Text box 1:<br>
<input type="text" name="without">
<br>
<br>
<p>*** Box 2 =>With htmlentities user input html tag into this box 1 ex: h1 tags,iframe tags,....etc***
 <br>>>>***when output is <b><u> not run this html tags only display </u></b> on run time ***<<<</p> 
<br>
 Text box 2:<br>
<input type="text" name="with">
<br>
<br>
<input type="submit" name="submit" value="Check diff"/>
</form>