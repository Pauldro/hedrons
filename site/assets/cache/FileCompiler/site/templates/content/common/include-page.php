<?php include(\ProcessWire\wire('files')->compile($config->paths->templates.'_head.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include header markup ?>
    <div class="jumbotron pagetitle">
        <div class="container">
            <h1><?= $page->get('pagetitle|headline|title') ; ?></h1>
        </div>
    </div>
    <div class="container page">
        <?php include(\ProcessWire\wire('files')->compile($page->body,array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>
    </div>
<?php include(\ProcessWire\wire('files')->compile($config->paths->templates.'_foot.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include footer markup ?>
