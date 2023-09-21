<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <header>
        <?php include('header.php') ?>
    </header>
    <main>
        <?php include('oeuvres.php') ?>

        <div id="liste-oeuvres">
            <?php foreach ($oeuvres as $oeuvre) : ?>
            <article class="oeuvre">
                <!-- je selectionne l'id correspond à l'image pour l'utiliser dans ma page de détails OEUVRE.PHP avec la méthode GET-->
                <a href="oeuvre.php?id=<?php echo $oeuvre['id'] ?>">
                    <img src="<?php echo $oeuvre['img'] ?>" alt="<?php echo $oeuvre['nom'] ?>">
                    <h2><?php echo $oeuvre['nom'] ?></h2>
                    <p class="description"><?php echo $oeuvre['auteur'] ?></p>
                </a>
            </article>
            <?php endforeach ?>
        </div>
    </main>
    <footer>
    <?php include('footer.php') ?>
    </footer>
</body>
</html>