<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agendamento</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body class="bg-dark">
  <div class="container">
    <div class="d-flex flex-row justify-content-between my-5 text-white">
      <img src="" alt="Logo">
      <h2 class="">Nome da Empresa</h2>
    </div>

    <? if (isset($_GET['acao']) && $_GET['acao'] == 1) { ?>
      <div class="alert alert-success">
        Agendamento realizado com sucesso!
      </div>
    <? } ?>  
    
    <div class="card text-bg-dark text-center border-secondary">
      <div class="card-header bg-secondary text-white">
        Agende seu horário
      </div>
      <div class="card-body">
          <form action="processa_agendamento.php" method="POST">
            <div class="my-3">
              <div class="col-auto d-flex align-items-center my-3 gap-2">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome completo..." required>
              </div>
              <div class="col-auto d-flex align-items-center my-3 gap-2">
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Seu telefone..." required>
              </div>
            </div>
            <div class="col-auto">
              <select class="form-select" aria-label="servico" name="servico" id="servico" required>
                <option disabled selected>Escolha o serviço a ser agendado:</option>
                <option value="Consulta">Consulta</option>
                <option value="Retorno">Retorno</option>
                <option value="Exame">Exame</option>
                <option value="Cirurgia">Cirurgia</option>
              </select>
            </div>
            <div class="my-3 d-flex flex-wrap justify-content-start gap-2">
              <div class="d-flex align-items-center my-3 gap-2">
                <label for="data_agendada" class="form-label">Data: </label>
                <input class="form-control" type="date" name="data_agendada" required>
              </div>
              <div class="d-flex align-items-center my-3 gap-2">
                <label for="hora_agendada" class="form-label">Hora: </label>
                <input class="form-control" type="time" name="hora_agendada" required>
              </div>
            </div>
            <div class="mb-3">
              <label for="observacoes" class="form-label">Observações: </label>
              <textarea class="form-control" id="observacoes" name="observacoes" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-light">Confirmar Agendamento</button>
          </form>
        </div>
      <div class="card-footer bg-secondary text-white">
        &copy; Nome da empresa | Todos os direitos reservados.
      </div>
    </div>
  </div>
</body>
</html>
