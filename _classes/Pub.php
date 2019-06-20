<?php
    class Pub
        {
            public $id;
            public $titre;
            public $id_categorie;
            public $id_offre;
            public $id_user;
            public $prix;
            public $piece;
            public $surface;
            public $description;
            public $image1;
            public $image2;
            public $image3;
            public $createAt;
            


            function __construct($id)
                {
                    global $db;
                    $id = str_secure($id);
                    $req = $db->prepare('SELECT pu.*, us.nom, us.prenoms, cat.nom, of.nom
                                         FROM pubs pu
                                         INNER JOIN  categories cat ON cat.id_categorie = pu.id_categorie
                                         INNER JOIN offres of ON of.id_offre = pu.id_offre
                                         INNER JOIN users us ON us.id_user = pu.id_user
                                         WHERE pu.id_pub = ?
                                        ');
                    $req-> execute([$id]);
                    $data = $req->fetch();

                    $this->id           = $id;
                    $this->titre        = $data['titre'];
                    $this->id_user      = $data['id_user'];
                    $this->id_categorie = $data['id_categorie'];
                    $this->id_offre     = $data['id_offre']; 
                    $this->prix         = $data['prix'];
                    $this->id_commune   = $data['id_commune'];
                    $this->piece        = $data['piece'];
                    $this->surface      = $data['surface'];
                    $this->description  = $data['description'];
                    $this->image1       = $data['image1'];
                    $this->image2       = $data['image2'];
                    $this->image3       = $data['image3'];
                    $this->createAt     = $data['createAt'];
                    
                }

            
            static function getAllPub()
                {
                    global $db;
                    $req = $db->prepare('SELECT pu.*, us.nom, us.prenoms, cat.nom AS categorie, com.nom AS commune, of.nom AS offre  
                                         FROM pubs pu
                                         INNER JOIN categories cat ON cat.id_categorie = pu.id_categorie
                                         INNER JOIN offres of ON of.id_offre = pu.id_offre
                                         INNER JOIN users us ON us.id_user = pu.id_user
                                         INNER JOIN communes com ON com.id_commune = pu.id_commune
                                       ');
                    $req->execute([]);
                    return $req->fetchAll();
                }

            static function insertPub($titre, $categorie, $offre, $user, $prix, $commune, $piece, $surface, $description, $image1, $image2, $image3)
                {
                    global $db;
                    $req = $db->prepare('INSERT INTO `pubs`(`titre`, `id_categorie`, `id_offre`, `id_user`, `prix`, `id_commune`, `piece`, `surface`, `description`, `image1`, `image2`, `image3`)
                                         VALUES(?,?,?,?,?,?,?,?,?,?,?,?)
                                        ');
                    $req->execute([$titre, $categorie, $offre, $user, $prix, $commune, $piece, $surface, $description, $image1, $image2, $image3]);
                }


              static function verifPubId($id)
                {
                    global $db;
                    $id = str_secure($id);

                    $req = $db->prepare('SELECT * FROM pubs WHERE id_pub = ?');
                    $req->execute([$id]);
                    return $req->fetch();
                }

             static function getPubById($id)
                {
                    global $db;
                    $id = str_secure($id);
                    $req = $db->prepare('SELECT pu.*, us.nom, us.prenoms, cat.nom AS categorie, com.nom AS commune, of.nom AS offre
                                         FROM pubs pu
                                         INNER JOIN categories cat ON cat.id_categorie = pu.id_categorie
                                         INNER JOIN offres of ON of.id_offre = pu.id_offre
                                         INNER JOIN users us ON us.id_user = pu.id_user
                                         INNER JOIN communes com ON com.id_commune = pu.id_commune
                                         WHERE pu.id_pub = ?
                                        ');
                    $req-> execute([$id]);
                    return $req->fetch();
            
                }

            static function getPubByUser($id)
                {
                    global $db;
                    $id = str_secure($id);
                    $req = $db->prepare('SELECT pu.*, us.id_user, cat.nom AS categorie, com.nom AS commune, of.nom AS offre
                                         FROM pubs pu
                                         INNER JOIN categories cat ON cat.id_categorie = pu.id_categorie
                                         INNER JOIN offres of ON of.id_offre = pu.id_offre
                                         INNER JOIN users us ON us.id_user = pu.id_user
                                         INNER JOIN communes com ON com.id_commune = pu.id_commune
                                         WHERE us.id_user = ?
                                        ');
                    $req->execute([$id]);
                    return $req->fetchAll();
                }
        }