<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Ajouter une page fav</title>
        <link rel="stylesheet" href="page_ajout.css">
    </head>
    <body>
    <nav id="nav">
        <ul>
            <li class="deroulant"><a href="#">Pages Favorites</a>
                <ul class="submenu">
                    <li><a href="index.php">Consulter les favoris</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <h1>Ajout de page</h1>
        <form method="post" action="traitement.php">
            <p>Nom de la page favorite : <input type="text" id="nom_page" name="nom_page" ></p>
            <p>Url du logo du lien : <input type="url" id="image_page" name="image_page" ></p>
            <p>Url de la page : <input type="url" id="lien_page" name="lien_page" ></p>
            <input id="ajouter" type="submit" name="ajouter" value="Ajouter">
        </form>
    </body>
    
</html>