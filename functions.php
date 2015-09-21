<?php

$theme_includes = [
  '_lib/php/init.php',
  '_lib/php/config.php',
  '_lib/php/post-types.php'
];
foreach ($theme_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'malungshandlarna'), $file), E_USER_ERROR);
  }
  require_once $filepath;
}
unset($file, $filepath);
