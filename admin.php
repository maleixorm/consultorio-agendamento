<!-- admin.php -->
<?php
$host = 'localhost';
$db = 'sistema_agendamentos';
$user = 'php';
$pass = '123456';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM agendamentos ORDER BY data_agendada, hora_agendada");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Agendamentos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body class="bg-dark">
  <h2 class="text-white text-center my-4">Lista de Agendamentos</h2>
  <table class="table table-dark table-striped">
    <tr class="table-light">
      <th>ID</th>
      <th>Nome</th>
      <th>Telefone</th>
      <th>Serviço</th>
      <th>Data</th>
      <th>Hora</th>
      <th>Observações</th>
      <th>Criado em</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['nome']; ?></td>
        <td><?= $row['telefone']; ?></td>
        <td><?= $row['servico']; ?></td>
        <td><?= $row['data_agendada']; ?></td>
        <td><?= $row['hora_agendada']; ?></td>
        <td><?= $row['observacoes']; ?></td>
        <td><?= $row['criado_em']; ?></td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>
<?php $conn->close(); ?>
