<?php

require_once("./databases/MariaDb.php");
require_once("./models/Usuario.php");

$mariaDb = new MariaDb();
$conexao = $mariaDb->dbConnection();

////$usuario = new usuario($conexao);
//$usuario->nome = "Maria";
//$usuario->login = "Mariaduda@gmail.com";
//$usuario->senha = "123";
//$usuario->create();

//$usuario2 = new usuario($conexao);
//$usuario2->nome = "Gabriel";
//$usuario2->login = "Gabriel@gmail.com";
//$usuario2->senha = "12345";
//$usuario2->create();

//$usuario = new usuario($conexao);
//$usuario->id = 1;
//$usuario->remove();

$usuario2 = new usuario($conexao);
$usuario2->id = 2;
$usuario2->nome = "bruno";
$usuario2->login = "bruno@gmail.com";
$usuario2->senha = "1234567";
$usuario2->update();

$lista_de_usuarios = $usuario2->getAll();

foreach($lista_de_usuarios as $item) {
    echo "nome: {$item['nome']}";
    echo PHP_EOL;
}

$usuario->getUserById(1);

if($usuario->id > 0){
    echo "usuário: {$usuario->nome} encontrado";
}else{
    echo "Usuário não encontrado";
}

echo PHP_EOL;











