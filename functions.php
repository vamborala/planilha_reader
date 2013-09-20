<?php

// Função que busca os valores enviados pelo formulário, tanto por POST como GET
function getval($val, $default){
	// retorna um valor de POST ou GET ou o valor default caso não exista o índice
	if (array_key_exists($val, $_POST))	return $_POST[$val];
	if (array_key_exists($val, $_GET))	return $_GET[$val];
    return $default;
}

?>