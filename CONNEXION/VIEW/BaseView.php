<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSB Visite </title>
    <link rel="icon" href="./images/gsb.png" type="imahe/x-icon"/>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./image/doctors/doctors-styles.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">
    <a href="./?action=Accueil" class="logo"><img src="./images/gsb.png">
    Gestion de visites : <?= AuthentificationDAO::getLastNLoggedOn()."\n".AuthentificationDAO::getNameLoggedOn()?></a>
 
    <nav class="navbar">
        <a href="./?action=Accueil">Accueil</a>
        <a href="./?action=NewRapport">Rédiger un rapport</a>
        <a href="./?action=ListeRapport">Liste des rapports</a>
        <a href="./?action=ListeMedecin">Liste des medecins</a>
        <a href="./?action=profil">Profil</a>

        <a href="./?action=deconnexion"><i class="fas fa-sign-out-alt"></i></a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>


<!-- header section ends -->
<br><br><br><br><br><br><br>
<!-- services section starts  -->