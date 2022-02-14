<?php
  include "connection.php";
  include "sanitize.php";

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

  $inserirEndereco = "INSERT INTO tb_endereco (cep_endereco,estado_endereco,cidade_endereco,bairro_endereco,rua_endereco,nr_endereco,comp_endereco) VALUES ('$cep','$estado','$cidade','$bairro','$rua','$num','$comp');";
  mysqli_query($conn, $inserirEndereco);
  $id_endereco = mysqli_insert_id($conn);

  $inserirCliente = "INSERT INTO tb_cliente (cpf_cliente,nome_cliente,email_cliente,data_cliente,fone_cliente,id_endereco) VALUES ('$cpf','$nome','$email','$data','$fone',$id_endereco);";
  mysqli_query($conn, $inserirCliente);

  mysqli_close($conn);
  header("Location:index.php?status=2");
?>
