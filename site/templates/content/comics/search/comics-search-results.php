<?php $comicvine = new Hedrons\ComicVineAPI(); ?>
<?php $comicvine->debug = true; ?>
<?php $results = $comicvine->searchforcomicissues('batman', 1, 10, false); ?>
<div class="post-list">
    <?php foreach ($results['results'] as $comic) : ?>
        <?php $comicdetails = $comicvine->getissuedetails($comic['api_detail_url'], false); ?>
        <div class="col-sm-4 col-md-3 form-group post">
            <?php include $config->paths->content.'comics/search/comic-result.php'; ?>
        </div>
    <?php endforeach; ?>
</div>
