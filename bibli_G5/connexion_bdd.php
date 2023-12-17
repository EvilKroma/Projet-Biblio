<?php
$link = mysqli_connect("localhost", "root", "", "g05");

if (!$link) {
    echo "Erreur : Impossible de se connecter à MySQL";
    exit;
}

echo "Succès : une connexion correcte à MySQL a été faite";
echo "La base de données g05 a été ouverte";
?>
