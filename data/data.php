<?php
$listjoueur = $bdd->prepare("SELECT * FROM users");
$listjoueur->execute();
$result = $listjoueur->fetchAll();
$total_row = $listjoueur->rowCount();


function getConnection($login, $password) {
global $bdd;
$data = $bdd->prepare("SELECT * FROM users WHERE login= :login");
$data->execute([
        'login' => $login
]);
$result = $data->fetch();

        if ($result == true) {
//le compte existe bien
if ($password == $result['password']) {
        //
        $_SESSION['loggedIN'] = '1';
        $_SESSION['login'] = $login;
} else {
        echo 'le mot de passe n\'est pas correcte!!';
}
} else {
        echo 'le login ' . $login. ' n\'existe pas!!';
}
if($data->rowCount() > 0){
        
        $user = $data -> fetch(PDO::FETCH_ASSOC);
        $profile = $user['profile'];    
        return $user;
   }
   else{
        return null;
   }
}


function getUserAdd($name, $login, $password, $password2, $photo) {
global $bdd;
if ($password === $password2) {
        $result = 0;
        if(isset($_SESSION['user'])){ //c'est un admin qui ajoute un autre admin
            $profile = 'admin';
        
        }
      else{ //c'est un joueur qui s'inscrit
         $profile = 'joueur';
      
      }
        $options = [
                'cost' => 12,
        ];
                $hashpass = password_hash($password, PASSWORD_BCRYPT, $options);
                $photo = $_FILES['photo']['name'];
$dossier = 'public/img/';
$fichier = basename($_FILES['photo']['name']);
move_uploaded_file($_FILES['photo']['tmp_name'], $dossier . $fichier);
                $c = $bdd->prepare("SELECT login FROM users WHERE login= :login");
$c->execute([
        'login' => $login
]);
$result = $c->rowCount();

if ($result == 0) {
        $q = $bdd->prepare("INSERT INTO users(name,login,password,profile,score,statut,photo) VALUES(:name,:login,:password,:profile,:score,:statut,:photo)");
        $q->execute([
        'name' => $name,
        'login' => $login,
        'password' => $password,
        'profile' => $profile,
        'score' => '',
        'statut' => 'actif',
        'photo' => $photo

        ]);
        echo 'success';
        header('Location: index.php');

} else {
        echo 'le login existe déja!!!';
}    
                
        } else {
        echo 'les mots de passes ne sont pas identiques';
        }

}


function getUserAddAdmin($name, $login, $password, $password2, $photo) {
global $bdd;
if ($password === $password2) {
        $options = [
                'cost' => 12,
        ];
                $hashpass = password_hash($password, PASSWORD_BCRYPT, $options);
                $photo = $_FILES['photo']['name'];
$dossier = 'public/img/';
$fichier = basename($_FILES['photo']['name']);
move_uploaded_file($_FILES['photo']['tmp_name'], $dossier . $fichier);
                $c = $bdd->prepare("SELECT login FROM users WHERE login= :login");
$c->execute([
        'login' => $login
]);
$result = $c->rowCount();

if ($result == 0) {
        $q = $bdd->prepare("INSERT INTO users(name,login,password,profile,score,statut,photo) VALUES(:name,:login,:password,:profile,:score,:statut,:photo)");
        $q->execute([
        'name' => $name,
        'login' => $login,
        'password' => $password,
        'profile' => 'admin',
        'score' => '',
        'statut' => 'actif',
        'photo' => $photo

        ]);
        echo 'success';
        header('Location: index.php');

} else {
        echo 'le login existe déja!!!';
}    
                
        } else {
        echo 'les mots de passes ne sont pas identiques';
        }

}

?>