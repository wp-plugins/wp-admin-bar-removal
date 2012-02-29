<?php
/*
Plugin Name: WP Bar Removal (beta1-16884)
Plugin URI: http://wordpress.org/extend/plugins/wp-admin-bar-removal/
Description: Remove <code>Admin Bar</code> Backend and Frontend. Work under GPLv2 License. | <a href="http://donate.sla.lcsn.net/" title="Donate author plugin">Donate</a> | <a href="http://wordpress.org/extend/plugins/wp-overview-lite/" title="Show Dashboard Overview and Memory Load Usage on Footer">WP Overview?</a> | <a href="http://wordpress.org/extend/plugins/wp-missed-schedule/" title="Fix Missed Scheduled Future Posts Cron Job">WP Missed Schedule?</a>
Version: 2010.1213.0340
Author: sLa
Author URI: http://wordpress.org/extend/plugins/profile/sla/
License: GPLv2
 *
 * Development Release: Version 2010 Build 1214-BUGFIX Revision 0000
 *
 * Admin Bar Removal - WordPress PlugIn
 *
 *  This program is free software; you can redistribute it and/or
 *  modify it under the terms of the [GNU General Public License](http://wordpress.org/about/gpl/)
 *  as published by the Free Software Foundation; either [version 2](http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 *  of the License, or (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software
 *  Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 *
 * Copyright © 2010 [sLaNGjI](http://wordpress.org/extend/plugins/profile/sla/) a.k.a. sLa (slangji [at] gmail [dot] com)
 */
/**
 * @package Admin Bar Removal
 * @subpackage WordPress PlugIn
 * @since 3.1.0
 * @version 2010.1213.0340
 * @author sLa
 * @license GPLv2
 *
 * Completely Disable Admin Bar Frontend, Backend and Remove Code, for minimal memory load.
 */
if(!function_exists('add_action')){header('Status 403 Forbidden');header('HTTP/1.0 403 Forbidden');header('HTTP/1.1 403 Forbidden');exit();}?><?php
function wpabr_footer_log(){echo"\n<!--Plugin WP Bar Removal 2010.1213.0340 Active-->\n";}add_action('wp_head','wpabr_footer_log');add_action('wp_footer','wpabr_footer_log')?><?php
remove_action('init','wp_admin_bar_init');foreach(array('wp_footer','wp_admin_bar_render')as$filter)add_action($filter,'wp_admin_bar_render',1000);remove_action('wp_before_admin_bar_render','wp_admin_bar_me_separator',10);remove_action('wp_before_admin_bar_render','wp_admin_bar_my_account_menu',20);remove_action('wp_before_admin_bar_render','wp_admin_bar_my_blogs_menu',30);remove_action('wp_before_admin_bar_render','wp_admin_bar_blog_separator',40);remove_action('wp_before_admin_bar_render','wp_admin_bar_bloginfo_menu',50);remove_action('wp_before_admin_bar_render','wp_admin_bar_edit_menu',100);remove_action('wp_head','wp_admin_bar_css');remove_action('wp_footer','wp_admin_bar_js');remove_action('admin_head','wp_admin_bar_css');remove_action('admin_footer','wp_admin_bar_js');remove_action('wp_ajax_adminbar_render','wp_admin_bar_ajax_render');remove_filter('locale','wp_admin_bar_lang')?>