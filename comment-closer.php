<?php
/**
 * Plugin Name: Comment Closer
 * Plugin URI: http://www.swarmstrategies.com/comment_closer
 * Text Domain: comment_closer
 * Description: This plugin resolves the <i/> problem with formatting tags in comments.
 * Author: Matt Parrott
 * Author URI: http://www.swarmstrategies.com/matt
 * Donate URI: http://www.swarmstrategies.com/
 * Version: 0.1.1
 * Last change: 10.26.2011
 * Licence: GPL2
*/

/**
License:
==============================================================================
Copyright 2011 Matt Parrott  (email : parrott.matt@gmail.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

Requirements:
==============================================================================
This plugin requires WordPress >= 3.2 and tested with PHP Interpreter >= 5.3.1
*/

define('COMMENT_CLOSER_VERSION', '0.1.1');
define('COMMENT_CLOSER_PLUGIN_URL', plugin_dir_url( __FILE__ ));


function comment_closer_filter($content='') {
	
	$content = preg_replace('#(<[\s]*(.{1})[\s]*/[\s]*>)#', '</$2>', $content);
	return($content);
} add_filter('comment_text', 'comment_closer_filter');
