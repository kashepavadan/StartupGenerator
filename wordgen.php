<?php
$myfile = "nouns.txt";
$lines=file($myfile);
$random= rand(1,117950);
echo $lines[$random] . "startup";
?>