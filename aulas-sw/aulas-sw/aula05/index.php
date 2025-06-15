<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
    <form action="processa.php" method="post">
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="name" id="form2Example1" class="form-control" name="nome" />
    <label class="form-label" for="form2Example1">Nome</label>
  </div>

  <div data-mdb-input-init class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" name="senha" />
    <label class="form-label" for="form2Example2">Senha</label>
  </div>

  <div class="row mb-4">
    <div class="col d-flex justify-content-center">


  <!-- Submit button -->
   <input type="submit" class="btn btn-primary btn-block mb-4" value="sign in">
  
  <!-- Register buttons -->
  <div class="text-center">
    <p>Nâo se cadastrou <a href="#!">cadastre-se</a></p>
  </div>
</form>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>