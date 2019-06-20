<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php' ?>
    <title> <?= ucfirst($page) ?> - </title>    

</head>
<body>
    <?php include_once 'views/includes/header-connected.php' ?>
    <!-- RewriteRule ^update-user-([0-9]+)$ index.php?page=update-user&id=$1 -->
    <section class="update-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h2 class="d-flex" style="margin-bottom:7%; border-bottom: 2px indigo solid; width: 320px">Modifier mes info</h2>
                    <img src="<?= $user['avatar'] ?>" alt="profil" class="img-thumbnail" style="width:300px; height: 300px;">
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="block-form-update-user"> <!--block-form-update-user-->
                        <form action="" method="POST" enctype="multipart/form-dat" >
                            <h6 class="text-danger"> <?= $error ?> </h6>
                            <div class="form-group">
                                <label for="nom">Nom</label> <h6 style="float:right; margin: 1%;" class="text-danger"> <?= $nomError ?> </h6>
                                <input type="text" name="nom" id="nom" class="form-control" value="<?= $nom ?>">

                                <label for="prenoms">Prenoms </label> <h6 style="float:right; margin: 1%;" class="text-danger"> <?= $prenomsError ?> </h6>
                                <input type="text" name="prenoms" id="prenoms" class="form-control" value="<?= $prenoms ?>" >

                                <label for="naissance">Date de naissance</label> <h6 style="float:right; margin: 1%;" class="text-danger"> <?= $naissanceError ?> </h6>
                                <input type="date" name="naissance" id="naissance" class="form-control" value="<?= $naissance ?>" >

                                <label for="email">Email</label> <h6 style="float:right; margin: 1%;" class="text-danger"> <?= $emailError ?> </h6>
                                <input type="text" name="email" id="email" class="form-control" value="<?= $email ?>" >

                                <label for="telephone">Telephone</label> <h6 style="float:right; margin: 1%;" class="text-danger"> <?= $telephoneError ?> </h6>
                                <input type="tel" name="telephone" id="telephone" class="form-control" value="<?= $telephone ?>" >

                                <label for="commune">Commune</label> <h6 style="float:right; margin: 1%;" class="text-danger"> <?= $communeError ?> </h6>
                                <select name="commune" id="commune" class="form-control" >
                                    <option selected="selected" value= "<?= $commune ?>" > <?= $commune ?> </option>
                                    <option value="abobo">abobo</option>
                                    <option value="adjame">adjame</option>
                                    <option value="cocody">cocody</option>
                                    <option value="yopougon">yopougon</option>
                                    <option value="treichville">treichville</option>
                                    <option value="port-bouet">port-bouet</option>
                                    <option value="plateau">plateau</option>
                                </select>

                                <label for="passe">Nouveau mot de passe</label> <h6 style="float:right; margin: 1%;" class="text-danger"> <?= $passeError ?> </h6>
                                <input type="password" name="passe" id="passe" class="form-control" placeholder="Entre un nouveau mot de passe">
                                <br>
                                <div class="custom-file">
                                    <input type="file" name="avatar" class="custom-file-input" id="avatar" accept="image/*">
                                    <h6 style="float:right; margin: 3%;" class="text-danger"> <?= $avatarError ?> </h6>
                                    <label class="custom-file-label" for="avatar">Choisir photo</label>
                                </div>

                                <button type="submit" name="btn-update-user" class="btn btn-indigo">MODIFIER MES INFO</button>  <button class="btn btn-outline-indigo">RETOUR</button>
                            </div>
                        </form>
                    </div> <!-- end block-form-update-user-->
                </div>
            </div>
        </div>
    </section> <!--end update block-->

</body>
</html>