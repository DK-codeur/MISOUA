<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'views/includes/head.php'; ?>
    <title> <?= ucfirst($page) ?> - MisouA </title>
</head>
<body id="login-page">

    <section> <!--login-->
    <h2 onclick="document.location.href='home'" class="btn-accueil"> <i class="fa fa-arrow-left"></i> <i class="fa fa-home"></i>  MisouA </h2>
       
        <div class="login-misoua">

        <div class="alert alert-success" id="alert-register" style="display: <?php if($isSuccess) echo 'block'; else echo 'none'; ?> " > <i class="fa fa-check"></i> Connexion wait...</div>

            <h1> <i class="fa fa-user-lock fa-2x"></i> CONNECTION </h1>
            <h6 class="mb-2 text-muted">Connectez-vous à votre espace prive</h6>
            <h6 class="text-danger"> <?= $error ?> </h6>

            <form action="login" method="POST">
                <div class="md-form mb-3"> <!--email-->
                    <input type="text" id="email" name="email" class="form-control mb-3" placeholder="Votre email" value="<?= $email ?>">
                    <h6 style="float:right;" class="text-danger"> <?= $emailError ?> </h6>

                    <input type="password" id="pass" name="pass" class="form-control mb-4" placeholder="Votre mot de passe" value="">
                    <h6 style="float:right;" class="text-danger"> <?= $passError ?> </h6>
                </div>

                <button type="submit" name="btn-login" class="btn btn-indigo">SE CONNECTER</button>
            </form>
            <div>  Pas encore inscrire ? <a href="#" class="inscrivez-vous"> faites le </a> </div> <!--link with js-->
        </div>

    </section>
</body>
</html>