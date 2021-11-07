<?php
function controleurPrincipal($action) {
    $lesActions = array();
    //principal et fiche
    $lesActions["defaut"] = "ConnexionController.php";

    //controller session (deconnexion, connexion, inscription et profil)
    $lesActions["Accueil"] = "AccueilController.php";
    $lesActions["connexion"] = "ConnexionController.php";
    $lesActions["deconnexion"] = "DeconnexionController.php";
    $lesActions["profil"] = "ProfilController.php";
    $lesActions["p"] = "p.php";

    //controller rapport(création, modification, recherche)
    $lesActions["NewRapport"] = "NewRapportController.php";
    $lesActions["NewRapportMedicament"] = "NewRapportMedicament.php";
    $lesActions["ListeRapport"] = "ListeRapportController.php";
    $lesActions["FicheRapport"] = "FicheRapportController.php";
    $lesActions["SearchRapport"] = "SearchRapportController.php";
    $lesActions["UpdateRapport"] = "UpdateRapportController.php";
    $lesActions["UpdateRapportConfirme"] = "UpdateRapportConfirmeController.php";


    //controller medecin (vu, fiche, modification)
    $lesActions["ListeMedecin"] = "ListeMedecinController.php";
    $lesActions["FicheMedecin"] = "FicheMedecinController.php";
    $lesActions["UpdateMedecin"] = "UpdateMedecinController.php";
    $lesActions["Update2"] = "Update2.php";
    $lesActions["SearchMedecin"] = "SearchMedecinController.php";
    $lesActions["RapportsMedecin"] = "RapportsMedecinController.php";
    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}

?>
