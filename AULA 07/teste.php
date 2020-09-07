<?php
	require "Banco.php";
	
	$banco = new Banco();// se banco for vazio executa o 'postgres'
	$sql = "insert into usuario(login,senha) values ('olok','kkk')";	
	
	$contador = $banco->executar($sql);

	echo "$contador registros inseridos";

	$sql = "select * from usuario";

	echo "<table border=1>";
	echo "<tr> <th>Id</th> <th>Login</th> <th>Senha</th></tr>";
	foreach($banco ->consultar($sql) as $row){
		echo "<tr>";
		echo "<td>".$row['id'] . "\t";
		echo "<td>".$row['login'] . "\t";
		echo "<td>".$row['senha'] . "\t";
		echo "</tr>";
	}
	echo "</table>";
	?>