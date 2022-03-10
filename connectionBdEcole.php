<?php
$user='root';
$pass='';
try {
    $bdd=new PDO('mysql:host=localhost;dbname=Ecole',$user,$pass);
} catch (PDOException $e) {
    print 'erreure!:'. $e->getMessage()."<br/>";
    die();
}