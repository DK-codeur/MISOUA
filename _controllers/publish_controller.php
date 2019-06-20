<?php
isLogged();
    $allCategories = Categorie::getAllcategorie();
    $allOffres = Offre::getAlloffre();
    $allCommunes = Commune::getAllCommune();

    $titre = $categorie = $offre = $user = $prix = $commune = $piece = $surface = $description = $image1 = $image2 = $image3 = "";
    $verifImg1 = $verifImg2 = $verifImg3 = "";
    $image1_file = $image1_file2 = $image1_file3 = "";
    $titreError = $categorieError = $offreError = $userError = $prixError = $communeError = $pieceError = $$surfaceError = $descriptionError = $image1Error = $image2Error = $image3Error = "";

    $isSuccess = false;

    if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST))
        {
            $titre          = verifInput($_POST['titre']);
            $categorie      = verifInput($_POST['categorie']);
            $offre          = verifInput($_POST['offre']);
            $prix           = verifInput($_POST['prix']);
            $commune        = verifInput($_POST['commune']);
            $piece          = verifInput($_POST['piece']);
            $surface        = verifInput($_POST['surface']);
            $description    = verifInput($_POST['description']);

            $image1_file = $_FILES['image1'];
            $image2_file = $_FILES['image2'];
            $image3_file = $_FILES['image3'];

            $verifImg1 = $_FILES['image1']['name'];
            $verifImg2 = $_FILES['image2']['name'];
            $verifImg3 = $_FILES['image3']['name'];

            $isSuccess = true;

            if(empty($titre))
                {
                    $titreError = 'Entez un titre';
                    $isSuccess = false;
                }

            if(empty($categorie))
                {
                    $categorieError = 'choisissez une categorie';
                    $isSuccess = false;
                }

            if(empty($prix))
                {
                    $prixError = 'Entre un prix';
                    $isSuccess = false;
                }

            if(empty($offre))
                {
                    $offreError = 'choisissez une offre';
                    $isSuccess = false;
                }

            if(empty($commune))
                {
                    $communeError = 'choisissez une commune';
                    $isSuccess = false;
                }

            if(empty($piece))
                {
                    $pieceError = 'Entrez le nombre de piece';
                    $isSuccess = false;
                }

            if(empty($surface))
                {
                    $surfaceError = 'Entrez la surface';
                    $isSuccess = false;
                }

            if(empty($description))
                {
                    $descriptionError = 'decrivez en quelque lines';
                    $isSuccess = false;
                }

            //------------------------------------------------------

             if(empty($verifImg1))
                {
                    $image1Error ='Choisissez une image';
                    $isSuccess  = false;
                } 
                
            if(empty($verifImg2))
                {
                    $image2Error ='Choisissez une image';
                    $isSuccess  = false;
                }

            if(empty($verifImg3))
                {
                    $image3Error ='Choisissez une image';
                    $isSuccess  = false;
                }
                
            //------------------------------------------------------
            


            if($isSuccess)
                {
                    $image1 = importImg2($image1_file, $titre.'1');
                    $image2 = importImg2($image2_file, $titre.'2');
                    $image3 = importImg2($image3_file, $titre.'3');

                    $user = $_SESSION['user']['id_user'];
                    $published = Pub::insertPub($titre, $categorie, $offre, $user, $prix, $commune, $piece, $surface, $description, $image1, $image2, $image3);
                    $titre = $categorie = $offre = $user = $prix = $commune = $piece = $surface = $description = $image1 = $image2 = $image3 = "";

                    header('refresh:5;url=home');

                    // echo "<script> alert('publier avec success') </script>";

                    echo '<script src="assets/mdb/js/sweetalert/sweetalert.min.js"></script>';
                    echo " alert '<script>                          
                        swal({
                                title: 'Publier avec success! wait... ',
                                text: '  ',
                                icon: 'success',
                                button: false,
                                timer: 3000
                            })
                    </script>' ";

                }
                
        }





            // $image1         = $_FILES['image1']['name'];
            // $image2         = $_FILES['image2']['name'];
            // $image3         = $_FILES['image3']['name'];



            // //------------------------------------------------------------------

            // if(!empty($image1))
            //     {
            //         importImg('assets/images/pubs/', $_FILES['image1']);
            //         $isSuccess = true;
            //     }
            // else{
            //     $image1Error = 'choisissez une image';
            //     $isSuccess = false;
            // }

            // if(!empty($image2))
            //     {
            //         importImg('assets/images/pubs/', $_FILES['image2']);
            //         $isSuccess = true;
            //     }
            // else{
            //     $image2Error = 'choisissez une image';
            //     $isSuccess = false;                
            // }
            

            // if(!empty($image3))
            //     {
            //         importImg('assets/images/pubs/', $_FILES['image3']);
            //         $isSuccess = true;
            //     }
            // else{
            //     $image3Error = 'choisissez une image';

            //     $isSuccess = false;
            // }
            
            // //------------------------------------------------------------------