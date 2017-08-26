<?php if (!empty($setequalheights)) : ?>
    <script>
    	$(window).on('load', function() {
    		<?php foreach ($setequalheights as $container) : ?>
    			setequalheight('<?php echo $container; ?>');
    		<?php endforeach; ?>
    	});

    	$(window).on('resize', function(){
    		<?php foreach ($setequalheights as $container) : ?>
    			setequalheight('<?php echo $container; ?>');
    		<?php endforeach; ?>
    	});
    </script>
<?php endif; ?>
