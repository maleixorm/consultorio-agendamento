<?php
require "conexao.php";

// Coletar dados do formulário
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$servico = $_POST['servico'];
$data = $_POST['data_agendada'];
$hora = $_POST['hora_agendada'];
$obs = $_POST['observacoes'];

// Inserir no banco
$sql = "INSERT INTO agendamentos (nome, telefone, servico, data_agendada, hora_agendada, observacoes) 
        VALUES (?, ?, ?, ?, ?, ?)";
        
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $nome, $telefone, $servico, $data, $hora, $obs);

if ($stmt->execute()) {
    header('Location: index.php?acao=1');
} else {
    echo "<p>Erro ao agendar: " . $stmt->error . "</p>";
}

$stmt->close();
$conn->close();
?>