<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php' ?>
    <title> <?= ucfirst($page) ?> - MisouA </title>    
</head>
<body>
    <?php include_once 'views/includes/header-connected.php' ?>   
    
    <section id="publish-block">

        <div class="container">
            <h1 style="margin-top:5%;">Votre publication en un clin d'oeil</h1>
            <div class="divider-blue"></div>

            <div class="alert alert-success" id="alert-publish" style="display: <?php if($isSuccess) echo 'block'; else echo 'none'; ?> " > <i class="fa fa-check"></i> Publier avec success, wait... </div>

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="images-block">  <!--images-block-->
                    <h5>Ajouter des photos</h5> <h6 class="text-danger"><?=  $imageError ?></h6> <h6 class="text-danger"><?=  $error ?></h6>
                    <div class="row">

                        <div class="col-md-4">
                            <input type="file" class="form-control" id="image1" name="image1" accept="image/*">
                            <h6 class="text-danger"><?= $image1Error ?></h6>
                        </div>
                        
                        <div class="col-md-4">
                            <input type="file" class="form-control" id="image2" name="image2" accept="image/*">
                            <h6 class="text-danger"><?= $image2Error ?></h6>
                        </div>

                        <div class="col-md-4">
                            <input type="file" class="form-control" id="image3" name="image3" accept="image/*">
                            <h6 class="text-danger"><?= $image3Error ?></h6>
                        </div>

                    </div> 
                </div> <!--end images-block-->

                <div class="publish-form"> <!-- publish-form-->
                    
                    <div class="row">
                        
                        <div class="col-md-6">
                            <label for="categorie">Categorie* :</label> <h6 style="float:right;" class="text-danger"><?= $categorieError ?></h6>
                            <select name="categorie" id="categorie" class="form-control">
                                <option value="">--Categorie--</option>
                                
                                <?php foreach($allCategories as $index => $categorie) :?>
                                    
                                    <option value=" <?= $categorie['id_categorie'] ?> ">  <?= $categorie['nom'] ?> </option>

                                <?php endforeach ; ?>

                            </select> <br>

                            <label for="offre">Offre* :</label> <h6 style="float:right;" class="text-danger"><?= $offreError ?></h6>
                            <select name="offre" id="offre" class="form-control">
                                <option value="">--Offre--</option>

                                <?php foreach($allOffres as $index => $offre) : ?>

                                    <option value=" <?= $offre['id_offre'] ?> ">  <?= $offre['nom'] ?> </option>

                                <?php endforeach ; ?>
                                
                            </select> <br>

                            <label for="commune">commune* :</label> <h6 style="float:right;" class="text-danger"><?= $communeError ?></h6>
                            <select name="commune" id="commune" class="form-control">
                                <option value="">-- commune --</option>
                                
                                <?php foreach($allCommunes as $index => $commune) : ?>

                                    <option value=" <?= $commune['id_commune'] ?> "> <?= $commune['nom'] ?> </option>

                                <?php endforeach ; ?>

                            </select> <br>

                            <label for="surface">Surface (m²)* :</label> <h6 style="float:right;" class="text-danger"><?= $surfaceError ?></h6>
                            <input type="number" name="surface" id="surface" class="form-control" placeholder="surface en m²"  value="<?= $surface ?>"> <br>
                        
                        </div>

                        <div class="col-md-6">

                            <label for="piece">Nombre de pièce :</label> <h6 style="float:right;" class="text-danger"><?= $pieceError ?></h6>
                            <input type="number" name="piece" id="piece" class="form-control"  value="<?= $piece ?>"> <br>

                            <label for="titre">Titre* :</label> <h6 style="float:right;" class="text-danger"><?= $titreError ?></h6>
                            <input type="text" name="titre" id="titre" class="form-control"  value="<?= $titre ?>"> <br>

                            <label for="prix">Prix* :</label> <h6 style="float:right;" class="text-danger"><?= $prixError ?></h6>
                            <input type="number" name="prix" id="prix" class="form-control" placeholder="prix en cfa" value="<?= $prix ?>"> <br>

                            <label for="description">Description* :</label> <h6 style="float:right;" class="text-danger"><?= $descriptionError ?></h6>
                            <textarea name="description" id="description" cols="20" rows="5" class="form-control" placeholder="Ajouter plus de detail..." ></textarea>

                            <button type="submit" class="btn btn-indigo" name="publish" id="publish">Publier</button> <button type="button" class="btn btn-outline-indigo" name="reset-publish">Annuler</button>                            

                        </div>
                    </div>              
                </form>

            </div> <!--end publish-form-->

        </div>

    </section>

    <script src="assets/mdb/js/sweetalert/sweetalert.min.js"></script> 
        <!-- <script>                          
            swal({
                    title: 'Publier avec success ',
                    text: '  ',
                    icon: 'success',
                    button: false,
                    timer: 1500
                })
        </script> -->

    <?php include_once 'views/includes/footer.php' ?>
</body>
</html>