<?php

$theme_includes = [
  'functions/init.php',
  'functions/config.php',
  'functions/post-types.php'
];
foreach ($theme_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'malungshandlarna'), $file), E_USER_ERROR);
  }
  require_once $filepath;
}
unset($file, $filepath);
