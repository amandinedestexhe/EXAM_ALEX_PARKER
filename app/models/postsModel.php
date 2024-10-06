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
    $sql = "SELECT*, posts.id AS postID
           FROM posts 
           JOIN categories ON categories.id = category_id
           WHERE posts.id = :id;";

    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();

    return $rs->fetch(PDO::FETCH_ASSOC);
}


function insertOne(PDO $connexion, array $data) :int 
{
    $sql = "INSERT INTO posts
            SET title = :title,
                text  = :text,
                quote = :quote,
                category_id = :category_id,
                created_at = NOW();";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':title', $data['title'], PDO::PARAM_STR);
    $rs->bindValue(':text', $data['text'], PDO::PARAM_STR);
    $rs->bindValue(':quote', $data['quote'], PDO::PARAM_STR);
    $rs->bindValue(':category_id', $data['category_id'], PDO::PARAM_INT);
    $rs->execute();
    return $connexion->lastInsertId();

}

function deleteOneById(PDO $connexion, int $id) : bool
{

    $sql = "DELETE
            FROM posts
            WHERE id = :id;";

    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    return $rs->execute();
    
}