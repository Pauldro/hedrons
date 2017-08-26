<?php include('./_head.php'); // include header markup ?>
    <div class="jumbotron pagetitle" style="background-color: <?= $page->pagetitlecolor; ?>">
        <div class="container">
            <h1><?php echo $page->get('pagetitle|headline|title') ; ?></h1>
        </div>
    </div>
    <div class="container page">
        <div class="row">
            <div class="col-sm-9">
                <?php foreach ($pages->get('/podcast/episodes/')->children() as $episode) : ?>
                    <div class="row">
                        <div class="col-sm-3 form-group">
                            <a href="<?= $episode->url; ?>"><img alt="64x64" src="<?= $episode->postimage->url; ?>" class="img-max"></a>
                        </div>
                        <div class="col-sm-9 form-group">
                            <h4 class="media-heading"><a href="<?= $episode->url; ?>"><?= 'Episode #'.$episode->postnumber.': '.$episode->title; ?></a></h4>
                            <?= $episode->summary; ?>
                        </div>
                    </div>
                    <hr>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php include('./_foot.php'); // include footer markup ?>
