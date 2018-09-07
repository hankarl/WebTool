<?php include("cabecalho.php")?>

<div class="container-center">
	<h2>Cadastro de Eventos</h2>
</div>

	<form action="adiciona-evento.php">
	    <table class="table table-hover">

            <tr>
            <td>Data</td>
            <td><input class="form-control" type="date" name="dataEvento"></td>
            </tr>

            <tr>
             <td>Cliente</td>
             <td><input class="form-control" type="text" name="cliente"></td>
            </tr>

            <tr>
             <td>Solicitante</td>
             <td><input class="form-control" type="text" name="solicitante"></td>
            </tr>

            <tr>
             <td>Motivo</td>
             <td><input class="form-control" type="text" name="motivo"></td>
            </tr>

            <tr>
             <td>Status</td>
             <td><input class="form-control" type="text" name="situacao"></td>
            </tr>

            <td>
             <input class="btn btn-primary" type="submit" value="Cadastrar">
            </td>

    	</table>
	</form>

<?php include("rodape.php")?>
