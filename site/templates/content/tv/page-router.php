<?php
  switch ($input->urlSegment1) {
      default:
        include $config->paths->content.'tv/front-page.php';
        break;
  }
