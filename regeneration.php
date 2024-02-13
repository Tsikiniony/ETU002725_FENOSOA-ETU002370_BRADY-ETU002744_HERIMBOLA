<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/checkbox.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 navbar-dark" style="background: rgb(7,157,4);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>The de beaute</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="variete.php"><i class="fas fa-seedling"></i><span>Variete de The</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="parcelle.php"><i class="fas fa-plus"></i><span>Parcelles</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="ceuilleur.php"><i class="far fa-user-circle"></i><span>Ceuilleurs</span></a>
                    <a class="nav-link" href="depense.php"><i class="far fa-money-bill-alt"></i><span>Depenses</span></a>
                    <a class="nav-link active" href="regeneration.php"><i class="far fa-calendar-alt"></i><span>Régeneration</span></a>
                    <a class="nav-link" href="index.php"><i class="far fa-user-circle"></i><span>Quitter</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-expand bg-white shadow mb-4 topbar static-top navbar-light">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button" style="background: rgb(7,157,4);"><i class="fas fa-search"></i></button></div>
                        </form>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Admin</span></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">MOIS DE REGENERATION</h3>
                    </div>
                    <div class="row">
                        <div class="col"><label class="checkbox">
                            <form action="trait-gener.php" method="post">
                                <input type="checkbox" value="janvier" name="Janvier">
                                <span class="checkbox-check"></span>
                                    Janvier
                                </label></div>
                                                        <div class="col"><label class="checkbox">
                                <input type="checkbox" value="fevrier" name="Fevrier">
                                <span class="checkbox-check"></span>
                                    Février
                                </label></div>
                                                        <div class="col"><label class="checkbox">
                                <input type="checkbox" value="mars" name="Mars">
                                <span class="checkbox-check"></span>
                                    Mars
                                </label></div>
                                                        <div class="col"><label class="checkbox">
                                <input type="checkbox" value="avril" name="Avril">
                                <span class="checkbox-check"></span>
                                    Avril
                                </label></div>
                                                        <div class="col"><label class="checkbox">
                                <input type="checkbox" value="mai" name="Mai">
                                <span class="checkbox-check"></span>
                                    Mai
                                </label></div>
                                                        <div class="col"><label class="checkbox">
                                <input type="checkbox" value="juin" name="Juin">
                                <span class="checkbox-check"></span>
                                    Juin
                                </label></div>
                                                    </div>
                                                </div>
                                                <div class="container-fluid">
                                                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                                                        <h3 class="text-dark mb-0"></h3>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col"><label class="checkbox">
                                <input type="checkbox" value="juillet" name="Juillet">
                                <span class="checkbox-check"></span>
                                    Juillet
                                </label></div>
                                                        <div class="col"><label class="checkbox">
                                <input type="checkbox" value="aout" name="Aout">
                                <span class="checkbox-check"></span>
                                    Aout
                                </label></div>
                                                        <div class="col"><label class="checkbox">
                                <input type="checkbox" value="septembre" name="Septembre">
                                <span class="checkbox-check"></span>
                                    Séptembre
                                </label></div>
                                                        <div class="col"><label class="checkbox">
                                <input type="checkbox" value="octobre" name="Octobre">
                                <span class="checkbox-check"></span>
                                    Octobre
                                </label></div>
                                                        <div class="col"><label class="checkbox">
                                <input type="checkbox" value="novembre" name="Novembre">
                                <span class="checkbox-check"></span>
                                    Novembre
                                </label></div>
                                                        <div class="col"><label class="checkbox">
                                <input type="checkbox" value="decembre" name="Decembre">
                                <span class="checkbox-check"></span>
                                    Décembre
                                </label>
                            </div>
                    </div>
                </div>
                <section class="position-relative py-4 py-xl-5"><button class="btn btn-primary" type="submit" data-bs-toggle="modal" data-bs-target="#modal1" style="padding-left: 11px;margin-left: 46px;background: rgb(7,157,4);">Sauvegarder</button></section>
            </form>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span style="font-weight: bold;color: var(--bs-emphasis-color);">ETU002725_FENOSOA-ETU002370_BRADY-ETU002744_HERIMBOLA</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>