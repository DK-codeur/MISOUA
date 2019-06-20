<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'views/includes/head.php' ?>
    <title> <?= ucfirst($page) ?> - MisouA admin</title>
</head>
<body>
    <div class="row">
        <?php include_once 'views/includes/side-admin.php' ?>

        <div class="col-md-9">
            <section>
                <div class="row">
                    
                    <div id="admin-resume">
                        <div class="admin-resume-item">
                            <i class="fa fa-user" style="float:left; font-size: 100px;"></i>
                            <div class="mr-auto">
                                <h5>Nombre de PUB </h5>
                                <h3>414</h3>
                            </div>
                        </div>

                        <div class="admin-resume-item">
                            <i class="fa fa-user" style="float:left; font-size: 100px;"></i>
                            <div class="mr-auto">
                                <h5>Nombre d'utilisateur </h5>
                                <h3>1087</h3>
                            </div>
                        </div>

                        <div class="admin-resume-item">
                            <i class="fa fa-user" style="float:left; font-size: 100px;"></i>
                            <div class="mr-auto">
                                <h5>Prix moyen des PUB  </h5>
                                <h3>700 OOO f</h3>
                            </div>
                        </div>

                        <div class="admin-resume-item">
                            <i class="fa fa-user" style="float:left; font-size: 100px;"></i>
                            <div class="mr-auto">
                                <h5>Derniere PUB</h5>
                                <h3>01/01/2019</h3>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>

</body>
</html>