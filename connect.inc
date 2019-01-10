<?php

$servername = "localhost";
$username = "cmt";
$password = "123";
$dbname = "comments";
$conn = new mysqli($servername, $username, $password, $dbname); 
$conn->set_charset("utf8");
