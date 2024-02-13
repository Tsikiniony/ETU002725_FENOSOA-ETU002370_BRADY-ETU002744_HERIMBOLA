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
    include 'fonction.php';

    if(isset($_GET['2'])){
        $date = $_POST['date'];
        $depense = $_POST['depense'];
        $montant = $_POST['montant'];

        $_SESSION['rep'][] = $date;
        $_SESSION['rep'][] = $depense;
        $_SESSION['rep'][] = $montant;

       insertTheOffice($_SESSION['rep'][2], $_SESSION['user'], $_SESSION['rep'][0], $_SESSION['rep'][1], $_SESSION['rep'][4], $_SESSION['rep'][5], $_SESSION['rep'][6] , $_SESSION['rep'][3] , getAllTheMoisChoisi());
    }

    $global = getLastGlobal();
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
    <header class="masthead">
        <div class="container">
            <div class="intro-text" style="padding-top: 161px;margin-bottom: -4px;border-color: #fed136;">
                <section class="position-relative py-4 py-xl-5">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="col-xs-12">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Poids total cueillette</th>
                                        <th>Poids restant sur les parcelles</th>
                                        <th>Cout de revient</th>
                                    </tr>
                                    <tr>
                                        <th><?php echo $global['poidsTotalCeuillette'] ?></th>
                                        <th><?php echo $global['poidsRestantParcelle'] ?></th>
                                        <th><?php echo $global['revient'] ?></th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </header>
    <footer style="margin-top: 10px;">
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