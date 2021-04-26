<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();


if($_POST){
    setcookie("age", $_POST['age'], time() + 172800);
    $_SESSION["prenom"] = $_POST["prenom"];
    $_SESSION["nom"] = $_POST["nom"];
        if(key_exists("age", $_COOKIE) && key_exists("prenom", $_SESSION) && key_exists("nom", $_SESSION)){
            echo "Bienvenue {$_SESSION['prenom']} {$_SESSION['nom']} ! <br>";
            ?>
              <a href="./disconnect.php"><button>Se déconnecter</button></a><br>  
            <?php
            echo "Vous avez {$_COOKIE['age']} ans";
        }     
        else {echo "Veuillez vous connecter avec le formulaire svp !";
        }
}
else { 
?>
<p>Veuillez vous connecter</p>
<form method="post">
    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" id="prenom" placeholder="Votre prénom">
    <br>
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom" placeholder="Votre Nom">
    <br>
    <label for="age">Âge</label>
    <input type="number" name="age" id="age" placeholder="Votre Âge">
    <br>
    <button type="submit" style="border-radius: 5px;">Se connecter</button>
</form>
<?php 
}
?>

</body>
</html>