<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_head.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include header markup ?>
    <div class="jumbotron pagetitle">
        <div class="container">
            <h1><?php echo $page->get('pagetitle|headline|title') ; ?></h1>
        </div>
    </div>
    <?php $post = $pages->findOne("template=article, sort=random"); $firstpostid = $post->id; ?>
    <div class="container page">
        <div class="row">
            <div class="col-sm-10">
                <div class="row post-list">
                    <div class="col-xs-12 form-group post">
                        <?php include(\ProcessWire\wire('files')->compile($config->paths->content.'posts/list-post.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>
                    </div>
                    <?php $posts = $pages->find("template=article, sort=random, id!=$firstpostid"); ?>
                    <?php foreach ($posts as $post) : ?>
                        <div class="col-sm-6 form-group post">
                            <?php include(\ProcessWire\wire('files')->compile($config->paths->content.'posts/list-post.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>


    </div>


    <div class="container page">
        <?php echo $page->body; ?>
    </div>
<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_foot.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include footer markup ?>
