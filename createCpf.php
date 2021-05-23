<?php
/*
  Author: Tiago A C Pereira
  Project: https://github.com/tigoCaval/example-documentbr
*/
include __DIR__ ."/vendor/autoload.php";
include "Mask.php";
use Tigo\DocumentBr\Cpf;

$cpf = new Cpf();
$mask = new Mask();
$checkdoc = $_POST['checkdoc'];

if($checkdoc == 'true')
   echo $mask->make($cpf->generate(),1);  // 1 = cpf     
else if($checkdoc == 'false')
   echo $cpf->generate();      

