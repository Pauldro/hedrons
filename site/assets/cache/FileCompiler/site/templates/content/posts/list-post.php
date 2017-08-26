<div>
    <img src="<?= $post->postimage->url; ?>" alt="" class="max-width post-image" style="border-color: <?= $post->pagetitlecolor; ?>">
    <div class="post-title moonlight" >
        <h4><a href="<?= $post->url; ?>"><?= $post->title; ?></a></h4>
        <p>By: <?= $post->modifiedUser->firstname.' '.$post->modifiedUser->lastname; ?></p>
    </div>
</div>
