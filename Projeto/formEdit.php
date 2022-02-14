<?php
  include "connection.php";
  include "sanitize.php";

  $idCliente = $_GET["id"];

  $dadosCliente = "SELECT id_cliente,cpf_cliente,nome_cliente,email_cliente,data_cliente,fone_cliente,id_endereco FROM tb_cliente WHERE id_cliente = $idCliente;";

  $dadosCliente = mysqli_query($conn, $dadosCliente);

  if ($print = mysqli_fetch_assoc($dadosCliente)) {
    $idCliente = $print["id_cliente"];
    $cpf = $print["cpf_cliente"];
    $nome = $print["nome_cliente"];
    $email = $print["email_cliente"];
    $data = $print["data_cliente"];
    $fone = $print["fone_cliente"];
    $idEndereco = $print["id_endereco"];
  }

  $dadosEndereco = "SELECT id_endereco,cep_endereco,bairro_endereco,rua_endereco,nr_endereco,comp_endereco,estado_endereco,cidade_endereco FROM tb_endereco WHERE id_endereco = $idEndereco;";
  $dadosEndereco = mysqli_query($conn, $dadosEndereco);

  if ($print = mysqli_fetch_assoc($dadosEndereco)) {
    $cep = $print["cep_endereco"];
    $estado = $print["estado_endereco"];
    $cidade = $print["cidade_endereco"];
    $bairro = $print["bairro_endereco"];
    $rua = $print["rua_endereco"];
    $num = $print["nr_endereco"];
    $comp = $print["comp_endereco"];
  }

  mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="css/bootstrap-3.4.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/StyleNovoCliente.css" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <div class="formCad">
            <h2>Atualizar Dados</h2>
            <form action="update.php?id=<?echo $idCliente?>&end=<?echo $idEndereco?>" method="POST" onsubmit="return validarCampos()">
                <div class="row">
                    <div class="col-sm-12"><h4>Dados Pessoais</h4></div>
                    <div class="col-sm-4">
                        <span class="spanForm">CPF</span>
                        <input value="<?echo $cpf?>" id="cpf" name="cpf" type="text" class="form-control"></input>
                    </div>
                    <div class="col-sm-4">
                        <span class="spanForm">EMAIL</span>
                        <input value="<?echo $email?>" id="email" name="email" type="email" class="form-control"></input>
                    </div>
                    <div class="col-sm-4">
                        <span class="spanForm">DATA DE NASCIMENTO</span>
                        <input value="<?echo $data?>" id="data" name="data" type="date" class="form-control"></input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <span class="spanForm">NOME</span>
                        <input value="<?echo $nome?>" id="nome" name="nome" type="text" class="form-control"></input>
                    </div>
                    <div class="col-sm-4">
                        <span class="spanForm">TELEFONE</span>
                        <input value="<?echo $fone?>" id="fone" name="fone" type="text" class="form-control"></input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12"><h4>Endereço</h4></div>
                    <div class="col-sm-3">
                        <span class="spanForm">CEP</span>
                        <input value="<?echo $cep?>" id="cep" name="cep" type="text" class="form-control"></input>
                    </div>
                    <div class="col-sm-3">
                        <span class="spanForm">ESTADO</span>
                        <select class="form-control" id="estado" name="estado">
                          <option value="<?echo $estado?>"><?echo $estado?></option>
                          <option value="AC">AC</option>
                          <option value="AL">AL</option>
                          <option value="AP">AP</option>
                          <option value="AM">AM</option>
                          <option value="BA">BA</option>
                          <option value="CE">CE</option>
                          <option value="DF">DF</option>
                          <option value="ES">ES</option>
                          <option value="GO">GO</option>
                          <option value="MA">MA</option>
                          <option value="MT">MT</option>
                          <option value="MS">MS</option>
                          <option value="MG">MG</option>
                          <option value="PA">PA</option>
                          <option value="PB">PB</option>
                          <option value="PR">PR</option>
                          <option value="PE">PE</option>
                          <option value="PI">PI</option>
                          <option value="RJ">RJ</option>
                          <option value="RN">RN</option>
                          <option value="RS">RS</option>
                          <option value="RO">RO</option>
                          <option value="RR">RR</option>
                          <option value="SC">SC</option>
                          <option value="SP">SP</option>
                          <option value="SE">SE</option>
                          <option value="TO">TO</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <span class="spanForm">CIDADE</span>
                        <input value="<?echo $cidade?>" id="cidade" name="cidade" type="text" class="form-control"></input>
                    </div>
                    <div class="col-sm-3">
                        <span class="spanForm">BAIRRO</span>
                        <input value="<?echo $bairro?>" id="bairro" name="bairro" type="text" class="form-control"></input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <span class="spanForm">RUA</span>
                        <input value="<?echo $rua?>" id="rua" name="rua" type="text" class="form-control"</input>
                    </div>
                    <div class="col-sm-2">
                        <span class="spanForm">NUMERO</span>
                        <input value="<?echo $num?>" id="numero" name="numero" type="number" class="form-control"></input>
                    </div>
                    <div class="col-sm-4">
                        <span class="spanForm">COMPLEMENTO</span>
                        <input value="<?echo $comp?>" id="complemento" name="complemento" type="text" class="form-control"></input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 divBtn">
                        <a href="index.php"><button type="button" class="btnNew btn btn-info">Início</button></a>
                        <input type="submit" class="btn btn-primary" value="Salvar"></input>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script src="js/validacao.js"></script>
  </body>
</html>
