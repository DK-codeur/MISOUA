<?php

    class Commune
        {
            public $id;
            public $nom;

            function __construct($id)
                {
                    global $db;
                    $id = str_secure($id);

                    $req = $db->prepare('SELECT * FROM communes WHERE id_commune = ?');
                    $req->execute([$id]);
                    $data = $req->fetch();

                    $this->id = $id;
                    $this->nom = $data['nom'];
                }

            static function getAllCommune()
                {
                    global $db;

                    $req = $db ->prepare('SELECT * FROM communes ORDER BY nom ASC');
                    $req->execute([]);
                    return $req->fetchAll();
                }
        }

?>