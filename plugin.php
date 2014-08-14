<?php
/*
Plugin Name: Dev-mode hepler plugin
Plugin URI: http://artprima.eu/
Description: Plugin to include the plugins that are being developed (to use with composer)
Author: Artprima
Author URI: http://artprima.eu/
Version: 1.1
*/

require_once 'ActivationHooks.class.php';

if (file_exists(__DIR__ . '/../../plugins-dev/plugins.php')) {
    ActivationHooks::setup();
    require_once __DIR__ . '/../../plugins-dev/plugins.php';
}

