<!DOCTYPE html>
<html lang="fr">
    
<?php
$pageTitle = "DBZ'LIB";
?>
<?php require "header.php"; ?>

<body>
    
    <div class="marge-bandeau"></div>
    
    <?php require "nav.php"; ?>

    <ul class="book_list">
        <?php
        
        include 'connexion_bdd.php';

        $images = [
            "287695205X",
            "2876952068", 
            "2876952076",
            "2876952106",
            "2876952114",
            "2876952122",
            "2876952173",
            "2876952181",
            "287695219X", 
            "2876952203"
        ];

        $urls = [
            "287695205X.php",
            "2876952068.php",
            "2876952076.php",
            "2876952106.php",
            "2876952114.php",
            "2876952122.php",
            "2876952173.php",
            "2876952181.php",
            "287695219X.php",
            "2876952203.php"
        ];

        $query = "  SELECT titre, annee, personne.nom, personne.prenom
                    FROM livre
                    JOIN Auteur ON auteur.idLivre = livre.isbn
                    JOIN Personne ON auteur.idpersonne = personne.id";

        $result = mysqli_query($link, $query);

        if (!$result) {
            echo "Erreur : Impossible de récupérer les données";
            exit;
        }

        $counter = 0; 
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li>";
            echo "<div class='Tome'>";
            echo "<a href='http://localhost/Projet-Biblio/bibli_G5/{$urls[$counter]}' class='lien'>"; 
            echo "<img src='../Addons/Images_de_couverture/{$images[$counter]}.jpg' >";
            echo "<p class='nom_livre'>" . $row['titre'] . "</p>";
            echo "<p>" . $row['nom']  . $row['prenom'] . " | " . $row['annee'] . "</p>";
            echo "</a>";
            echo "</div>";
            echo "</li>";

            $counter++;
        }

        mysqli_free_result($result);
        mysqli_close($link);
        ?>
    </ul>
    
</body>
</html>
