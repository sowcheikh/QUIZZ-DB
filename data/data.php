<?php
$listjoueur = $bdd->prepare("SELECT * FROM users");
                $listjoueur->execute();
                $result = $listjoueur->fetchAll();
                $total_row = $listjoueur->rowCount();

?>