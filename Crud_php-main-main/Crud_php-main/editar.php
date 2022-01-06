<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Editar vaga');

use \App\Entity\Vaga;

//VALIDAÇÃO DO ID
if (!isset($_GET['id']) or !is_numeric($_GET['id'])) {
  header('location: index.php?status=error');
  exit;
}

//CONSULTA A VAGA
$Vaga = Vaga::getVaga($_GET['id']);

//VALIDAÇÃO DA VAGA
if (!$Vaga instanceof Vaga) {
  header('location: index.php?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if (isset($_POST['titulo'], $_POST['descricao'], $_POST['ativo'])) {

  $Vaga->titulo    = $_POST['titulo'];
  $Vaga->descricao = $_POST['descricao'];
  $Vaga->ativo     = $_POST['ativo'];
  $Vaga->atualizar();

  header('location: index.php?status=success');
  exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formulario.php';
include __DIR__ . '/includes/footer.php';
