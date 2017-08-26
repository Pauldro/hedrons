<?php include('./_head.php'); // include header markup ?>
    <div class="jumbotron pagetitle" style="background-color: <?= $page->pagetitlecolor; ?>">
        <div class="container">
            <h1><?php echo $page->get('pagetitle|headline|title') ; ?></h1>

        </div>
    </div>
    <div class="container page">

        <div class="row">
            <div class="col-sm-9">
                <p>
                    By: <?= $page->modifiedUser->firstname.' '.$page->modifiedUser->lastname; ?>
                    <span class="pull-right"><i class="fa fa-clock-o" aria-hidden="true"></i>  <?= date('M d, Y', strtotime($page->publishedStr)); ?></span>
                </p>
                <div class="form-group">
                    <img src="<?= $page->postimage->url; ?>" class="img-max" alt="">
                </div>
                <div class="article-text">
                    <?php echo $page->body; ?>
                </div>

            </div>

        </div>

    </div>
<?php include('./_foot.php'); // include footer markup ?>
