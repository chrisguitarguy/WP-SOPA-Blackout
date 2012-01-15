<?php
/*
Plugin Name: WP SOPA Blackout
Plugin URI: http://americancensorship.org/
Description: Raise awareness about SOPA/PIPA by blacking out your WordPress site on January 18, 2012.
Author: Christopher Davis
Author URI: http://www.christopherguitar.net/
License: GPL2

    Copyright 2012 Christopher Davis (chris@classicalguitar.org)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

define( 'CD_SOPABLACKOUT_PATH', plugin_dir_path( __FILE__ ) );
define( 'CD_SOPABLACKOUT_URL', plugin_dir_url( __FILE__ ) );

if( ! is_admin() && '2012-01-18' == date( 'Y-m-d', current_time( 'timestamp' ) ) )
{
    require_once( CD_SOPABLACKOUT_PATH . 'inc/front.php' );
}
