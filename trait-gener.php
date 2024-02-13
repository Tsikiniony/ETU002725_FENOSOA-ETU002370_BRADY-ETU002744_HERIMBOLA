<?php
    include 'fonction.php';

    dropMoisChoisi();

    if(isset($_POST['Janvier'])){
        $var = $_POST['Janvier'];
        insertMoisChoisi($var);
    }
    if(isset($_POST['Fevrier'])){
        $var = $_POST['Fevrier'];
        insertMoisChoisi($var);
    }
    if(isset($_POST['Mars'])){
        $var = $_POST['Mars'];
        insertMoisChoisi($var);
    }
    if(isset($_POST['Avril'])){
        $var = $_POST['Avril'];
        insertMoisChoisi($var);
    }
    if(isset($_POST['Mais'])){
        $var = $_POST['Mais'];
        insertMoisChoisi($var);
    }
    if(isset($_POST['Juin'])){
        $var = $_POST['Juin'];
        insertMoisChoisi($var);
    }
    if(isset($_POST['Juillet'])){
        $var = $_POST['Juillet'];
        insertMoisChoisi($var);
    }
    if(isset($_POST['Aout'])){
        $var = $_POST['Aout'];
        insertMoisChoisi($var);
    }
    if(isset($_POST['Septembre'])){
        $var = $_POST['Septembre'];
        insertMoisChoisi($var);
    }
    if(isset($_POST['Octobre'])){
        $var = $_POST['Octobre'];
        insertMoisChoisi($var);
    }
    if(isset($_POST['Novembre'])){
        $var = $_POST['Novembre'];
        insertMoisChoisi($var);
    }
    if(isset($_POST['Decembre'])){
        $var = $_POST['Decembre'];
        insertMoisChoisi($var);
    }
    
    header('location:regeneration.php');

?>