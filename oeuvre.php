<?php
include('oeuvres.php');
// je vérifie si l'id est passé en tant que paramètre GET
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // je vérifie si l'ID existe dans le tableau des oeuvres et je crée mes variables pour les appelé dans mon code html
    if(isset($oeuvres[$id])) {
        $photo = $oeuvres[$id];
        $img = $photo['img'];
        $lien = $photo['lien'];
        $nom = $photo['nom'];
        $auteur = $photo['auteur'];
        $description = $photo['description'];
    }
}
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>

<body>
    <header>
        <?php include('header.php') ?>
    </header>
    <main>
        <article id="detail-oeuvre">
            <div id="img-oeuvre">
                <img src="<?php echo $img ?>" alt="<?php echo $nom ?>">
            </div>
            <div id="contenu-oeuvre">
                <h1>
                    <?php echo $nom ?>
                </h1>
                <p class="description">
                    <?php echo $auteur ?>
                </p>
                <p class="description-complete">
                    <?php echo $description ?>
                </p>
            </div>
        </article>
    </main>
    <footer>
        <?php include('footer.php') ?>
    </footer>
</body>

</html>