<?php

namespace App\Controller;

use App\Controller\Controller;
use App\Models\Category;

final class CategoryController extends Controller
{

    private Category $categoryModel;

    public function __construct()
    {
        $this->categoryModel = new Category();
    }

    public function index()
    {
        $categories = $this->categoryModel->findAll();

        $this->render('categories/index', [
            'categories' => $categories,
            'username' => 'john doe'
        ]);
    }

    public function create(array $errors = [])
    {
        $this->render('categories/create', [
            'errors' => $errors
        ]);
    }

    public function store()
    {
        $errors = [];

        $title = htmlspecialchars($_POST['title']) ?? '';
        $description = htmlspecialchars($_POST['description']) ?? '';

        if (empty(trim($title))) {
            $errors['title'] = "Le titre est requis";
        }

        if (empty(trim($description))) {
            $errors['description'] = "La description est requis";
        }

        if (!empty($errors)) {
            return $this->create($errors);
        }

        $data = [
            'title' => $title,
            'description' => $description
        ];

        $this->categoryModel->create($data);

        $this->redirectTo("/categories");
    }

    public function edit(array $errors = [], $id)
    {
        $data = ['id' => $id];
        $category = $this->categoryModel->find($data);

        $this->render('categories/edit', [
            'errors' => $errors,
            'category' => $category
        ]);
    }

    public function update(int $id)
    {
        $errors = [];

        $title = htmlspecialchars($_POST['title']) ?? '';
        $description = htmlspecialchars($_POST['description']) ?? '';


        if (empty(trim($title))) {
            $errors['title'] = "Le titre est requis";
        }

        if (empty(trim($description))) {
            $errors['description'] = "La description est requis";
        }

        if (!empty($errors)) {
            return $this->edit($errors, $id);
        }

        $data = [
            'id' => $id,
            'title' => $title,
            'description' => $description
        ];

        $this->categoryModel->update($data);

        $this->redirectTo("/categories");
    }


    public function destroy(int $id)
    {
        $data = ['id' => $id];
        $this->categoryModel->delete($data);
        $this->redirectTo("/categories");
    }
}
