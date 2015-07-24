<?php
/**
*@see: Class Factory responsavel por controlar a criacao de objetos diretos (new)
*
*
**/
class Factory{

/**
*@see: Cria um objeto do tipo Usuario.
*@return:(Object) Usuario
*
**/
public function criaUsuario()

{
	return new Usuario();
	}
}