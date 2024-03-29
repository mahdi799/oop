<?php
require_once ("config.php");
class Database
{
    public $connection;

        function __construct()
        {
            $this->open_db_connection();
        }

    public function open_db_connection()
    {
      $this->connection= new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

          if($this->connection->connect_errno)
          {
                die("database connection is failed".mysqli_error());
          }
    }
    public function query($sql)
    {
        $result= mysqli_query($this->connection,$sql);
        return $result;
    }
    public function escape_string($string)
    {
        $escaped_string = mysqli_real_escape_string($this->connection,$string);
        return $escaped_string;
    }
}

$database = new Database();
?>