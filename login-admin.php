<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ADMIN</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-icons.css">
</head>
<?php
    include 'fonction.php';
    $admin = getAdmin();
?>

<body>
    <nav class="navbar navbar-expand-md bg-body py-3" style="box-shadow: 1PX 1PX 4px;">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">CONTACT US</a></li>
                </ul><a class="btn btn-primary ms-md-2" role="button" href="index.php" style="background: rgb(7,157,4);">USER</a>
            </div>
        </div>
    </nav>
    <section class="position-relative py-4 py-xl-5" style="background: linear-gradient(#31743b, white);">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5">
                        <div class="card-body d-flex flex-column align-items-center" style="box-shadow: 0px 0px 1px;">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4" style="background: rgb(7,157,4);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"></path>
                                </svg></div>
                            <form class="text-center" action="trait-login.php?admin" method="post">
                                <div class="mb-3"><input class="form-control" type="text" name="login" value="<?php echo $admin["nomAdmin"] ?>" style="width: 300px;"></div>
                                <div class="mb-3"><input class="form-control" type="password" name="mdp" value="<?php echo $admin["mdpAdmin"] ?>" ></div>
                                <?php
                                    if(isset($_GET['erreur'])){
                                        ?> <p style="color: red">Mot de passe incorrecte !</p> <?php
                                    }
                                ?>
                                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="background: rgb(7,157,4);">Se connecter</button></div>
                                <p class="text-muted">Forgot your password?</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="text-center py-4" style="box-shadow: inset 0px 0px 2px;">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3">
                <div class="col"></div>
                <div class="col">
                    <p class="text-muted my-2" style="font-size: 12px;"><br><strong><span style="color: rgb(33, 37, 41);">ETU002725_FENOSOA-ETU002370_BRADY-ETU002744_HERIMBOLA</span></strong><br><br></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>