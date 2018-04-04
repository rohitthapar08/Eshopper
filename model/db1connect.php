<?php

	require_once("db_parameter.php");
	class db_connect implements db_parameter{
		// var $host ="localhost";
		// var $user ="root";
		// var $pass="";
		// var $db= "rohit";



		var $conn ="";

		function __construct()
		{
			if(session_id()=="")
			{
			session_start();
			// echo session_id();
			}
		
			//	mysqli class from php_mysqli.dll
			// $this->conn = new mysqli($this->host,$this->user,$this->pass,$this->db);
			$this->conn = new mysqli(db_parameter::HOST,db_parameter::USER,db_parameter::PASS,db_parameter::DB);
			// echo "<pre>";
			
			// print_r($this->conn);

		}
		function __destruct()
		{
			$result =$this->conn->close();
			// var_dump($result);
		}

	}
	
/////////////////////
	$obj=new db_connect();
?>