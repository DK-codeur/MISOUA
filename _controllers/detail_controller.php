<?php
    if(isset($_GET['id']) && !empty($_GET['id']))
        {
            $id = str_secure($_GET['id']);
        }

    $foundPub = Pub::verifPubId($id);
    if($foundPub)
        {
            $allPubByIds = Pub::getPubById($id);

            $auth_pub = $allPubByIds['id_user'];
            $userByIds = User::getUserById($auth_pub);
        }

    else {
        header('location:home');
        exit();
    }
  

        

    

