<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styl.css" type="text/css" />
        <title>Objektová galerie v PHP</title>
    </head>
    <body>


        <?php
        
        require_once 'tridy/Galerie.php';
        
        $galerie = new Galerie('obrazky', 3);
        $galerie->nacti();
        $galerie->vypis();

// put your code here
        ?>


    <footer>
<nav>
            <ul>
                <li><a class="kontakt-tlacitko" href="index.html">Domu</a></li>
            </ul>
    </nav>

    </footer>

    </body>
</html>
