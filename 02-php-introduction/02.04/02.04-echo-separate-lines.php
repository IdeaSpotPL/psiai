<?php
/**
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//02.04-echo-separate-lines.php
$title = "Welcome to PHP!";
$date = date('Y-m-d');

echo "<!DOCTYPE html>\n";
echo "<html lang='en'>\n";
echo "<head>\n";
echo "    <meta charset='UTF-8'>\n";
echo "    <title>$title</title>\n";
echo "</head>\n";
echo "<body>\n";
echo "$title<br/>\n";
echo "Today is: <strong>$date</strong>\n";
echo "</body>\n";
echo "</html>\n";
