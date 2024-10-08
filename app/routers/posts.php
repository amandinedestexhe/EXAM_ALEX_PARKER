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
    // SUPPRIMER UN POST
    // PATTERN: index.php?posts=delete&id=xxx
    // CTRL: postsController
    // ACTION: delete
    case 'delete':
        PostsController\deleteAction($connexion, $_GET['id']);
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
        PostsController\addInsertAction($connexion, $_POST);
     break;
    // FORMULAIRE DE MODIFICATION D'UN POST
    // PATTERN: index.php?posts=editForm&id=xxx
    // CTRL: postsController
    // ACTION: editForm    
    case 'editForm':
        PostsController\editFormAction($connexion, $_GET['id']);
     break;  
    // EDITION D'UN POST : UPDATE
    // PATTERN: index.php?posts=editUpdate&id=xxx
    // CTRL: postsController
    // ACTION: editUprdate    
    case 'editUpdate':
        PostsController\editUpdateAction($connexion, $_GET['id'], $_POST);
        
     break; 
    // LISTE DES POSTS
    // PATTERN: index.php?posts=index
    // CTRL: postsController
    // ACTION: index
    default:
        PostsController\indexAction($connexion);
     break;   
endswitch;
