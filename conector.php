<?php
    
    try{
        $pdo = new PDO("mysql:dbname=desafio;host=localhost","root", "root");
        
        

    }catch(PDOException $e){
        echo "erro: ".$E->getMessage();
        exit;

    }
 ?>




