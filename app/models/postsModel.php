<?php

namespace App\Models\PostsModel;

use PDO;

function findAll(PDO $connexion): array
{

    $sql = "SELECT *
            FROM posts
            ORDER BY created_at DESC
            LIMIT 10;";

    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
