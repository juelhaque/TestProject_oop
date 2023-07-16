<?php
namespace testproject;

use PDO;
use PDOException;

class Helper{

    public $pdo;
    public $servername = "localhost";
    public $username = "root";
    public $password = "";

    public function dbconnect(){
        try {
        $this->pdo = new PDO("mysql:host=$this->servername;dbname=testproject", $this->username, $this->password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        }
    }

    public function prepareSql($sql){
        return $this->pdo->prepare($sql);
    }

    public function store($sql, $data){
        $this->dbconnect();
        $stmt = $this->prepareSql($sql);
        $stmt->execute($data);
    }

    public function edit($sql, $data){
        $this->dbconnect();
        $this->get($sql);
        $stmt = $this->prepareSql($sql);
        $stmt->execute($data);
    }

    public function getAll($sql){
        $this->dbconnect();
        $stmt = $this->prepareSql($sql);
        $result = $stmt->execute();

        if ($result) {
            $data = $stmt->fetchAll();
            return $data;
        }
    }

    public function get($sql){
        $this->dbconnect();
        $stmt = $this->prepareSql($sql);
        $result = $stmt->execute();

        if ($result) {
            $data = $stmt->fetch();
            return $data;
        }
    }

    public function destroy($sql){
        $this->dbconnect();
        $stmt = $this->prepareSql($sql);
        $result = $stmt->execute();
        return $result;
    }

}
?>


