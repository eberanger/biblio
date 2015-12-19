<?php
/*
*  Connecteur à la base de donnée
*/
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'mdp');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
