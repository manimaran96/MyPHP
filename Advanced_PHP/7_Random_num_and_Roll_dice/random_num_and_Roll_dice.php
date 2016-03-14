
<?php


echo "The Random number is  : ".rand()."<br>";
echo "The random nuber maximum value is".getrandmax()."<br>";
?>


<form action="random_num_and_Roll_dice.php" method="POST" >
<input type="submit" name="rolldice" value="Roll dice "/>
</form>

<?php
if(isset($_POST['rolldice'])) 
{
//rand value for 1st starting value 2nd is ending value
echo "You Rolled value is :"."<br>".rand(1,6);
}
?>