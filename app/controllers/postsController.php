<?php
 

namespace App\Controllers\PostsController;

use PDO, \App\Models\PostsModel, \App\Models\CategoriesModel ;

function indexAction(PDO $connexion)
{
    // Charge les derniers posts dans $books
    include_once "../app/models/postsModel.php";
    $posts = PostsModel\findAll($connexion);

    // Charge la vue dans $content
    global $content, $title;
    $title = "Alex Parker - Blog";
    ob_start();
    include "../app/views/posts/index.php";
    $content = ob_get_clean();
}


function showAction(PDO $connexion, int $id)
{
    //Je vais demander des données aux modèles
    include_once '../app/models/postsModel.php';
    $post = PostsModel\findOneById($connexion, $id);

    //Je charge la vue index.php des books dans $content
    global $content, $title;
    $title = $post['title'];
    ob_start();
    include '../app/views/posts/show.php';
    $content = ob_get_clean();
}


function addFormAction(PDO $connexion) 
{

    include_once "../app/models/categoriesModel.php";
    $categories = \App\Models\CategoriesModel\findAll($connexion);
    // Je charge la vue addForm dans $content
    GLOBAL $content, $title;
    $title = "Alex Parker - Add a post";
    ob_start();
    include '../app/views/posts/addForm.php';
    $content = ob_get_clean();
}

function addInsertAction(PDO $connexion, array $data) 
{
    // Je demande au modèle d'ajouter le post
    include_once '../app/models/postsModel.php';
    $id = PostsModel\insertOne($connexion, $data);
    // Je redirige vers la liste des posts
    header('Location:' . BASE_PUBLIC_URL . 'posts');
    
}

function deleteAction(PDO $connexion, int $id) 
{

    // Je demande au modèle de supprimer le post
    include_once '../app/models/postsModel.php';
    $return = PostsModel\deleteOneById($connexion, $id);

    // Je redirige vers la liste des posts
    header('Location: ' . BASE_PUBLIC_URL . 'posts');

}

function editFormAction(PDO $connexion, int $id) 
{
    // Je rend les catégories accessible à la vue 
    include_once "../app/models/categoriesModel.php";
    $categories = \App\Models\CategoriesModel\findAll($connexion);
    
    // Je demande au modèle le post à afficher dans le formulaire
    include_once '../app/models/postsModel.php';
    $post = PostsModel\findOneById($connexion, $id);

    // Je charge la vue editForm dans $content
    GLOBAL $content, $title;
    $title = "Alex Parker - Edit a post";
    ob_start();
    include '../app/views/posts/editForm.php';
    $content = ob_get_clean();
}

function editUpdateAction(PDO $connexion, int $id, array $data) 
{
    // Je demande au modèle de modifier le post
    include_once '../app/models/postsModel.php';
    $return1 = PostsModel\updateOneById($connexion, $id, $data);
    // Je redirige vers la liste des posts
    header('Location: ' . BASE_PUBLIC_URL . 'posts');

}