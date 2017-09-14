<?php
    $config->styles->append($config->urls->templates.'styles/libs/sound-manager/bar-ui.css');
    $config->scripts->append($config->urls->templates.'scripts/libs/sound-manager/soundmanager2.js');
    $config->scripts->append($config->urls->templates.'scripts/libs/sound-manager/bar-ui.js');
    $page->title = 'Episode #'.$page->postnumber.': '.$page->title;
?>
<?php include('./_head.php'); // include header markup ?>
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
        <?php include $config->paths->content.'podcast/podcast-episode-player.php'; ?>
        <br>
        <h3>Podcast Topics</h3>
        <div class="row">
            <div class="col-sm-4">
                <table class="table table-condensed thead-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($page->podcast_topics as $podtopic) : ?>
                            <tr>
                                <td><?= $podtopic->index(); ?></td>
                                <td><?= $podtopic->title; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
<?php include('./_foot.php'); // include footer markup ?>
