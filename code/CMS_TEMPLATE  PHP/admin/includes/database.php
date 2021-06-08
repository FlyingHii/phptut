<?php
namespace Admin\Includes;
include_once ('config.php');

class Database
{
    private $connection;
    public function __construct(
    ) {
        $this->connection = $this->open_db_connection();
    }

    public function open_db_connection()
    {
        $mysqli = new \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($mysqli->connect_errno) {
            die($mysqli->error);
        }
        return $mysqli;
    }

    public function query($sql)
    {
        $result = $this->connection->query($sql);
        if (empty($result)) {
            throw new \Exception($this->connection->error . ". Query was: " . $sql);
        }
        return $result;
    }

    public function getLastId()
    {
        return $this->connection->insert_id;
    }

    public function escapeString($string)
    {
        return $this->connection->real_escape_string($string);
    }
}

$database = new Database();
