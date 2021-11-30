 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>


<?php

    // Array
    $tableau = array (
        "Pommes",
        "Poires",
        "Oranges",
        "Légumes",
        "Haricots verts",
        "Tomates",
        "Autres",
        "Gâteaux",
        "Bonbons",
        "Savon"
    );
    ?>

        <h2>Liste de courses :</h2>
        <ul>
            <?php foreach ($tableau as $element) // foreach sur les éléments du tableau
            {
                   echo "<li>".$element."</li>" ; // J'affiche tous les éléments du tableau
            } ?>
        </ul>


    
    <?php
    $tableau = array (
            "Fruits" => array ("Pommes", "Poires", "Oranges"),
            "Légumes" => array("Haricots verts", "Tomates") ,
            "Autres" => array("Gâteaux", "Bonbons", "Savon")
    );
    ?>
        <h2>Liste de courses par catégories :</h2>
        <ul>
            <?php foreach ($tableau as $categorie => $valeurs)
            {
                echo "<li>".$categorie."</li>" ; // j'affiche la catégorie au premier niveau de ma liste
                echo "<ul>" ; // et je créé un second niveau pour afficher les éléments de la catégorie en décalé
                foreach ($valeurs as $element) // j'itère sur les éléments de cette catégorie
                {
                    echo "<li>".$element."</li>" ; //je les affiche
                }
                echo "</ul>" ; // fin catégorie
            } ?>
        </ul>

 </body>
 </html>