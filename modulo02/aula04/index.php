<?php

include "Usuario.php";
include 'Cliente.php';
include 'Gestor.php';

$c1 = new Cliente('bapostolico@gmail.com','123456');
$c1->setNome('Bruno');
$c1->setDataCadastro('01/01/2020');


$g1 = new Gestor('priscilipe@gmail.com','12345','5000');
$g1->setNome('Priscila');


var_dump($c1);
var_dump($g1);