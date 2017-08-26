<?php
    switch ($input->urlSegment1) {
        case 'add':
            $page->body = $config->paths->content.'podcast/add-topic.php';
            break;
        default:
            $page->body = $config->paths->content.'podcast/topic-list.php';
            break;
    }
    
    $config->scripts->append($config->urls->templates.'scripts/pages/topics-page.js');
?>
<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_head.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include header markup ?>
    <div class="jumbotron pagetitle" style="background-color: <?= $page->pagetitlecolor; ?>">
        <div class="container">
            <h1><?php echo $page->get('headline|title') ; ?></h1>
        </div>
    </div>
    <div class="container page">
        <?php include(\ProcessWire\wire('files')->compile($page->body,array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>
    </div>
<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_foot.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include footer markup ?>
