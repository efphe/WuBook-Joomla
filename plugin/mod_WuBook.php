<?php
/*
* @package Custom Module from CodeFire.in.
* @copyright Copyright (C) 2010 WuBook Srl. All rights reserved.
* @license http://www.Joomla.org/ GNU/GPL, see LICENSE.php
* Joomla! is free software: BSD Licens.
* This extension is made for Joomla! 1.5;
*/

defined( '_JEXEC' ) or die('Restricted access');
$lcode = $params->get('lcode');
$avoiddates =  bool2str($params->get('avoiddates'));
$avoiddeletion =  bool2str($params->get('avoiddeletion'));
$avoidmail =  bool2str($params->get('avoidmail'));
$deflang = $params->get('deflang');
$layout = $params->get('layout');
$wborcss =  bool2str($params->get('wborcss'));
$horizontal =  bool2str($params->get('horizontal'));
$minimal = bool2str($params->get('minimal'));

echo '<script src="http://wubook.net/js/wbloader.js"></script><div id="__wbor__" style="font-family:arial"><div style="margin-top:8px;font-size:10px" id="__wb_banner__"><a style="border:none;font-decoration:none;float:right" title="wubook, online booking, pms, channel manager" href="http://wubook.net/"><img alt="channel manager, expedia,online reception,software hotel bed and breakfast" title="channel manager booking.com,online booking,property management system hotel  bed and breakfast" style="border:none;font-decoration:none;margin-top:4px" src="http://wubook.net/imgs/share/lwu.png"/></a><span id="__wb_banner_txt__">Direct reservation with full customer care and best price granted</span></div></div>';
echo "<script>wbLoadInit(".$lcode.",".$avoiddates.",".$avoiddeletion.",".$avoidmail.",'".$deflang."','".$layout."',".$wborcss.",".$horizontal.",".$minimal.");</script>";
function bool2str($bool) {
     return ($bool) ? 'true' : 'false';
  }
?>
