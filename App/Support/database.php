<?php


namespace App\Support;
use mysqli;


class Database{

		private $host = 'localhost';
		private $usr = 'root';
		private $pass = '';
		private $db = 'basic';

		private $connection;

		private function connection(){
			return $this->connection = new mysqli($this->host, $this->usr, $this->pass, $this->db);
		}

		protected function create($sql){
			$status = $this->connection()->query($sql);

			if($status){
				return true;
			}else {
				return false;
			}
		}

		protected function all($tbl, $order='DESC'){
				
				return $this->connection()->query("SELECT * FROM $tbl order by id $order");
		}
		protected function find($tbl, $id){

			return $this->connection()->query("SELECT * FROM $tbl WHERE id='$id'");
			
		}

		protected function update($sql){

			$this->connection()->query($sql);
			
		}
		protected function delete($tbl, $id){
			$data = $this->connection()->query("DELETE FROM $tbl WHERE id='$id'");

			if($data){
				return true;
			}else{
				return false;
			}
		}

}
