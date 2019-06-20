<?php
    class Categorie
        {
            public $id;
            public $nom;

            function __construct($id)
                {
                    global $db;
                    $id = str_secure($id);

                    $req = $db->prepare('SELECT * FROM categories WHERE id_categorie = ?');
                    $req->execute([$id]);
                    $data = $req->fetch();

                    $this->id = $id;
                    $this->nom = $data['nom'];

                }

            static function getAllcategorie()
                {
                    global $db;
                    $req = $db->prepare('SELECT * FROM categories');
                    $req->execute([]);
                    return $req->fetchAll();
                }

        }