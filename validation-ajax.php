<?php
        $parcelId = $_POST['parcelId'];
        $weight = $_POST['weight'];
        
        if ($parcelId > $weight) {
            echo "success";
        } else {
            echo "error";
        }
?>
