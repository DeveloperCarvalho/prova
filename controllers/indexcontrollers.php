<?php
require_once('config/database.class.php');

function carregaClass($nameFile)
 	{

 	if(!file_exists($nameFile))
{
 	 include($nameFile.'.class.php');
 }
	}
spl_autoload_register('carregaClass');

try {
	$database = new Database();
	$usuario = Factory::criaUsuario();
	echo 'Usuario do Banco <br/>'.$database->checkConnect()  ? "root" : "nao capturado";
   
	//istancia a Classe Ad Gerando o Objeto $ad
	$ad = new Ad();

	//Chamando a Função getUsuario pelo objeto $ad;
	echo 'Usuario do AD:'.$ad->getUsuario();
	} catch (Exception $e) {
	echo $e->getMessage();
}	
								




