<?php
    try{
        $db = new PDO('mysql:host=localhost;dbname=fujian', 'root', 'root');
        } catch(PDOException $e){
            die('Site indisponible');
    }
?>