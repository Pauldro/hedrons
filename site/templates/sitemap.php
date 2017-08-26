<?php include('./_head.php'); // include header markup ?>
    <div class="jumbotron pagetitle" style="background-color: <?= $page->pagetitlecolor; ?>">
        <div class="container">
            <h1><?php echo $page->get('pagetitle|headline|title') ; ?></h1>
        </div>
    </div>
    <div class="container page">
      <?php rendersitemap($pages->get('/')->children, 1);  ?>
    </div>
<?php include('./_foot.php'); // include footer markup ?>
