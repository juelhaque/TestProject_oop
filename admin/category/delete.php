<?php

include_once('../../vendor/autoload.php');

use testproject\Category\Category;

    $category = new Category;
    if (isset($_POST['submit']))
    {
        $id = $_POST['id'];
        $category->delete($id);
    }
?>