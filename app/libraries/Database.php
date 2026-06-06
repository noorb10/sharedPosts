<?php
/* 
-> PDO Database Class
-> Connect to the database
-> Create prepared statements
-> Bind values
-> Return rows and results
*/

class Database {
    // DB Params
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $dbh; // Database Handler
    private $stmt; // Statement Handler for Prepared Statements
    private $error; // Error Handler

    public function __construct() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT => true, // Persistent Connection
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // Error Mode
        );
        // Create PDO Instance
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
    }
}

?>