<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'views/includes/head.php' ?>
    <title> <?= ucfirst($page) ?> - <?= $_SESSION['user']['nom'].' '.$_SESSION['user']['prenoms'] ?></title>
</head>
<body>
    <?php include_once 'views/includes/header-connected.php' ?>
    <!-- <i class="fas fa-quote-left"></i> -->
    <div class="">

        <div class="row">
        
            <div class="detail-user"> <!--Detail user-->
                <div class="col-md-4 col-sm-12">
                      
                    <div class="card testimonial-card">  <!-- Card -->
                        <div class="avatar mx-auto white"> <!-- Avatar -->
                            <i class="fa fa-user-circle fa-4x"></i>
                        </div>
                        
                        <div class="card-body"> <!-- body -->
                            <h4 class="nom-user-dash info-user-dash"> <?= $_SESSION['user']['nom'].' '.$_SESSION['user']['prenoms'] ?> </h4>
                            <hr>
                            <p>
                                <h5> <i class="fa fa-envelope"></i>  Email: <span class="info-user-dash"> <?= $_SESSION['user']['email'] ?> </span> </h5>
                                <h5> <i class="fa fa-phone"></i>  Telephone : <span class="info-user-dash"> <?= $_SESSION['user']['telephone'] ?> </span> </h5>
                                <h5> <i class="fa fa-calendar"></i>  Naissance : <span class="info-user-dash"> <?= $_SESSION['user']['naissance'] ?> </span> </h5>
                                <h5> <i class="fa fa-map-marker-alt"></i>  Commune : <span class="info-user-dash"> <?= $_SESSION['user']['commune'] ?> </span> </h5>
                            </p>
                            <p> Membre depuis <br> <div class="text-secondary">   <?= $_SESSION['user']['regAt'] ?> </div> </p>
                            <p><hr></p>

                            <div class="d-flex"> <a href="#"> <i class="fa fa-edit fa-2x"></i> </a> </div>
                        </div> <!--end body -->

                    </div> <!--end card Card -->
                    
                </div>
            </div>  <!--Detail user-->

            
                <div class="col-md-8 col-sm-12" style="margin:auto">
                

                    <ul class="nav md-pills pills-secondary"> <!--Pills controller-->

                        <li> <a class="btn btn-indigo active" data-toggle="tab" href="#panel11" role="tab">MES PUBLICATIONS</a> </li>
                        <li> <a class="btn btn-indigo" data-toggle="tab" href="#panel12" role="tab">MES FAVORIS</a> </li>
                        <li> <a class="btn btn-indigo" data-toggle="tab" href="#panel13" role="tab">MES NOTIFICATION</a> </li>

                    </ul> <!-- End Pills controller-->
                     
                    <div class="tab-content pt-0"> <!-- les tabs -->
                        <div class="tab-pane fade in show active" id="panel11" role="tabpanel"> <!--Panel 1-->
                            <br>

                            <div class="row">                               
                                
                                <?php foreach($allPubByUsers as $index => $PubByUser): ?>

                                <div class="self-pub img-thumbnail p-2 m-2">
                                    <div class="d-flex">

                                        <div class="self-pub-img">
                                            <div class="view overlay">
                                                <a href="#" > <img class="card-img-top" src="<?= $PubByUser['image1'] ?> " alt="maison" class="img-fluid"> </a>
                                            </div>
                                        </div>

                                        <div class="self-pub-detail p-2">
                                            <h5> <?= $PubByUser['titre'] ?> </h4>
                                            <h6 class="h6"> <?= number_format( (float)$PubByUser['prix'],0,',','.').' f cfa'?> </h6>
                                            <h6 class="text-muted"> <i class="fa fa-bed"></i> <?= $PubByUser['piece'] ?> pieces </h6>
                                            <h6 class="text-muted"> <i class="fa fa-map-marker-alt"></i> <?= $PubByUser['commune'] ?> </h6>
                                        </div>

                                    </div>
                                    <div class="text-center modif-self-pub"> <a href="#"><i class="fa fa-edit mr-3"></i></a>  <a href="#"><i class="fa fa-trash-alt mr-3"></i></a>  <a href="#"> <i class="fa fa-share mr-3"></i></a>  </div>
                                </div>

                                <?php endforeach ?>

                               
                            </div> <!--/row-->


                        </div> <!--end Panel 1-->
                        
                        <div class="tab-pane fade" id="panel12" role="tabpanel"> <!--Panel 2-->
                            <br>

                            <p>
                                FAVORIS
                            </p>

                        </div> <!--end Panel 2-->
                        
                        <div class="tab-pane fade" id="panel13" role="tabpanel"> <!--Panel 3-->
                            <br>

                            <p>
                                notification
                            </p>

                        </div> <!--end Panel 3-->

                    </div> <!--end les tabs -->

                </div>

            <!-- </div>   end thing user -->

        </div>

    </div>
     
    <?php include_once 'views/includes/footer.php' ?>
</body>
</html>