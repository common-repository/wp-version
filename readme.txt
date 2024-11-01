=== Plugin Name ===
Contributors: none
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=NJHGNJ9NLWWAA
Tags: version, website, show
Requires at least: 2.0
Tested up to: 2.9.1
Stable tag: 1.5.0.0

This plugin allow you to manage and show your own website version number (no the wordpress one).

== Description ==

In some wordpress projects, customisation is an real IT developement project and not only a theme changing or plugin management.
This plugin allow you to manage and show on your footer the website version number currently running. 

This number is NOT the Wordpress version number.

== Installation ==

Please execute the following steps :

1. Download the zip achive provided. 
2. Extract it to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Go on the version admin page and set your wanted parameters. You have 2 differents options for modifying/updating your version number :
	a. Set or change the number using the textboxes.
	b. Reach the number you want using the buttons (Incremental method, useful for the quick updates).
5. Place `<?php get_website_version(); ?>` in your template, in the place you want the version number to appear.

== Frequently Asked Questions ==

= I just updated to the 1.5.0.0 version. The version displayed is not correctly formatted anymore. =
That is normal... Before the 1.5.0.0, you may have add manually HTML code before and afteer the shortcode. You have now the option to do it directly in the admin option screen. So think to remove your hardcoded html code... Furthermore, the admin field "Text to display before the version number" may have an impact on your precedent hardwritten text. Don't forget to transfer your text to this field !

== Screenshots ==

This is a quite simple plug-in, I'm sure you will do it without any screenshots :). They will arrive for further versions, when things might become a little bit tricky !

== Changelog ==

= 1.0.1.0 =
* First release of the plugin
= 1.0.5.0 =
* Incremental update version method added.
* Beginning of internationalization (French)
= 1.5.0.0 =
* Change name of admin access link from "wp-version" to "S. website version" ("Show website version")
* Bug in version update incremental method corrected
* Functionnality to add HTML code before and after version number added
* Functionnality to add a text before the version number added
* French localisation completed (I'm looking for contributors in other langages !)
* Admin page fits to Wordpress dashboard style
* Author informations added

== Upgrade Notice ==

Please be aware of modifications taking place from 1.5.0.0 : you may have to transfer the hardcoded text and HTML code you perhaps used to make the version display fit your website style in the new admin fields available now.

`<?php code(); // goes in backticks ?>`
 