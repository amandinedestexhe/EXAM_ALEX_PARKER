<?php

namespace App\Models\CategoriesModel;

use \PDO;

function findAll(PDO $connexion) : array
{
    $sql = "SELECT c.name AS category_name, COUNT(p.id) AS post_count
            FROM categories c
            LEFT JOIN posts p ON c.id = p.category_id
            GROUP BY c.name
            ORDER BY c.name ASC;";
            
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}