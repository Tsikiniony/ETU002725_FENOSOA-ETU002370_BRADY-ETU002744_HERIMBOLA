<?php
    include 'connexion.php';

    function getAdmin(){
        $resultats = "select * from TheAdmin where idAdmin = 1"; 
        $res = mysqli_query(connexion(), $resultats);
        $rep = mysqli_fetch_assoc($res);
        return $rep;
    }

    function getUser(){
        $resultats = "select * from TheUser where idUser = 1"; 
        $res = mysqli_query(connexion(), $resultats);
        $rep = mysqli_fetch_assoc($res);
        return $rep;
    }

    function getAllTea(){
        $resultats = "select * from TheThe"; 
        $res = mysqli_query(connexion(),$resultats);
        $reponse = array();
        while($rep = mysqli_fetch_assoc($res)){
            $reponse[] = $rep;         
        }
        return $reponse;
    }

    function getAllParcelle(){
        $resultats = "select * from TheParcelle"; 
        $res = mysqli_query(connexion(),$resultats);
        $reponse = array();
        while($rep = mysqli_fetch_assoc($res)){
            $reponse[] = $rep;         
        }
        return $reponse;
    }

    function getAllCeuilleur(){
        $resultats = "select * from TheCeuilleur"; 
        $res = mysqli_query(connexion(),$resultats);
        $reponse = array();
        while($rep = mysqli_fetch_assoc($res)){
            $reponse[] = $rep;         
        }
        return $reponse;
    }

    function getAllDepense(){
        $resultats = "select * from TheDepense"; 
        $res = mysqli_query(connexion(),$resultats);
        $reponse = array();
        while($rep = mysqli_fetch_assoc($res)){
            $reponse[] = $rep;         
        }
        return $reponse;
    }

    function getCeuilleur($id){
        $resultats = "select * from TheCeuilleur where idCeuilleur = $id"; 
        $res = mysqli_query(connexion(),$resultats);
        $rep = mysqli_fetch_assoc($res);
        return $rep;
    }

    function getLastGlobal(){
        $resultats = "select * from TheGlobal order by idTheGlobal desc limit 1"; 
        $res = mysqli_query(connexion(),$resultats);
        $rep = mysqli_fetch_assoc($res);
        return $rep;
    }

    function getAllTheMoisChoisi(){
        $resultats = "select * from TheMoisChoix"; 
        $res = mysqli_query(connexion(),$resultats);
        $reponse = array();
        while($rep = mysqli_fetch_assoc($res)){
            $reponse[] = $rep['nomMois'];         
        }
        return $reponse;
    }

    function updateTea($idThe , $nomThe, $occupation , $rendement){
        $sql = "UPDATE TheThe set occupation = '$occupation' , rendement = '$rendement' where idThe= '$idThe' " ;
        mysqli_query(connexion(),$sql);
        return true;
    }

    function updateParcelle($idTheParcelle ,$surface , $nomThe){
        $sql = "UPDATE TheParcelle set surface = '$surface' , idThe = '$nomThe' where idParcelle = '$idTheParcelle' " ;
        mysqli_query(connexion(),$sql);
        return true;
    }

    function updateCeuilleur($idTheCeuilleur , $nomCeuilleur, $genre , $dateNaissance , $salaire){
        $sql = "UPDATE TheCeuilleur set nomCeuilleur = '$nomCeuilleur' , genre = '$genre' , dateNaissance = '$dateNaissance', salaire = '$salaire' where idCeuilleur = '$idTheCeuilleur' " ;
        mysqli_query(connexion(),$sql);
        return true;
    }

    function updateDepense($idTheDepense , $nomDepense){
        $sql = "UPDATE TheDepense set nomDepense = '$nomDepense' where idDepense = '$idTheDepense' " ;
        mysqli_query(connexion(),$sql);
        return true;
    }

    function insertTea($nom , $occ , $rendement){
        $sql = "INSERT INTO TheThe (nomThe , occupation , rendement) values ('$nom' , '$occ' , '$rendement')" ;
        mysqli_query(connexion(),$sql);
        return true;
    }

    function insertParcelle($surface , $nomThe ){
        $sql = "INSERT INTO TheParcelle (surface, idThe) values ( '$surface' , '$nomThe')" ;
        mysqli_query(connexion(),$sql);
        return true;
    }

    function insertCeuilleur($nomCeuilleur , $genre , $dateNaissance , $salaire){
        $sql = "INSERT INTO TheCeuilleur (nomCeuilleur ,genre , dateNaissance , salaire) values ('$nomCeuilleur' , '$genre' , '$dateNaissance' ,'$salaire' )" ;
        mysqli_query(connexion(),$sql);
        return true;
    }

    function insertDepense($nomDepense){
        $sql = "INSERT INTO TheDepense (nomDepense) values ('$nomDepense')" ;
        mysqli_query(connexion(),$sql);
        return true;
    }

    function insertMoisChoisi($nomMois){
        $sql = "INSERT INTO TheMoisChoix values ('$nomMois')";
        mysqli_query(connexion(),$sql);
        return true;
    }

    function dropMoisChoisi(){
        $com = "truncate TheMoisChoix";
        mysqli_query(connexion(),$com);
        return true;
    }


    function deleteTea($idThe){
        $sql = "Delete from TheThe where idThe = $idThe";
        mysqli_query(connexion(),$sql);
        return true;
    }

    function deleteDepense($idTheDepense){
        $sql = "Delete from TheDepense where idDepense = $idTheDepense";
        mysqli_query(connexion(),$sql);
        return true;
    }

    function deleteParcelle($idTheParcelle){
        $sql = "Delete from TheParcelle where idParcelle = $idTheParcelle";
        mysqli_query(connexion(),$sql);
        return true;
    }

    function deleteCeuilleur($idTheCeuilleur){
        $sql = "Delete from TheCeuilleur where idCeuilleur = $idTheCeuilleur";
        mysqli_query(connexion(),$sql);
        return true;
    }
    
    function insertTheGlobal($idUser ,$poidsTotalCeuillette , $poidsRestantParcelle , $revient){
        $sql = "INSERT INTO TheGlobal (idUser ,poidsTotalCeuillette , poidsRestantParcelle , revient) values ('$idUser' , '$poidsTotalCeuillette' , '$poidsRestantParcelle' ,'$revient' )" ;
        if (connexion()->query($sql) === true) {
          return true;
        }
        return false;
    }
    
    function calculeCoutRevient($kg , $depense , $salaireCeuilleur ){
        $fois = $salaireCeuilleur* $kg;
        $a = $depense + $fois ;
        $b = $a/$kg;
        return $b;
    }
    
    function calculerPoidsRestants($poidsVoaloha , $poidsNalana){
        return $poidsVoaloha - $poidsNalana;
    }
    
    // poids zakan'ny parcelle ray
    function calculerPoid($surfaceTaloha , $poidPied , $surfacePied){
        return ($surfaceOrigine * $poidPied)/$surfacePied;
    }
    
    // raha manana kg de mitady surface total parcelle
    function calculerSurfaceParcelle($poidsTaloha , $poidPied , $surfacePied){
        return ($poidsTaloha * $poidPied)/$poidPied;
    }
    
    function retournerKiloParcelle(){
        $sql ="SELECT idParcelle , surface from TheParcelle";
        $result = connexion()->query($sql);
    
        $poidsTheParcelles = array();
    
        if ($result->num_rows >  0) {
            while ($rows = $result->fetch_assoc()) {
                $poids = ($rows["surface"]*2) /  1.8;
                $poidsTheParcelles[$rows["idParcelle"]] = $poids;
            }
        }
        return $poidsTheParcelles;
    }

      //ity le Poids restant
    function poidsParcelleAmzaoDeriniereLigne($idParcelle){
        $sql = "SELECT poidsParcelleAmzao FROM TheOffice where idParcelle = $idParcelle Order by id desc limit 1";
        $result = connexion()->query($sql);
        if ($result->num_rows > 0 ) {
          $row = $result->fetch_assoc() ;
          return $row["poidsParcelleAmzao"];
        }else{
            $row = retournerKiloParcelle();
            return $row[$idParcelle];
        }
    }
    
    function dateCeuilletteDerniereLigne($idParcelle){
        $sql = "SELECT dateCeuillette FROM TheOffice where idParcelle = $idParcelle Order by id desc limit 1";
        $res = mysqli_query(connexion(),$sql);
        $reponse = array();
        $rep = mysqli_fetch_assoc($res);
        return $rep['dateCeuillette'];
    }
    
    function comparerDateParMois($date1 , $date2){
        $dateObj1 = new DateTime($date1);
        $dateObj2 = new DateTime($date2);
    
        $mois1 = $dateObj1 ->format('n') ;
        $mois2 = $dateObj2 ->format('n') ;
    
        if ($mois1 == $mois2) {
          return 0;
        }else if($mois1 < $mois2){
          return -1;
          //ity no ilaina
        }else{
          return 1;
        }
    }
    
    function recupererNomMois($conn){
        $sql = "SELECT NomMois from TheMoisChoix";
        $result = $conn->query($sql);
        $nomMois = array();
        if ($result->num_rows >0) {
          //eto izy mirecupere anle nom de mois
          while ($row = $result->fetch_assoc()) {
            $nomMois[] = $row["nomMois"] ;
          }
        }else{
          echo "tsisy e";
        }
        return $nomMois;
      }
    
      function makaMoisDate($date){
        $dateObj = new DateTime($date);
        $mois = $dateObj -> format('n');
        return $mois;
      }
    
      function makaDateFinChoisi($moisSelectionne){
        $dateFin = array() ;
        //ity le mamoiditra anle date fin isaky ny moisSelectionne
        foreach ($moisSelectionne as $mois) {
          $sql = "SELECT dateFin FROM TheMois where nomMois = '$mois'" ;
          $result = connexion()->query($sql);
          if ($result->num_rows > 0) {
            //maka anle dateFin
            $row = $result->fetch_assoc();
            $dateFin[] = $row["dateFin"];
          }
        }
        return $dateFin;
      }
    
    
      //
    
      function comapareDateAmTableauDate($date , $dateTableau){
        $dateTableauVaovao = array();
        $moisDuDate = makaMoisDate($date);
        for ($i=0; $i <count($dateTableau) ; $i++) {
          if ($moisDuDate >= makaMoisDate($dateTableau[$i])) {
            $dateTableauVaovao = $dateTableau[$i];
          }
        }
        return $dateTableauVaovao;
      }
          //                                                                                                                                   le mois selectionne io le mois mbola mois pure , tableau io
      function insertTheOffice ($idParcelle , $idUser , $dateCeuillette , $idTheCeuilleur , $dateDepense , $nomDepense , $Montant, $kgNalainy , $moisSelectionne){
          $dateMoisRehetra = makaDateFinChoisi($moisSelectionne);
    
          $moisDateCeuillette = makaMoisDate($dateCeuillette);
           $poidOrigine = retournerKiloParcelle();
             $a = $poidOrigine[$idParcelle];
             $c = $a-$kgNalainy;
    
           $poidsParcelleTaloha = poidsParcelleAmzaoDeriniereLigne($idParcelle);
           if($poidsParcelleTaloha == null){
               $poidsParcelleTaloha =  $a;
           }
    
           $ceuilleur = getCeuilleur($idTheCeuilleur);
           $karamany = $ceuilleur['salaire'] * $kgNalainy;
    
             $dateCeuilletteLigneFarany = dateCeuilletteDerniereLigne($idParcelle);
             $dateIlainaIhany = comapareDateAmTableauDate($dateCeuilletteLigneFarany , $dateMoisRehetra);
             
             foreach($dateIlainaIhany as $datyy){
                echo $datyy;
             }
    
           if($poidsParcelleTaloha == null){
               $poidsParcelleTaloha =  $a;
           }
             $ppadl = poidsParcelleAmzaoDeriniereLigne($idParcelle);
             $ppamzao = $ppadl - $kgNalainy;
    
             $varAlea = comparerDateParMois($dateCeuillette , $dateCeuilletteLigneFarany) ;
             if(isset($dateIlainaIhany[1])){
                $dateII = $dateIlainaIhany[1];
             }
             else{
                $dateII = $dateIlainaIhany[0];
             }
             if($dateCeuillette >= $dateII){
               $sql = "INSERT INTO TheOffice (idUser , dateCeuillette , idCeuilleur , idParcelle , poidsParcelleTaloha , poidsParcelleAmzao , poidCeuillit , dateDepense, idDepense , Montant) values ('$idUser' , '$dateCeuillette' , '$idTheCeuilleur' , '$idParcelle' , '$a' , '$c' , '$kgNalainy' , '$dateDepense' , '$nomDepense' , '$Montant')" ;
               if (connexion()->query($sql) === true) {
                   insertTheGlobal($idUser, $kgNalainy, $c, calculeCoutRevient($kgNalainy , $Montant , $karamany ));
                 return true;
               }
             }else if($dateCeuillette >= new dateTime($dateCeuilletteLigneFarany) && $dateCeuillette < new dateTime ($dateIlainaIhany[1]) ){
               $sql = "INSERT INTO TheOffice (idUser , dateCeuillette , idCeuilleur , idParcelle , poidsParcelleTaloha , poidsParcelleAmzao , poidCeuillit , dateDepense, idDepense , Montant) values ('$idUser' , '$dateCeuillette' , '$idTheCeuilleur' , '$idParcelle' , '$ppadl' , '$ppamzao' , '$kgNalainy' , '$dateDepense' , '$nomDepense' , '$Montant')" ;
               if (connexion()->query($sql) === true) {
                   insertTheGlobal($idUser, $kgNalainy, $ppamzao, calculeCoutRevient($kgNalainy , $Montant , $karamany ));
                 return true;
               }
             }else{
               return false;
             }
       }
?>