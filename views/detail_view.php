<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'views/includes/head-detail.php' ?>
    
    <title> <?= ucfirst($page) ?> <?= $allPubByIds['titre'].'-'. $allPubByIds['prix'].'-'. $allPubByIds['commune']; ?> - MisouA </title>
</head>
<body>
    <?php 
        if(isset($_SESSION['user']))
            {
                include_once 'views/includes/header-connected.php';
            }

        else{
            include_once 'views/includes/header.php';
        }
    ?>

    <section id="detail-page">

        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <div class="block-left"> <!--block-left-->
                        <div class="titre"><h4><?=  $allPubByIds['categorie'] ?> <span class="price"> <?= number_format((float)$allPubByIds['prix'],0, '.', ','). 'f cfa' ?></span></h4></div>
                                                                                            
                        <!-- main carousel-->
                        <div id="carousel-detail" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">

                            <div class="carousel-inner" role="listbox"> <!--inner-->
                                <div class="carousel-item active">  <!--1st-->
                                    <img src=" <?= $allPubByIds['image1']; ?> " alt="First slide" style="width: 500px !important; height: 500px !important">
                                </div>

                                <div class="carousel-item"> <!--2nd-->
                                    <img src="  <?= $allPubByIds['image2']; ?> " alt="Second slide" style="width: 500px; height: 500px">
                                </div>

                                <div class="carousel-item"> <!--3rd-->
                                    <img src="  <?= $allPubByIds['image3']; ?> " alt="Third slide" style="width: 500px; height: 500px">
                                </div>
                            </div> <!-- end inner-->
                            
                            <!--Controls-->
                            <a class="carousel-control-prev" href="#carousel-detail" role="button" data-slide="prev">
                                <i class="fa fa-chevron-circle-left fa-2x"></i>
                                <span class="sr-only">Previous</span>
                            </a>

                            <a class="carousel-control-next" href="#carousel-detail" role="button" data-slide="next">
                                <i class="fa fa-chevron-circle-right fa-2x"></i>
                                <span class="sr-only">Next</span>
                            </a> 
                            <!--end Controls--> 

                            
                            <ol class="carousel-indicators"> <!--indicator with img-->

                                <li data-target="#carousel-detail" data-slide-to="0" class="active">
                                    <img class="d-block w-100" src="  <?= $allPubByIds['image1'] ?> " class="img-fluid" height="33">
                                </li>

                                <li data-target="#carousel-detail" data-slide-to="1">
                                    <img class="d-block w-100" src="  <?= $allPubByIds['image2'] ?> " class="img-fluid" height="33">
                                </li>

                                <li data-target="#carousel-detail" data-slide-to="2">
                                    <img class="d-block w-100" src="  <?= $allPubByIds['image3'] ?> " class="img-fluid" height="33">
                                </li>

                            </ol>  <!--end indicator with img-->
                            <hr>
                        </div>  <!--end main carousel-->

                        <div class="description"> <!--description-->
                           
                            <h5>Description</h5>
                            <h6><i class="fa fa-bed"></i>  <?= $allPubByIds['piece'] ?> piece(s)</h6>
                            <h6><i class="fa fa-map-marker-alt"></i> <?= $allPubByIds['commune'] ?></h6>
                            <h6 class="p-description">
                                <?= $allPubByIds['description'] ?>
                            </h6>
                        </div>

                    </div> <!--end block-left-->

                </div>

                <div class="col-md-5 col-sm-12"> 

                    <div class="block-right"> <!-- block-right-->
                        <div class="info-proprio">

                            <div class="img-proprio">
                                <div class="text-center">Auteur</div> 
                                <i class="fa fa-user-secret fa-3x text-info" aria-hidden="true"></i>
                                <!-- <img src="assets/images/avatar/default.PNG" alt="proprietaire" class="rounded-circle" style="width: 100px; height: 100px"> -->
                            </div>
                            <br>
                            <h5> <span id="nom-proprio"><?= $userByIds['nom'].' '.$userByIds['prenoms'] ?> </span> - (xxx publication)</h5>
                            <h6><i class="fa fa-map-marker-alt"></i> <?= $userByIds['commune'] ?> </h6>
                            <p> <hr> </p>
                            
                            <a href="tel: <?= $userByIds['telephone'] ?> " class="btn btn-danger btn-rounded"> <i class="fa fa-phone fa-2x"> </i>  Voir le numero</a> 
                            <a href="mailTo: <?= $userByIds['email'] ?>" class="btn btn-info btn-rounded"> <i class="fa fa-envelope fa-2x"></i>  Envoyer un email</a> 
                            <a href="#" class="btn btn-success btn-rounded"> <i class="fab fa-facebook-messenger fa-2x"> </i> </i>  Ecrire Inbox</a> 
                            
                            <br><br>
                            <p>
                                <hr>
                                <br>
                                <div class="d-flex justify-content-center"> <i class="fa fa-heart fa-2x"></i> <span id="add-favori">Ajouter aux favoris</span> </div>
                                <br>
                                <div class="d-flex justify-content-center"> <i class="fa fa-exclamation-triangle fa-2x"></i> <span id="signaler"> Signaler la publication</span> </div>
                            </p>

                            <br>
                            <p> 
                                <hr>
                                <h6> Partagez sur les reseaux sociaux </h6> 
                                <a href="#" class="btn btn-primary"> <i class="fab fa-facebook-square fa-2x"></i> </a>
                                <a href="#" class="btn btn-success"> <i class="fab fa-whatsapp fa-2x"></i> </a>
                            </p>

                        </div>
                        
                    </div> <!--end block-right-->

                </div>

            </div> <!--end row-->
        </div>

    </section>

    <?php include_once 'views/includes/footer.php' ?>
</body>
</html>