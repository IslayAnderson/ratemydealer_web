<?php
class sqlinterface
{


    //LIVE DATA
    private $host = "localhost";
    private $user = "rmd";
    private $password = "1rzGZ05dhMMo";
    private $schema = "ratemydealer";

    public $connection;

    private function BuildConnection($host,$user)
    {
        try {
            $dbh = new PDO("mysql:host=" . $host . ";mysql:charset=utf8mb4;" . "dbname=" . $this->schema, $user, $this->password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $dbh = 'Connection failed: ' . $e->getMessage();
        }
        return $dbh;
    }

    //Constructor
    public function __construct()
    {
        $this->connection = $this->BuildConnection($this->host, $this->user);
        //$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
    }

//    //Return Errors
//    public function errorInfo(){
//        $this->connection->errors;
//    }

    //Generic fetch data class with parameters
    public function Fetch($sql, $params = null)
    {
        $con = $this->connection->prepare($sql);

        if ($params != null)
        {
            foreach($params as $key => $val)
            {
                $con->bindValue($key, $val, PDO::PARAM_STR);
            }
        }

        if(strpos($con, 'Connection failed') > 0){
            return $con;
        }else{
            try {
                $con->execute($params);
                return $con->fetchAll(PDO::FETCH_OBJ);
            } catch (PDOException $e) {
                return 'Connection failed: ' . $e->getMessage();
            }
        }

    }


    //Performs database operation
    public function DBOps($sql, $params)
    {
        return $this->Fetch($sql, $params);
    }

    public function lastInsertId($name = NULL) {

        return $this->connection->lastInsertId($name);

    }


}

