<?php defined('_JEXEC') or die();

//params

$partner_1_title = $params->get('partner_1');
$partner_1_logo = $params->get('partner_1_logo');
$partner_1_link = $params->get('partner_1_link');

$partner_2_title = $params->get('partner_2');
$partner_2_logo = $params->get('partner_2_logo');
$partner_2_link = $params->get('partner_2_link');

$partner_3_title = $params->get('partner_3');
$partner_3_logo = $params->get('partner_3_logo');
$partner_3_link = $params->get('partner_3_link');

$partner_4_title = $params->get('partner_4');
$partner_4_logo = $params->get('partner_4_logo');
$partner_4_link = $params->get('partner_4_link');


//include the syndicate functions only

require_once dirname(__FILE__).'/helper.php';

require JModuleHelper::getLayoutPath('mod_asestech_partners', $params->get('layout', 'default'));
?>