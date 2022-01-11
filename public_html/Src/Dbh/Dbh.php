<?php

namespace Foo\Dbh;

use PDO;

class Dbh
{
    private $host = "localhost";
    private $user = "id17947134_root";
    private $pwd = "NA#--iOULj2ih4~=";
    private $db = "id17947134_store";

    public function pdo()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}
