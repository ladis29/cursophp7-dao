<?php 

	require_once("config.php");
/*
	$sql = new Sql();

	$usuarios = $sql->select("SELECT * FROM tb_usuarios");

	echo json_encode($usuarios);

// carrega um usuário
	$user = new Usuario();

	$user->loadById(3);

	echo $user;

//carrega uma lista de usuários
	$lista = Usuario::getList();

	echo json_encode($lista);

//carrega uma lista de usuários buscando pelo login
	$search = Usuario::search("jo");

	echo json_encode($search);
*/

//carrega um usuário usando o login e a senha
	$usuario = new Usuario();
	$usuario->login("joao", "qwerty");

	echo $usuario;

 ?>