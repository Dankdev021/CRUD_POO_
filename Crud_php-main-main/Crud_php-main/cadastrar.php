<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Cadastrar vaga');

use \App\Entity\Vaga;

$Vaga = new Vaga;

//VALIDAÇÃO DO POST
if (isset($_POST['titulo'], $_POST['descricao'], $_POST['ativo'])) {

  $Vaga->titulo    = $_POST['titulo'];
  $Vaga->descricao = $_POST['descricao'];
  $Vaga->ativo     = $_POST['ativo'];
  $Vaga->cadastrar();

  header('location: index.php?status=success');
  exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formulario.php';
include __DIR__ . '/includes/footer.php';
