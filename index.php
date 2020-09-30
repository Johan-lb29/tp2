<!--Affichage-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Mon Blog</title>
    </head>
    <header>
        <a href="index.php"><h1 id="titreBlog">Mon Blog</h1></a>
        <p>Je vous souhaite la bienvenue sur ce modeste blog.</p>
    </header>
    <body>
        <div id="global">
          <div id="contenu">
            <?php require 'Modele.php'; $billets = getBillets(); require 'vueAccueil.php';
            ?>
        </div>
      </div>
      <footer id="piedBlog">
          Blog réalisé avec PHP, HTML5 et CSS.
      </footer>
    </body>
</html>
