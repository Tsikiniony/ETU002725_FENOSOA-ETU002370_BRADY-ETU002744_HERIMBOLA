<?php
    session_start();

    if(isset($_GET['1'])){
        $_SESSION['rep'] = array();

        $date = $_POST['date'];
        $cueilleur = $_POST['cueilleur'];
        $parcelle = $_POST['parcelle'];
        $poids = $_POST['poids'];

        $_SESSION['rep'][] = $date;
        $_SESSION['rep'][] = $cueilleur;
        $_SESSION['rep'][] = $parcelle;
        $_SESSION['rep'][] = $poids;

        header('location : user-depense.php');
    }

    if(isset($_GET['2'])){
        //include 'fonction.php';

        $date = $_POST['date'];
        $depense = $_POST['depense'];
        $montant = $_POST['montant'];

        $_SESSION['rep'][] = $date;
        $_SESSION['rep'][] = $depense;
        $_SESSION['rep'][] = $montant;

       // insertTheOffice($_SESSION['rep'][2], $_SESSION['user'], $_SESSION['rep'][0], $_SESSION['rep'][1], $_SESSION['rep'][4], $_SESSION['rep'][5], $_SESSION['rep'][6] , $_SESSION['rep'][3]);

        header('location : resultat.php');
    }
?>