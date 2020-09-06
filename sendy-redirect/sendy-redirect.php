<?php

/**
 * Sendy Menu Redirection
 *
 * @package           SendyRedirect
 * @author            Muhamad Sulaiman Misri
 * @copyright         2020 Muhamad Sulaiman Misri
 * @license           GPL-2.0-or-later
 *
 * Plugin Name:       Sendy Menu Redirection
 * Plugin URI:        https://sulaimanmisri.com
 * Description:       Enable WordPress user to go to their sendy installation
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Muhamad Sulaiman Misri
 * Author URI:        https://sulaimanmisri.com
 * Text Domain:       sendy-redirect
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

function sendy_redirect()
{
    add_menu_page('Sendy', 'Sendy Redirect', 'manage_options', 'sendy-redirect', 'sendy_redirect', 'dashicons-filter', 1);

    add_submenu_page('sendy-redirect', 'Setting Sendy', 'Setting', 'manage_options', 'sendy-redirection-setting', 'sendy_redirect_submenu_setting');
}

add_action('admin_menu', 'sendy_redirect');

function sendy_redirect_main()
{
    echo '<div class="wrap"> <h2> Please set your sendy activation link </h2> </div>';
}

function sendy_redirect_submenu_setting()
{
}
