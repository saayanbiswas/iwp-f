<?php

try{
    $pdo = new PDO('mysql:host=localhost; dbname=iwp', 'root', '');
}
catch(PDOException $e) {
    exit('Database error.');
}

?>