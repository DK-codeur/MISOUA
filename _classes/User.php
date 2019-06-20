<?php

    class User
        {
            public $id;
            public $nom;
            public $prenoms;
            public $naissance;
            public $email;
            public $telephone;
            public $commune;
            public $pass;
            public $regAt;
            public $isAdmin;
            public $isBlock;

            function __construct($id)
                {
                    global $db;
                    $id = str_secure($id);

                    $req = $db->prepare('SELECT * FROM users WHERE id_user = ?');
                    $req->execute([$id]);
                    $data = $req->fetch();

                    $this->id        = $id;
                    $this->nom       = $data['nom'];
                    $this->prenoms   = $data['prenoms'];
                    $this->naissance = $data['naissance'];
                    $this->email     = $data['email'];
                    $this->telephone = $data['telephone'];
                    $this->commune   = $data['commune'];
                    $this->pass      = $data['pass'];
                    $this->regAt     = $data['regAt'];
                    $this->isAdmin   = $data['isAdmin'];
                    $this->isBlock   = $data['isBlock'];
                }


            static function getAlluser() 
                {
                    global $db;
                    $req = $db->prepare('SELECT * FROM users');
                    $req->execute([]);
                    return $req->fetchAll();
                }

            static function getUser($id)
                {
                    global $db;
                    $id = str_secure($id);

                    $req = $db->prepare('SELECT * FROM user WHERE id_user = ?');
                    $req->execute([$id]);
                    return $req->fetch();
                }

            static function updateUser($nom,$prenoms,$naissance,$email,$telephone,$commune,$passe,$id)
                {

                    global $db;
                    $req = $db->prepare('UPDATE user 
                                         SET nom=?, prenoms=?, naissance=?, email=?, telephone=?, passe=?, img=?
                                         WHERE id_user=?
                                        ');
                    $req->execute([$nom,$prenoms,$naissance,$email,$telephone,$commune,$passe,$id]);
                
                }

            static function updateUserWithout($nom,$prenoms,$naissance,$email,$telephone,$passe,$id)
                {
                    global $db;
                    $req = $db->prepare('UPDATE user 
                                         SET nom=?, prenoms=?, naissance=?, email=?, telephone=?, passe=?
                                         WHERE id_user=?
                                        ');
                    $req->execute([$nom,$prenoms,$naissance,$email,$telephone,$passe,$id]);
                    return $req->fetch();
                }

            // static function noImage($id,$nom,$prenoms,$naissance,$email,$telephone,$passe)
            //     {
            //         global $db;
            //         $req = $db->prepare('UPDATE user 
            //                              SET nom=?, prenoms=?, naissance=?, email=?, telephone=?, passe=?
            //                              WHERE id_user=?
            //                             ');
            //         $req->execute([$nom,$prenoms,$naissance,$email,$telephone,$passe,$id]);
            //     }

            static function getLastUser()
                {
                    global $db;
                    $req = $db->prepare('SELECT * FROM user 
                                         ORDER BY id_user DESC
                                         LIMIT 1
                                       ');
                    $req->execute([]);
                    return $req->fetch();
                }

            static function insertUser($nom, $prenoms, $naissance, $email, $telephone, $commune, $pass)
                {
                    global $db;
                    
                    $req = $db->prepare('INSERT INTO `users`(`nom`, `prenoms`, `naissance`, `email`, `telephone`, `id_commune`, `pass`)
                                         VALUES(?,?,?,?,?,?,?)      
                                       ');
                    $req->execute([$nom, $prenoms, $naissance, $email, $telephone, $commune, $pass]); 
                    
                }

            static function getEmail($email)
                {
                    global $db;
                    $req = $db->prepare('SELECT * FROM users WHERE email = ?');
                    $req->execute([$email]);
                    return $req->fetch();
                }

            static function getEmailPass($email, $pass)
                {
                    global $db;
                    $req = $db->prepare('SELECT * FROM  users WHERE email = ? AND pass = ?');
                    $req->execute([$email,$pass]);  
                    return $req->fetch();
                }

            static function getLastid()
                {
                    global $db;
                    $req = $db->prepare('SELECT MAX(id_user) FROM user');
                    $req->execute([]);
                    return $req->fetch();
                }

            static function getUserById($id)
                {
                    global $db;
                    $id = str_secure($id);
                    $req = $db->prepare('SELECT us.*, com.nom AS commune
                                         FROM users us
                                         INNER JOIN communes com ON com.id_commune = us.id_commune
                                         WHERE us.id_user = ?
                                        ');

                    $req->execute([$id]);
                    return $req->fetch();
                }

            
        }






   
