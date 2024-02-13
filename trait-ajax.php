<?php
    include 'fonction.php';
    $parcelle = $_POST['parcelId'];
    $allParcelle = poidsParcelleAmzaoDeriniereLigne($parcelle);
    echo $allParcelle;
?>