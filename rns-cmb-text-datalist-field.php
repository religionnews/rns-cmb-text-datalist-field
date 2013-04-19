<?php
/*
Plugin Name: RNS CMB Text Datalist Field
Version: 0.1
Description: Create text fields with datalists using Custom Metaboxes and Fields for WordPress
Author: David Herrera
Author URI: http://www.religionnews.com
Plugin URI:
Text Domain: rns-cmb-text-datalist-field
Domain Path: /languages
*/

function rns_cmb_render_text_datalist( $field, $meta ) {
  echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" list="', $field['id'], '_datalist" />','<p class="cmb_metabox_description">', $field['desc'], '</p>';
  if ( is_array( $field['datalist'] ) ) {
    $datalist = '<datalist id="' . $field['id'] . '_datalist">';
    foreach ( $field['datalist'] as $option ) {
      $datalist .= '<option value="' . $option . '"></option>';
    }
    $datalist .= '</datalist>';
    echo $datalist;
  }
}
add_action( 'cmb_render_text_datalist', 'rns_cmb_render_text_datalist', 10, 2 );
