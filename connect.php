<?php 
$host="localhost";

//your database name
$dbname='auth';

//database username root for localhost
$username='root';

//password empty for localhost
$password='';

$pdo=new PDO("mysql:host=$host;dbname=$dbname",$username,$password);