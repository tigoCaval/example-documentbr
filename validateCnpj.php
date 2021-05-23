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
$value = $cnpj->check($_POST['cnpj']);

if($checkdoc == 'true')
{
    $maskValue = $mask->unmake($_POST['cnpj']);
    $value = $cnpj->check($maskValue);
} 

if($value == true)
  echo "<div class='alert alert-success' role='alert'>O CNPJ é válido !</div>";
else
  echo "<div class='alert alert-danger' role='alert'>O CNPJ é inválido !</div>";