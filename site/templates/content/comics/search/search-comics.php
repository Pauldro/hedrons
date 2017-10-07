<?php $comicvine = new Hedrons\ComicVineAPI(); ?>
<?php $comicvine->debug = true; ?>
<?php $results = $comicvine->searchforcomicissues('batman', 1, 10, false); ?>.
<?php
    $setequalheights[] = '.post .post-title p';
    $setequalheights[] = '.post .post-title h4';
?>
<div class="row post-list">
    <?php foreach ($results['results'] as $comic) : ?>
        <?php $comicdetails = $comicvine->getissuedetails($comic['api_detail_url'], false); ?>
        <div class="col-sm-4 form-group post">
            <?php include $config->paths->content.'comics/search/comic-result.php'; ?>
        </div>
    <?php endforeach; ?>
</div>
