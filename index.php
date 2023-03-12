<?php

require 'functions.php';
// require 'router.php';


// Connect to our MYSQL database  
$dsn = "mysql:host=localhost;port:3306;dname=demo;charset=utf8mb4";
$pdo = new PDO($dsn, 'root');

$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
  echo "<li>" . $post['title'] , "</li>"; 
}
