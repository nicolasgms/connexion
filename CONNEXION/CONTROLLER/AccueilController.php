<?php
include_once "./Model/authentification.php";
include_once "./Model/VisiteurDAO.php";

$ret = VisiteurDAO::ChargeVisiteur();
include "./View/BaseView.php";
include './View/AccueilView.php';
include './View/FooterView.php';