<?php
session_start();

global $pdo;
try {
	$pdo = new PDO("mysql:dbname=exemplogit;host=localhost", "root", "vertrigo");
} catch(PDOException $e) {
	echo "FALHOU: ".$e->getMessage();
	exit;
}
?>