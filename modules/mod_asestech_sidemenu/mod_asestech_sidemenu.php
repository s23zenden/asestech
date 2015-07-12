<?php defined('_JEXEC') or die();
//params
$menu_item_1 = $params->get('menu_item_1');
$menu_item_2 = $params->get('menu_item_2');
$menu_item_3 = $params->get('menu_item_3');
$menu_item_4 = $params->get('menu_item_4');
$menu_item_5 = $params->get('menu_item_5');
$menu_item_6 = $params->get('menu_item_6');
$menu_item_7 = $params->get('menu_item_7');
$menu_item_8 = $params->get('menu_item_8');
$menu_item_9 = $params->get('menu_item_9');

$menu_item_1_url = $params->get('menu_item_1_url');
$menu_item_2_url = $params->get('menu_item_2_url');
$menu_item_3_url = $params->get('menu_item_3_url');
$menu_item_4_url = $params->get('menu_item_4_url');
$menu_item_5_url = $params->get('menu_item_5_url');
$menu_item_6_url = $params->get('menu_item_6_url');
$menu_item_7_url = $params->get('menu_item_7_url');
$menu_item_8_url = $params->get('menu_item_8_url');
$menu_item_9_url = $params->get('menu_item_9_url');


//include the syndicate functions only

require_once dirname(__FILE__).'/helper.php';

require JModuleHelper::getLayoutPath('mod_asestech_sidemenu', $params->get('layout', 'default'));
?>