<?php
include("cabecalho.php");
include("conecta.php");
include("banco-evento.php");
?>

<?php

    $dataEvento = $_GET['dataEvento'];
    $cliente = $_GET['cliente'];
    $solicitante = $_GET['solicitante'];
    $motivo = $_GET['motivo'];
    $situacao = $_GET['situacao'];



if(insereEventos($conexao, $dataEvento, $cliente, $solicitante, $motivo, $situacao)){ ?>
    <p class="text-success">O evento <?= $cliente ?> foi cadastrado com sucesso</p>
    <!-- Tratar essa estilização depois dentro do css-->
<?php } else {
    $msg = mysqli_error($conexao);

?>
    <p class="text-danger">O Evento <?= $cliente ?> não foi cadastrado <?= $msg ?></p>
<?php
}
?>

<?php include("rodape.php")?>
