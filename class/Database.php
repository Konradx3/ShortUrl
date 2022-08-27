<?php

class Database
{
    private $host = 'localhost';
    private $dbname = 'shorturl';
    private $user = 'root';
    private $password = '';

    public function Connect()
    {
        return new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->user, $this->password);
    }
    public function Insert($oldUrl, $newUrl)
    {
        $query = "INSERT INTO `links`(`oldUrl`, `newUrl`, `date`) 
                  VALUES (:old, :new, now())";
        $stmt = $this->Connect()->prepare($query);
        $stmt->bindParam(':old', $oldUrl);
        $stmt->bindParam(':new', $newUrl);
        return $stmt->execute();
    }
    public function Show($newUrl)
    {
        $query = "SELECT * FROM `links` 
                  WHERE `newUrl` = ?";
        $stmt = $this->Connect()->prepare($query);
        $stmt->execute([$newUrl]);
        return $stmt->fetch();
    }
    public function Check($oldUrl)
    {
        $query = "SELECT * FROM `links` 
                  WHERE `oldUrl` = ?";
        $stmt = $this->Connect()->prepare($query);
        $stmt->execute([$oldUrl]);
        return $stmt->fetch();
    }
}

