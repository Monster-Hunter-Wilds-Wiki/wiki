<?php

// Force aspect ratio for mobile
$wgHooks['OutputPageAfterGetHeadLinksArray'][] = function (&$tags, OutputPage $output) {
  $tags['meta-viewport'] = '<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes, minimum-scale=0.25, maximum-scale=5"/>';
  return true;
};
