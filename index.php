<?php
include_once("templates/header.php");
?>

<main>
  <div id="title-container">
    <h1>Blog Codar -Teste- Juliana</h1>
    <p>Vamos aprender juntos!</p>
  </div>

  <div id="posts-container">
    <?php foreach($posts as $post): ?>
    <div class="post-box">
        <img src="<?= $BASE_URL ?>/img/<?=$post['img']?>" alt="<?=$post['title']?>"><!--Imagem e título do post-->
        <h2 class="post-title"><a href="<?= $BASE_URL ?>post.php?id=<?=$post['id']?>"><?=$post['title']?></a> <!--Ao clicar no título vai ser redirecionado para o link do post-->
        </h2>
      <p class="post-description"><?=$post['description']?></p>
   
    <div class="tags-container">
    <?php foreach($post["tags"] as $tag): ?>
        <a href="#"><?= $tag ?></a>
      <?php endforeach; ?>
    </div>
  </div>
    <?php endforeach; ?>
  </div>
</main>

<?php
include_once("templates/footer.php")
?>

</body>
</html>