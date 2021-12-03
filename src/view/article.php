<?php $values = ListArticle::start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Blog</title>
</head>

<body>
    

    <div class="m-auto" style="width: 90%" >
    
        <!-- ARTICLE -->
        <article>
        <img src="..." alt="" class="img-fluid">
        <div class="post-content">
            <h1><?= $values["dataArticle"][0]["titre"]?></h3>
            <ul class="post-meta list-inline d-flex">
                <li class="text-muted me-4">
                    <a href="#">Écrit par : <?= $values["dataArticle"][0]["auteur"]?></a>
                </li>
                <li class="text-muted">
                <a href="#"><?= $values["dataArticle"][0]["date"]?></a>
                </li>
            </ul> 
            
            <!-- SI LE USER EST LA PERSONNE QUI A ECRIT L'ARTICLE OU QUE C'EST UN ADMIN -->
            <div class="mb-3">
            <button class="btn btn-warning">modifier l'article</button>
            <button class="btn btn-danger">supprimer l'article</button>
            </div>
            <!-- -->
            
            <p> <?= $values["dataArticle"][0]["contenu"]?> </p>
        </div>
        </article>
        <section>
        <h2>Commentaires</h2>

        <!-- AJOUTER COMMENTAIRE -->
        <div class="card">
            <form class="card-body" method="POST">
            <label for="comment" class="mb-2">Écrire votre commentaire ici :</label>
            <textarea name="contenu" id="comment" type="text" rows="3" class="form-control mb-2"></textarea>
            <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>

        <!-- COMMENTAIRES A BOUCLER -->
        <?php foreach($values["dataCommentaire"] as $value) : ?>
        <div>
            <div class="card my-3">
            <div class="card-body">
                <p><?= $value["content_commentaire"] ?></p>
                <p class="text-muted">Par : <?=$value["auteur_commentaire"]?></p>
                <p class="text-muted">Le : <?=$value["date_commentaire"]?></p>
                
                <!-- SI LE USER EST LA PERSONNE QUI A ECRIT LE COMMENTAIRE OU QUE C'EST UN ADMIN -->
                <div class="mb-3">
                <button class="btn btn-warning">modifier</button>
                <button class="btn btn-danger">supprimer</button>
                </div>
                <!-- -->

            </div>
            </div>
        </div>
        <?php endforeach ?>
        </section>
    </div>

</body>