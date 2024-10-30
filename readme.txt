=== Callback Request ===
Contributors: joeybdesign
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=WSWMBWVZ8LQ82
Tags: callback request, form, request call-back, email form, callback, call-back
Requires at least: 3.1
Tested up to: 3.8
Stable tag: 1.4

Callback Request creates a quick and easy way to add a call back request form to your webpage using a shortcode. 

== Description ==

Callback Request was created to allow for a quick and easy way to add a call back request form to your website using a simple shortcode.

The form asks for the following details for the user:

	- Name
	- Phone Number
	- Most suitable time for callback

Once the user fills in the form and clicks on the request callback button an email will be sent to your email address showing you the details of the request. 
By doing this it allows you to quickly add this task as a reminder to your phone or email client so you can easily get in touch with your prospective client at a time that suits them.

Along with the front end form there is a small backend configuration which allows you to set the following information:

	- The email address to send reminders from.
	- Your email address to send the reminders to.
	- The email subject.

The backend also gives you some simple styling information to allow you to set the colours of the request button using simple colour pickers to fit in with your website and also set the alignment of the request callback button.

Included Translations:

- German (de_DE)

- French (fr_FR)

- Russian (ru_RU)


== Installation ==

1. Upload `callback-request` folder to your `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress - Look for Callback Request and click activate.
3. Go to the plugin settings page and enter your settings, then click Save Settings.
4. Place '[callback_shortcode]' into any of your posts to display the form.


== Screenshots ==

1. Administration Interface.
2. Form with success message styling and button styling.
3. Form with error on validation.

== Changelog ==
= 1.4 =
* Added Russian Translation.
* Added more styling options for Callback Request Button.
* Created function for mail.
* Added a settings menu icon to fit in with WP 3.8.
* Added the ability to include the name, number and time of the person requesting the callback to the email subject.


= 1.3 =
* Added support for translations.
* Created German Translation.
* Created French Translation.
* Added additional validation in case javascript is disabled/bots are attempting to generate callback-requests.

= 1.2 =
* Added CSS style to success message after callback is requested as seen in screenshots.
* Changed the way CSS and JS files are called up for use in the plugin.
* Added uninstaller to remove all options from database if plugin is deleted.

= 1.1 =
* Resolved an issue with color picker and form validation javascript.


= 1.0 =
* Initial Release.

== Upgrade Notice ==
= 1.4 =
* Added Russian Translation.
* Added more styling options for Callback Request Button.
* Created function for mail.
* Added a settings menu icon to fit in with WP 3.8.
* Added the ability to include the name, number and time of the person requesting the callback to the email subject.

= 1.3 =
- Added support for translations.
- Created German translation.
- Created French Translation.
- Added additional validation in case javascript is disabled/bots are attempting to generate callback-requests.

= 1.2 =
- Added CSS style to success message after callback is requested as seen in screenshots.
- Changed the way CSS and JS files are called up for use in the plugin.
- Added uninstaller to remove all options from database if plugin is deleted.

= 1.1 =
- Resolved an issue with both javascript files causing a great lack in functionality.
- Please update to get full functionality.