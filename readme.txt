=== WC Reviews Carousel ===
Contributors: realblackz
Donate link: https://itsmereal.com
Tags: media, woocommerce
Requires at least: 4.3
Tested up to: 5.4.1
Stable tag:
Requires PHP: 5.4
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

A simple plugin that converts WooCommerce product reviews to carousel.

== Description ==

Easily turn boring list of reviews to a carousel for a different look. Although the goal of this plugin is to make WooCommerce reviews into carousel, it can be used to make any wrapper containing a loop of items into a carousel as well.

By deafult, this plugin does not add any extra styles other than the default styles from the Owl Carousel library.

[Learn more about this plugin here](https://itsmereal.com/plugins/woocommerce-reviews-carousel)

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/wc-reviews-carousel` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress.
1. Go to Appearance > Customize > WC WC Reviews Carousel to access plugin settings.

== Frequently Asked Questions ==

= How to use this plugin? =

Install and activate the plugin. Got to Appearance > Customize > WC WC Reviews Carousel and update the plugin settings.

= Why not include a style? =

Each theme can display the reviews differently. The plugin is not adding content or filtering it. It just manupulating the DOM to prepare the carousel. So, adding your own style is the best way to go.

= Why the carousel looks broken? / doesn't work =

1. Make sure your site has jQuery. If not, add jQuery.
1. You are not adding the correct wrapper class or ID. Please note you have to add the ',' for class and '#' for ID.
1. Your added custom options are wrong. Please enter that properly.

== Changelog ==

= 1.0 =
* Initial release
* 2020-05-26