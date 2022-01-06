# Crud_php-main

## Banco de dados (HeidiSQL)
Crie um banco de dados e execute as instruções SQLs abaixo para criar a tabela `vagas`:
  CREATE TABLE `vagas` (
  	 `id`        INT(11)                   AUTO_INCREMENT,
  	 `titulo`    VARCHAR(255)              NULL      COLLATE'utf8_general_ci',
  	 `descricao` TEXT(sem especificação)   NULL      COLLATE'utf8_general_ci',
     `ativo`     ENUM('S','N')             NULL      COLLATE'utf8_general_ci',
  	 `data`      TIMESTAMP                 NULL ,
  	   +PRIMARY KEY (`id`) 
  )
  Colação: COLLATE = 'utf8_general_ci'
  AUTO_INCREMENT = 1;

## Configuração
As credenciais do banco de dados estão no arquivo `./app/db/Database.php` e você deve alterar para as configurações do seu ambiente (HOST, NAME, USER e PASS).
