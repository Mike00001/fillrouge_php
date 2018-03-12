<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=fillrouge;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
// On récupère les 5 derniers billets
$req = $bdd->query('SELECT title, content, image, DATE_FORMAT(date_updated, \'%d/%m/%Y \') AS date_creation_fr, nom, prenom, avatar FROM blog join user on blog.user_id = user.id_user ORDER BY date_creation_fr DESC LIMIT 0,5 ');
while ($donnees = $req->fetch())
{
?>
<article class="post">
    <header>
        <div class="title">
            <h2><?php echo htmlspecialchars($donnees['title']); ?></h2>
        </div>
        <div class="meta">
            <time class="published"><?php echo $donnees['date_creation_fr']; ?></time>
            <a href="#" class="author"><span class="name"><?php echo $donnees['nom']." ".$donnees['prenom']; ?></span>
                <img style=width:50px src="../filRougeMike/images/avatar/<?php echo $donnees['avatar'];?>"/></a>
        </div>
    </header>
    <a href="#" class="image featured">
        <img src="../filRougeMike/images/blog/<?php echo $donnees['image'];?>"/></a>
    <p>
    <?php echo $donnees['content']; ?>
    </p>
    <footer>
        <ul class="actions">
            <li><a href="https://www.facebook.com/notes/comit%C3%A9-de-quartier-notre-dame-aux-neiges/durable-vous-avez-dit-durable/349463798782004/" class="button big">Continuer a lire</a></li>
        </ul>
        <ul class="stats">
            <li><a href="#">General</a></li>
            <li><a href="#" class="icon fa-heart">28</a></li>
            <li><a href="#" class="icon fa-comment">128</a></li>
        </ul>
    </footer>
</article>

<?php
} // Fin de la boucle des billets
$req->closeCursor();
?>