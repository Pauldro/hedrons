<div id="slide-menu" class="row">
	<div class="col-xs-12">
		<br>
		<img src="<?php echo $config->urls->files; ?>images/hedrons-logo.png" alt="" class="site-logo"> <a class="moonlight menu-brand" href="#">Hedrons</a>
		<br><br>
		<nav>
			<ul class="nav list-unstyled moonlight">
				<?php foreach($pages->get('/')->and($pages->get('/')->children) as $item) : ?>
					<?php if ($item->id == $page->rootParent->id) : ?>
                        <li class="active"><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
                    <?php else : ?>
                        <li><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
                    <?php endif; ?>
				<?php endforeach; ?>
			</ul>
		</nav>
    </div>
</div>

<a href="#" class="close-menu"><i class="material-icons md-36">&#xE5CD;</i></a>
