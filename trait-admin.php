<?php
    include 'fonction.php';

    if(isset($_GET['the'])){
        if(isset($_POST['id'])){
            $id = $_POST['id'];
        }
        $nom = $_POST['nom'];
        $occupation = $_POST['occupation'];
        $rendement = $_POST['rendement'];

        if(isset($_POST['modif'])){
            updateTea($id, $nom, $occupation, $rendement);
            header('location: variete.php');
        }
        if(isset($_POST['delete'])){
            deleteTea($id);
            header('location: variete.php');
        }
        if(isset($_POST['insert'])){
            insertTea($nom, $occupation, $rendement);
            header('location: variete.php');
        }
    }

    if(isset($_GET['parcelle'])){
        if(isset($_POST['id'])){
            $id = $_POST['id'];
        }
        $nom = $_POST['nom'];
        $surface = $_POST['surface'];

        if(isset($_POST['modif'])){
            updateParcelle($id, $surface, $nom);
            header('location: parcelle.php');
        }
        if(isset($_POST['delete'])){
            deleteParcelle($id);
            header('location: parcelle.php');
        }
        if(isset($_POST['insert'])){
            insertParcelle($surface, $nom);
            header('location: parcelle.php');
        }
    }

    if(isset($_GET['ceuilleur'])){
        if(isset($_POST['id'])){
            $id = $_POST['id'];
        }
        $nom = $_POST['nom'];
        $genre = $_POST['genre'];
        $dtn = $_POST['dtn'];
        $salaire = $_POST['salaire'];

        if(isset($_POST['modif'])){
            updateCeuilleur($id, $nom, $genre, $dtn, $salaire);
            header('location: ceuilleur.php');
        }
        if(isset($_POST['delete'])){
            deleteCeuilleur($id);
            header('location: ceuilleur.php');
        }
        if(isset($_POST['insert'])){
            insertCeuilleur($nom, $genre, $dtn, $salaire);
            header('location: ceuilleur.php');
        }
    }

    if(isset($_GET['depense'])){
        if(isset($_POST['id'])){
            $id = $_POST['id'];
        }
        $nom = $_POST['nom'];

        if(isset($_POST['modif'])){
            updateDepense($id, $nom);
            header('location: depense.php');
        }
        if(isset($_POST['delete'])){
            deleteDepense($id);
            header('location: depense.php');
        }
        if(isset($_POST['insert'])){
            insertDepense($nom);
            header('location: depense.php');
        }
    }

?>