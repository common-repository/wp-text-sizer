=== WP-Text-Sizer ===
Contributors: anthon1
Donate link: http://kennedymedia.com/wp-text-sizer
Tags: text, resizer, resize
Requires at least: 2.7
Tested up to: 3.0
Version: 1.1.1
Stable tag: 1.1.1

Provide visitors to your site the the option of increasing or decreasing the size of text onclick of image or text links using JavaScript. This code provides that option yet allows you, the page designer, to control which portions of your layout can have text size adjusted and how much.

== Description ==

Provide visitors to your site the the option of increasing or decreasing the size of text by clicking on an icon which represents larger or smaller text. 

Usage is simple.  You can insert the code <code><?php if(function_exists('wptextsizerincutil')) { wptextsizerincutil(); } ?></code> where ever you would like the icons to appear.

<strong>NOTE: Some text will not resize if it uses an absolute size (pt) rather than a relative size in the CSS.<br>This plugin will only resize text elements within the "content" div tag.  If you are not using a div tag called "content" this plugin will not work for you.</strong><strong>NOTE: Some text will not resize if it uses an absolute size (pt) rather than a relative size in the CSS.</strong>

All the information (general, changelog, installation, upgrade, usage) you need about this plugin can be found here: [wp-text-sizer Readme](http://kennedymedia.com/wp-text-sizer "WP-text-sizer Readme").

Changes.  Original code looks for the CSS "toparticle", this has been corrected so that it searches for "content".

== Development Blog ==

[Kennedy Media's WordPress Plugins Development Blog](http://kennedymedia.com/wordpress/ "Kennedy Media's WordPress Plugins Development Blog")

Version 1.1.1 Fixes php shortform tags (Special thanks to Peter Fraterdeus for pointing this error out)

== Screenshots ==

1. How it looks on your blog

== Installation ==

1. Upload the full directory into your wp-content/plugins directory
2. Activate the plugin at the plugin administration page
3. Insert this: <code><?php if(function_exists('wptextsizerincutil')) { wptextsizerincutil(); } ?></code> where you would like the sizer icons to appear.
4. this Plugin is so simple, it doesn't require any additional configuration.

<strong>NOTE: Some text will not resize if it uses an absolute size (pt) rather than a relative size in the CSS.<br>This plugin will only resize text elements within the "content" div tag.  If you are not using a div tag called "content" this plugin will not work for you.</strong>