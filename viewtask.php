<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="./css/main.css">
    <script src="./js/bootstrap.js"></script>
</head>

<body>
    <header>
    <?php include("exemple.php") ;?> 
    </header>    
        <main class="container mt-5 pt-3">
            <div class="row">
                <div class="col-md-8">
                    <div class="d-flex">
                        <div>
                            <a class="btn btn-lg btn-secondary" title="Retour au précédent">
                                <i class="mdi mdi-arrow-left"></i>
                            </a>
                        </div>
                        <div class="flex-grow-1 ms-4">
                            <p> #254866214556<br> Dépuis: 2h30min </p>
                        </div>
                        <div>
                            <button class="btn btn-success ms-2" data-bs-toggle="modal" data-bs-target="#asign"> Ajouter
                                <i class="mdi mdi-account-multiple-plus"></i>
                            </button>
                        </div>
                        <div>
                            <button class="btn btn-success ms-2" data-bs-toggle="modal"
                                data-bs-target="#edittask">Modifier
                                <i class="mdi mdi-pencil"></i>
                            </button>
                        </div>
                        <div>
                            <button class="btn btn-success ms-2"> Suprimer
                                <i class="mdi mdi-delete"></i>
                            </button>
                        </div>
                    </div>
                    <div>
                        <p>
                            Date limite: 2022-05-05 13:00:00
                        </p>
                        <p>
                            Description:
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ad corrupti blanditiis
                            exercitationem praesentium velit commodi consequuntur quo quae, assumenda repellendus cumque
                            dolores ex, esse tempore? Quidem sequi unde nobis.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero voluptates dignissimos
                            accusantium assumenda, corrupti numquam commodi omnis deleniti! Iste temporibus
                            exercitationem
                            distinctio necessitatibus soluta quisquam delectus non laboriosam sed ratione!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ad corrupti blanditiis
                            exercitationem praesentium velit commodi consequuntur quo quae, assumenda repellendus cumque
                            dolores ex, esse tempore? Quidem sequi unde nobis.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero voluptates dignissimos
                            accusantium assumenda, corrupti numquam commodi omnis deleniti! Iste temporibus
                            exercitationem
                            distinctio necessitatibus soluta quisquam delectus non laboriosam sed ratione!
                        </p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="" class="btn  btn-secondary">Marquer en Cours</a>
                        <a href="" class="btn  btn-secondary ">Marquer Fait</a>
                        <a href="" class="btn  btn-secondary"> Marquer Reportées</a>
                        <a href="" class="btn  btn-secondary">Marquer Annulées</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <div>Statut:</div>
                        <div class="badge bg bg-opacity-30 rounded-pill" style="background: rgb(90, 33, 33);">
                            <h5 class="" style="font-size: small ;">EN ATTENTE</h5>
                        </div>
                    </div>
                    <div class="mt-5">
                        <div>
                            <div>Créer Par:</div>
                            <div class="badge bg bg-opacity-30 rounded-pill" style="background: rgb(35, 170, 130);">
                                <h5 class="" style="font-size: small ;">John Does</h5>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <div>
                            Collaborateurs:
                        </div>
                        <div class="badge  bg-opacity-30 rounded-pill mb-2 d-inline-flex"
                            style="background: rgb(31, 134, 160); ">
                            <h5 class="" style="font-size: 20px;">John Doe</h5> <i class="mdi mdi-close-circle"
                                title="Retirer de cette tâche"></i>
                        </div>
                        <div class="badge  bg-opacity-30 rounded-pill mb-2 d-inline-flex"
                            style="background: rgb(31, 134, 160); ">
                            <h5 class="" style="font-size: 20px;">John Doe</h5> <i class="mdi mdi-close-circle"
                                title="Retirer de cette tâche"></i>
                        </div>
                        <div class="badge  bg-opacity-30 rounded-pill mb-2 d-inline-flex"
                            style="background: rgb(31, 134, 160); ">
                            <h5 class="" style="font-size: 20px;">John Doe</h5> <i class="mdi mdi-close-circle"
                                title="Retirer de cette tâche"></i>
                        </div>
                        <div class="badge  bg-opacity-30 rounded-pill mb-2 d-inline-flex"
                            style="background: rgb(31, 134, 160); ">
                            <h5 class="" style="font-size: 20px;">John Doe</h5> <i class="mdi mdi-close-circle"
                                title="Retirer de cette tâche"></i>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div class="modal fade" id="edittask" tabindex="-1" aria-labelledby="edittaskLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-0 ">
                        <h5 class="modal-title" id="edittaskLabel">Modifier taches à faire </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="mb-3">
                                <textarea class="form-control mb-3" placeholder="Description"
                                    rows="5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti, veritatis aut laboriosam harum reprehenderit vitae, accusantium molestias nesciunt, aperiam voluptatem voluptas labore explicabo quis voluptate. Molestiae provident at voluptate recusandae.</textarea>
                            </div>
                            <div>
                                <div class="col-12">
                                    <input type="datetime-local" name="" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div id="submiter" class="modal-footer border-0 justify-content-center">
                            <button type="submit" class="btn btn-success">Enrégistrer</button>
                            <button type="submit" class="btn btn-secondary " data-bs-dismiss="modal">Annuler</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="asign" tabindex="-1" aria-labelledby="asignLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-0 ">
                        <h5 class="modal-title" id="asignLabel">Ajouter des collaborateurs </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row container text-align">
                            <div class="col-md-3 bg-light rounded-3 m-2 ">
                                <a>
                                    <div class="d-flex justify-content-end ">
                                        <span class="rounded-pill badge bg-dark"> 33</span>
                                    </div>
                                    <div>
                                        <img class="bg-dark rounded-circle " width="60px" height="60px">
                                        <p>John Does </p>
                                    </div>
                                 <br>
                                </a>
                            </div>
                            <div class="col-md-3 bg-light rounded-3 m-2 ">
                                <a>
                                    <div class="d-flex justify-content-end ">
                                        <span class="rounded-pill badge bg-dark"> 33</span>
                                    </div>
                                    <div>
                                        <img class="bg-dark rounded-circle " width="60px" height="60px">
                                        <p>John Does </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 bg-light rounded-3 m-2 ">
                                <a>
                                    <div class="d-flex justify-content-end ">
                                        <span class="rounded-pill badge bg-dark"> 33</span>
                                    </div>
                                    <div>
                                        <img class="bg-dark rounded-circle " width="60px" height="60px">
                                        <p>John Does </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 bg-light rounded-3 m-2 ">
                                <a>
                                    <div class="d-flex justify-content-end ">
                                        <span class="rounded-pill badge bg-dark"> 33</span>
                                    </div>
                                    <div>
                                        <img class="bg-dark rounded-circle " width="60px" height="60px">
                                        <p>John Does </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 bg-light rounded-3 m-2 ">
                                <a>
                                    <div class="d-flex justify-content-end ">
                                        <span class="rounded-pill badge bg-dark"> 33</span>
                                    </div>
                                    <div>
                                        <img class="bg-dark rounded-circle " width="60px" height="60px">
                                        <p>John Does </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 bg-light rounded-3 m-2 ">
                                <a>
                                    <div class="d-flex justify-content-end ">
                                        <span class="rounded-pill badge bg-dark"> 33</span>
                                    </div>
                                    <div>
                                        <img class="bg-dark rounded-circle " width="60px" height="60px">
                                        <p>John Does </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 bg-light rounded-3 m-2 ">
                                <a>
                                    <div class="d-flex justify-content-end ">
                                        <span class="rounded-pill badge bg-dark"> 33</span>
                                    </div>
                                    <div>
                                        <img class="bg-dark rounded-circle " width="60px" height="60px">
                                        <p>John Does </p>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

</body>

</html>