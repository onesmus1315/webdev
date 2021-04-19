<?php
$file = $_SERVER['SCRIPT_FILENAME'];
$user = $_SERVER['HTTP_USER_AGENT'];
$SERVER = $_SERVER['SERVER_SOFTWARE'];
print "FILE NAME: $file\n";
print "user: $user";
print "server software: $SERVER";
?>