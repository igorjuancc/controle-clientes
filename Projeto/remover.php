<?php
  include "connection.php";

  $idCliente = $_GET["id"];

  $idEnderco = "SELECT e.id_endereco FROM tb_endereco AS e INNER JOIN tb_cliente AS c ON e.id_endereco = c.id_endereco WHERE id_cliente = $idCliente";
  $idEnderco = mysqli_query($conn, $idEnderco);

  if ($print = mysqli_fetch_assoc($idEnderco)) {
    $idEnderco = $print["id_endereco"];
  }

  $removerCliente = "DELETE FROM tb_cliente WHERE id_cliente = $idCliente";
  $removerEnd = "DELETE FROM tb_endereco WHERE id_endereco = $idEnderco";

  mysqli_query($conn, $removerCliente);
  mysqli_query($conn, $removerEnd);

  header("Location:index.php?status=1");
?>
