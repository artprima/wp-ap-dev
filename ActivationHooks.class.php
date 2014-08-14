<?php

/*
 * This file is part of the ${ProjectName} package.
 *
 * (c) Denis Voytyuk <ask@artprima.cz>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * Class ActivationHooks
 *
 * @author Denis Voytyuk <ask@artprima.cz>
 *
 */
class ActivationHooks
{
    public static function setup()
    {
        register_activation_hook('wp-ap-dev/plugin.php', array('ActivationHooks', 'onActivation'));
        register_deactivation_hook('wp-ap-dev/plugin.php', array('ActivationHooks', 'onDeactivation'));
    }

    public static function onActivation()
    {
        do_action('wpapdev_activation');
    }

    public static function onDeactivation()
    {
        do_action('wpapdev_deactivation');
    }
}