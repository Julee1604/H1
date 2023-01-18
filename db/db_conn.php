<?php 

try {
    $db = new PDO('mysql:host=localhost;dbname=test','root','');
    $db->exec("set names utf8mb4");
}
catch(PDOException $e){
    print $e->getMessage();
}

return $db;
?>