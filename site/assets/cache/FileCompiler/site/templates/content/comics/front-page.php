<?php $posts = $page->find("parent=$page->children"); $post = $posts->shift() ?>
<div class="row">
    <div class="col-sm-9">
        <div class="row form-group post-list">
            <div class="col-xs-12 form-group post">
                <?php include(\ProcessWire\wire('files')->compile($config->paths->content.'posts/list-post.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>
            </div>
            <?php foreach ($posts as $post) : ?>
                <div class="col-sm-6 form-group post">
                    <?php include(\ProcessWire\wire('files')->compile($config->paths->content.'posts/list-post.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="col-sm-3">
        
    </div>
</div>
