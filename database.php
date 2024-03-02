<?php
class Database {
	protected $db_host='localhost';
	protected $db_user='nino';
	protected $db_pass='nino';
	protected $db_name='sieuthi';

	protected $conn=NULL;
	protected $result=NULL;

	public function connect() {
		$this->conn=mysqli_connect($this->db_host,$this->db_user,$this->db_pass, $this->db_name);
		mysqli_query($this->conn,"SET NAMES utf8");
	}
	public function query($sql){
		
		$this->result=mysqli_query($this->conn,$sql);
		}
	public function num_row(){
		if($this->result){
			$num_row=mysqli_num_rows($this->result);
			return $num_row;
			}
		}
		public function fecth(){
			if($this->result){
                $row=mysqli_fetch_all($this->result,MYSQLI_ASSOC);
                return $row;
                }
			$row = array();
			if($this->result){
				while($db=mysqli_fetch_assoc($this->result)) {
					$row[]=$db;
				}
			} else {
					$row=array();
			}
			return $row;
		}
	}