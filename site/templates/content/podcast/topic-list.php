<table class="table table-striped" id="topics-table">
    <thead>
        <tr> <th>Topic</th> <th>Created</th> <th>Created by</th> <th>Subject</th> <th></th> </tr>
    </thead>
    <tbody>
        <?php foreach($page->children() as $topic) : ?>
            <tr>
                <td><?= $topic->title; ?></td>
                <td><?= date('M d, Y', strtotime($topic->publishedStr)); ?></td>
                <td><?= $topic->modifiedUser->firstname.' '.$topic->modifiedUser->lastname; ?></td>
                <td><?= $topic->podcastsubject->title; ?></td>
                <td></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
