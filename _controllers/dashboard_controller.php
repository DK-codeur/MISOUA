<?php
    isLogged();

    $allPubByUsers = Pub::getPubByUser($_SESSION['user']['id_user']);
