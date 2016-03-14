<?php

echo "The time Now 12 hour format   :".date("h:i:s:a")."<br><br>";

echo "The time Now 24 hour format   :".date("H:i:sa")."<br><br>";

echo "Today date month year   :".date("d:m:y")."<br><br>";

echo "Day of the week   :".date("l")."<br><br>";

//mktime(hour,minute,sec,month,day,year)  use this user create own date time

//strtotime access the string value date

echo "Today date is   :".date("d:m:y")."Modified date is :".date("d:m:y",strtotime('-1 day ,+1 year'))."<br><br>";

echo "String format date is :".date("strtotime()");

?>