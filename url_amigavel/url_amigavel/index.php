<?php

	var_dump($_GET);

	echo '<hr>';

	echo '<a href="sobre">Sobre</a>&nbsp';
	echo '<a href="somos">Somos</a>&nbsp';
	echo '<a href="contato">Contato</a><br/>';

	if ($_GET) {
		$url = explode('/', $_GET['url']);

		require_once 'pages/' .$url[0].'.php';
	}

#&nbsp : espaço 