<?php
/*
Plugin Name: ToolBar Removal (3.3+ only) DEVELOPMENTAL
Plugin URI: http://wordpress.org/extend/plugins/wp-toolbar-removal/
Description: Completely <code>Disable</code> new WordPress 3.3+ (only) <code>ToolBar</code> Frontend and Backend. Completely <code>Remove Code</code> for minimal memory load, with new approach. Work under GPLv2 License. (DEVELOPMENTAL VERSION) Not work on WordPress 3.4+ | <a href="http://lcsn.net/donate/" title="Free Donation">Donate</a> | <a href="http://wordpress.org/extend/plugins/wp-overview-lite/" title="Show Dashboard Overview and Memory Load Usage on Footer">WP Overview?</a> | <a href="http://wordpress.org/extend/plugins/wp-missed-schedule/" title="Fix Missed Scheduled Future Posts Cron Job">WP Missed Schedule?</a> | <a href="http://wordpress.org/extend/plugins/wp-admin-bar-removal/" title="Remove Admin Bar Frontend Backend User and Code">Admin Bar Removal?</a> | <a href="http://wordpress.org/extend/plugins/wp-total-deindexing/" title="Total DeIndexing WordPress from all Search Engines">WP DeIndexing?</a> | <a href="http://wordpress.org/extend/plugins/wp-ie-enhancer-and-modernizer/" title="Enhancer and Modernizer IE Surfing Expirience">Enhancer IE Surfing?</a>
Version: 2012.0227-BUGFIX.1936-DEVELOPMENTAL
Author: sLa
Author URI: http://wordpress.org/extend/plugins/profile/slangji
Requires at least: 3.3
Tested up to: 3.3.2
License: GPLv2
License URI: http://plugins.svn.wordpress.org/wp-toolbar-removal/trunk/gpl-2.0.txt
 * 
 * Development Release: Version 2012 Build 0000-BUGFIX Revision 2012-DEVELOPMENTAL
 *
 * ToolBar Removal - WordPress PlugIn
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
 *
 * This uses code derived from
 * wp-admin-bar-removal.php by sLa <slangji [at] gmail [dot] com>
 * one-click-logout-barless.php by olyma <rackofpower.com>
 * according to the terms of the GNU General Public License version 2 (or later) 
 */
/**
 * @package ToolBar Removal
 * @subpackage WordPress PlugIn
 * @since 3.3.0
 * @version 2012.0227-BUGFIX.1936-DEVELOPMENTAL
 * @author sLa
 * @license GPLv2
 *
 * Completely Disable ToolBar Frontend, Backend, and Remove Code for minimal memory load with new approach. Work under GPLv2 License.
 */
if(!function_exists('add_action')){header('Status 403 Forbidden');header('HTTP/1.0 403 Forbidden');header('HTTP/1.1 403 Forbidden');exit();};
function wptbr_footer_log(){echo"\n<!--Plugin ToolBar Removal 2012.0227-BUGFIX.1936-DEVELOPMENTAL Active-->";};
add_action('wp_head','wptbr_footer_log');
add_action('wp_footer','wptbr_footer_log');
add_filter('init','wptbr_init');
function wptbr_init(){add_filter('show_admin_bar','__return_false' );};
show_admin_bar(false);
function wptbr_rac(){echo'<style type="text/css">body.admin-bar #wpcontent,body.admin-bar #adminmenu{padding-top:0px}</style>';};
add_action('admin_print_styles','wptbr_rac',21);
function wptbr_ruppoabpc(){echo'<style type="text/css">.show-admin-bar{display:none}</style>';};
add_action('admin_print_styles-profile.php','wptbr_ruppoabpc');
wp_deregister_script('admin-bar');
wp_deregister_script('wp-admin-bar');
//wp_deregister_script('wp_admin_bar_wp_menu');
//wp_deregister_script('wp_admin_bar_add_secondary_groups');
wp_deregister_style('admin-bar');
wp_deregister_style('wp-admin-bar');
remove_filter('wp_head','wp_admin_bar_wp_menu');
remove_filter('wp_head','wp_admin_bar_add_secondary_groups');
remove_filter('wp_head','wp_admin_bar');
remove_filter('wp_footer','wp_admin_bar');
remove_filter('admin_head','wp_admin_bar');
remove_filter('admin_footer','wp_admin_bar');
remove_filter('wp_head','wp_admin_bar_class');
remove_filter('wp_footer','wp_admin_bar_class');
remove_filter('admin_head','wp_admin_bar_class');
remove_filter('admin_footer','wp_admin_bar_class');
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
remove_filter('admin_footer','wp_admin_bar_render');
function wptbr_hdr(){?><style type="text/css">table#wptbr td#wptbr_ttl a:link,table#wptbr td#wptbr_ttl a:visited{text-decoration:none}table#wptbr td#wptbr_lgt,table#wptbr td#wptbr_lgt a{text-decoration:none}</style><table style="margin-left:6px;float:left;z-index:100;position:relative;left:0px;top:0px;background:none;padding:0px;border:0px;border-bottom:1px solid #DFDFDF" id="wptbr" border=0 cols=4 width="97%" height="33"><tr><td align=left valign=center id="wptbr_ttl"><?php echo'<a href="'.home_url().'">'.__(get_bloginfo()).'</a>'?></td><td align=right valign=center id="wptbr_lgt"><div style="padding-top:2px"><?php wp_get_current_user();$current_user=wp_get_current_user();if(!($current_user instanceof WP_User))return;echo''.$current_user->display_name.''?><?php if(is_multisite()&&is_super_admin()){if(!is_network_admin()){echo' | <a href="'.network_admin_url(). '">'. __('Network Admin'). '</a>';}else{echo' | <a href="' .get_dashboard_url(get_current_user_id()). '">'.__('Site Admin') . '</a>';}}?> | <?php echo'<a href="' .wp_logout_url(home_url()). '">'.__('Log Out'). '</a>'?></div></td><td width="8"></td></tr></table><?php }add_action('in_admin_header','wptbr_hdr')?>