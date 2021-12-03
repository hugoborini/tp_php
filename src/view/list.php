<?php $values = index::start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Blog</title>
</head>

<body style="margin-top: 150px">
    <?php foreach($values["dataArticle"] as $value) : ?>
        <div class="card mx-4 my-3">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $value["titre"] ?></h5>
                <h6 class="card-subtitle mb-2 text-muted">Écrit par :<?= $value["auteur"] ?></h6>
                <h6 class="card-subtitle mb-2 text-muted">Le : <?= $value["date"] ?></h6>
                <a href="/Article-<?=$value["id_article"]?>" class="btn btn-primary">Voir l'article</a>
            </div>
        </div>
    <?php endforeach ?>
</body>
