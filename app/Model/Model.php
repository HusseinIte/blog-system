<?php

require_once __DIR__ . '/../../database/ConfigDB.php';

class Model
{
    protected $db;

    public function __construct()
    {
        $this->db = ConfigDB::getInstance()->getConnection();
    }
}
