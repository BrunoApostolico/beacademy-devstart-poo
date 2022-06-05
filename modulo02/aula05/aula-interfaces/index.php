<?php

include 'Validar.php';
include "ValidarBR.php";
include 'ValidarUS.php';

$cpf = '12312312312';
$docX= '12312312312312';

$br = new ValidarBR();
$br->validarDocumento($cpf);

$us = new ValidarUS();
$us->validarDocumento($docX);

echo 'Funcionou';