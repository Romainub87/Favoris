<?php
if (isset($_POST['nom_page'])) {
    $nom_site = $_POST['nom_page'];
    $image_site = $_POST['image_page'];
    $lien_site = $_POST['lien_page'];
    $icone =  "<div class='liens' style='text-align:center;'>
    <h3>$nom_site</h3>
    <a href=$lien_site><img src=$image_site alt='image_site'></a>
    </div>";
    file_put_contents("Page_ajout.php",$icone, FILE_APPEND);
    header('Location:index.php');
}
?>