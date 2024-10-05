<?php

// ROUTE DES POSTS
//PATTERN: /posts
if(isset($_GET['posts'])) :
    include_once '../app/routers/posts.php';
    

// ROUTE PAR DÉFAUT 
// PATTERN: /
// CTRL: postsController
// ACTION: home
// TITLE: Alex Parker - Blog

else:
    include_once "../app/controllers/pagesController.php";
    \App\Controllers\PagesController\homeAction($connexion);
endif;
