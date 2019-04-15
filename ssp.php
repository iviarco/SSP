<?php 

/**
* 
*/
class SSP 
{
	/**
	* Declare global variables
	*
	* @var string $hostname
	* @var string $username
	* @var string $password
	* @var string $database
	* @var string $connection
	*/

	private $hostname;
	private $username;
	private $password;
	private $database;
	private $connection;

	/**
	* @param string $hostname
	* @param string $username
	* @param string $password
	* @param string $database
	*/
	function __construct($hostname, $username, $password, $database)
	{
		$this->hostname = $hostname;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;

		$this->connection();
	}

	/**
	* @return MySQLi instance
	*/
	protected function connection()
	{
		// make database connection
		$this->connection = new mysqli($this->hostname, $this->username, $this->password, $this->database);
		
		// identify if has error
		if (mysqli_connect_error()) {
		    die('Connection Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
		}
	}


}




?>