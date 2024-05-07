<?php
$username = 'root';
$senha = '';
try {
$pdo = new PDO("mysql:host=localhost;dbname=cotemig_fit",$username,$senha);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
#echo "Connected Successfully";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>