<?php

require_once("config.php");

//carrega um usuario
//$root = new Usuario();
//$root->loadById(4);
//echo $root;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo nome
//$search = Usuario::search("user");
//echo json_encode($search);

//Carrega um usuario usando login e senha
//$usuario = new Usuario();
//$usuario->login("Jose", "1234567890");
//echo $usuario;

//Insert de usuario novo
//$aluno = new Usuario("aluno novo", "gjlçzgjsd&#$¨#");
//$aluno->insert();
//echo $aluno;

//alterando um usuario

$usuario = new Usuario();

$usuario->loadById(10);

$usuario->update("Professor Xavier", "xassnxcaxasj");

echo $usuario;

?>