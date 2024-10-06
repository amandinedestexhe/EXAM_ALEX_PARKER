<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifiez si le fichier a été uploadé sans erreur
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = $_FILES['image']['name'];
        $fileSize = $_FILES['image']['size'];
        $fileType = $_FILES['image']['type'];
        $fileNameParts = pathinfo($fileName);
        $fileExtension = strtolower($fileNameParts['extension']);

        // Vérifiez les extensions autorisées
        $allowedfileExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        if (in_array($fileExtension, $allowedfileExtensions)) {
            // Vérifiez la taille du fichier (max 2 Mo)
            if ($fileSize < 2000000) {
                // Définir le dossier de destination
                $uploadFileDir = './uploads/';
                $dest_path = $uploadFileDir . $fileName;

                // Créez le dossier si non existant
                if (!is_dir($uploadFileDir)) {
                    mkdir($uploadFileDir, 0755, true);
                }

                // Déplacez le fichier vers le dossier de destination
                if (move_uploaded_file($fileTmpPath, $dest_path)) {
                    echo "Le fichier a été téléchargé avec succès : $fileName";
                } else {
                    echo "Erreur lors du téléchargement du fichier.";
                }
            } else {
                echo "Erreur : Le fichier est trop gros. Taille maximale autorisée : 2 Mo.";
            }
        } else {
            echo "Erreur : Type de fichier non autorisé. Seules les images JPG, PNG et GIF sont autorisées.";
        }
    } else {
        echo "Erreur lors de l'upload du fichier.";
    }
}
?>