<?php

$hostname = 'localhost';
$username = 'lov3hjelm';
$pass = 123;
$dbname = 'users';

$mysql = new mysqli($hostname, $username, $pass, $dbname);

$mysql->set_charset('utf8');
