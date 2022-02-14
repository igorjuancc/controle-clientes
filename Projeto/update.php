<?php
  include "connection.php";
  include "sanitize.php";

  $idCliente = $_GET["id"];
  $idEndereco = $_GET["end"];

  $cpf = sanitize($_POST["cpf"]);
  $email = sanitize($_POST["email"]);
  $data = $_POST["data"];
  $nome = sanitize($_POST["nome"]);
  $fone = sanitize($_POST["fone"]);

  $cep = sanitize($_POST["cep"]);
  $estado = $_POST["estado"];
  $cidade = sanitize($_POST["cidade"]);
  $bairro = sanitize($_POST["bairro"]);
  $rua = sanitize($_POST["rua"]);
  $num = $_POST["numero"];
  $comp = sanitize($_POST["complemento"]);

  echo $upEndereco = "UPDATE tb_endereco SET cep_endereco = '$cep',estado_endereco = '$estado',cidade_endereco = '$cidade',bairro_endereco = '$bairro',rua_endereco = '$rua',nr_endereco = $num,comp_endereco = '$comp' WHERE id_endereco = $idEndereco;";
  echo $upCliente =  "UPDATE tb_cliente SET cpf_cliente = '$cpf',nome_cliente = '$nome',email_cliente = '$email',data_cliente = '$data',fone_cliente = '$fone' WHERE id_cliente = $idCliente;";

  mysqli_query($conn, $upEndereco);
  mysqli_query($conn, $upCliente);

  mysqli_close($conn);
  header("Location:index.php?status=3");
?>
