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
function findOneById(PDO $connexion, $id): array
{
    $sql = "SELECT*
           FROM posts
           WHERE id = :id;";

    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();

    return $rs->fetch(PDO::FETCH_ASSOC);
}
