<?php
    $allCommunes = Commune::getAllCommune();

    $nom = $prenoms = $naissance = $email = $telephone = $commune = $pass = "";
    $nomError = $prenomsError = $naissanceError = $emailError = $telephoneError = $communeError = $passError = $error = "";
    $isSuccess = false;
    $emailOk  = false;
    $regOk = false;

    if( isset($_POST) && !empty($_POST))
        {
            $nom       = verifInput($_POST['nom']);
            $prenoms   = verifInput($_POST['prenoms']);
            $naissance = verifInput($_POST['naissance']);
            $email     = verifInput($_POST['email']);
            $telephone = verifInput($_POST['telephone']);
            $commune   = verifInput($_POST['commune']);
            $pass      = verifInput($_POST['pass']);

            $isSuccess = true;
            $emailOk = true;

            if(empty($nom))
                {
                    $nomError = 'votre nom svp';
                    $isSuccess = false;
                }

            if(empty($prenoms))
                {
                    $prenomsError = 'votre prenoms svp';
                    $isSuccess = false;
                }

            if(empty($naissance))
                {
                    $naissanceError = 'date de naissance';
                    $isSuccess = false;
                }

            if(!verifEmail($email))
                {
                    $emailError = 'email invalide';
                    $isSuccess = false;
                }

            else
                {
                    $req = User::getEmail($email);
                    if($req)
                        {
                            $emailError = 'cet email existe deja';
                            $emailOk = false;
                            $isSuccess = false;
                        }
                }

            if(!verifPhone($telephone))
                {
                    $telephoneError = 'numero incorrect';
                    $isSuccess = false;
                }

            if(strlen($telephone) < 8 )
                {
                    $telephoneError = 'numero trop court';
                    $isSuccess = false;
                }

            if(empty($commune))
                {
                    $communeError = 'Votre commune svp';
                    $isSuccess = false;                 
                }

            if(empty($pass) || (strlen($pass) < 4) )
                {
                    $passError = 'Entre un pass (min : 4)';
                    $isSuccess = false;
                }

            //----------------------------

            if($isSuccess && $emailOk)
                {
                    $req = User::insertUser($nom, $prenoms, $naissance, $email, $telephone, $commune, md5($pass)); 
                    
                    $regOk = true;
                    header('refresh:3;url=login');

                    // $error = "Erreur lors de l'enregistrement !";
                }

        }



?>