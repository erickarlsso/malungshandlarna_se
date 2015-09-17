<?php

$theme_includes = [
  '_lib/php/init.php',
  '_lib/php/extras.php',
  '_lib/php/config.php'
];
foreach ($theme_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'malungscamping'), $file), E_USER_ERROR);
  }
  require_once $filepath;
}
unset($file, $filepath);
