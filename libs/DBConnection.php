<?php
class DBConnection
{
    private $host;
    private $user;
    private $pass;
    private $dbname;
    public function __construct()
    {
        $this->host = DB_HOST;
        $this->user = DB_USER;
        $this->pass = DB_PASS;
        $this->dbname = DB_NAME;
    }

}