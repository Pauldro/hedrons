<?php
 include(\ProcessWire\wire('files')->compile($config->paths->content."ajax/$page->name-router.php",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));
