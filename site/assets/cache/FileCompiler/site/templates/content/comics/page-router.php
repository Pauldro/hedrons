<?php
  switch ($input->urlSegment1) {
      default:
 include(\ProcessWire\wire('files')->compile($config->paths->content.'comics/front-page.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));
        break;
  }
