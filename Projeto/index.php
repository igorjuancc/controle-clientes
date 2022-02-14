<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="css/bootstrap-3.4.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/StyleCliente.css" rel="stylesheet">
    <title>Clientes</title>
  </head>
  <body>
        <div class="row">
          <div class="col-sm-1">
          </div>
          <div class="col-sm-10">
              <div class="boxForm">
                <h3>Clientes</h3>
                <table class="table">
                  <thead class="">
                    <tr>
                      <th>CPF</th>
                      <th>NOME</th>
                      <th>EMAIL</th>
                      <th class="icone">EDITAR</th>
                      <th class="icone">REMOVER</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php include "listaCliente.php" ?>
                  </tbody>
                </table>
                <div class="divBtn">
                  <a href="form.php"><button type="button" class="btn btn-primary">Novo Cliente</button></a>
                </div>
              </div>
            </div>
            <div class="col-sm-1">
            </div>
        </div>
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/jquery.mask.min.js"></script>
        <script src="js/validacao.js"></script>
  </body>
</html>
