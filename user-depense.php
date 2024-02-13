<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;display=swap">
    <link rel="stylesheet" href="assets2/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets2/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets2/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets2/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="assets2/css/Pagination_01.css">
</head>
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
        }
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
                <h1>SAISIE DE DEPENSE</h1>
                <section class="position-relative py-4 py-xl-5">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-5">
                                    <div class="card-body d-flex flex-column align-items-center">
                                        <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-2-circle">
                                            <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24v.07H5.375v-.064c0-1.213.879-2.402 2.637-2.402 1.582 0 2.613.949 2.613 2.215 0 1.002-.6 1.667-1.287 2.43l-.096.107-1.974 2.22v.077h3.498V12H5.422v-.832l2.97-3.293c.434-.475.903-1.008.903-1.705 0-.744-.557-1.236-1.313-1.236-.843 0-1.336.615-1.336 1.306Z"></path>
                                        </svg></div>
                                        <form class="text-center" action="user-resultat.php?2" method="post">
                                            <?php
                                                include 'fonction.php';
                                                $date = $_SESSION['rep'][0];
                                                $depense = getAllDepense();
                                            ?>
                                            <div class="mb-3">
                                                <input class="form-control" type="date" name="date" value="<?php echo $date; ?>">
                                                <select class="form-control" type="text" name="depense" placeholder="Choix depense" style="margin-top: 20px;">
                                                    <?php
                                                    for($i = 0; $i < count($depense); $i++){
                                                        ?> <option value="<?php echo $depense[$i]['idDepense'] ?>"><?php echo $depense[$i]['nomDepense'] ?></option> <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="mb-3"><input class="form-control" type="number" step="0.01" name="montant" placeholder="Montant" style="margin-top: 14px;"></div>
                                            <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Voir le résultat  </button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="intro-lead-in"></div>
                <div class="intro-heading text-uppercase"></div>
                <div class="pages" style="padding-left: 0px;margin-right: 143px;padding-right: 0px;"><a href="#" class="back disabled"><span class="fa fa-arrow-circle-left"></span> back</a><a href="#" class="page" style="background: #fed136;color: white;border-color: #fed136;">1</a><a href="#" class="page active" style="border-color: #fed136;">2</a><a href="#" class="page" style="background: #fed136;border-color: #fed149;">3</a><i class="far fa-star"></i></div>
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
</body>

</html>