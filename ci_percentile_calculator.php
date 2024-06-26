<?php
/*
Plugin Name: CI Percentile calculator
Plugin URI: https://www.calculator.io/percentile-calculator/
Description: The percentile calculator helps to find percentile values for a data set. Use this percentile calculator to create a table listing each 5th percentile
Version: 1.0.0
Author: Percentile Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_percentile_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Percentile Calculator by www.calculator.io";

function display_calcio_ci_percentile_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Percentile Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_percentile_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_percentile_calculator', 'display_calcio_ci_percentile_calculator' );