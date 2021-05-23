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
$value = $cpf->check($_POST['cpf']);

if($checkdoc == 'true')
{
    $maskValue = $mask->unmake($_POST['cpf']);
    $value = $cpf->check($maskValue);
}

if($value == true)
  echo "<div class='alert alert-success' role='alert'>O CPF é válido !</div>";
else
  echo "<div class='alert alert-danger' role='alert'>O CPF é inválido !</div>";  
