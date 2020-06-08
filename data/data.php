<?php
require("db/connexion.php");
function getUserConnection($login, $password) {
    if (!empty($login) && !empty($password)) {
        global $bdd;
                $data = $bdd->prepare("SELECT * FROM users WHERE login= :login");
                $data->execute([
                    'login' => $login
                ]);
                $result = $data->fetch();

                 if ($result == true) {
                //le compte existe bien
                if ($password == $result['password']) {
                    header('Location: index.php?page=./src/pages/admin/admin');
                } else {
                    echo 'le mot de passe n\'est pas correcte!!';
                }
                } else {
                    echo 'le login ' . $login. ' n\'existe pas!!';
                }

    }
}

function getUserSubscribe($name, $login, $password, $password2, $profile, $score, $statut, $photo) {
        global $bdd;
        $photo = $_FILES['photo']['name'];
    if (!empty($name) && !empty($login) && !empty($password) && !empty($password2)) {
        if ($password === $password2) {
            $options = [
                'cost' => 12,
            ];
                $hashpass = password_hash($password, PASSWORD_BCRYPT, $options);
                    $dossier = 'public/img/';
                    $fichier = basename($_FILES['photo']['name']);
                    move_uploaded_file($_FILES['photo']['tmp_name'], $dossier . $fichier);
                
                $c = $bdd->prepare("SELECT login FROM users WHERE login= :login");
                $c->execute([
                    'login' => $login
                ]);
                $result = $c->rowCount();

                if ($result == 0) {
                    $q = $bdd->prepare("INSERT INTO users(name,login,password,profile,scrore,statut,photo) VALUES(:name,:login,:password,:profile,:score,:statut,:photo)");
                    $q->execute([
                        'name' => $name,
                        'login' => $login,
                        'password' => $password,
                        'profile' => 'joueur',
                        'score' => '',
                        'statut' => 'actif',
                        'photo' => $photo

                    ]);
                //     header('Location: index.php');

                } else {
                    echo 'le login existe déja!!!';
                }
        } else {
           echo 'les mots de passes ne sont pas identiques';
        }

 
    } else {
        echo'remplir les champs!!';
    }
}













?>