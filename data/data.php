<?php
try
{
        $bdd = new PDO('mysql:host=mysql-quizzsadevdoc.alwaysdata.net;dbname=quizzsadevdoc_cheikh;charset=utf8', '207855', 'Dagana5212?');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

?>