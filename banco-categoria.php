<?php

function listaCategoria($conexao) {
	$categorias = array( );

	$resultado = mysqli_query($conexao, "select * from categorias");

	while($categoria = mysqli_fetch_assoc($resultado)){
		array_push($categorias, $categoria);
	}

	return $categorias;

}