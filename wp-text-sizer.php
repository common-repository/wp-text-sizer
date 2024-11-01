<?php
/**
 * @package WP Text Sizer
 * @author Anthony Acosta
 * @version 1.1.1
 */
/*
Plugin Name: WP Text Sizer
Plugin URI: http://kennedymedia.com/
Description: Provide visitors to your site the the option of increasing or decreasing the size of text onclick of image or text links using JavaScript. This code provides that option yet allows you, the page designer, to control which portions of your layout can have text size adjusted and how much.  Insert this:  &lt;?php  wptextsizerincutil(); ?&gt; where you would like the sizer icons to appear.
Author: Anthony Acosta (Ported to wordpress) 
Version: 1.1
Author URI: http://kennedymedia.com/
*/
?>
<?php
/*  Copyright 2009  ANTHONY ACOSTA  (email : anthony@kennedymedia.com)

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
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
?>
<?php 
/**
 * Call the WP Text Sizer javascript to the header
 */
add_action('wp_head', 'addHeaderCodesizer');

function addHeaderCodesizer() {
	?>
	<script src="<?php echo get_bloginfo('wpurl') . '/' . PLUGINDIR . '/wp-text-sizer/textsizer.js'; ?>" type="text/javascript"></script>
    <?php
	}
/**
 * Creates the template tag for the resizer.  
 */	
function wptextsizerincutil() {
	echo '<!-- WP Text Sizer HTML Begins -->' . "\n"; 
	?>
<a href="javascript:ts('content', -1)"><img src="<?php echo get_bloginfo('wpurl') . '/' . PLUGINDIR . '/wp-text-sizer/img/small.jpg'; ?>" title="Set Text Size Small" style="border:0px;padding:0px;margin:0px;" /></a>
<a href="javascript:ts('content', 1)"><img src="<?php echo get_bloginfo('wpurl') . '/' . PLUGINDIR . '/wp-text-sizer/img/large.jpg'; ?>" title="Set Text Size X-Large" style="border:0px;padding:0px;margin:0px;" /></a>
	<?php
	echo '<!-- WP Text Sizer HTML Ends -->' . "\n"; 
	}
?>