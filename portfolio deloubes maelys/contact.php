<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Contact</title>
</head>

<body>

<header>
        <h1>Contact</h1>
    </header>

    <nav class="navigation">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="chartegraphique.php">Charte graphique</a></li>
            <li><a href="portfolio.html">Projets</a></li>
            <li><a href="contact.php">Contact</a></li>

    </nav>


    <br>
    <br>
    <br>
    <br>
    <br>

    <h2>Contactez moi si besoin !</h2>

    <form action="connexion.php" method="post" id="myForm">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" required />
        <br>
        <label for="prenom">Prenom</label>
        <input type="text" id="prenom" name="prenom" required />
        <br>
        <label for="email">Email</label>
        <input type="text" id="email" name="email" required />
        <br>
        <label for="sujet">Sujet</label>
        <select id="sujet" name="sujet">
            <option value="Renseignements">Renseignement(s)</option>
            <option value="Recrutement">Recrutement</option>
            <option value="Autre">Autre</option>

        </select>
        <br>
        <label for="message">Message :</label>
        <textarea id="message" name="message" rows="5"></textarea>
        <br>
        <button type="submit" onclick="confirmationEnvoi(event)">Envoyer</button>
    </form>
    <div class="suppressionid">
    <a href="supprimer.php?id=2">Supprimer données</a>
    </div>

    <script src="main.js"></script>

    <?php include ('footer.php')
    ?>

</body>

</html>