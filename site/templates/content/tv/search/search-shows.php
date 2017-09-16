<?php $tmdb = new Hedrons\TMDBapi(); ?>
<?php $results = $tmdb->searchfortv($q, $input->pageNum, false) ?>
<?php $setequalheights[] = '.post-title.moonlight'; ?>
<div class="row post-list">
    <?php foreach ($results['results'] as $show) : ?>
        <div class="col-sm-4 col-md-4 form-group post">
            <div>
                <div class="img-header text-center" style="border-bottom: none;">
                    <?php if (!empty($show['poster_path'])) : ?>
                        <img src="<?= $tmdb->getimageurl($show['poster_path'], $tmdb->imagesizes['poster']); ?>" alt="" class="max-width">
                    <?php else : ?>
                        <img src="<?= $config->urls->assets.'files/images/notavailable-poster.png'; ?>" alt="" class="max-width">
                    <?php endif; ?>
                </div>
                <div class="post-title moonlight">
                    <h4><?= $show['name']; ?></h4>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
