<?php
/*
Plugin Name: Rechtsfreier Raum
Plugin URI: http://www.ressourcenkonflikt.de/projekte/rechtsfreier-raum
Description: Dieses Plugin zeigt einen kleinen rechtsfreien Raum auf deinem Blog an.
Version: 1.22
Author: Jeff Boehm
Author URI: http://www.ressourcenkonflikt.de/
*/

function rechtsfreier_raum_div() {
$div = '
<div id="rechtsfreier-raum"><a href="http://www.tutsi.de/rechtsfreie-raeume-im-internet-pfui-aus-einsperren-zensieren-liquidieren/" target="_blank"><img src="' . get_bloginfo('wpurl') . '/wp-content/plugins/rechtsfreier-raum/rechtsfreier_raum.gif" alt="rechtsfreier Raum" width="70" height="30" border="0" /></a></div>
';
print($div);
}

function rechtsfreier_raum_style() {
$style = '
<style type="text/css">#rechtsfreier-raum { position:absolute; width:70px; height:30px; z-index:1; top: 0; left: 0; }</style>
';
print($style);
}

add_action('wp_head', 'rechtsfreier_raum_style');
add_action('wp_footer', 'rechtsfreier_raum_div');
?>
