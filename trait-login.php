<?php
    include 'fonction.php';

    if(isset($_GET['admin'])){
        $admin = getAdmin();
        $login = $_POST['login'];
        $mdp = $_POST['mdp'];
        if($login==$admin['nomAdmin'] && $mdp==$admin['mdpAdmin']){
            header('location: variete.php');
        }
        else{
            header('location: login-admin.php?erreur');
        }
    }
    if(isset($_GET['user'])){
        session_start();
        $user = getUser();
        $login = $_POST['login'];
        $mdp = $_POST['mdp'];
        if($login == $user['nomUser'] && $mdp == $user['mdpUser']){
            $_SESSION['user'] = $_POST['idUser'];
            header('location: accueil.html');
        }
        else{
            header('location: index.php?erreur');
        }
    }
?>