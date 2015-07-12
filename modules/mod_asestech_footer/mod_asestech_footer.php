<?php

defined('_JEXEC') or die;

/* Params */
$copyright_text = htmlspecialchars($params->get('copyright_text'));

$street = $params->get('street');
$postcode = $params->get('postcode');
$telephone_number= $params->get('telephone_number');
$email= $params->get('email');

$facebook_link = $params->get('facebook_link');
$facebook_image = $params->get('facebook_image');

$twitter_link = $params->get('twitter_link');
$twitter_image = $params->get('twitter_image');

$linkedin_link = $params->get('linkedin_link');
$linkedin_image = $params->get('linkedin_image');

$googleplus_link = $params->get('googleplus_link');
$googleplus_image = $params->get('googleplus_image');

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

require JModuleHelper::getLayoutPath('mod_asestech_footer', $params->get('layout', 'default'));
?>




