<?php
session_start();

echo "Thanks...!&nbsp&nbsp,".$_SESSION['username']."&nbsp&nbspLogout successful"."<br>";

//unset the session
unset($_SESSION['username']);

echo "<br>"."Go Home :&nbsp&nbsp"."<a href=home_login.php>Clikhere</a>";
?>