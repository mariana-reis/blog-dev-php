<?php
  include_once("templates/header.php");
  
  if(isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost;
    
    foreach($posts as $post) {
    
      if($post['id'] == $postId) {
        $currentPost = $post;
      }
    }
  }
?>
  <main id="post-container">
    <div class="content-container">
      <h1 id="main-title"><?= $currentPost['title'] ?></h1>
      <p id="post-description"><?= $currentPost['description'] ?></p>
      <div class="img-container">
        <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
      </div>
      <p class="post-content">
        Entenda a documentação como uma receita, você ler, interpreta, pega os ingredientes e aplica, se queimar ou não ficar bom.... então nesse caso não estamos falando de comida você terá que ler e aplicar de novo. Normalmente as documentações costumam ter uma área para tutorial,e uma de fato para a documentação, o tutorial costuma dar uma breve introdução, e ensina normalmente a fazer o setup da tecnologia que você esta utilizando(aqui você já teria que assistir umas quatro ou cinco aulas de algum curso meia boca por ai). A documentação em si costuma ter uma parte onde explica e demonstra os conceitos, e uma outra parte com descrições de cada funcionalidade especifica da tecnologia, a demonstração de conceitos é perfeitamente util para aprender, porem oque me ajuda no dia a dia são as descrições das funcionalidades. Um exemplo disso é minha constante pesquisas na documentação do django sobre models e querySet, coisas que não faz sentido pra mim entender o conceito pôs são simples e facilmente entendível , mas a utilização e os parâmetros fazem mais sentidos pro meu dia a dia principalmente em questões especificas da regra de negocio do projeto, onde cabe a mim desenvolvedor procurar nas funcionalidades existentes formas de se adaptar á minha realidade e ao oque preciso fazer.
      </p>
    </div>
    <aside id="nav-container">
      <h3 id="tags-title">Tags</h3>
      <ul id="tag-list">
        <?php foreach($currentPost['tags'] as $tag): ?>
          <li><a href="#"><?= $tag ?></a></li>
        <?php endforeach; ?>
      </ul>
      <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
          <?php foreach($categories as $category): ?>
            <li><a href="#"><?= $category ?></a></li>
          <?php endforeach; ?>
        </ul>
    </aside>
  </main>  
<?php
  include_once("templates/footer.php");
?>