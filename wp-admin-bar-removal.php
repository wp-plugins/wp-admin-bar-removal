<?php 

/*
Plugin Name: WP Admin Bar Removal
Plugin URI: http://slangji.wordpress.com/wp-admin-bar-removal/
Description: Disable and Remove Admin Bar and ToolBar Code on WordPress 3.1+ to 3.6+ Frontend and Backend, Completely, for Minimal Memory Load, and DashBoard Speedup, with New Unified Coding Approach! Also Hide: Frontend 28px and Bump CB, Backend 28px, Node, Admin Menu Shaddow Effect, Pointer ToolTips, User Personal Options Settings, without loosing Logout and Network MultiSite functionality! The configuration of this Plugin is Automattic! The first and only Plugin (for now) that really work on WordPress 3.1+ to 3.6+ Work under <a href="http://www.gnu.org/licenses/gpl-2.0.html" title"GPLv2 or later License compatible">GPLv2</a> or later License. <a href="http://www.gnu.org/prep/standards/standards.html" title"GNU style indentation coding standard compatible">GNU Style</a> indentation compatible. Meet detailed <a href="http://wordpress.org/plugins/about/guidelines/Plugin" title"This plugin meet detailed guideline quality requirements">Guidelines</a> quality requirements. | <a href="http://wordpress.org/plugins/wp-admin-bar-node-removal/" title="Remove Admin Bar Frontend and Backend Node">Admin Bar Node Removal?</a> | <a href="http://wordpress.org/plugins/wp-overview-lite/" title="Show DashBoard Overview and Footer Memory Load Usage">WP Overview?</a> | <a href="http://wordpress.org/plugins/wp-missed-schedule/" title="Fix Missed Scheduled Future Posts Cron Job">WP Missed Schedule?</a> | <a href="http://wordpress.org/plugins/wp-toolbar-removal/" title="Remove Admin Bar Frontend Backend User Profile and Code">ToolBar Removal?</a> |
<a href="http://wordpress.org/plugins/wp-toolbar-node-removal/" title="Remove Admin Bar Frontend and Backend Node">ToolBar Node Removal?</a> | <a href="http://wordpress.org/plugins/wp-login-deindexing/" title="Total DeIndexing WordPress LogIn from all Search Engines">LogIn DeIndexing?</a> | <a href="http://wordpress.org/plugins/wp-total-deindexing/" title="Total DeIndexing WordPress from all Search Engines">WP DeIndexing?</a> | <a href="http://wordpress.org/plugins/wp-ie-enhancer-and-modernizer/" title="Enhancer and Modernizer IE Surfing Expirience">Enhancer IE Surfing?</a> | <a href="http://wordpress.org/plugins/wp-wp-memory-db-indicator/" title="Memory Load Consumption db size Usage Indicator">Memory and db Indicator?</a> | <a href="http://slangji.wordpress.com/contact/" title="Send Me Bug and Suggestion">Contact</a> | <a href="http://slangji.wordpress.com/donate/" title="Free Donation">Donate</a>
Version: 2013.0621.0361
Author: sLa NGjI's
Author URI: http://slangji.wordpress.com/
Requires at least: 3.1
Tested up to: 3.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Indentation: GNU style coding standard
Indentation URI: http://www.gnu.org/prep/standards/standards.html
 *
 * DEVELOPMENT release: Version 2013 Build 0624-BUGFIX Revision 0956-DEVELOPMENTAL
 *
 * [WP Admin Bar Removal](http://wordpress.org/plugins/wp-admin-bar-removal/) Disable and Remove WordPress Admin Bar and ToolBar Code Completely
 *
 * Copyright (C) 2010-2013 [sLa NGjI's](http://slangji.wordpress.com/) (email: <slangji[at]gmail[dot]com>)
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the [GNU General Public License](http://wordpress.org/about/gpl/)
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, see [GNU General Public Licenses](http://www.gnu.org/licenses/),
 * or write to the Free Software Foundation, Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301, USA.
 *
 * √ DISCLAIMER
 *
 * The license under which the WordPress software is released is the GPLv2 (or later) from the
 * Free Software Foundation. A copy of the license is included with every copy of WordPress.
 *
 * Part of this license outlines requirements for derivative works, such as plugins or themes.
 * Derivatives of WordPress code inherit the GPL license.
 *
 * There is some legal grey area regarding what is considered a derivative work, but we feel
 * strongly that plugins and themes are derivative work and thus inherit the GPL license.
 *
 * The license for this software can be found on [Free Software Foundation](http://www.gnu.org/licenses/gpl-2.0.html) and as license.txt into this plugin package.
 *
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * √ THERMS
 *
 * This uses (or it parts) code derived from
 *
 * wp-header-footer-log.php by sLa <slangji[at]gmail[dot]com>
 * Copyright (C) 2009-2013 [sLa NGjI's](http://slangji.wordpress.com/) (email: <slangji[at]gmail[dot]com>)
 *
 * wp-admin-bar-removal.php by sLa <slangji[at]gmail[dot]com>
 * Copyright (C) 2010-2013 [sLa NGjI's](http://slangji.wordpress.com/) (email: <slangji[at]gmail[dot]com>)
 *
 * wp-admin-bar-removal-node-addon.php by sLa <slangji[at]gmail[dot]com>
 * Copyright (C) 2010-2013 [sLa NGjI's](http://slangji.wordpress.com/) (email: <slangji[at]gmail[dot]com>)
 *
 * toolbar-removal-completely-disable.php by sLa <slangji[at]gmail[dot]com>
 * Copyright (C) 2011-2013 [sLa NGjI's](http://slangji.wordpress.com/) (email: <slangji[at]gmail[dot]com>)
 *
 * one-click-logout-barless.php by olyma <rackofpower.com>
 * Copyright (C) 2011-2012 [olyma](http://rackofpower.com/) (email: <olyma[at]rackofpower[dot]com>)
 *
 * wp-toolbar-removal-node-addon.php by sLa <slangji[at]gmail[dot]com>
 * Copyright (C) 2012-2013 [sLa NGjI's](http://slangji.wordpress.com/) (email: <slangji[at]gmail[dot]com>)
 *
 * according to the terms of the GNU General Public License version 2 (or later)
 *
 * This wp-header-footer-log.php uses (or it parts) code derived from
 *
 * wp-footer-log.php by sLa <slangji[at]gmail[dot]com>
 * Copyright (C) 2008-2013 [sLa NGjI's](http://slangji.wordpress.com/) (email: <slangji[at]gmail[dot]com>)
 *
 * sLa2sLaNGjIs.php by sLa <slangji[at]gmail[dot]com>
 * Copyright (C) 2009-2013 [sLa NGjI's](http://slangji.wordpress.com/) (email: <slangji[at]gmail[dot]com>)
 *
 * according to the terms of the GNU General Public License version 2 (or later)
 *
 * According to the Terms of the GNU General Public License version 2 (or later) part of Copyright belongs to your own author and part belongs to their respective others authors:
 *
 * Copyright (C) 2008-2013 [sLa NGjI's](http://slangji.wordpress.com/) (email: <slangji[at]gmail[dot]com>)
 * Copyright (C) 2011-2012 [olyma](http://rackofpower.com/) (email: <olyma[at]rackofpower[dot]com>)
 *
 * √ VIOLATIONS
 *
 * [Violations of the GNU Licenses](http://www.gnu.org/licenses/gpl-violation.en.html)
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * √ GUIDELINES
 *
 * This software meet [Detailed Plugin Guidelines](http://wordpress.org/plugins/about/guidelines/) paragraphs 1,4,10,12,13,16,17 quality requirements.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * √ CODING
 *
 * This software implement [GNU style](http://www.gnu.org/prep/standards/standards.html) coding standard indentation.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * √ VALIDATION
 *
 * This readme.txt rocks. Seriously. Flying colors. It meet the specifications according to WordPress [Readme Validator](http://wordpress.org/plugins/about/validator/) directives.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * √ THANKS
 * To [olyma](http://wordpress.org/plugins/one-click-logout-barless/)
 * To [storkontheroof](http://profiles.wordpress.org/storkontheroof/)
 */

	/**
	 * @package WP Admin Bar Removal (State of The Art Plugin ?)
	 * @subpackage WordPress PlugIn
	 * @description Disable and Remove WordPress Admin Bar and ToolBar Code Completely
	 * @since 3.1.0
	 * @tested 3.6.0
	 * @version 2013.0621.0361
	 * @status STABLE release
	 * @author sLa NGjI's
	 * @license GPLv2 or later
	 * @indentation GNU style coding standard
	 * @keybit 
	 * @keysum 
	 * @keytag 74be16979710d4c4e7c6647856088456
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

	global $wp_version;

	if ( $wp_version < 3.1 )
		{
			wp_die( __( 'This Plugin Requires WordPress 3.1+ or Greater: Activation Stopped!' ) );
		}

	function wpabr_rbams()
		{
			echo "\n\n<!--Start Admin Bar Removal Code-->\n\n";
			echo '<style type="text/css">#adminmenuShaddow,#adminmenuback{background-image:none}</style>';
			echo "\n\n<!--End Admin Bar Removal Code-->\n\n";
		}
	add_action( 'admin_head', 'wpabr_rbams' );

	function wpabr_rbf28px()
		{
			echo "\n\n<!--Start Admin Bar Removal Code-->\n\n";
			echo '<style type="text/css">html.wp-toolbar,html.wp-toolbar #wpcontent,html.wp-toolbar #adminmenu,html.wp-toolbar #wpadminbar,body.admin-bar,body.admin-bar #wpcontent,body.admin-bar #adminmenu,body.admin-bar #wpadminbar{padding-top:0px !important}</style>';
			echo "\n\n<!--End Admin Bar Removal Code-->\n\n";
		}
	add_action( 'admin_print_styles', 'wpabr_rbf28px', 21 );

	function wpabr_abtlh()
		{
			echo "\n\n<!--Start Admin Bar Removal Code-->\n\n";
?>
<style type="text/css">table#tbrcss td#tbrcss_ttl a:link,table#tbrcss td#tbrcss_ttl a:visited{text-decoration:none}table#tbrcss td#tbrcss_lgt,table#tbrcss td#tbrcss_lgt a{text-decoration:none}</style>
<table style="margin-left:6px;float:left;z-index:100;position:relative;left:0px;top:0px;background:none;padding:0px;border:0px;border-bottom:1px solid #DFDFDF" id="tbrcss" border="0" cols="4" width="97%" height="33">
<tr>
<td align="left" valign="center" id="tbrcss_ttl">
<?php

	echo '<a href="' . home_url() . '">' . __( get_bloginfo() ) . '</a>';

?>
</td>
<td align="right" valign="center" id="tbrcss_lgt">
<div style="padding-top:2px">
<?php

	echo date( 'l j F Y @ H:i' );

	wp_get_current_user();

	$current_user = wp_get_current_user();

	if ( !( $current_user instanceof WP_User ) )
		return;

	echo ' | ' . $current_user->display_name . '';

	if ( is_multisite() && is_super_admin() )
		{
			if ( !is_network_admin() )
				{
					echo ' | <a href="' . network_admin_url() . '">' . __( 'Network Admin' ) . '</a>';
				}
			else
				{
					echo ' | <a href="' . get_DashBoard_url( get_current_user_id() ) . '">' . __( 'Site Admin' ) . '</a>';
				}
		}

	echo ' | <a href="' . wp_logout_url( home_url() ) . '">' . __( 'Log Out' ) . '</a>';

?>
</div>
</td>
<td width="8">
</td>
</tr>
</table>
<?php
			echo "\n<!--End Admin Bar Removal Code-->\n\n";
		}

	global $wp_version;

	if ( $wp_version >= 3.3 )
		{
			add_action( 'in_admin_header', 'wpabr_abtlh' );
		}

	function wpabr_rfbcb()
		{
			if ( has_filter( 'wp_head', '_admin_bar_bump_cb' ) )
				{
					remove_filter( 'wp_head', '_admin_bar_bump_cb' );
				}
		}
	add_filter( 'wp_head', 'wpabr_rfbcb', 1 );

	function wpabr_rfmp()
		{
			echo "\n\n<!--Start Admin Bar Removal Code-->\n\n";
			echo '<style type="text/css" media="print">#wpadminbar{display:none}</style>';
			echo "\n\n<!--End Admin Bar Removal Code-->\n\n";
		}
	add_action( 'wp_head', 'wpabr_rfmp', 1  );

	function wp_admin_bar_init()
		{
			global $wp_version;

			if ( $wp_version >= 3.1 )
				{
					global $wp_version;

					if ( $wp_version < 3.3 )
						{
							add_filter( 'show_admin_bar', '__return_false' );
						}
				}
			add_filter( 'wp_admin_bar_class', '__return_false' );
			add_filter( 'wp_admin_bar_css', '__return_false' );
			add_filter( 'wp_admin_bar_js', '__return_false' );
			add_filter( 'wp_admin_bar_render', '__return_false' );
			add_filter( 'wp_admin_bar_ajax_render', '__return_false' );
			add_filter( 'show_wp_pointer_admin_bar', '__return_false' );
		}
	add_filter( 'init', 'wp_admin_bar_init', 9 );

	function wpabr_ruppoabpc()
		{
			echo "\n\n<!--Start Admin Bar Removal Code-->\n\n";
			echo '<style type="text/css">.show-admin-bar{display:none}</style>';
			echo "\n\n<!--End Admin Bar Removal Code-->\n\n";
		}
	add_action( 'admin_print_styles-profile.php', 'wpabr_ruppoabpc' );
	remove_action( 'personal_options', '_admin_bar_preferences' );
	remove_filter( 'personal_options', '_admin_bar_preferences' );

	$wp_scripts = new WP_Scripts();
	wp_deregister_script( 'admin-bar' );

	$wp_styles = new WP_Styles();
	wp_deregister_style( 'admin-bar' );

	remove_action( 'init', 'wp_admin_bar_init' );
	remove_filter( 'init', 'wp_admin_bar_init' );

	remove_action( 'wp_head', 'wp_admin_bar' );
	remove_filter( 'wp_head', 'wp_admin_bar' );
	remove_action( 'wp_footer', 'wp_admin_bar' );
	remove_filter( 'wp_footer', 'wp_admin_bar' );
	remove_action( 'admin_head', 'wp_admin_bar' );
	remove_filter( 'admin_head', 'wp_admin_bar' );
	remove_action( 'admin_footer', 'wp_admin_bar' );
	remove_filter( 'admin_footer', 'wp_admin_bar' );

	remove_action( 'wp_head', 'wp_admin_bar_class' );
	remove_filter( 'wp_head', 'wp_admin_bar_class' );
	remove_action( 'wp_footer', 'wp_admin_bar_class' );
	remove_filter( 'wp_footer', 'wp_admin_bar_class' );
	remove_action( 'admin_head', 'wp_admin_bar_class' );
	remove_filter( 'admin_head', 'wp_admin_bar_class' );
	remove_action( 'admin_footer', 'wp_admin_bar_class' );
	remove_filter( 'admin_footer', 'wp_admin_bar_class' );

	remove_action( 'wp_head', 'wp_admin_bar_css' );
	remove_filter( 'wp_head', 'wp_admin_bar_css' );
	remove_action( 'wp_head', 'wp_admin_bar_dev_css' );
	remove_filter( 'wp_head', 'wp_admin_bar_dev_css' );
	remove_action( 'wp_head', 'wp_admin_bar_rtl_css' );
	remove_filter( 'wp_head', 'wp_admin_bar_rtl_css' );
	remove_action( 'wp_head', 'wp_admin_bar_rtl_dev_css' );
	remove_filter( 'wp_head', 'wp_admin_bar_rtl_dev_css' );
	remove_action( 'admin_head', 'wp_admin_bar_css' );
	remove_filter( 'admin_head', 'wp_admin_bar_css' );
	remove_action( 'admin_head', 'wp_admin_bar_dev_css' );
	remove_filter( 'admin_head', 'wp_admin_bar_dev_css' );
	remove_action( 'admin_head', 'wp_admin_bar_rtl_css' );
	remove_filter( 'admin_head', 'wp_admin_bar_rtl_css' );
	remove_action( 'admin_head', 'wp_admin_bar_rtl_dev_css' );
	remove_filter( 'admin_head', 'wp_admin_bar_rtl_dev_css' );

	remove_action( 'wp_footer', 'wp_admin_bar_js' );
	remove_filter( 'wp_footer', 'wp_admin_bar_js' );
	remove_action( 'wp_footer', 'wp_admin_bar_dev_js' );
	remove_filter( 'wp_footer', 'wp_admin_bar_dev_js' );
	remove_action( 'admin_footer', 'wp_admin_bar_js' );
	remove_filter( 'admin_footer', 'wp_admin_bar_js' );
	remove_action( 'admin_footer', 'wp_admin_bar_dev_js' );
	remove_filter( 'admin_footer', 'wp_admin_bar_dev_js' );

	remove_action( 'locale', 'wp_admin_bar_lang' );
	remove_filter( 'locale', 'wp_admin_bar_lang' );

	remove_action( 'wp_head', 'wp_admin_bar_render', 1000 );
	remove_filter( 'wp_head', 'wp_admin_bar_render', 1000 );
	remove_action( 'wp_footer', 'wp_admin_bar_render', 1000 );
	remove_filter( 'wp_footer', 'wp_admin_bar_render', 1000 );
	remove_action( 'admin_head', 'wp_admin_bar_render', 1000 );
	remove_filter( 'admin_head', 'wp_admin_bar_render', 1000 );
	remove_action( 'admin_footer', 'wp_admin_bar_render', 1000 );
	remove_filter( 'admin_footer', 'wp_admin_bar_render', 1000 );

	remove_action( 'wp_ajax_adminbar_render', 'wp_admin_bar_ajax_render' );
	remove_filter( 'wp_ajax_adminbar_render', 'wp_admin_bar_ajax_render' );

	remove_action( 'wp_ajax_adminbar_render', 'wp_admin_bar_ajax_render', 1000 );
	remove_filter( 'wp_ajax_adminbar_render', 'wp_admin_bar_ajax_render', 1000 );

	remove_action( 'admin_footer', 'wp_admin_bar_render' );
	remove_filter( 'admin_footer', 'wp_admin_bar_render' );

	function wpabr_hfl()
		{
			echo "\n<!--Plugin Admin Bar Removal 2013.0621.0361 Active - Tag: ".md5(md5("".""))."-->\n";
			echo "\n<!--This Site is Optimized to Speedup DashBoard and Minimize Memory Load Consumption";

			global $wp_version;

			if ( $wp_version >= 3.3 )
				{
					echo " with ToolBar Disabled";
				}

			global $wp_version;

			if ( $wp_version >= 3.1 )
				{
					global $wp_version;

					if ( $wp_version < 3.3 )
						{
							echo " with Admin Bar Disabled";
						}
				}

			echo "-->\n\n";
		}
	add_action( 'wp_head', 'wpabr_hfl' );
	add_action( 'wp_footer', 'wpabr_hfl' );

?>
