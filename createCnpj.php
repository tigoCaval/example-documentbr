<?php
/*
  Author: Tiago A C Pereira
  Project: https://github.com/tigoCaval/example-documentbr
*/
include __DIR__ ."/vendor/autoload.php";
include "Mask.php";
use Tigo\DocumentBr\Cnpj;

$cnpj = new Cnpj();
$mask = new Mask();
$checkdoc = $_POST['checkdoc'];
 
if($checkdoc == 'true')
   echo $mask->make($cnpj->generate(),2); // 2 = cnpj       
else if($checkdoc == 'false')
   echo $cnpj->generate();  