<!-- Main -->
					<div id="main">

						<!-- Post -->
						
						
							
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
$req = $bdd->query('SELECT title, content, image, DATE_FORMAT(date_updated, \'%d/%m/%Y \') AS date_creation_fr, nom, prenom, avatar FROM user, blog_categories JOIN blog on blog_categories.id_blog = blog.id_blog
WHERE blog_categories.id_categories = 4
GROUP BY date_updated DESC ');
                        
                
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
            <a href="#" class="author"><span class="name"><?php echo $donnees['nom'],$donnees['prenom']; ?></span><img src="<?php echo $donnees['avatar']; ?>"  /></a>
        </div>
    </header>
    <a href="#" class="image featured"><img src="<?php echo $donnees['image']; ?>"  /></a>
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


                    
                    
						<!-- Pagination -->
							<ul class="actions pagination">
								<li><a href="" class="disabled button big previous">Previous Page</a></li>
								<li><a href="#" class="button big next">Next Page</a></li>
							</ul>

					</div>