<?php

use \App\Controllers\PostsController;

include_once '../app/controllers/postsController.php';

switch ($_GET['posts']):
    // DETAIL D'UN POST
    // PATTERN: index.php?posts=show&id=xxx
    // CTRL: postsController
    // ACTION: show
    case 'show':
        PostsController\showAction($connexion, $_GET['id']);
     break;
    case 'destroy':
        PostsController\destroyAction($connexion, $_GET['id']);
    break;
    // FORMULAIRE D'AJOUT D'UN POST
    // PATTERN: index.php?posts=addForm
    // CTRL: postsController
    // ACTION: addForm
    case 'addForm':
        PostsController\addFormAction($connexion);
    break;
    // AJOUT D'UN POST: INSERT
    // PATTERN: index.php?posts=addInsert
    // CTRL: postsController
    // ACTION: addInsert
    case 'addInsert':
        PostsController\addInsertAction($connexion, [
            'titre'    => $_POST['title'],
            'text'     => $_POST['text'],
            'quote'    => $_POST['quote'],
            'category' => $_POST['category_id'],
        ]);
    break;    
    case 'editForm':
        PostsController\editFormAction($connexion, $_GET['id']);
    break;    
    case 'edit':
        PostsController\editAction($connexion, [$_GET['id'], $_POST]
        );
    break; 
    // LISTE DES POSTS
    // PATTERN: index.php?posts=index
    // CTRL: postsController
    // ACTION: index
    default:
        PostsController\indexAction($connexion);
    break;   
endswitch;
