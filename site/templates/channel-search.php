<?php
    if ($input->get->q) {
        $q = $input->get->text('q');
        $page->title = 'Searching for "' . $q . '"';
        if ($input->get->searchtype) {
            $searchtype = $input->get->text('searchtype');
        }
    }

    if ($config->ajax) {
        // TODO
    } else {
        $page->body = $config->paths->content.$page->parent->name.'/search.php';
        include $config->paths->content.'common/include-page.php';
    }

?>
