<?php 


require_once("config.php");


$paulo = new Usuario();

$paulo->loadById(5);


echo $paulo;

/*$usuarios=$sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/



 ?>