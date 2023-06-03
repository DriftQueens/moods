<?php
$host = 'sql100.epizy.com';
$db ='epiz_33036542_moriarty'
$usr ='epiz_33036542'
$pwd= '0JlNQroqP2yMDAp'

// parameter = hostname, username, password, database
$conn = mysqli_connect($host, $usr, $pwd, $db); //true|false

if (!$conn) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}