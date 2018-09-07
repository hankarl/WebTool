<?php

function listaEventos($conexao){#uma função que recebe a conxão
  $eventos = array();#temos uma variável $eventos que é um aray
  $resultado = mysqli_query($conexao, "select * from eventos");#temos uma variável $resultado que recebe o conteudo presente em minha tabela eventos
  while($evento = mysqli_fetch_assoc($resultado)){ #enquanto minha variável $evento receber um resultado associado a minha variável $resultado...
    array_push($eventos, $evento);#Array coloca(array_push) dentro da minha array de eventos o evento.
  }
  return $eventos;
}

function insereEventos($conexao, $dataEvento, $cliente, $solicitante, $motivo, $situacao){#uma função que insere dados relacionados a um evento no banco
    $query = "insert into eventos (dataEvento, cliente, solicitante, motivo, situacao) values ( '{$dataEvento}', '{$cliente}', '{$solicitante}', '{$motivo}', '{$situacao}')";
    return mysqli_query($conexao, $query);
}

function removeEvento($conexao, $id){
  $query = "delete from eventos where id = {$id}";
  return mysqli_query($conexao, $query);
}
