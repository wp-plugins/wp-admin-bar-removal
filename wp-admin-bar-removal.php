<?php
/*
Plugin Name: WP Bar Removal (beta1)
Plugin URI: http://wordpress.org/extend/plugins/wp-admin-bar-removal/
Description: Remove <code>Admin Bar</code> Backend and Frontend | <a href="http://donate.sla.lcsn.net/" title="Donate author plugin">Donate</a> | <a href="http://wordpress.org/extend/plugins/wp-overview-lite/" title="Show Dashboard Overview and Memory Load Usage on Footer">WP Overview?</a> | <a href="http://wordpress.org/extend/plugins/wp-missed-schedule/" title="Fix Missed Scheduled Future Posts Cron Job">WP Missed Schedule?</a>
Version: 2010.1212.0000
Author: sLa
Author URI: http://wordpress.org/extend/plugins/profile/sla/
 *
 * Development Release: Version 2010 Build 1212-BUGFIX Revision 0000
 * Stable Release: Version 2010 Build 1211 Revision 0103
 *
 *  This program is free software GPL, but licensed work is under Creative Commons License;
 *  you can use it only with the terms of [Attribution-Noncommercial-No Derivative Works 3.0 Unported](http://creativecommons.org/licenses/by-nc-nd/3.0/).
 *
 *  This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 *  without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *  See the terms of the [GNU General Public License](http://wordpress.org/about/gpl/) as published by the Free Software Foundation.
 *
 * Part of Copyright © 2009-2010 belongs to sLa [LavaTeam] NGjI ™ (slangji [at] gmail [dot] com)
 * and a portion to their respective owners ® Patent Pending - Licensing Applyed
 */
/**
 * @package WordPress WP Admin Bar Removal (remove-admin-bar-backend-and-frontend)
 * @subpackage PlugIn
 * @author sLa
 * @version 2010.1212.0000
 */
if(!function_exists('add_action')){header('Status 403 Forbidden');header('HTTP/1.0 403 Forbidden');header('HTTP/1.1 403 Forbidden');exit();}?><?php
function wpabr_footer_log(){echo"\n<!--Plugin WP Bar Removal 2010.1212.0000 Active-->\n";}add_action('wp_head','wpabr_footer_log');add_action('wp_footer','wpabr_footer_log')?><?php
remove_action('init','wp_admin_bar_init');foreach(array('wp_footer','wp_admin_bar_render')as$filter)add_action($filter,'wp_admin_bar_render',1000);remove_action('wp_before_admin_bar_render','wp_admin_bar_me_separator',10);remove_action('wp_before_admin_bar_render','wp_admin_bar_my_account_menu',20);remove_action('wp_before_admin_bar_render','wp_admin_bar_my_blogs_menu',30);remove_action('wp_before_admin_bar_render','wp_admin_bar_blog_separator',40);remove_action('wp_before_admin_bar_render','wp_admin_bar_bloginfo_menu',50);remove_action('wp_before_admin_bar_render','wp_admin_bar_edit_menu',100);remove_action('wp_head','wp_admin_bar_css');remove_action('wp_footer','wp_admin_bar_js');remove_action('admin_head','wp_admin_bar_css');remove_action('admin_footer','wp_admin_bar_js');remove_action('wp_ajax_adminbar_render','wp_admin_bar_ajax_render');remove_filter('locale','wp_admin_bar_lang')?>