<?php
/*
    This file is part of Join My Multisite, a plugin for WordPress.

    Join My Multisite is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 2 of the License, or
    (at your option) any later version.

    Join My Multisite is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with WordPress.  If not, see <http://www.gnu.org/licenses/>.

*/

if (!defined('ABSPATH')) {
    die();
}

global $jmm_settings_page;

$screen = get_current_screen();

// For the DreamObjects Page
if ($screen->id == 'users_page_jmm') {

    // Introduction
    $screen->add_help_tab( array(
		'id'      => 'jmm-menu-base',
		'title'   => __('Overview', 'helfjmm'),
		'content' => 
		'<h3>' . __('Join My Multisite', 'helfjmm') .'</h3>' .
		'<p>' . __( 'This simple plugin allows you to chose how you add users to your site. Traditionally, a Multisite network requires you to either manually add users to your site, or to have the Network Admin configure the Network so all new users are added. Sometimes, you want more.', 'helfjmm' ) . '</p>' .
		'<p>' . __( 'There are three basic options to this plugin, and by default it\'s set to keep things exactly as they are today: Users must be manually added to your site. Only per-site admins can make changes, so you don\'t have to worry about your editors making changes.', 'helfjmm' ) . '</p>'
		
		));
    
    
    $screen->set_help_sidebar(
        '<h4>' . __('Links:', 'jmm') .'</h4>' .
        
        '<p><a href="http://codex.wordpress.org/Roles_and_Capabilities">' . __('WordPress Roles & Capabilities', 'jmm' ) . '</a></p>' .
        '<p><a href="http://wordpress.org/extend/plugins/multisite-user-management/">' . __('Plugin: Multisite User Management', 'jmm' ) . '</a></p>'
        );

    // Options
    $screen->add_help_tab( array(
		'id'      => 'jmm-menu-membership-options',
		'title'   => __('Membership', 'helfjmm'),
		'content' =>
		'<h3>' . __('Membership Options', 'helfjmm') .'</h3>' .
		'<ul> 
		      <li><strong>'. __('Auto: ', 'helfjmm') . '</strong>' . __('Auto-Add signed in users to this site when they visit.', 'helfjmm') . '</li>
		      <li><strong>'. __('Manual: ', 'helfjmm') . '</strong>' . __('Allow signed in users to join via a widget.', 'helfjmm') . '</li>
		      <li><strong>'. __('None: ', 'helfjmm') . '</strong>' . __('Don\'t allow new users to add themselves this site, add them manually.', 'helfjmm') . '</li>
        </ul>' .
		'<p>' . __( 'If don\'t want anything to change, then you can leave this plugin alone (i.e. on "None").', 'helfjmm' ) . '</p>' 
		));
		
    // Options
    $screen->add_help_tab( array(
		'id'      => 'jmm-menu-role-options',
		'title'   => __('New User Role', 'helfjmm'),
		'content' =>
		'<h3>' . __('New User Default Role Options', 'helfjmm') .'</h3>' .
		'<p>' . __( 'This is a simple drop-down for what role new users should have. It defaults to Subscriber.', 'helfjmm' ) . '</p>' 
	  ));

    // Options
    $screen->add_help_tab( array(
		'id'      => 'jmm-menu-shortcode-options',
		'title'   => __('Shortcode', 'helfjmm'),
		'content' =>
		'<h3>' . __('Shortcode Options', 'helfjmm') .'</h3>' .
		'<p>' . __( 'Check the box to turn allow for per-site registration. This will only be an option if your network has enabled registration. You then select a page from the drop-down list of pages, and on the page use the following shortcode to display your registration form.', 'helfjmm' ) . '</p>'  .
		'<code>[join-my-multisite]</code>'
	  ));
}

else
    return;