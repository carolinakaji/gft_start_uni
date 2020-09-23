<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <title>Data de aniversário</title>
</head>

<body>
  <div class="container">

    <h2>Informe o dia, mês e ano do seu aniversário</h2>
    <form action="resultado.php" method="POST" >
      <label>Dia:</label>
      <input type="number" name="dia" class="form-control">
      <label>Mês:</label>
      <input type="number" name="mes" class="form-control">
      <label>Ano:</label>
      <input type="number" name="ano" class="form-control">
      <button name="button" class="btn btn-primary">Verificar</button>
    </form>
  </div>
</body>

</html>


