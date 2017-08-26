<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_head.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include header markup ?>
    <div class="jumbotron pagetitle">
        <div class="container">
            <h1><?php echo $page->get('pagetitle|headline|title') ; ?></h1>
        </div>
    </div>
    <div class="container page">
        <?php $comicvine = new Hedrons\ComicVineAPI(); ?>
        <?php $comicvine->debug = true; ?>
        <?php $results = $comicvine->searchforcomicissues('batman', 1, 10, false); ?>
        <div class="post-list">
            <?php foreach ($results['results'] as $comic) : ?>
                <?php $comicdetails = $comicvine->getissuedetails($comic['api_detail_url'], false); ?>
                <div class="col-sm-4 col-md-3 form-group post">
                    <?php include(\ProcessWire\wire('files')->compile($config->paths->content.'comics/search/comic-result.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_foot.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include footer markup ?>
