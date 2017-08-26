<?php include('./_head.php'); // include header markup ?>
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
                        <?php include $config->paths->content.'posts/list-post.php'; ?>
                    </div>
                    <?php $posts = $pages->find("template=article, sort=random, id!=$firstpostid"); ?>
                    <?php foreach ($posts as $post) : ?>
                        <div class="col-sm-6 form-group post">
                            <?php include $config->paths->content.'posts/list-post.php'; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>


    </div>


    <div class="container page">
        <?php echo $page->body; ?>
    </div>
<?php include('./_foot.php'); // include footer markup ?>
