<?php 

	class Connect_DB

	{
		// input   

		private $host     = "";
		private $username = "";
		private $password = "";
		private $database = "";


			function conn()
		{
		    $connection = mysqli_connect($this->host,$this->username,$this->password,$this->database);
		    return $connection;
		}

		function read($query)
		{
			$conn = $this->conn();
			$result = mysqli_query($conn,$query);

			if(!$result){
				return false;

			}else{
				
				$data = false;
				while($row = mysqli_fetch_assoc($result)){

					$data[] = $row;
				}

				return $data;
			} 
		}

		function write($query)
		{
			$conn = $this->conn();
			$result = mysqli_query($conn,$query);

			if(!$result){
				return false;

			}else{
				return true;
			} 
		}

	}


