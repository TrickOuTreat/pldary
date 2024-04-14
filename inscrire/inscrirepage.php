<?php
session_start();?>
<!DOCTYPE html>
<html lang="fr">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscrire</title>
    <style>

    </style>
</head>
<body>
    <fieldset class="border border-2 border-gray p-2 my-4 mx-auto bg-light"style="width: 500px" >
        <legend class="w-auto fs-1">s'inscrire</legend>
        <form action="virefier.php" method="post" >
        <div class="mb-3">
        <label  class="form-label">nom :</label>
        <input type="text" name="nom" class="form-control" placeholder="nom" required>
        </div>
        <div class="mb-3">
        <label  class="form-label">prenom :</label>
        <input type="text" name="prenom" class="form-control" placeholder="prenom" required>
        </div>
        <div class="mb-3">
        <label  class="form-label">telephone :</label>
        <input type="text" name="telephone"  class="form-control" placeholder="telephone" required>
        <div  class="form-text text-danger"><?php 
        if(isset($_SESSION['error1'])){
            echo $_SESSION['error1'];
            unset($_SESSION['error1']);
        }else{
            print(' ');
        }
        ?></div>
        </div>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address :</label>
        <input type="email" name="email" class="form-control" placeholder="Email address" required>
        <div class="form-text">Nous ne partagerons jamais votre adresse e-mail avec qui que ce soit.</div>
        </div>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">mot de passe :</label>
        <input type="password" name="password" class="form-control" placeholder="mot de passe"required>
        <div  class="form-text">Nous ne partagerons jamais votre mot de passe avec qui que ce soit.</div>
        </div>
        <div class="mb-3 d-grid gap-2 mx-3" >
            <button type="submit" name="inscrire" value="inscrire" class="btn btn-outline-success btn-lg">Créer un compte</button>

        </div>
        </form>
    </fieldset>
    
</body>
</html>