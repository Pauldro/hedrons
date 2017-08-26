<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_head.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include header markup ?>
    <div class="jumbotron pagetitle" style="background-color: <?= $page->pagetitlecolor; ?>">
        <div class="container">
            <h1><?php echo $page->get('pagetitle|headline|title') ; ?></h1>
        </div>
    </div>
    <div class="container page">
        <div class="col-sm-9">
            <?php foreach ($page->children() as $episode) : ?>
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
<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_foot.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include footer markup ?>
