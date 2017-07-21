

== Changelog ==

= 5 April 2016 =
* Use a whole percentage value for the entry meta column; using a percentage to eight decimal places causes discrepancies between retina and non-retina devices. This increases the content width by 4px but looks much better on a wider array of screen types/browsers.

= 20 August 2015 =
* Add text domain and/or remove domain path. (E-I)

= 31 July 2015 =
* Remove .`screen-reader-text:hover` and `.screen-reader-text:active` style rules.

= 16 July 2015 =
* Always use https when loading Google Fonts. See #3221;

= 15 June 2015 =
* Updating version number for regenerated download.

= 5 June 2015 =
* update escaping.

= 4 June 2015 =
* adding missing attr escaping;

= 13 January 2015 =
* fix credits.

= 19 August 2014 =
* Add background color to input[type="submit"] elements --

= 5 August 2014 =
* Ensure mobile menu is visible even if it overflows the available device height; Fixes #2482, props @designsimply for the fix

= 23 July 2014 =
* change theme/author URIs and footer links to `wordpress.com/themes`.

= 30 June 2014 =
* Update dashicons path -- was incorrect and was returning a 404.

= 1 June 2014 =
* add/update pot files.

= 13 May 2014 =
* Reduce large screen breakpoint to 1280px from 1300px to accomodate 1280x1024 resolutions.

= 18 April 2014 =
* Allow the menu and sidebar toggles to appear on the demo site when the demo site activation bar is present. The toggles were hidden behind the bar previously.

= 27 February 2014 =
* Change text strings to reduce theme string proliferation.
* Change text strings to reduce theme string proliferation.

= 26 February 2014 =
* Change text strings to reduce theme string proliferation.

= 24 December 2013 =
* rework markup in header to make the entire element clickable, including a background image. Helps with usabliity, and

= 19 December 2013 =
* Remove float rule on comment form elements that caused problems for logged out users and the comment form

= 18 December 2013 =
* Update tags
* Update tags in style.css
* Only load jetpack.php if it exists
* Escape URL in flounder_posted_on; move Jetpack compat file to bottom of functions.php with other includes

= 17 December 2013 =
* Update screenshot; fix for additional scrollbars in IE 11

= 13 December 2013 =
* Ensure page menus display the same as custom menus, with an arrow character between submenu transitions; Ensure comment label clears
* Adjustment to page title right padding for RTL
* Add RTL styles
* Fix for author grid widget top margins
* Tweaks to calendar widget styles
* Fix pages display in search results; add arrows between nested list items in widgets, to match navigation style, only display page title if it exists
* Remove filters for comment form that won't be used on wp.com; this was also causing a bug where the entry meta would appear underneath the content instead of to the side. Also fix bug where comment form was hidden due to unnecessary JS applied to jetpack comment form

= 10 December 2013 =
* Add styles from latest author update to improve appearance of comments on mobile devices
* Remove unnecessary comment form alteration function in inc/extras.php; add styles from recent changes from theme authors
* Update language for edit links to match _s; remove image.php template
* Styles cleanup; update version number; minor changes from latest update from theme authors

= 9 December 2013 =
* Remove unnecessary -webkit-border-radius and -moz-border-radius rules;
* Register fonts for custom headers; dequeue custom fonts if Custom Design is used instead; tweaks to custom header appearance in admin
* Rename no-results.php to content-none.php; remove word-wrap rule on all styles; add custom background support; update tags in style.css

= 7 December 2013 =
* Replace symbol with hex code
* Style cleanup; add link to post format archives around icons for support post formats
* Add footer and infinite scroll footer info; adjust widget styles for WP.com. Enable custom menu fallback. Set $themecolors
* Remove unnecessary files; add wpcom-specific files and functions; clean up style.css, replacing spaces with tabs
* Initial commit from .org repo
