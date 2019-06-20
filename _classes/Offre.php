<?php
    class Offre
        {
            public $id;
            public $nom;

            function __construct($id)
                {
                    global $db;
                    $id = str_secure($id);

                    $req = $db->prepare('SELECT * FROM offres WHERE id_offre = ?');
                    $req->execute([$id]);
                    $data = $req->fetch();

                    $this->id = $id;
                    $this->nom = $data['nom'];

                }

            static function getAlloffre()
                {
                    global $db;
                    $req = $db->prepare('SELECT * FROM offres');
                    $req->execute([]);
                    return $req->fetchAll();
                }

        }