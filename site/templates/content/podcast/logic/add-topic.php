<?php
    if ($input->post->topic) {
        $topics = $input->post->topic;
        if ($page == $pages->get('/podcast/topics/')) {
            $subjects = $input->post->subject;
        }
        $createdpages = array();
        foreach ($topics as $topic) {
            if (!empty($topic)) {
                $p = new Page(); // create new page object
                $p->template = 'podcast-topic'; // set template
                $p->parent = wire('pages')->get('/'.$page->parent()->name.'/'.$page->name.'/'); // set the parent
                $p->name = $sanitizer->pageName($topic, true);
                $p->title = $sanitizer->text($topic); // set page title (not neccessary but recommended)
                $p->save();
                $createdpages[] = $p->id;
            }
        }
    }
?>
