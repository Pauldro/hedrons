<?php if ($input->post && !empty($createdpages)) : ?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Success!</strong> You added the following podcast topics
      <ul>
          <?php foreach ($pages->find($createdpages) as $newtopic) : ?>
              <li><?= $newtopic->title; ?></li>
          <?php endforeach; ?>
      </ul>
    </div>
<?php endif; ?>
