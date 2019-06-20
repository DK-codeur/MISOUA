<?php
    $email = $pass = $emailError = $passError = $error = "";
    $isSuccess = false;
    $emailOk = false;
    $msg = true;

    if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST))
        {

            $email = verifInput($_POST['email']);
            $pass = verifInput($_POST['pass']);

            $isSuccess = true;
            $emailOk = true;

            if(empty($email))
                {
                    $emailError = 'Entrez votre email';
                    $isSuccess = false;
                }

            if(!verifEmail($email))
                {
                    $emailError = 'Email invalide';
                    $isSuccess = false;
                    $emailOk = false;
                }

            if(empty($pass))
                {
                    $passError = 'Entrez votre pass';
                    $isSuccess = false;
                }

            //------------------
            if($isSuccess && $emailOk)
                {
                    $user = User::getEmailPass($email, md5($pass) ); //password_hash($pass, PASSWORD_BCRYPT)

                    if($user != false)
                        {
                            $_SESSION['user'] = $user;

                            if($_SESSION['isAdmin'] == 0 && $_SESSION['isBlock'] == 0 )
                                {
                                    header('location:home');
                                    exit();
                                }  

                            if ($_SESSION['isAdmin'] == 1)
                                {
                                    header('location:admin');
                                    exit();
                                }
                              
                        }

                    else{
                        $error = 'Email ou mot de passe incorrect';
                        $isSuccess = false;
                    }
                }

            
        }