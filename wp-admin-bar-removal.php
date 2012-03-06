<?php
/*
Plugin Name: Admin Bar Removal (3.1+ / 3.2+ / 3.3+ only)
Plugin URI: http://wordpress.org/extend/plugins/wp-admin-bar-removal/
Description: Completely <code>Disable</code> new WordPress 3.1+ / 3.2+ / 3.3+ (only) <code>Admin Bar</code> Frontend and Backend. Completely <code>Remove Code</code> for minimal memory load. Work under GPLv2 License. | <a href="http://lcsn.net/donate/" title="Free Donation">Donate</a> | <a href="http://wordpress.org/extend/plugins/wp-overview-lite/" title="Show Dashboard Overview and Memory Load Usage on Footer">WP Overview?</a> | <a href="http://wordpress.org/extend/plugins/wp-missed-schedule/" title="Fix Missed Scheduled Future Posts Cron Job">WP Missed Schedule?</a> | <a href="http://wordpress.org/extend/plugins/wp-total-deindexing/" title="Total DeIndexing WordPress from all Search Engines">WP DeIndexing?</a> | <a href="http://wordpress.org/extend/plugins/wp-ie-enhancer-and-modernizer/" title="Enhancer and Modernizer IE Surfing Expirience">Enhancer IE Surfing?</a>
Version: 2012.0000-BUGFIX.2012-DEVELOPMENTAL
Author: sLa
Author URI: http://wordpress.org/extend/plugins/profile/slangji
Requires at least: 3.1
Tested up to: 3.3.2
License: GPLv2
License URI: http://plugins.svn.wordpress.org/wp-admin-bar-removal/trunk/gpl-2.0.txt
 *
 * Major Stable Release: Version 2011 Build 0921 Revision 2011
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
 * Copyright © 2010-2012 [sLaNGjI](http://wordpress.org/extend/plugins/profile/slangji) a.k.a. sLa (slangji [at] gmail [dot] com)
 */
/**
 * @package Admin Bar Removal
 * @subpackage WordPress PlugIn
 * @since 3.1.0
 * @version 2012.0000-BUGFIX.2012-DEVELOPMENTAL
 * @author sLa
 * @license GPLv2
 *
 * Completely Disable Admin Bar Frontend, Backend, and Remove Code for minimal memory load. Work under GPLv2 License.
 */
if(!function_exists('add_action')){header('Status 403 Forbidden');header('HTTP/1.0 403 Forbidden');header('HTTP/1.1 403 Forbidden');exit();};
function wpabr_footer_log(){echo"\n<!--Plugin Admin Bar Removal 2012.0000-BUGFIX.2012-DEVELOPMENTAL Active-->";};
add_action('wp_head','wpabr_footer_log');
add_action('wp_footer','wpabr_footer_log');
function wpabr_rac(){echo'<style type="text/css">body.admin-bar #wpcontent,body.admin-bar #adminmenu{padding-top:0px}</style>';};
add_action('admin_print_styles','wpabr_rac',21);
function wpabr_ruppoabpc(){echo'<style type="text/css">.show-admin-bar{display:none}</style>';};
add_action('admin_print_styles-profile.php','wpabr_ruppoabpc');
add_filter('init','wpabr_init');
function wpabr_init(){add_filter('show_admin_bar','__return_false' );};
show_admin_bar(false);
wp_deregister_script('admin-bar');
wp_deregister_style('admin-bar');
remove_filter('wp_head','wp_admin_bar');
remove_filter('wp_footer','wp_admin_bar');
remove_filter('admin_head','wp_admin_bar');
remove_filter('admin_footer','wp_admin_bar');
remove_filter('wp_head','wp_admin_bar_class');
remove_filter('wp_footer','wp_admin_bar_class');
remove_filter('admin_head','wp_admin_bar_class');
remove_filter('admin_footer','wp_admin_bar_class');
//
//foreach(array('wp_header','wp_admin_bar_render')as$filter);add_action($filter,'wp_admin_bar_render',1000);
//foreach(array('wp_footer','wp_admin_bar_render')as$filter);add_action($filter,'wp_admin_bar_render',1000);
//
//remove_action('wp_before_admin_bar_render','wp_admin_bar_me_separator',10);
//remove_action('wp_before_admin_bar_render','wp_admin_bar_my_account_menu',20);
//remove_action('wp_before_admin_bar_render','wp_admin_bar_my_blogs_menu',30);
//remove_action('wp_before_admin_bar_render','wp_admin_bar_blog_separator',40);
//remove_action('wp_before_admin_bar_render','wp_admin_bar_bloginfo_menu',50);
//remove_action('wp_before_admin_bar_render','wp_admin_bar_edit_menu',100);
//
remove_action('wp_head','wp_admin_bar_render',1000);
remove_filter('wp_head','wp_admin_bar_render',1000);
remove_action('wp_footer','wp_admin_bar_render',1000);
remove_filter('wp_footer','wp_admin_bar_render',1000);
remove_action('admin_head','wp_admin_bar_render',1000);
remove_filter('admin_head','wp_admin_bar_render',1000);
remove_action('admin_footer','wp_admin_bar_render',1000);
remove_filter('admin_footer','wp_admin_bar_render',1000);
remove_action('init','wp_admin_bar_init');
remove_filter('init','wp_admin_bar_init');
remove_action('wp_head','wp_admin_bar_css');
remove_action('wp_head','wp_admin_bar_dev_css');
remove_action('wp_head','wp_admin_bar_rtl_css');
remove_action('wp_head','wp_admin_bar_rtl_dev_css');
remove_action('admin_head','wp_admin_bar_css');
remove_action('admin_head','wp_admin_bar_dev_css');
remove_action('admin_head','wp_admin_bar_rtl_css');
remove_action('admin_head','wp_admin_bar_rtl_dev_css');
remove_action('wp_footer','wp_admin_bar_js');
remove_action('wp_footer','wp_admin_bar_dev_js');
remove_action('admin_footer','wp_admin_bar_js');
remove_action('admin_footer','wp_admin_bar_dev_js');
remove_action('wp_ajax_adminbar_render','wp_admin_bar_ajax_render');
remove_filter('wp_ajax_adminbar_render','wp_admin_bar_ajax_render');
remove_action('personal_options','_admin_bar_pref');
remove_filter('personal_options','_admin_bar_pref');
remove_action('personal_options','_get_admin_bar_pref');
remove_filter('personal_options','_get_admin_bar_pref');
remove_filter('locale','wp_admin_bar_lang');
remove_filter('admin_footer','wp_admin_bar_render')?>