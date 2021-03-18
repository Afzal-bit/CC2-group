<?php
class DbConnection{

    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'carrodio_group5';
    private $_con;
    protected $connection;
    
  
		
    function __construct(){
        $this->_con = new mysqli($this->host, $this->username, $this->password, $this->database);      
        if ($this->_con->connect_error) die('Database error -> ' . $this->_con->connect_error);
    }
    // return Connection
    function returnConnection() {
        return $this->_con;
    }

       /* if (!isset($this->connection)) {
            
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
            
            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
        
        return $this->connection;
    }*/
}
?>