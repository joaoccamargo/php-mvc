<?php

class UserModel extends Database
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = $this->getConnection();
    }
    public function fetch()
    {
        $smt = $this->pdo->query("SELECT * FROM users");
        if($smt->rowCount() > 0) {
            return $smt->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return [];
        }
    }
}