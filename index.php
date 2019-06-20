<?php
    //inclusion de fichier principaux
    include_once '_config/config.php';
    include_once '_config/database.php';
    include_once '_functions/function.php';
    include_once '_classes/Autoloader.php';
    Autoloader::register();
    


    //definition de la page courante
    if(isset($_GET['page']) && !empty($_GET['page']))
        {
            $page = trim(strtolower($_GET['page']));
        }

    else{
        $page = 'home'; //default page
    }

    //all pages
    $allPages = scandir('_controllers/');

    //verification de l'existence de la page
    if(in_array($page.'_controller.php', $allPages))
        {
            //inclusion de page
            include_once 'models/'.$page.'_model.php';
            include_once '_controllers/'.$page.'_controller.php';
            include_once 'views/'.$page.'_view.php';
        }

    else{
        //page introuvable
        echo ' erreur 404';
    }

    Database::disconnect();

?>