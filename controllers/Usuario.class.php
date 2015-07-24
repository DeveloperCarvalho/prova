<?php 
/**
*@see:Classe Usuario responsavel por gerenciar acessos ao banco 
*
**/
class Usuario extends Database{

   //Atributo  $db responsavel por carregar a instancia do objeto database
   public $db;
   public function __construct()
   {
      try{
         $this->db = new Database();
   }catch (Exception $e){
      throw new Exception($e->getMessade());
   }
}
/**
*@see: getUsuario responsavel por retornar o status de conexao para um determinado usuario
*@return: (bool) TRUE caso haja conexao com o banco. FALSE caso nao haja conexao com o banco.
**/

   public function getUsuario()
   {
      try{
         return $this->db->checkConnect();
   }catch (Exception $e){
      throw new Exception($e->getMessage());

   }
 }

}
