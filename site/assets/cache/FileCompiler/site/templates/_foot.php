		<br>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <a id="back-to-top" href="#" class="btn btn-success back-to-top" role="button"><span class="glyphicon glyphicon-chevron-up"></span></a>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <p class="visible-xs-inline-block"> XS </p> <p class="visible-sm-inline-block"> SM </p>
                <p class="visible-md-inline-block"> MD </p> <p class="visible-lg-inline-block"> LG </p>
            </div>
        </footer>
		<?php include(\ProcessWire\wire('files')->compile($config->paths->content.'common/modals/ajax-modal.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>
        <?php foreach ($config->scripts->unique() as $script) : ?>
        	<script src="<?= $script; ?>"></script>
        <?php endforeach; ?>
		<?php include(\ProcessWire\wire('files')->compile($config->paths->content.'common/phpjs/setequalheight.js.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>
    </body>
</html>
