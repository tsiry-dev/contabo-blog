<?php

namespace Database;

class Database
{
    public function instance()
    {
        $instance = null;
        try {
            $instance = new \PDO(
                "mysql:host=109.199.111.45;dbname=poo-test",
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
