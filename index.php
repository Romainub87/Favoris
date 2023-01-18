<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Pages Favorites</title>
    <link rel="stylesheet" href="page_accueil.css">
</head>

<body>
    <nav id="nav">
        <ul>
            <li class="deroulant"><a href="#">Pages Favorites</a>
                <ul class="submenu">
                    <li><a href="https://romainub87.github.io/Favoris/ajout_page">Ajout de page</a></li>
                    <li><a href="vider_page.php">Vider la page</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="Pages">

        <?= 
        file_get_contents('Page_ajout.php');

        if (filesize("Page_ajout.php")==0){
            echo "<h1 id='warning'>Un peu vide par ici...</h1>";
        }
        ?>

    </div>
</body>

</html>