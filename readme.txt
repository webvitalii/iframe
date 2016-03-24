=== iframe ===
Contributors: webvitaly
Donate link: http://web-profile.com.ua/donate/
Tags: iframe, embed, youtube, vimeo, google-map, google-maps
Requires at least: 3.0
Tested up to: 5.0
Stable tag: 4.3
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl.html

[iframe src="http://www.youtube.com/embed/4qsGTXLnmKs" width="100%" height="500"] shortcode

== Description ==

> **[Speedup WordPress](http://codecanyon.net/item/silver-bullet-pro/15171769?ref=webvitalii "Speedup and protect WordPress in a smart way")** |
> **[Advanced iFrame Pro](http://codecanyon.net/item/advanced-iframe-pro/5344999?ref=webvitalii "Advanced iFrame Pro")** |
> **[iframe](http://web-profile.com.ua/wordpress/plugins/iframe/ "Plugin page")** |
> **[Donate](http://web-profile.com.ua/donate/ "Support the development")** |
> **[GitHub](https://github.com/webvitalii/iframe "Fork")**

[iframe src="http://www.youtube.com/embed/4qsGTXLnmKs" width="100%" height="500"] shortcode
should show something like this:

[youtube http://www.youtube.com/watch?v=4qsGTXLnmKs]


WordPress removes iframe html tags because of security reasons.
Iframe shortcode is the replacement of the iframe html tag and accepts the same **[params as iframe html tag](http://wordpress.org/plugins/iframe/other_notes/)** does.
You may use iframe shortcode to embed content from YouTube, Vimeo, Google Maps or from any external page.

If you need to embed content from YouTube, Vimeo, SlideShare, SoundCloud, Twitter via direct link, you may use `[embed]http://www.youtube.com/watch?v=4qsGTXLnmKs[/embed]` shortcode.
[embed] shortcode is a core WordPress feature and can [embed content from many resources via direct link](http://codex.wordpress.org/Embeds).

= Useful: =
* **[Advanced iFrame Pro](http://codecanyon.net/item/advanced-iframe-pro/5344999?ref=webvitalii "Advanced iFrame Pro")**
* **[Silver Bullet Pro - Speedup and protect WordPress in a smart way](http://codecanyon.net/item/silver-bullet-pro/15171769?ref=webvitalii "Speedup and protect WordPress in a smart way")**
* **[Anti-spam Pro - Block spam in comments](http://codecanyon.net/item/antispam-pro/6491169?ref=webvitalii "Block spam in comments")**

== Other Notes ==

= iframe params: =
* **src** - source of the iframe: `[iframe src="http://www.youtube.com/embed/4qsGTXLnmKs"]`; by default src="http://www.youtube.com/embed/4qsGTXLnmKs";
* **width** - width in pixels or in percents: `[iframe width="100%"]` or `[iframe width="600"]`; by default width="100%";
* **height** - height in pixels: `[iframe height="500"]`; by default height="500";
* **scrolling** - with or without the scrollbar: `[iframe scrolling="no"]`; by default scrolling="yes";
* **frameborder** - with or without the frame border: `[iframe frameborder="0"]`; by default frameborder="0";
* **marginheight** - height of the margin: `[iframe marginheight="0"]`; removed by default;
* **marginwidth** - width of the margin: `[iframe marginwidth="0"]`; removed by default;
* **allowtransparency** - allows to set transparency of the iframe: `[iframe allowtransparency="true"]`; removed by default;
* **id** - allows to add the id of the iframe: `[iframe id="custom_id"]`; removed by default;
* **class** - allows to add the class of the iframe: `[iframe class="custom_class"]`; by default class="iframe-class";
* **style** - allows to add the css styles of the iframe: `[iframe style="margin-left:-30px;"]`; removed by default;
* **same_height_as** - allows to set the height of iframe same as target element: `[iframe same_height_as="div.sidebar"]`, `[iframe same_height_as="div#content"]`, `[iframe same_height_as="body"]`, `[iframe same_height_as="html"]`; removed by default;
* **any_other_param** - allows to add new parameter of the iframe `[iframe any_other_param="any_value"]`;
* **any_other_empty_param** - allows to add new empty parameter of the iframe (like "allowfullscreen" on youtube) `[iframe any_other_empty_param=""]`;

== Screenshots ==

1. [iframe] shortcode

== Changelog ==

= 4.3 - 2016-03-24 =
* minor refactoring.

= 4.2 - 2015-08-16 =
* minor bugfixing.

= 4.1 - 2015-08-11 =
* removed onpageshow and onclick params. Reason: XSS vulnerability (thanks to dxw.com).

= 4.0 - 2015-08-09 =
* removed get_params_from_url param. Reason: XSS vulnerability (thanks to dxw.com).
If you still need this feature you can [download iframe ver 3.0[(https://wordpress.org/plugins/iframe/developers/) and stick to it but keep in mind of XSS vulnerability.
* removed onload param. Reason: XSS vulnerability (thanks to dxw.com).
* escaping attributes

= 3.0 - 2015-01-25 =
* removed same_height_as="content", same_height_as="window", same_height_as="document" features because it was not working properly
* rewrote the javascript-code using pure JavaScript and without jQuery - no need to load jQuery for every site using iframe plugin
* removed function_exists check because each function has unique prefix
* code refactored
* update docs
* set height="500" instead of 480 by default
* set scrolling="yes" instead of "no" by default

= 2.9 - 2014-05-31 =
* remove '&' from the end of the string in 'get_params_from_url' param

= 2.8 - 2014-03-14 =
* remove fix for google maps

= 2.7 - 2013-06-09 =
* minor changes

= 2.6 - 2013-03-18 =
* minor changes

= 2.5 - 2012-11-03 =
* added 'get_params_from_url' (thanks to Nathanael Majoros)

= 2.4 - 2012-10-31 =
* minor changes

= 2.3 - 2012.09.09 =
* small fixes
* added (src="http://www.youtube.com/embed/4qsGTXLnmKs") by default

= 2.2 =
* fixed bug (Notice: Undefined index: same_height_as)

= 2.1 =
* added (frameborder="0") by default

= 2.0 =
* plugin core rebuild (thanks to Gregg Tavares)
* remove not setted params except the defaults
* added support for all params, which user will set
* added support for empty params (like "allowfullscreen" on youtube)

= 1.8 =
* Added style parameter

= 1.7 =
* Fixing minor bugs

= 1.6.0 =
* Added auto-height feature (thanks to Willem Veelenturf)

= 1.5.0 =
* Using native jQuery from include directory
* Improved "same_height_as" parameter

= 1.4.0 =
* Added "same_height_as" parameter

= 1.3.0 =
* Added "id" and "class" parameters

= 1.2.0 =
* Added "output=embed" fix to Google Map

= 1.1.0 =
* Parameter allowtransparency added (thanks to Kent)

= 1.0.0 =
* Initial release

== Installation ==

1. install and activate the plugin on the Plugins page
2. add shortcode `[iframe src="http://www.youtube.com/embed/4qsGTXLnmKs" width="100%" height="500"]` to page or post content
