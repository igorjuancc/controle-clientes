<?php
    include "connection.php";

    $clientes = "SELECT id_cliente,nome_cliente,cpf_cliente,email_cliente FROM tb_cliente;";
    $clientes = mysqli_query($conn, $clientes);

    mysqli_close($conn);

    while ($print = mysqli_fetch_assoc($clientes)) {
      echo "<tr>";
        echo "<td>".$print["cpf_cliente"]."</td>";
        echo "<td>".$print["nome_cliente"]."</td>";
        echo "<td>".$print["email_cliente"]."</td>";
        echo "<td class='icone'><a href='formEdit.php?id=".$print['id_cliente']."'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a></td>";
        echo "<td class='icone'><a class='remover' onclick='return remover(".$print['id_cliente'].")'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a></td>";
      echo "</tr>";
    }
?>
