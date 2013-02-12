<?php
/*
* @package WuBook Reception's Module
* @copyright Copyright (C) 2010 WuBook Srl. All rights reserved.
* @license http://www.Joomla.org/ GNU/GPL, see LICENSE.php
* Joomla! is free software.
* This extension is made for Joomla! 1.6+;
*/

defined('_JEXEC') or die('Restricted access');


$lcode = $params->get( 'lcode' );
$avoiddates = $params->get( 'p_avoiddates' );
$avoidcanc = $params->get( 'p_avoidcanc' );
$avoidmail = $params->get( 'p_avoidmail' );
$deflang = $params->get( 'p_deflang' );
$theme = $params->get( 'p_theme' );
$css = $params->get( 'p_css' );
$horizonatal= $params->get( 'p_horizonatal' );


$html = '<!-- Booking Engine -->
  <script src="http://wubook.net/js/wbloader.js"></script>
  <div id="__wbor__" style="font-family:arial; color:#000;">
    <div style="margin-top:8px;font-size:10px" id="__wb_banner__">
      <a style="border:none;font-decoration:none;float:right" title="wubook, online booking, pms, channel manager" href="http://wubook.net/"><img alt="hotel.de, hrs, channel manager,online reception,gestionale hotel  bed and breakfast" title="channel manager booking.com,online reception,gestionale hotel bed and breakfast" style="border:none;font-decoration:none;margin-top:4px" src="http://wubook.net/imgs/share/lwu.png"/></a>
      <span id="__wb_banner_txt__">Direct reservation with full customer care and best price granted</span>
    </div>
  </div>
  <script>wbLoadInit(' . $lcode . ', ' . $avoiddates . ', ' . $avoidcanc . ', ' . $avoidmail . ', \'' . $deflang . '\', \'' . $theme . '\', ' . $css . ', ' . $horizonatal . ');</script>
  <!-- fine Booking Engine -->';


/*
if (!$clean_all) {
	if ($clean_js) {
		preg_match("/<script(.*)>(.*)<\/script>/i", $html, $matches);
		if ($matches) {
			foreach ($matches as $i=>$match) {
				$clean_js = str_replace('<br />', '', $match);
				$html = str_replace($match, $clean_js, $html);
			}
		}
	}
	if ($clean_css) {
		preg_match("/<style(.*)>(.*)<\/style>/i", $html, $matches);
		if ($matches) {
			foreach ($matches as $i=>$match) {
				$clean_js = str_replace('<br />', '', $match);
				$html = str_replace($match, $clean_js, $html);
			}
		}
	}
} else {
	$html = str_replace('<br />', '', $html);
}
*/

echo $html;

?>