<?php

class Transaccion{
		private $pdo;
		public $id;
		public $tabla;
		public $operacion;
		public $fecha;
		public $id_registro;
		
		
	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database :: Conectar();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function ListarTransaccion()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM invernaderos order by Nombre_Invernadero DESC");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	public function ObtenerAdmin($Id_Admin){
		try{
			$Control=$this->pdo->prepare('SELECT * FROM transaccion WHERE id=?');
			$Control->Execute(array($Id_Admin));
			
			return $Control->fetch(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die($e->getmessage());
		}
	}
}
?>