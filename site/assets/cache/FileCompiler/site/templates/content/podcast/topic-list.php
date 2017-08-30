<?php if ($input->post && !empty($createdpages)) : ?>
    <?php include(\ProcessWire\wire('files')->compile($config->paths->content.'podcast/show-added-topics.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>
<?php endif; ?>
<table class="table table-striped" id="topics-table">
    <thead>
        <tr> <th>Topic</th> <th>Created</th> <th>Created by</th> <th>Last Discussed</th> <th></th> </tr>
    </thead>
    <tbody>
        <?php foreach($page->children() as $topic) : ?>
            <tr>
                <td><?= $topic->title; ?></td>
                <td><?= date('M d, Y', strtotime($topic->publishedStr)); ?></td>
                <td><?= $topic->modifiedUser->firstname.' '.$topic->modifiedUser->lastname; ?></td>
                <td></td>
                <td></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a href="<?= $config->pages->ajax.'load/podcast/add-topic/?modal=modal'; ?>" class="btn btn-primary load-into-modal" data-modal="#ajax-modal"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Topics</a>
