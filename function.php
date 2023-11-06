<?php 
function connectToDb(){
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=test1','root',''); //dsn- data source name


    return $pdo;
}

function selectAll(PDO $pdo, string $table, string $class) {
    $statement = $pdo->prepare('SELECT * FROM ' . $table);
    $statement->execute();
    $tasks = $statement->fetchAll(PDO::FETCH_CLASS, $class);
    return $tasks;
}