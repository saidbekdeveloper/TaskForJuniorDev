<?php
class Database{

    private $server;
    private $username;
    private $password;
    private $database;

    protected function connect(){
        $this->server = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->database = "task_db";

        $connection = new Mysqli(
            $this->server,
            $this->username,
            $this->password,
            $this->database
        );

        return $connection;
    }
}