<?php
class connection
{
	var $host="localhost";
	var $db="drwaleeddb";
	var $username="root";
	var $password="";
	
	var $connect;
	
	function connect()
	{	
        $connect=mysqli_connect($this->host,$this->username,$this->password,$this->db);
        return $connect;
				
	}
	
	function disconnect()
	{
		if (isset($this->connect))
		{
            
			mysqli_close($this->connect);
		}
	}
	
	
}


?>