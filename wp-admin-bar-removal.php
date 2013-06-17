<?php

/*
Plugin Name: √ WP Admin Bar Removal - DEV
Plugin URI: http://slangji.wordpress.com/wp-admin-bar-removal/
Description: Completely <code>Disable</code> new WordPress 3.1+ / 3.2+ / 3.3+ (only) <code>Admin Bar</code> Frontend and Backend. Work under GPLv2 License. Completely <code>Remove Code</code> for minimal memory load. | <a href="http://slangji.wordpress.com/donate/" title="Free Donation">Donate</a> | <a href="http://slangji.wordpress.com/contact/" title="Send Me Bug and Suggestions">Contact</a> | <a href="http://slangji.wordpress.com/themes/" title="sLaNGjI's Custom Themes">My Themes</a> | <a href="http://profiles.wordpress.org/slangji" title="sLaNGjI's Profile @ WordPress.org">My Profile</a> | <a href="http://slangji.wordpress.com/" title="sLaNGjI's WebSite @ WordPress.com">My WordPress</a> | <a href="https://github.com/slangji" title="sLaNGjI's Repositories @ GitHub.com">My GitHub</a> | <a href="http://webscripts.softpedia.com/author/sLa-1869786722.html" title="sLa Developer Page @ SoftPedia.com">My SoftPedia</a> | <a href="http://wordpress.org/extend/plugins/wp-overview-lite/" title="Show Dashboard Overview and Footer Memory Load Usage">WP Overview?</a> | <a href="http://wordpress.org/extend/plugins/wp-missed-schedule/" title="Fix Missed Scheduled Future Posts Cron Job">WP Missed Schedule?</a> | <a href="http://wordpress.org/extend/plugins/wp-admin-bar-removal/" title="Remove Admin Bar Frontend Backend User Profile and Code">Admin Bar Removal?</a> | <a href="http://wordpress.org/extend/plugins/wp-admin-bar-node-removal/" title="Remove Admin Bar Frontend and Backend Node">Admin Bar Node Removal?</a> | <a href="http://wordpress.org/extend/plugins/wp-toolbar-removal/" title="Remove ToolBar Frontend Backend User Profile and Code">ToolBar Removal?</a> | <a href="http://wordpress.org/extend/plugins/wp-toolbar-node-removal/" title="Remove ToolBar Frontend and Backend Node">ToolBar Node Removal?</a> | <a href="http://wordpress.org/extend/plugins/wp-login-deindexing/" title="Total DeIndexing WordPress LogIn from all Search Engines">LogIn DeIndexing?</a> | <a href="http://wordpress.org/extend/plugins/wp-total-deindexing/" title="Total DeIndexing WordPress from all Search Engines">WP DeIndexing?</a> | <a href="http://wordpress.org/extend/plugins/wp-ie-enhancer-and-modernizer/" title="Enhancer and Modernizer IE Surfing Expirience">Enhancer IE Surfing?</a> | <a href="http://wordpress.org/extend/plugins/wp-wp-memory-db-indicator/" title="Memory Load Consumption db size Usage Indicator">Memory and db Indicator?</a>
Version: 2012.0321-BUGFIX.0000-DEVELOPMENTAL
Author: sLa
Author URI: http://slangji.wordpress.com/
Requires at least: 3.1
Tested up to: 3.3.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Major Stable Release: Version 2012 Build 0320 Revision 2012
 *
 * [Admin Bar Removal](http://wordpress.org/extend/plugins/wp-admin-bar-removal/) WordPress PlugIn
 *
 * [Contact](http://slangji.wordpress.com/contact/) - [Donate](http://slangji.wordpress.com/donate/)
 *
 * [My Plugins](http://slangji.wordpress.com/plugins/) - [My Themes](http://slangji.wordpress.com/themes/)
 * 
 * [My GitHub.com](https://github.com/slangji) - [My SoftPedia.com](http://webscripts.softpedia.com/author/sLa-1869786722.html
 *
 *  This program is free software; you can redistribute it and/or
 *  modify it under the terms of the GNU General Public License
 *  as published by the Free Software Foundation; either version 2
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
 *  The license for this software can be found @ http://www.gnu.org/licenses/gpl-2.0.html
 *
 * This uses code derived from
 * wp-admin-bar-node-removal.php by sLa <slangji[at]gmail[dot]com>
 * according to the terms of the GNU General Public License version 2 (or later)
 *
 * Copyright © 2009-2013 [sLaNGjI's](http://profiles.wordpress.org/slangji) (slangji[at]gmail[dot]com)
 *
 * Disclaimer: Part of Copyright belongs to [sLa](http://profiles.wordpress.org/sla) and a portion to their respective owners.
 */

/**
 * @package Admin Bar Removal
 * @subpackage WordPress PlugIn
 * @since 3.1.0
 * @version 2012.0321-BUGFIX.0000-DEVELOPMENTAL
 * @author sLa
 * @license GPLv2 or later
 */

	if ( !function_exists( 'add_action' ) )
		{
			header( 'HTTP/0.9 403 Forbidden' );
			header( 'HTTP/1.0 403 Forbidden' );
			header( 'HTTP/1.1 403 Forbidden' );
			header( 'Status: 403 Forbidden' );
			header( 'Connection: Close' );
				exit();
		}

	function wptbr_ras()
		{
			echo '<style type="text/css">#adminmenushadow,#adminmenuback{background-image:none}</style>';
		}
	add_action( 'admin_head', 'wptbr_ras' );

	function wpabr_rac()
		{
			echo '<style type="text/css">#wpadminbar,body.admin-bar,body.admin-bar #wpcontent,body.admin-bar #adminmenu,body.admin-bar #wpadminbar{padding-top:0px !important}</style>';
		}
	add_action('admin_print_styles', 'wpabr_rac', 21);

	function wptbr_rbcb()
		{
			if ( has_filter( 'wp_head', '_admin_bar_bump_cb' ) )
				{
					remove_filter( 'wp_head', '_admin_bar_bump_cb' );
				}
		}
	add_filter( 'wp_head', 'wptbr_rbcb', 1 );

	show_admin_bar( false );

	function wpabr_init()
		{
			add_filter( 'show_admin_bar', '__return_false' );
			add_filter( 'wp_admin_bar_class', '__return_false' );
			add_filter( 'show_wp_pointer_admin_bar', '__return_false' );
		}
	add_filter( 'init', 'wptbr_init', 9 );

	function wpabr_ruppoabpc()
		{
			echo '<style type="text/css">.show-admin-bar{display:none}</style>';
		}
	add_action('admin_print_styles-profile.php', 'wpabr_ruppoabpc');

	$wp_scripts = new WP_Scripts();
	wp_deregister_script('admin-bar');

	$wp_styles = new WP_Styles();
	wp_deregister_style('admin-bar');

	remove_action('init', 'wp_admin_bar_init');
	remove_filter('init', 'wp_admin_bar_init');

	remove_action('wp_head', 'wp_admin_bar');
	remove_filter('wp_head', 'wp_admin_bar');
	remove_action('wp_footer', 'wp_admin_bar');
	remove_filter('wp_footer', 'wp_admin_bar');
	remove_action('admin_head', 'wp_admin_bar');
	remove_filter('admin_head', 'wp_admin_bar');
	remove_action('admin_footer', 'wp_admin_bar');
	remove_filter('admin_footer', 'wp_admin_bar');

	remove_action('wp_head', 'wp_admin_bar_class');
	remove_filter('wp_head', 'wp_admin_bar_class');
	remove_action('wp_footer', 'wp_admin_bar_class');
	remove_filter('wp_footer', 'wp_admin_bar_class');
	remove_action('admin_head', 'wp_admin_bar_class');
	remove_filter('admin_head', 'wp_admin_bar_class');
	remove_action('admin_footer', 'wp_admin_bar_class');
	remove_filter('admin_footer', 'wp_admin_bar_class');

	remove_action('wp_head', 'wp_admin_bar_render', 1000);
	remove_filter('wp_head', 'wp_admin_bar_render', 1000);
	remove_action('wp_footer', 'wp_admin_bar_render', 1000);
	remove_filter('wp_footer', 'wp_admin_bar_render', 1000);
	remove_action('admin_head', 'wp_admin_bar_render', 1000);
	remove_filter('admin_head', 'wp_admin_bar_render', 1000);
	remove_action('admin_footer', 'wp_admin_bar_render', 1000);
	remove_filter('admin_footer', 'wp_admin_bar_render', 1000);

	remove_action('wp_head', 'wp_admin_bar_css');
	remove_filter('wp_head', 'wp_admin_bar_css');
	remove_action('wp_head', 'wp_admin_bar_dev_css');
	remove_filter('wp_head', 'wp_admin_bar_dev_css');
	remove_action('wp_head', 'wp_admin_bar_rtl_css');
	remove_filter('wp_head', 'wp_admin_bar_rtl_css');
	remove_action('wp_head', 'wp_admin_bar_rtl_dev_css');
	remove_filter('wp_head', 'wp_admin_bar_rtl_dev_css');
	remove_action('admin_head', 'wp_admin_bar_css');
	remove_filter('admin_head', 'wp_admin_bar_css');
	remove_action('admin_head', 'wp_admin_bar_dev_css');
	remove_filter('admin_head', 'wp_admin_bar_dev_css');
	remove_action('admin_head', 'wp_admin_bar_rtl_css');
	remove_filter('admin_head', 'wp_admin_bar_rtl_css');
	remove_action('admin_head', 'wp_admin_bar_rtl_dev_css');
	remove_filter('admin_head', 'wp_admin_bar_rtl_dev_css');

	remove_action('wp_footer', 'wp_admin_bar_js');
	remove_filter('wp_footer', 'wp_admin_bar_js');
	remove_action('wp_footer', 'wp_admin_bar_dev_js');
	remove_filter('wp_footer', 'wp_admin_bar_dev_js');
	remove_action('admin_footer', 'wp_admin_bar_js');
	remove_filter('admin_footer', 'wp_admin_bar_js');
	remove_action('admin_footer', 'wp_admin_bar_dev_js');
	remove_filter('admin_footer', 'wp_admin_bar_dev_js');

	remove_action('wp_ajax_adminbar_render', 'wp_admin_bar_ajax_render');
	remove_filter('wp_ajax_adminbar_render', 'wp_admin_bar_ajax_render');

	remove_action('personal_options', '_admin_bar_pref');
	remove_filter('personal_options', '_admin_bar_pref');

	remove_action('personal_options', '_get_admin_bar_pref');
	remove_filter('personal_options', '_get_admin_bar_pref');

	remove_action('locale', 'wp_admin_bar_lang');
	remove_filter('locale', 'wp_admin_bar_lang');

	remove_action('admin_footer', 'wp_admin_bar_render');
	remove_filter('admin_footer', 'wp_admin_bar_render');

	function wpabr_nfo()
		{
			echo "\n<!--Plugin Admin Bar Removal 2012.0321-BUGFIX.0000-DEVELOPMENTAL Active-->\n\n";
		}
	add_action('wp_head', 'wpabr_nfo');
	add_action('wp_footer', 'wpabr_nfo');

?>