=== Copyright Shortcode ===
Contributors: code-muffin
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=XFDW8V2SZA48E&lc=QA&item_name=Copyright%20Plugin%20Donation%20%2d%20thank%20you%21%20%3a%29&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
Tags: copyright, shortcode
Requires at least: 4.3
Tested up to: 4.3
Stable tag: 1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Use the shortcode [copyright] to insert the copyright symbol, the year, and your name. Ideal for the footer.

== Description ==

This plugin allows you to use the shortcode [copyright], which inserts a copyright symbol, the site name (linking back to the homepage), and the year.

A span with the class "copyright" wraps this, and the year is dynamically updated.

This is ideally used in the footer of your website. If shortcodes don't work in widget areas on your site, check the FAQs.

== Installation ==

= From the Plugins Directory =

1. Go to Plugins > Add New and search for 'copyright', then clck the Install button.
2. After installation, click the Activate link to enable the plugin.

= Manual =

1. Download the plugin from wordpress.org, then go to Plugins > Add New, and click Upload Plugin.
2. After installation, click the Activate link to enable the plugin.

== Frequently Asked Questions ==

= How do I use this? =

Enter the shortcode `[copyright]1 somewhere on your site - in a page, post or widget. You can also use it in your templates with the following code:

`<?php echo do_shortcode('[copyright]'); ?>`

= Can I use the shortcode in a text widget? =

Yes, if you have shortcodes enabled for use in widget areas. If you haven't, you can either install the plugin [Shortcodes in Sidebar Widgets](https://wordpress.org/plugins/shortcodes-in-sidebar-widgets/), or you can add this line of code to your functions.php file:

`add_filter('widget_text', 'do_shortcode');`

= How do I change the name that's shown? =

The name is taken from your site name, which you can set via Settings > General.

= I have a plugin installed that uses the shortcode [copyright]. Can I still use this? Will it break my other plugin? =

The plugin makes sure that 'copyright' isn't being used already. If it is, it lets you use an alternative shortcode instead: `[muffincopyright]`

== Screenshots ==

1. The visible output, and the HTML behind it

== Changelog ==

= 1.0 =
* Initial release

== Upgrade Notice ==

= 1.0 =
Initial release