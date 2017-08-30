<?php
    switch ($input->urlSegment(1)) {
        case 'podcast':
            include $config->paths->content.'ajax/load/podcast-router.php';
            break;
        default:
            throw new Wire404Exception();
            break;
    }
