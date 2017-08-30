<?php
    switch ($input->urlSegment(2)) {
        case 'add-topic':
            $page->title = "Add a new Podcast Topic";
            $page->body = $config->paths->content.'podcast/add-topic-form.php';
            break;
        default:
            throw new Wire404Exception();
            break;
    }

    if ($config->ajax) {
        if ($config->modal) {
            include $config->paths->content."common/modals/include/ajax-modal.php";
        }
	} else {
		 include $config->paths->content."common/include-page.php";
	}
