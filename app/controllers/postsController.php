<?php
 

namespace App\Controllers\PostsController;

use PDO, \App\Models\PostsModel;

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
