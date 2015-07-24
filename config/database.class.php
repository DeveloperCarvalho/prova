<?php
/**
*@see: Classe Database, responsavel por gerenciar conexao com n host ou base
*
**/

 class Database{		

//Atributo de controle 
	const USER = 'root';
	const PASSWORD = 'elaborata';
	private static $instancia;

	public function __construct()
	{

	}

	public static function conecta()
	{ 
		
		try{

            if(!isset(self::$instancia))
	        {
		      return self::$instancia = new Database();
            }
            return self::$instancia;

	    }catch (Exception $e){
		   throw new Exception($e->getMessage());
	    }
    }
		/**
		*@see Metodo responsavel por verificar conexao com banco de dados
		*@param (string)$usuario
		*@return (bool) true e false
		**/
	public function checkConnect()
{
		try{
			$dsn = 'mysql:host=localhost;dbname=elaborata';
				//new PDO = cria objeto do tipo PDO
			$bd = new PDO($dsn, self::USER, self::PASSWORD);

			if($bd)
			{
              return true;
		    }

		    return false;
	    }catch (Exception $e){
		   throw new Exception($e->getMessage());
	}

}

}

