<?php
    $config->styles->append($config->urls->templates.'styles/libs/sound-manager/bar-ui.css');
    $config->scripts->append($config->urls->templates.'scripts/libs/sound-manager/soundmanager2.js');
    $config->scripts->append($config->urls->templates.'scripts/libs/sound-manager/bar-ui.js');
    $page->title = 'Episode #'.$page->postnumber.': '.$page->title;
?>
<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_head.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include header markup ?>
    <div class="jumbotron pagetitle" style="background-color: <?= $page->pagetitlecolor; ?>">
        <div class="container">
            <h1><?php echo $page->get('pagetitle|headline|title') ; ?></h1>
        </div>
    </div>
    <div class="container page">
        <div class="well podcast-post">
            <div class="podcast-img-div">
                <img src="<?= $page->postimage->url; ?>" class="img-max">
            </div>

            <h3><?= $page->title; ?></h3>

            <p><?= $page->summary; ?></p>
            <?php if (!empty($page->quote)) : ?>
                <blockquote>
                    <?= $page->quote; ?>
                </blockquote>
            <?php endif; ?>
        </div>
        <?php include(\ProcessWire\wire('files')->compile($config->paths->content.'podcast/podcast-episode-player.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>
        <br>
        <?php foreach ($page->podcasttopics as $podtopic) : ?>
            <p><?= $podtopic->title; ?></p>
        <?php endforeach; ?>
    </div>
<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_foot.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include footer markup ?>
