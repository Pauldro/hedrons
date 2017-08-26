<?php
	// top navigation consists of homepage and its visible children
	$homepage = $pages->get('/');
	$children = $homepage->children();

	// make 'home' the first item in the navigation
	$children->prepend($homepage);

	if ($config->debug) {
		$navbar = 'navbar-inverse';
        $navbar = 'navbar-default';
	} else {
		$navbar = 'navbar-default';
	}
?>
<nav class="navbar <?php echo $navbar; ?> navbar-fixed-top" id="nav-yt">
	<div class="container">
		<div class="navbar-header moonlight">
			<a href="#" class=" navbar-brand slide-menu-open" data-function="show">
            	<i class="material-icons" aria-hidden="true">&#xE5D2;</i> <span class="sr-only">Open Menu</span>
            </a>
			<?php if (!$config->debug) : ?>
            	<a class="navbar-brand" href="#">TESTING - DEBUG</a>
            <?php else : ?>
				<img class="header-logo" id="header-logo" src="<?php echo $config->urls->files; ?>images/hedrons-logo.png" height="40">
                <a class="navbar-brand" href="#">Hedrons</a>
            <?php endif; ?>

		</div>


		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<?php foreach($homepage->and($homepage->children) as $item) : ?>
                	<?php if ($item->show_in_main_nav == 1) : ?>
						<?php if ($item->id == $page->rootParent->id) : ?>
                            <li class="active"><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
                        <?php else : ?>
                            <li><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
                        <?php endif; ?>
                    <?php endif; ?>
				<?php endforeach; ?>
			</ul>
			<form class="navbar-form navbar-right">
				<div class="form-group">
					<div class="input-group">
				        <input type="text" class="form-control input-sm" name="query">
				        <span class="input-group-btn"> <button type="submit" class="btn btn-navbar btn-sm"> <span class="glyphicon glyphicon-search"></span> </button> </span>
				    </div>
			    </div>
          </form>
		</div><!--/.nav-collapse -->
	</div>
</nav>
