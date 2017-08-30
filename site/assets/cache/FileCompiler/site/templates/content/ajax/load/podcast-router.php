<?php
    switch ($input->urlSegment(2)) {
        case 'add-topic':
            $page->title = "Add a new Podcast Topic";
            $page->body = $config->paths->content.'podcast/add-topic-form.php';
            break;
        default:
            throw new \ProcessWire\Wire404Exception();
            break;
    }

    if ($config->ajax) {
        if ($config->modal) {
 include(\ProcessWire\wire('files')->compile($config->paths->content."common/modals/include/ajax-modal.php",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));
        }
	} else {
 include(\ProcessWire\wire('files')->compile($config->paths->content."common/include-page.php",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));
	}
