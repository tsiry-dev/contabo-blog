<?php

namespace App\Models;

use Database\Database;

final class Category
{

    private $instance = null;

    public function __construct()
    {
        $database = new Database();
        $this->instance = $database->instance();
    }

    public function findAll()
    {
        $query = "SELECT * FROM categories ORDER BY id DESC";
        $request = $this->instance->prepare($query);
        $request->execute();

        return $request->fetchAll();
    }

    public function create(array $data)
    {
        $query = "INSERT INTO categories(title, description)
                 VALUES(:title, :description)";

        $request =  $this->instance->prepare($query);
        $request->execute($data);
        return true;
    }

    public function find(array $data)
    {
        $query = "SELECT * FROM categories WHERE id=:id";

        $request =  $this->instance->prepare($query);
        $request->execute($data);
        return $request->fetch();
    }

    public function update(array $data)
    {
        // var_dump($data);
        // die;
        $query = "UPDATE categories SET title=:title, description=:description WHERE id=:id";

        $request =  $this->instance->prepare($query);
        $request->execute($data);
        return true;
    }

    public function delete(array $data)
    {
        $query = "DELETE FROM categories WHERE id=:id";

        $request =  $this->instance->prepare($query);
        $request->execute($data);
        return true;
    }
}
