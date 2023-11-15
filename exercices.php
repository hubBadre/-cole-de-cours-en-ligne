<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liens vers des fichiers PDF</title>
</head>
<body>

    <h1>Liens vers des fichiers PDF</h1>

    <?php
    // Répertoire où se trouvent vos fichiers PDF
    $repertoirePDF = "chemin_vers_vos_pdfs/";

    // Liste des fichiers PDF dans le répertoire
    $fichiersPDF = scandir($repertoirePDF);

    // Boucle pour créer un lien pour chaque fichier PDF
    foreach ($fichiersPDF as $fichier) {
        // Vérifier si le fichier est un fichier PDF
        if (pathinfo($fichier, PATHINFO_EXTENSION) == 'pdf') {
            // Générer le lien
            $lienPDF = $repertoirePDF . $fichier;
            echo '<p><a href="' . $lienPDF . '" target="_blank">' . $fichier . '</a></p>';
        }
    }
    ?>

</body>
</html>
