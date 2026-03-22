<?php

class DbConnect {
    protected $dbinfo = [
        'host' => 'localhost',
        'user' => 'root',
        'password' => '',
        'dbname' => 'example'
    ];
    private static $dbConn;
    private static $instance;

    private final function  __construct() {
        if (empty(self::$dbConn)) {
            $this->getConnection();
        }
    }

    public static function Init() {
        if (empty(self::$instance)) {
            self::$instance = new DbConnect();
        }
        return self::$instance;
    }

    public function getConnection() {
        if (empty(self::$dbConn)) {
            self::$dbConn = new mysqli(
                $this->dbinfo['host'],
                $this->dbinfo['user'],
                $this->dbinfo['password'],
                $this->dbinfo['dbname']
            );
            if (self::$dbConn->connect_error) {
                throw new mysqli_sql_exception("Fatal error: #" . self::$dbConn->connect_errno . " : " . self::$dbConn->connect_error);
            }
        }
        return self::$dbConn;
    }
}