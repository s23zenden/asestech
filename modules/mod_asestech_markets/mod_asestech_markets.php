<?php defined('_JEXEC') or die();

//params

$market_1_heading = $params->get('market_1_heading');
$market_1_intro = $params->get('market_1_intro');
$market_1_image = $params->get('market_1_image');
$market_1_link = $params->get('market_1_link');

$market_2_heading = $params->get('market_2_heading');
$market_2_intro = $params->get('market_2_intro');
$market_2_image = $params->get('market_2_image');
$market_2_link = $params->get('market_2_link');

$market_3_heading = $params->get('market_3_heading');
$market_3_intro = $params->get('market_3_intro');
$market_3_image = $params->get('market_3_image');
$market_3_link = $params->get('market_3_link');

//include the syndicate functions only

require_once dirname(__FILE__).'/helper.php';

require JModuleHelper::getLayoutPath('mod_asestech_markets', $params->get('layout', 'default'));
?>