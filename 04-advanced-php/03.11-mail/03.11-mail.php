<?php
/*
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//03.11-mail.php
$to = "artur@ideaspot.pl";
$subject = "Test Email Subject";
$content = "This is the test email message content.";
$from = "artur@ideaspot.pl";
$headers = "From: $from";
$result = mail($to, $subject, $content, $headers);
var_dump($result);
