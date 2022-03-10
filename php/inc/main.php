<main class="right">
    <h2 class="right__title"><?= $tableauArticle["titre"]; ?></h2>
    <article class="post-article-unique">
    <a href="" class="post__category post__category--color-<?= $tableauArticle["categorie"]; ?>"><?= $tableauArticle["categorie"]; ?></a>
      <div class="post__meta">
        <img class="post__author-icon" src="<?= $tableauArticle["imageDeLAuteur"]; ?>" alt="">
        <strong class="post__author"><?= $tableauArticle["auteur"]; ?></strong>
        <time datetime="<?= $tableauArticle["dateReferencement"]; ?>"><?= $tableauArticle["dateDePublication"]; ?></time>
      </div>
      <p><?= $tableauArticle["texte"]; ?></p>
      <a href="index.php" class="post__link">Back to home</a>
    </article>
  </main>
</body>
</html>