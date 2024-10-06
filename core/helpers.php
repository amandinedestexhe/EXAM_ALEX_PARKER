<?php

namespace Core\Helpers;

function slugify(string $string): string {
    // Convertir en minuscules
    $string = mb_strtolower($string, 'UTF-8');
    
    // Remplacer les caractères accentués par leurs équivalents non accentués
    $string = str_replace(
        ['à', 'á', 'â', 'ä', 'ã', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'ö', 'õ', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ'],
        ['a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y'],
        $string
    );
    
    // Remplacer les caractères non alphanumériques (sauf les tirets) par des tirets
    $string = preg_replace('/[^a-z0-9]+/u', '-', $string);
    
    // Supprimer les tirets en début et fin de chaîne
    $string = trim($string, '-');
    
    return $string;
}

function date_formater(string $date, string $format = 'D d M Y') :string {
    return date_format(date_create($date), $format);
}


function truncate(string $string, int $lg_max = 100): string 
{
    if (strlen($string) > $lg_max) {
        $string = substr($string, 0, $lg_max);
        $last_space = strrpos($string, ' ');
        
        if ($last_space !== false) {
            return substr($string, 0, $last_space) . '...';
        }
        
        return $string . '...'; // Si aucun espace trouvé, ajouter les "..."
    }

    return $string; // Si la chaîne est déjà plus petite que $lg_max
}