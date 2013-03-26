<?php
class DB{
	public $dbo;
	function __construct($settings){
		$dbConnString = "mysql:host=" .  $settings->host . "; dbname=" . $settings->database;
		$this->pdo = new PDO($dbConnString, $settings->user, $settings->password);
		//$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$error = $this->pdo->errorInfo();
		if($error[0] != "") {
			$this->TriggerError($error, __METHOD__);
		}
	}
	
	public function GetTable($table,$where='',$data=array(),$groupby='',$orderby=''){
		if(empty($data))$data=array();
		$sql = "SELECT * FROM {$table} 
		".($where != "" ? "WHERE ".$where." ":"")."
		".($groupby != "" ? "GROUP BY ".$groupby:"")."
		".($orderby != "" ? "ORDER BY ".$orderby:"")." ";
		try {
				$pdos = $this->pdo->prepare($sql);
				$pdos->execute($data);
				$res = $pdos->fetchAll(PDO::FETCH_ASSOC);
				return $res;
			} catch (Exception $e) {
				$this->TriggerError($this->pdo->errorInfo(), __METHOD__,$e);
		}
		
	}
	
	public function GetRow($table,$where='',$data=array(),$groupby='',$orderby=''){
			if(empty($data))$data=array();
			$sql = "SELECT * FROM {$table} 
			".($where != "" ? "WHERE ".$where." ":"")."
			".($groupby != "" ? "GROUP BY ".$groupby:"")."
			".($orderby != "" ? "ORDER BY ".$orderby:"")." ";
			try {
					$pdos = $this->pdo->prepare($sql);
					$pdos->execute($data);
					$res = $pdos->fetchAll(PDO::FETCH_ASSOC);
					return $res[0];
				} catch (Exception $e) {
					$this->TriggerError($this->pdo->errorInfo(), __METHOD__,$e);
			}
		
	}
	
	public function GetCell($table,$cell,$where='',$data=array(),$orderby=''){
		if(empty($data))$data=array();
		$sql = "SELECT {$cell} FROM {$table} 
		".($where != "" ? "WHERE ".$where:"")." 
		".($orderby != "" ? "ORDER BY ".$orderby:"")." ";
		try {
			$pdos = $this->pdo->prepare($sql,$data);
			$pdos->execute($data);
			//$res = $pdos->fetchAll(PDO::FETCH_ASSOC);
			//return reset($res[0]);
			$res = $pdos->fetch(PDO::FETCH_NUM);
			return $res[0];
			
		} catch (Exception $e) {
				$this->TriggerError($this->pdo->errorInfo(), __METHOD__,$e,$sql);
		}
		if($pdos !== false){
			
		}else{
			$this->TriggerError($this->pdo->errorInfo(), __METHOD__,'',$sql);
		}
	}
	
	public function wrappedSQLGET($sql,$data){
		if(empty($data))$data=array();
		try {
				$pdos = $this->pdo->prepare($sql);
				$pdos->execute($data);
				$res = $pdos->fetchAll(PDO::FETCH_ASSOC);
				return $res;
			} catch (Exception $e) {
					$this->TriggerError($this->pdo->errorInfo(), __METHOD__,$e,$sql);
		}
	}
	
	public function wrappedSQLINSERT($sql,$data){
		try {
				$pdos = $this->pdo->prepare($sql);
				$res = $pdos->execute($data);
				$this->id = $this->pdo->lastInsertId();
				return $this->id;
			} catch (Exception $e) {
					$this->TriggerError($this->pdo->errorInfo(), __METHOD__,$e,$sql);
		}
	}
	
	private function TriggerError($error,$method,$e='',$sql){
		//TODO TRIGGER EMAIL ERROR
		//header("Location:/404");
		echo $method.'<br>'.$e.'<br>'.$sql;
		print_r($error); 
		
		die();
	}
}