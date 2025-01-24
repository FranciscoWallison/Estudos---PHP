<?php
$host = "localhost";   // Nome do servidor
$dbname = "projeto_php";  // Nome do banco de dados
$user = "root";        // Usuário padrão (ajuste conforme necessário)
$pass = "";            // Senha (caso tenha uma)

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>
