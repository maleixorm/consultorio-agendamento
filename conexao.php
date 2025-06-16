<?php

// Conexão com o banco
$host = 'localhost';
$db = 'sistema_agendamentos';
$user = 'php';
$pass = '123456';

$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}