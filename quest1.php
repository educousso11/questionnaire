<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Questionnaire</title>
        <link rel="stylesheet" href="general.css">
    </head>
    <body>
    <h1>Questionnaire</h1>
    <div class="contact">
        <form action="envoi.php" method="POST">
            <label for="genre">Genre :</label>
            <input type="radio" name="genre" value="homme" required> Homme
            <input type="radio" name="genre" value="femme" required> Femme
            <input type="radio" name="genre" value="autre" required> Autre
            <br><br>
            <label for="age">Age :</label>
            <input type="number" id="age" name="age" min="1" max="100" required>
            <br><br>
            <label for="csp">Catégorie Socio-Professionnelle :</label>
            <select id="csp" name="csp" required>
                <option value="">Sélectionnez</option>
                <option value="etudiant">Étudiant</option>
                <option value="ouvrier">Ouvrier, Artisan, Chef d'entreprise</option>
                <option value="employe">Employé</option>
                <option value="cadre">Cadre et professions intellectuelles</option>
                <option value="agriculteur">Agriculteur</option>
                <option value="commercant">Commerçant</option>
                <option value="profession_inter">Professions intermédiaire</option>
                <option value="retraite">Retraité et sans emplois</option>
                <option value="autre">Autre</option>
            </select>
            <br><br>
            <label for="travail_nocturne">Travaillez-vous de nuit ?</label>
            <select id="travail_nocturne" name="travail_nocturne" required>
                <option value="0">Non</option>
                <option value="1">Oui</option>
            </select>
            <br><br>
            <label for="trouble">Souffrez-vous d’insomnie ou de troubles du sommeil ?</label>
            <select id="trouble" name="trouble" required>
                <option value="0">Non</option>
                <option value="1">Oui</option>
            </select>
            <br><br>
            <label for="traitement">Prenez-vous un traitement qui peut potentiellement affecter votre sommeil ?</label>
            <select id="traitement" name="traitement" required>
                <option value="0">Non</option>
                <option value="1">Oui</option>
            </select>
            <br><br>
            <label for="sommeil">Ces deux dernières nuits, combien d’heures avez-vous dormi :</label>
            <select id="sommeil" name="sommeil" required>
                <option value="5">Moins de 5 heures par nuit</option>
                <option value="7">Entre 5 et 7 heures par nuit</option>
                <option value="8">Entre 7 et 9 heures par nuit</option>
                <option value="9">Plus de 9 heures par nuit</option>
            </select>
            <br><br>
            <label for="avis">Considérez-vous dormir suffisamment ?</label>
            <select id="avis" name="avis" required>
                <option value="0">Non</option>
                <option value="1">Oui</option>
            </select>
            <br><br>
            <label for="stimulant">Est-ce que vous avez bu du thé ou d’autres stimulants aujourd’hui ?</label>
            <select id="stimulant" name="stimulant" required>
                <option value="0">Non</option>
                <option value="1">Oui</option>
            </select>
            <br><br>
            <h4>Tâche décisionnelle 1 :</h4>
            <label for="test1">Vous devez choisir parmi trois options A,B ou C (choix unique), qui détermineront vos gains ainsi que ceux d'un autre individu qui, lui, ne participe pas au jeu mais se voit attribuer un gain en fonction de votre choix.
                <br>Voici les combinaisons de gains possibles, avec votre gain, le premier proposé et le second, celui de l'autre individu.
                <br>Votre choix est anonyme.
                <br> A : vous obtenez 480€ et l'autre individu 80€
                <br> B : 540€ et 280€
                <br> C : 480€ et 480€
            </label>
            <select id="test1" name="test1" required>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
            </select>
            <br><br>
            <h4>Tâche décisionnelle 2 :</h4>
            <label for="test2">Imaginez que l’on vous propose 10 euros.<br>Il s’agit d’un jeu en deux étapes, séquentiel, où les individus jouent l’un après l’autre et sont anonymes.<br>Vous êtes le premier joueur, et devez décider d’une partie de cette somme que vous répartirez avec une autre personne (par tranche de un euro). <br>Dans un deuxième temps, celle qui reçoit l’offre a le choix entre accepter ou refuser l’offre. En sachant qu’elle connaît le montant à votre disposition.  Si elle rejette votre offre, vous et la personne ne recevrez rien.<br>Quelle offre feriez-vous?<br>Il est important de répondre honnêtement, comme s’il s’agissait d’argent réel. <br>(réponse unique)</label>
            <select id="test2" name="test2" required>
                <option value="0">0€</option>
                <option value="1">1€</option>
                <option value="2">2€</option>
                <option value="3">3€</option>
                <option value="4">4€</option>
                <option value="5">5€</option>
                <option value="6">6€</option>
                <option value="7">7€</option>
                <option value="8">8€</option>
                <option value="9">9€</option>
                <option value="10">10€</option>
            </select>
            <br><br>
            <h4>Tâche décisionnelle 3 :</h4>
            <label for="test3">Maintenant, les rôles sont inversés. C’est vous qui recevez l’offre d’une personne. quelle est la somme minimale que vous êtes prêt à accepter ? (cocher une seule case)</label>
            <select id="test3" name="test3" required>
                <option value="0">0€</option>
                <option value="1">1€</option>
                <option value="2">2€</option>
                <option value="3">3€</option>
                <option value="4">4€</option>
                <option value="5">5€</option>
                <option value="6">6€</option>
                <option value="7">7€</option>
                <option value="8">8€</option>
                <option value="9">9€</option>
                <option value="10">10€</option>
            </select>
            <br><br>
            <label for="explication">Expliquez en quelques mots votre raisonnement quant aux choix effectués pour chacune des tâches.</label> 
            <textarea name="explication" id="explication" cols="30" rows="10"></textarea><br>
            <br><br>
            <input type="submit" value="Envoyer">
        </form>
    </div>