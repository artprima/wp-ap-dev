<?php
/*
Plugin Name: Plugin to include the plugins that are being developed (to use with composer)
Plugin URI: http://artprima.eu/
Description: Plugin to include the plugins that are being developed (to use with composer)
Author: Artprima
Author URI: http://artprima.eu/
Version: 1.0
*/

if (file_exists(__DIR__ . '/../../plugins-dev/plugins.php')) {
    require_once __DIR__ . '/../../plugins-dev/plugins.php';
}
