<?php 

require_once("config.php");


//carrega um usuario
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//carega lista de usuario
//$lista= Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);


//carrega usuario usando login e senha
$usuario = new Usuario();
$usuario->login("root", "54321");
echo $usuario;

?>