<?php

namespace testproject\Category;

use testproject\Helper;

class Category extends Helper
{

    public function index()
    {
        $sql = "SELECT * FROM categores ORDER BY id DESC";
        return $this->getAll($sql);
    }

    public function __construct()
    {
        session_start();
    }

    public function insert($formData)
    {
        $name = $formData['name'];
        $description = $formData['description'];

        $data = [
            'name' => $name,
            'description' => $description
        ];

        $sql = "INSERT INTO categores (name, description) VALUES (:name, :description)";
        $this->store($sql, $data);

        $_SESSION['msg'] = "Data Submitted Successfully";
        header('Location: ./list.php');
    }

    public function show($id)
    {
        $sql = "SELECT * FROM categores WHERE id = $id";
        return $this->get($sql);
    }

    public function update($formData)
    {
        $id = $formData['id'];
        $name = $formData['name'];
        $description = $formData['description'];

        $updateData = [
            'name' => $name,
            'description' => $description
        ];

        $sql="UPDATE categores SET name=:name, description=:description WHERE id=$id";
        $this->edit($sql, $updateData);

        $_SESSION['msg'] = "Data Updated Successfully";
        header('Location: ./list.php');
    }

    public function delete($id)
    {
        $sql = "DELETE FROM categores WHERE id=$id";
        $this->destroy($sql);

        $_SESSION['error'] = "Data Deleted Successfully";
        header('Location: ./list.php');
    }

    
}
