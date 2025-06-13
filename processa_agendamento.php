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
    echo "<p>Agendamento realizado com sucesso!</p>";
    header('Location: index.php');
} else {
    echo "<p>Erro ao agendar: " . $stmt->error . "</p>";
}

$stmt->close();
$conn->close();
?>