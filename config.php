<?php
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASS', '');
	define('BASE', 'projeto');

	$conn = new MySQLi(HOST,USER,PASS,BASE);

	//função para trazer a data no formato Brasil
	function ExibeData($data){
		return  date("d/m/Y", strtotime($data));
	}