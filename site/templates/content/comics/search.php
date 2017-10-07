<?php
    $activetab = 'articles';
    $tabs = array(
        'articles' => array('href' => 'articles', "id" => 'articles-link', 'text' => 'Articles', 'tabcontent' => 'comics/search/search-articles.php')
    );
    if ($input->get->q) {
        if ($input->get->searchtype) {
            $activetab = $input->get->text('searchtype');
            if ($searchtype = 'shows') {
                $tabs['comics'] = array('href' => 'comics', "id" => 'comics-link', 'text' => 'Comics', 'tabcontent' => 'comics/search/search-comics.php');
            }
        }
    }
?>
<div class="row">
    <div class="col-sm-9">
        <?php include $config->paths->content.'comics/search/form.php'; ?>
        <ul id="order-tab" class="nav nav-tabs nav_tabs" role="tablist">
            <?php foreach ($tabs as $tab) : ?>
                <?php if ($tab == $tabs[$activetab]) : ?>
                    <li class="active"><a href="<?= '#'.$tab['href']; ?>" id="<?=$tab['id']; ?>" data-toggle="tab"><?=$tab['text']; ?></a></li>
                <?php else : ?>
                    <li><a href="<?= '#'.$tab['href']; ?>" id="<?=$tab['id']; ?>" data-toggle="tab"><?=$tab['text']; ?></a></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
        <div id="order-tabs" class="tab-content">
            <?php foreach ($tabs as $tab) : ?>
                <?php if ($tab == $tabs[$activetab]) : ?>
                    <div class="tab-pane fade in active" id="<?= $tab['href']; ?>">
                        <br>
                        <?php include $config->paths->content.$tab['tabcontent']; ?>
                    </div>
                <?php else : ?>
                    <div class="tab-pane fade" id="<?= $tab['href']; ?>">
                        <br>
                        <?php include $config->paths->content.$tab['tabcontent']; ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="col-sm-3"></div>
</div>
