<?php
  switch ($input->urlSegment1) {
      default:
        include $config->paths->content.'comics/front-page.php';
        break;
  }
