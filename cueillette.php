<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ceuillette</title>
    <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;display=swap">
    <link rel="stylesheet" href="assets2/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets2/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets2/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets2/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="assets2/css/Pagination_01.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<?php
    include 'fonction.php';
    $cueilleur = getAllCeuilleur();
    $parcelle = getAllParcelle();
?>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    <nav class="navbar navbar-expand-lg fixed-top bg-dark navbar-dark" id="mainNav" style="background: linear-gradient(#079d04, rgb(8,158,5) 0%, rgb(26,165,23) 8%, rgb(27,165,24) 96%, white 100%), var(--bs-body-bg);--bs-body-bg: rgb(7,157,4);--bs-primary: rgb(7,157,4);--bs-primary-rgb: 7,157,4;">
        <div class="container"><a class="navbar-brand" href="#page-top">Bon thé</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto text-uppercase">
                    <li class="nav-item"><a class="nav-link" href="accueil.html">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php">Deconnexion</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('assets2/img/fond.jpg');">
        <div class="container">
            <div class="intro-text" style="padding-top: 161px;margin-bottom: -4px;border-color: #fed136;">
                <h1>SAISIE DE CUEILLETTE</h1>
                <section class="position-relative py-4 py-xl-5">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-5">
                                    <div class="card-body d-flex flex-column align-items-center">
                                        <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-1-circle">
                                                <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z"></path>
                                            </svg></div>
                                        <form class="text-center" action="user-depense.php?1" method="post">
                                            <div class="mb-3">
                                                <input class="form-control" type="date" name="date" placeholder="Date">
                                                <select class="form-control" type="text" name="cueilleur" placeholder="Choix cueilleur" style="margin-top: 20px;">
                                                    <?php
                                                    for($i = 0; $i < count($cueilleur); $i++){
                                                        ?> <option value="<?php echo $cueilleur[$i]['idCeuilleur'] ?>"><?php echo $cueilleur[$i]['nomCeuilleur'] ?></option> <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <select class="form-control" type="text" id="parcelle" name="parcelle" placeholder="Choix parcelle">
                                                    <option value="">Choix de parcelle</option>
                                                    <?php
                                                    for($j = 0; $j < count($parcelle); $j++){
                                                        ?><option value="<?php echo $parcelle[$j]['idParcelle'] ?>"><?php echo $parcelle[$j]['idParcelle'] ?></option><?php
                                                    }
                                                    ?>
                                                </select>
                                                <input class="form-control" type="number" step="0.01" id="poids" name="poids" placeholder="Poids cueilli" style="margin-top: 14px;">
                                                <span id="rep" style="color: red;"></span>
                                            </div>
                                            <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Suivant</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="intro-lead-in"></div>
                <div class="intro-heading text-uppercase"></div>
                <div class="pages" style="padding-left: 0px;margin-right: 143px;padding-right: 0px;"><a href="#" class="back disabled"><span class="fa fa-arrow-circle-left"></span> back</a><a href="#" class="page active" style="color: #fed136;border-color: #fed136;">1</a><a href="#" class="page" style="background: #fed136;border-color: #fed136;">2</a><a href="#" class="page" style="background: #fed136;border-color: #fed149;">3</a><i class="far fa-star"></i></div>
            </div>
        </div>
    </header>
    <footer style="margin-top: 1px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xxl-12"><span class="copyright" style="font-weight: bold;">ETU002725_FENOSOA-ETU002370_BRADY-ETU002744_HERIMBOLA</span></div>
            </div>
        </div>
    </footer>
    <script src="assets2/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets2/js/agency.js"></script>

    <script>
        var weightValue = null;
        var parcelle = null;
        $(document).ready(function() {
        $('#parcelle').on('focus input', function() {
            var parcelId = $(this).val();
            
            // Send the selected parcel ID to the server for processing
            $.ajax({
                type: 'POST',
                url: 'trait-ajax.php',
                data: {parcelId: parcelId},
                success: function(response) {
                    parcelle = response; 
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error(textStatus, errorThrown);
                }
            });
        });
    
        // Existing weight validation code
        $('#poids').on('keyup', function() {
            var weightValue = parseFloat($(this).val());
            
            $('#rep').text('');
            
                $.ajax({
                    type: 'POST',
                    url: 'validation-ajax.php',
                    data: {weight: weightValue, parcelId: parcelle},
                    success: function(response) {
                        if(response === "error"){
                            $('#rep').text("Quantite disponible = "+ parcelle);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error(textStatus, errorThrown);
                    }
                });
        });
    });
    
    </script>
</body>

</html>