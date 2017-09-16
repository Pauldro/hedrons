<?php
    // Search the title and body fields for our query text.
    // Limit the results to 50 pages.
    $selector = "title|body~=$q, limit=50";
    $selector .= ", parent=".$pages->get('/tv/articles/');

    // Find pages that match the selector
    $matches = $pages->find($selector);
?>
<div class="row">
    <?php foreach ($matches as $post) : ?>
        <div class="col-sm-6 form-group post">
            <?php include $config->paths->content.'posts/list-post.php'; ?>
        </div>
    <?php endforeach; ?>
</div>
