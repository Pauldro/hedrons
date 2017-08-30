<?php

    if ($input->post->topic) {
        $topics = $input->post->topic;
        if ($page == $pages->get('/podcast/topics/')) {
            $subjects = $input->post->subject;
        }
        $createdpages = array();
        foreach ($topics as $topic) {
            if (!empty($topic)) {
                $p = new Page(); // create new page object
                $p->template = $page->child()->template; // set template
                $p->parent = wire('pages')->get('/'.$page->parent()->name.'/'.$page->name.'/'); // set the parent
                $p->name = $sanitizer->pageName($topic, true);
                $p->title = $sanitizer->text($topic); // set page title (not neccessary but recommended)
                $p->save();
                $createdpages[] = $p->id;
            }
        }
    }
?>

<?php if ($input->post && !empty($createdpages)) : ?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Success!</strong> You added the following <?= $page->pagedescription; ?>
      <ul>
          <?php foreach ($pages->find($createdpages) as $newtopic) : ?>
              <li><?= $newtopic->title; ?></li>
          <?php endforeach; ?>
      </ul>
    </div>
<?php endif; ?>
