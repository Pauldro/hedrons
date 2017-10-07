<?php
    $writers = ''; $artists = '';
?>
<div>
    <div class="img-header text-center" style="border-top 1px solid black; border-color: <?= $page->pagetitlecolor; ?>">
        <img src="<?= stripslashes($comic['image']['small_url']); ?>" alt="" class="max-width" >
    </div>
    <div class="post-title moonlight" >
        <h4><?= $comicdetails['results']['name'] .' '. $comicdetails['results']['issue_number']; ?></h4>
        <?php foreach($comicdetails['results']['person_credits'] as $person) : ?>
            <?php if (strpos($person['role'], 'penciler') !== false || strpos($person['role'], 'artist') !== false) : ?>
                <?php $artists .= $person['name'] . ', '; ?>
            <?php elseif (strpos($person['role'], 'writer') !== false) : ?>
                <?php $writers .= $person['name'] . ', '; ?>
            <?php endif; ?>
            <?php if (strpos($person['role'], 'writer') !== false) : ?>
                <?php $writers .= $person['name'] . ', '; ?>
            <?php endif; ?>
        <?php endforeach; ?>
        <p class="small"><b>Writer(s): </b><?= rtrim($writers,', '); ?></p>
        <p class="small"><b>Artists(s): </b><?= rtrim($artists,', '); ?></p>
        <button class="btn btn-sm btn-primary show-btn-text"><i class="fa fa-plus" aria-hidden="true"></i> <span class="hidden-btn-text">Add comic to your shelf</span></button>
    </div>
</div>
