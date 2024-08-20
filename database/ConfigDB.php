<?php


// database/ConfigDB.php
class ConfigDB {
    private static $instance = null;
    private $pdo;

    private $host = 'localhost';
    private $dbname = 'blog_db';
    private $username = 'root';
    private $password = '';

    // منع إنشاء النسخة من الخارج
    private function __construct() {
        try {
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    // ضمان اتصال واحد في قاعدة البيانات طول حياة التطبيق
        public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new ConfigDB();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->pdo;
    }
}
