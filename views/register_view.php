<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'views/includes/head.php' ?>
    <title> <?= ucfirst($page) ?> - MisouA </title>
</head>
<body id="login-page">
    <section> <!--register-->
        <h2 onclick="document.location.href='home'" class="btn-accueil"> <i class="fa fa-arrow-left"></i> <i class="fa fa-home  "></i> MisouA </h2>

        <div class="register-misoua">

            <div class="alert alert-success" id="alert-register" style="display: <?php if($regOk) echo 'block'; else echo 'none'; ?> " > <i class="fa fa-check"></i> Inscription reussie wait...</div>

            <h1> <i class="fa fa-user fa-2x"></i> INSCRIPTION </h1>
            <h6 class="mb-3 text-danger" > <?= $error ?> </h6>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="md-form mb-3"> 
                    <input type="text" id="nom" name="nom" class="form-control mb-3" placeholder="Votre nom" value="<?= $nom ?>">
                    <h6 style="float:right;" class="text-danger">  <?= $nomError ?> </h6>

                    <input type="text" id="prenoms" name="prenoms" class="form-control mb-3" placeholder="Votre prenoms" value="<?= $prenoms ?>">
                    <h6 style="float:right;" class="text-danger"> <?= $prenomsError ?> </h6>

                    <input type="date" id="naissance" name="naissance" class="form-control mb-3" placeholder="ne(e) le" value="<?= $naissance ?>">
                    <h6 style="float:right;" class="text-danger"> <?= $dateError ?> </h6>

                    <input type="text" id="email" name="email" class="form-control mb-3" placeholder="Votre email" value="<?= $email ?>">
                    <h6 style="float:right;" class="text-danger"> <?= $emailError ?> </h6>

                    <input type="tel" id="telephone" name="telephone" class="form-control mb-3" placeholder="Votre telephone" value="<?= $telephone ?>">
                    <h6 style="float:right;" class="text-danger"><?= $telephoneError ?></h6>

                    <select name="commune" id="commune" class="form-control">
                        <option value="" >-- Ville --</option>
                        <?php foreach($allCommunes as $index => $commune) : ?>

                            <option value=" <?= $commune['id_commune'] ?> "> <?= $commune['nom'] ?> </option>

                        <?php endforeach; ?>
                    </select>
                    <h6 style="float:right;" class="text-danger"> <?= $communeError ?> </h6>

                    <input type="password" id="pass" name="pass" class="form-control mb-4" placeholder="Votre mot de passe" value="<?= $pass ?>">
                    <h6 style="float:right;" class="text-danger"> <?= $passError ?> </h6>

                    <!-- <div class="custom-file">
                        <input type="file" class="custom-file-input" id="avatar" name="avatar" accept="image/*">
                        <h6 style="float:right; margin: 3%;" class="text-danger">  </h6>
                        <label class="custom-file-label" for="avatar">Choisir photo</label>
                    </div> -->
                </div>

                <button type="submit" name="btn-register" class="btn btn-indigo">S'INSCRIRE</button>
            </form>
            <div>  Deja membre ? <a href="#" class="connectez-vous"> identifiez-vous </a> </div> <!--link with js-->
        </div>

    </section>
</body>
</html>