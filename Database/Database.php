<?php

namespace Database;

class Database
{
    public function instance()
    {
        $instance = null;
        try {
            $instance = new \PDO(
                "mysql:host=127.0.0.1;port=3306;dbname=poo-test;charset=utf8mb4",
                "arsenetsiri",
                "tsiriarsene@**"
            );

            // echo "Connexion à la base de données réussie";

            //Gestion des erreurs
            $instance->setAttribute(
                \PDO::ATTR_ERRMODE,
                \PDO::ERRMODE_EXCEPTION
            );
            //Récupération des données sous forme d'objets
            $instance->setAttribute(
                \PDO::ATTR_DEFAULT_FETCH_MODE,
                \PDO::FETCH_OBJ
            );
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
        return $instance;
    }
}
