<?php include('./_head.php'); // include header markup ?>
    <div class="jumbotron pagetitle" style="background-color: <?= $page->pagetitlecolor; ?>">
        <div class="container">
            <h1><?php echo $page->get('pagetitle|headline|title') ; ?></h1>
        </div>
    </div>
    <div class="container page">
        <?php $article = $page->child(); ?>
        <div class="row form-group post-list">
            <div class="col-xs-12">
                <div>
                    <img src="<?= $article->postimage->url; ?>" class="img-max" alt="...">
                    <div class="container post-title moonlight">
                        <h3><a href="<?= $article->url; ?>"><?= $article->title; ?></a></h3>
                        <p>By: <?= $article->modifiedUser->firstname.' '.$article->modifiedUser->lastname; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row post-list">
            <?php foreach ($page->children() as $article) : ?>
                <?php if ($article != $page->child()) : ?>
                    <div class="col-xs-6">
                        <img src="<?= $article->postimage->url; ?>" class="img-max" alt="...">
                        <div class="post-title moonlight">
                            <h4><a href="<?= $article->url; ?>"><?= $article->title; ?></a></h4>
                            <p>By: <?= $page->modifiedUser->firstname.' '.$page->modifiedUser->lastname; ?></p>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
<?php include('./_foot.php'); // include footer markup ?>
