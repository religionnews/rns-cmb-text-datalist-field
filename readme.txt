=== RNS CMB Text Datalist Field ===
Contributors: dlh
Donate link: http://www.religionnews.com/about/support-rns
Tags: custom fields, datalist
Requires at least: 3.5.1
Tested up to: 3.5.1
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Create text fields with datalists using Custom Metaboxes and Fields for WordPress


== Description ==

This plugin creates a `text_datalist` field type for use with [Custom Metaboxes and Fields for WordPress][1].

The `text_datalist` field works like the CMB `text` field but includes a `<datalist>` element. `<datalist>`s provide suggestions as the user completes the field, [as illustrated here][2].

For `<datalist>` browser compatability, see [caniuse.com][3].

[1]: https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
[2]: http://demo.agektmr.com/datalist/
[3]: http://caniuse.com/#feat=datalist


== Installation ==

1. Upload the plugin to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

The code for creating a `text_datalist` field looks identical to the code for creating a `text` field with the addition of the `datalist` key:

    array(
      'name' => 'My Text Datalist Field',
      'desc' => 'field description (optional)',
      'id'   => $prefix . 'test_text_datalist',
      'type' => 'text_datalist',
      'datalist' => array( 'Apple', 'Banana', 'Cranberry' )
    ),

The value of `datalist` should be a numeric array, as illustrated above.


== Screenshots ==

1. An example of suggestions from a `<datalist>` shown as the user types


== Changelog ==

= 0.1 =
* Initial release
