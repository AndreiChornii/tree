<?php

class DB {

    public function query($pdo, $sql, $parameters = []) {
        $query = $pdo->prepare($sql);
        $query->execute($parameters);
        return $query;
    }

    public function getPdo() {
        $pdo = new PDO('mysql:host=localhost;dbname=tree;charset=utf8', 'tree', 'tree');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

}
