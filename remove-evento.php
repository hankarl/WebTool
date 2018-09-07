<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-evento.php");


$id = $_GET['id'];
removeEvento($conexao, $id);
header("Location: evento-lista.php?removido=true");
die();
?>
