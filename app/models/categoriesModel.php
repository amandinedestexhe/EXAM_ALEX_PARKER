<?php

namespace App\Models\CategoriesModel;

use \PDO;

function findAllPostByCategories(PDO $connexion) : array
{
    $sql = "SELECT COUNT(c.id) AS categories_count, c.name
            FROM categories c
            LEFT JOIN posts p ON c.id = p.category_id
            GROUP BY c.id, c.name
            ORDER BY c.name ASC;";

    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

function findAll(PDO $connexion) : array
{
    $sql = "SELECT *
            FROM categories
            ORDER BY name ASC;";

    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

