<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <header>
     <?php include ("exemple.php") ;?> 
        <!--<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

            <div class="container-fluid ">
                <a class="navbar-brand" href="#">
                    <img src="logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    TAF-TAF
                </a>
            </div>
            <div class="container-fluid d-flex justify-content-end">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto ms-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link">Toutes les Taches</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" type="button">Nouvelle Tache</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">John Does</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Quitter</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>-->
    </header>
    <main>
        <div class="container-fluid">
            <div class="row vh-100 align-items-center">
                <div class="col-md-3"></div>
                <div class="col-md-6  text-center">
                    <h1>Bonjour John Does</h1>
                    <p>Recapitulatif de la semaine en cours</p>
                    <div class="row mb-5">
                        <div class="col-md-3">
                            <h4 class="mb-3 display-4">102</h4>
                            <span class="text-muted">
                                Taches en attente
                            </span>
                        </div>
                        <div class="col-md-3">
                            <h4 class="mb-3 display-4">120</h4>
                            <span class="text-muted">
                                Taches en cours
                            </span>
                        </div>
                        <div class="col-md-3">
                            <h4 class="mb-3 display-4">302</h4>
                            <span class="text-muted">
                                Taches Terminées
                            </span>
                        </div>
                        <div class="col-md-3">
                            <h4 class="mb-3 display-4">252</h4>
                            <span class="text-muted">
                                Taches Annulées
                            </span>
                        </div>

                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-2">

                        <button type="button" class="btn btn-secondary m-3">Toutes les Taches</button>

                        <button type="button" class="btn btn-secondary m-3">Mes Taches</button>

                    </div>
                </div>
                <div class="col-md-3"></div>

            </div>

        </div>
    </main>
</body>

</html>