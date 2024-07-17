<?php
require "../config/env.php";

abstract class Database
{
    protected $db;
    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=" . $_ENV["host"] . ";dbname=" . $_ENV["dbname"], $_ENV["username"], $_ENV["password"]);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    /**
     * Summary of seTData
     * insertion
     * modification
     * suppression
     * @param mixed $sql
     * @param mixed $data
     * @return void
     */
    protected function setData($sql, $data)
    {
        try {
            $bdd = $this->db;
            $req = $bdd->prepare($sql);
            $req->execute($data);
        } catch (PDOException $e) {
            echo "Erreur lors de la requette : " . $e->getMessage();
        }
    }
    protected function getOneData($data, $sql)
    {
        try {
            $bdd = $this->db;
            $req = $bdd->prepare($sql);
            $req->execute($data);
            return $req->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erreur lors de la recupération de la données : " . $e->getMessage();
        }
    }
    protected function getManyData($sql, $data = null)
    {
        try {
            $bdd = $this->db;
            $req = $bdd->prepare($sql);
            $req->execute($data);
            return $req->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erreur lors de la recupération des données : " . $e->getMessage();
        }
    }
}



