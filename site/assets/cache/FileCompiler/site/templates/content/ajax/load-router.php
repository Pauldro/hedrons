<?php
    switch ($input->urlSegment(1)) {
        case 'podcast':
 include(\ProcessWire\wire('files')->compile($config->paths->content.'ajax/load/podcast-router.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));
            break;
        default:
            throw new \ProcessWire\Wire404Exception();
            break;
    }
