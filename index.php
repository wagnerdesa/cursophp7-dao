<?php 


require_once("config.php");

// Carrega um usuário
//$paulo = new Usuario();
//$paulo->loadById(5);
//echo $paulo;

// Carrega uma lista de usuário

//$lista = Usuario::getList();

//echo json_encode($lista);


//Carrega uma lista de usuarios buscando pelo login

//$search = Usuario:: search("au");

//echo json_encode($search);

//carrega usuario usando o login e senha

$usuario=new Usuario();
$usuario->login("paulo","123");

echo $usuario;













 ?>