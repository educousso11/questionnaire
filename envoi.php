<?php
session_start();
require_once("connexion_base.php");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Questionnaire</title>
        <link rel="stylesheet" href="general.css">
    </head>
    <body>
    

    <h1>Merci pour votre participation</h1>
    <p>Vos données ont bien été collectées.
    <br>Vos réponses nous aideront pour la rédaction de notre mémoire de fin d'année portant sur le lien entre la prise de décision et le manque de sommeil.
    <br>Les données collectées ne seront pas partagées, mais utilisées uniquement au titre de notre étude.
    </p>

    <?php 
    $genre = isset($_POST['genre']) ? filter_var($_POST['genre'], FILTER_SANITIZE_STRING) : "";
    $age = isset($_POST['age']) ? filter_var($_POST['age'], FILTER_VALIDATE_INT) : NULL;
    $csp = isset($_POST['csp']) ? filter_var($_POST['csp'], FILTER_SANITIZE_STRING) : "";
    $travail_nocturne = isset($_POST['travail_nocturne']) ? filter_var($_POST['travail_nocturne'], FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) : false;
    $trouble=isset($_POST['trouble']) ? filter_var($_POST['trouble'], FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) : false;
    $traitement=isset($_POST['traitement']) ? filter_var($_POST['traitement'], FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) : false;
    $sommeil = isset($_POST['sommeil']) ? filter_var($_POST['sommeil'], FILTER_SANITIZE_STRING) : "";
    $avis=isset($_POST['avis']) ? filter_var($_POST['avis'], FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) : false;
    $stimulant = isset($_POST['stimulant']) ? filter_var($_POST['stimulant'], FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) : false;
    $test1 = isset($_POST['test1']) ? filter_var($_POST['test1'], FILTER_SANITIZE_STRING) : "";
    $test2 = isset($_POST['test2']) ? filter_var($_POST['test2'], FILTER_SANITIZE_STRING) : "";
    $test3 = isset($_POST['test3']) ? filter_var($_POST['test3'], FILTER_SANITIZE_STRING) : "";
    $explication = isset($_POST['explication']) ? filter_var($_POST['explication'], FILTER_SANITIZE_STRING) : "";

    $travail_nocturne = $travail_nocturne ? 1 : 0;
    $trouble = $trouble ? 1 : 0;
    $traitement = $traitement ? 1 : 0;
    $avis = $avis ? 1 : 0;
    $stimulant = $stimulant ? 1 : 0;

    $requete="INSERT INTO reponse (genre, age, csp, travail_nocturne, trouble, traitement, sommeil, avis, stimulant, test1, test2, test3, explication) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $reponse=$pdo->prepare($requete);
    $reponse->execute(array($genre, $age, $csp, $travail_nocturne, $trouble, $traitement, $sommeil, $avis, $stimulant, $test1, $test2, $test3, $explication));
    ?>
    </body>
</html>



