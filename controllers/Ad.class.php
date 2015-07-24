<?php
/**
*@see Classe AD responsavel por gerenciar os emails e logins de rede interno
*
*
**/
class Ad{

	private $usuario = 'Aluno';

   /**
   *@return : (string) $usuario
   *@see Retorna um atributo usuario da classe AD
   **/
   
	public function getUsuario()
	{
		return $this->usuario;
	}

}