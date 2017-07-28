<?php
 
/**
 * A class file to connect to database
 */
class DB_CONNECT {
 
    // constructor
    function __construct() {
        // connecting to database
        $this->connect();
    }
 
    
 
    /**
     * Function to connect with database
     */
    function connect() {
        // import database connection variables
        require_once ('db_config.php');
 
        // Connecting to mysql database and Selecing database
        $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD,DB_DATABASE) or die(mysqli_error());

        // returing connection cursor
        return $con;
    }
 

 
}
 
?>