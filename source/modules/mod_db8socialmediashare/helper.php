<?php

/**
 * @package	mod_db8socialmediashare
 * @author	Peter Martin, db8.eu
 * @copyright	Copyright (C) 2015-2017 Peter Martin. All rights reserved.
 * @license	GNU General Public License version 2 or later.
 */
defined('_JEXEC') or die;

$url		= JURI::current();
$document	= JFactory::getDocument();
$title		= str_replace('&', 'and', $document->getTitle("title"));

$loadCSS	= $params->get('LoadCSS');

$socialmedia = array(
    array(
        "medium" => "twitter",
        "order" => $params->get('twitter'),
        "mouseover" => JText::_('MOD_DB8SOCIALMEDIASHARE_TWITTER'), $params->get('twitterlinktext'),
        "htmlclass" => $params->get('htmlclasstwitter','twitterlink'),
        "href" => "https://twitter.com/home?status=" . $title . "&nbsp;" . $url,
        "image" => $params->get('imagetwitter'),
    ),
    array(
        "medium" => "facebook",
        "order" => $params->get('facebook'),
        "mouseover" => JText::_('MOD_DB8SOCIALMEDIASHARE_FACEBOOK'),
        "htmlclass" => $params->get('htmlclassfacebook','facebooklink'),
        "href" => "https://facebook.com/sharer.php?u=" . $url . "&amp;t=" . $title,
        "image" => $params->get('imagefacebook'),
    ),
    array(
        "medium" => "linkedin",
        "order" => $params->get('linkedin'),
        "mouseover" => JText::_('MOD_DB8SOCIALMEDIASHARE_LINKEDIN'),
        "htmlclass" => $params->get('htmlclasslinkedin','linkedinlink'),
        "href" => "https://www.linkedin.com/shareArticle?mini=true&url=" . $url . "&title=" . $title . "&ro=false",
        "image" => $params->get('imagelinkedin'),
    ),
    array(
        "medium" => "google-plus",
        "order" => $params->get('googleplus'),
        "mouseover" => JText::_('MOD_DB8SOCIALMEDIASHARE_GOOGLEPLUS'),
        "htmlclass" => $params->get('htmlclassgoogleplus','googlepluslink'),
        "href" => "https://plus.google.com/share?url=" . $url,
        "image" => $params->get('imagegoogleplus'),
    ),
    array(
        "medium" => "pinterest",
        "order" => $params->get('pinterest'),
        "mouseover" => JText::_('MOD_DB8SOCIALMEDIASHARE_PINTEREST'),
        "htmlclass" => $params->get('htmlclasspinterest','pinterestlink'),
        "href" => "https://pinterest.com/pin/create/button/?url=" . $url . "&amp;media=" . $params->get('logo-url-pinterest') . "&amp;description=" . $title,
        "image" => $params->get('imagepinterest'),
    ),
    array(
        "medium" => "envelope",
        "order" => $params->get('email'),
        "mouseover" => JText::_('MOD_DB8SOCIALMEDIASHARE_EMAIL'),
        "htmlclass" => $params->get('htmlclassemail','emaillink'),
        "href" => "mailto:?subject=" . $title . "&body=" . $url,
        "image" => $params->get('imageemail'),
    )
);