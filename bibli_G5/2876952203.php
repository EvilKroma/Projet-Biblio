<!DOCTYPE html>
<html lang="fr">

<?php
$pageTitle = "Tome 10";
?>
<?php require "header.php"; ?>

<body>

    <?php require "nav.php"; ?>

    <div class="marge-bandeau"></div>

    <div class="contenu-scrollable">
        <div class="image-fixe">
            <img class="couverture_livre" src="../Addons/Images_de_couverture/2876952203.jpg" alt="2876952203"> <!--Changer l'image de couverture-->
            <button id="plein-ecran">Plein écran</button>
        </div>

        <div class="texte-défilant">
            <h1>Dragon Ball, Tome 10 : Le Miraculé</h1> <!--Changer Tire du livre-->
            <p>Sangoku et ses amis font face à de nouveaux défis, des ennemis redoutables et des révélations inattendues alors qu'ils continuent leur voyage.</p> <!--Changer le résumé-->
        </div>
    </div>

    <div class="book-info">
        <h3>Informations supplémentaires :</h3> <!--Changer les infos supp sauf auteur, genre et langues-->
        <ol>
            <li>n° ISBN : 2876952203 </li>
            <li>Auteur(s) et éditeur(s) : Akira Toriyama </li>
            <li>Date de publication : 11 juillet 1994 </li>
            <li>Genre : manga </li>
            <li>Langue(s) : Français, Chinois </li>
        </ol>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            let pleinEcranActif = false;
            const boutonPleinEcran = document.getElementById('plein-ecran');
            const image = document.querySelector('.couverture_livre');

            boutonPleinEcran.addEventListener('click', () => {
                if (!pleinEcranActif) {
                    const largeurFenetre = window.innerWidth;
                    const hauteurFenetre = window.innerHeight;

                    const ratioImage = image.naturalWidth / image.naturalHeight;
                    const ratioFenetre = largeurFenetre / hauteurFenetre;

                    if (ratioImage > ratioFenetre) {
                        image.style.width = '90%';
                        image.style.height = 'auto';
                    } else {
                        image.style.width = 'auto';
                        image.style.height = '90%';
                    }

                    image.style.position = 'fixed';
                    image.style.top = '50%';
                    image.style.left = '50%';
                    image.style.transform = 'translate(-50%, -50%)';
                    image.style.zIndex = '9999';
                    image.style.backgroundColor = 'rgba(0, 0, 0, 0.9)';

                    pleinEcranActif = true;
                } else {
                    
                    image.style.width = '';
                    image.style.height = '';
                    image.style.position = '';
                    image.style.top = '';
                    image.style.left = '';
                    image.style.transform = '';
                    image.style.zIndex = '';
                    image.style.backgroundColor = '';

                    pleinEcranActif = false; 
                }
            });
        });
    </script>
    <?php require "footer.php"; ?>
</body>

</html>
