<?php
include("cabecalho.php");
include("conecta.php");
include("banco-evento.php");?>

<?php
if(array_key_exists("removido", $_GET) && $_GET["removido"]==true){?>

 <p class="alert-success">Evento Removido!</p>

  <?php
}
   ?>


<table class="table table-hover table-striped table-bordered table-condensed">
   <div id="formularios">
       <?php
            $eventos = listaEventos($conexao);
            foreach($eventos as $evento):#para cada um desses eventos chame de evento.
        ?>
            <tr>
            <td><?= date("d/m/y", strtotime($evento['dataEvento'])) ?></td>
            <td><?= $evento['cliente'] ?></td>
            <td><?= $evento['solicitante'] ?></td>
            <td><?= $evento['motivo'] ?></td>
            <td><?= $evento['situacao'] ?></td>
            <td>
              <a href="remove-evento.php?id=<?=$evento['id']?>" class="text-danger">Remover</a>
            </td>
        </tr>
            <?php
          endforeach
        ?>
   </div>
</table>


<?php include("rodape.php") ?>
