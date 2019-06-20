<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php' ?>
    <title> <?= ucfirst($page) ?> - MisouA </title>
</head>
<body>
    <div class="loader"></div>

    <?php 
        if(isset($_SESSION['user']))
            {
                include_once 'views/includes/header-connected.php';
            }
 
        else{
            include_once 'views/includes/header.php';
        }
    ?>

<div class="alert alert-success animated fadeOut delay-4s " id="alert-register" style="z-index:2;display: <?php if(isset($_SESSION['user'])) echo 'block'; else echo 'none'; ?> " > <i class="fa fa-user"> </i> Hello <strong> <?= $_SESSION['user']['prenoms'] ?> </strong> bon retour parmis nous ! </div>

        <div id="misoaCarou" class="carousel slide carousel-fade" data-ride="carousel"> <!--carousel main-->

             <!--carousel Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#misoaCarou" data-slide-to="0" class="active"></li>
                <li data-target="#misoaCarou" data-slide-to="1"></li>
                <li data-target="#misoaCarou" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" role="listbox"> <!--inner-->

                <div class="carousel-item active"> <!--1st item-->
                    <div class="view">
                        <img class="d-block w-100" src="assets/images/slide11.jpg" style="background-attachement:cover" alt="First slide">
                        <div class="mask rgba-black-light"></div>
                    </div>
                    
                    <div class="carousel-caption">
                        <div class="col-10">
                            <h1 class="h1-responsive"> Achetez une maison qui vous ressemble ! </h1>
                            <div class="divider-blue"></div>
                            <br><br>
                            <h3><i class="fa fa-home"></i> Valide votre busness</h3>
                            <h5><i class="fa fa-bed"></i>  4pieces</h5>
                            <h5><i class="fa fa-map-marker-alt"></i>  Port bouet </h5>
                            <br><br>
                            <button class="btn btn-indigo">Explorer</button>
                        </div>
                    </div>
                </div> <!-- end 1st item-->

                <div class="carousel-item"> <!-- 2nd item-->
                    <div class="view">
                        <img class="d-block w-100" src="assets/images/slide22.jpg" alt="Second slide">
                        <div class="mask rgba-black-strong"></div>
                    </div>

                    <div class="carousel-caption">
                        <div class="col-10">
                            <h1 class="h1-responsive"> Louez la maison parfaite </h1>
                            <div class="divider-blue"></div>
                            <br><br>
                            <h3><i class="fa fa-home"></i> Duplex, avec tuile</h3>
                            <h5><i class="fa fa-bed"></i>  4pieces</h5>
                            <h5><i class="fa fa-map-marker-alt"></i>  Port bouet </h5>
                            <br><br>
                            <button class="btn btn-indigo">Explorer</button>
                        </div>
                    </div>
                </div> <!-- end 2nd item-->

                <div class="carousel-item"> <!-- 3rd item-->
                    <div class="view">
                        <img class="d-block w-100" src="assets/images/slide33.jpg" alt="Third slide">
                        <div class="mask rgba-black-slight"></div>
                    </div>
                                
                    <div class="carousel-caption">
                        <div class="col-10">
                            <h1 class="h1-responsive"> Avez-vous une maison à vendre ou à louer </h1>
                            <div class="divider-blue"></div>
                            <br><br>
                            <h5> <i class="fa fa-money-check-alt"></i> Planifier des bons plans sans vous deplacer </h5>
                            <h5> <i class="fa fa-user-friends"></i> Discuter en ligne</h5>
                            <h5> <i class="fa fa-clock"></i> Gagner en temps</h5>
                            <br><br>
                            <button class="btn btn-indigo">Publiez votre annonce</button>
                        </div>
                    </div>
                </div> <!-- end 3rd item-->

            </div> <!-- end inner-->

            <a class="carousel-control-prev" href="#misoaCarou" role="button" data-slide="prev">
                <i class="fa fa-chevron-circle-left fa-2x"></i>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#misoaCarou" role="button" data-slide="next">
                <i class="fa fa-chevron-circle-right fa-2x"></i>
                <span class="sr-only">Next</span>
            </a>

        </div> <!--end carousel main-->

        <div class="container-fluid">
            <section>   <!--Explore-->

                <h2 class="h2-reponsive">Explorez & trouver la vôtre</h2>
                <div class="divider-indigo"></div>

                <div id="exploration-avance" class="btn btn-light animated rollIn"> <i class="fa fa-search"></i>  Exploration avancée</div> <!--exploration-avance btn-->
                <div class="close-recherche-avance"> 
                    <i id="close" class="fa fa-times fa-2x"></i> 
                </div> <!--close-recherche-avance-->

                <div class="recherche-avance">
        
                    <form class="form-inline">
                        <div class="form-group">
                            <label for="categorie">Categorie :</label>
                            <select class="form-control dropdown-primary m-2" id="categorie" name="categorie">
                                <option value="">--selectionner--</option>
                                <option value="1">option 1</option>
                                <option value="2">option 1</option>
                                <option value="3">option 1</option>
                                <option value="4">option 1</option>
                            </select>
                           
                            <input type="number" name="min-val" id="min-val" placeholder="valeur minimal" class="form-control m-2">
                            <input type="number" name="max-val" id="max-val" placeholder="valeur maximal" class="form-control m-2">

                            <label for="localite">Localite :</label>
                            <select class="form-control dropdown-primary m-2" id="localite" name="localite">
                                <option value="">--selectionner--</option>
                                <option value="1">option 1</option>
                                <option value="2">option 1</option>
                                <option value="3">option 1</option>
                                <option value="4">option 1</option>
                            </select>

                        </div>
                        <button type="submit" class="btn btn-indigo" name="recherche-avance">Je cherche</button>
                    </form>
                    
                </div>

                <!--les maisons-->
                <div class="container">

                    <div class="row"> <!--1 line-->

                        <?php foreach($allPubs as $index => $pub) : ?>

                        <div class="col-md-4 col-sm-12 mb-4">
                            <div class="card"> <!-- card-->

                                <div class="view overlay">
                                    <a href="detail-<?=$pub['id_pub']?>-<?= str_replace(' ','-', $pub['titre']) ?>" > <img class="card-img-top" src=" <?= $pub['image1'] ?> " alt="maison"> </a>
                                    <!-- <a> <div class="mask rgba-white-slight"></div> </a> -->
                                </div>
                                <i class="fa fa-heart fa-2x" id="add-favori"></i>
                                <span class="badge badge-secondary" id="statut-maison">En <?= $pub['offre'] ?> </span>
                                
                                
                                <div class="card-body"> <!-- Card body -->
                                    <h5 class="card-title"><i class="fa fa-home"></i>  <?= $pub['titre'] ?> </h5>
                                    <h5 class="price text-center p-1"><i class="fa fa-money-check-alt"></i> <?= number_format((float)$pub['prix'],0,',','.').' fcfa' ?> </h5>
                                    <hr>
                                    <h6><i class="fa fa-bed"></i> <?= $pub['piece'] ?> piece(s) </h6>
                                    <h6><i class="fa fa-map-marker-alt"></i> <?= $pub['commune'] ?></h6>
                                </div>

                                <div class="rounded-bottom card-bottom-color text-center p-1"> <!-- Card footer -->
                                    Publie le <?= date_format(date_create( $pub['createAt']), "l m, Y") ?>- par <?= $pub['nom'] ?>
                                </div>
                                
                            </div> <!--end card-->
                        </div>   

                        <?php endforeach ; ?>

                    </div> <!--/row-->

                    <!--pagination-->
                    <div class="pagi">
                        <nav aria-label="Page navigation">
                            <ul class="pagination pagination-circle pg-blue">

                                <li class="page-item disabled"><a class="page-link">Prec.</a></li>
                                <li class="page-item disabled">
                                    <a class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>

                                <li class="page-item active"><a class="page-link">1</a></li>
                                <li class="page-item"><a class="page-link">2</a></li>
                                <li class="page-item"><a class="page-link">3</a></li>
                                <li class="page-item"><a class="page-link">4</a></li>
                                <li class="page-item"><a class="page-link">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link">Suiv.</a></li>

                            </ul>
                        </nav>
                    </div>

                </div> 

            </section> <!--end section les maison-->
  
        </div>
       

    <script>
        $(window).on('load', function () {
            $('.loader').fadeOut('slow', function () {
                $(this).remove();
            });
        });
    </script>
    <?php include_once 'views/includes/footer.php' ?>
  
</body>
</html>