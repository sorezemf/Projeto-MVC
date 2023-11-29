<?php
$dbname = "regional_nf";
$host = "regional_nf.mysql.dbaas.com.br";
$user = "regional_nf";
$senha = "Soreze@1994";
global $db;

define("BASE_URL", "https://regnfccb.online/");

try {
    $db = new PDO("mysql:host=".$host.";dbname=".$dbname,$user,$senha);
    
} catch (PDOException $th) {
    echo "<br>ERRO: ".$th->getMessage();
    exit;
}