<?php Login::start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Blog</title>
</head>


<body>

    <div class="m-auto" style="width: 50%" >
        <h1 class="mt-3">Login</h1>
        <form method="POST" action="">
            <label for="Nom" class="mt-2">Email</label>
            <input name="email" type="email" id="Nom" class="form-control my-2" />
            <label for="password" class="mt-2">Mot de passe</label>
            <input name="password" type="password" id="password" class="form-control my-2"/> 
            <button type="submit" class="btn btn-primary mt-2">Se connecter</button>
        </form>
    </div>
</body>