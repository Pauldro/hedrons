<?php
    switch ($input->urlSegment1) {
        case 'add':
            $page->body = $config->paths->content.'podcast/add-topic.php';
            break;
        default:
            $page->body = $config->paths->content.'podcast/topic-list.php';
            break;
    }
    
    $config->scripts->append($config->urls->templates.'scripts/pages/topics-page.js');
?>
<?php include('./_head.php'); // include header markup ?>
    <div class="jumbotron pagetitle" style="background-color: <?= $page->pagetitlecolor; ?>">
        <div class="container">
            <h1><?php echo $page->get('headline|title') ; ?></h1>
        </div>
    </div>
    <div class="container page">
        <?php include $page->body; ?>
    </div>
<?php include('./_foot.php'); // include footer markup ?>
