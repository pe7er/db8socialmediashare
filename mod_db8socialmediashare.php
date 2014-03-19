<?php
/**
 * @package	mod_db8socialmediashare
 * @author	Peter Martin, www.db8.nl
 * @copyright	Copyright (C) 2014 Peter Martin. All rights reserved.
 * @license	GNU General Public License version 2 or later.
 */
defined('_JEXEC') or die;

$url        = JURI::current();
$document   = JFactory::getDocument();
$title      = str_replace('&', 'en', $document->getTitle("title"));
$document->addStyleSheet('modules/mod_db8socialmediashare/tmpl/db8socialmediashare.css');

$socialmedia = array(
    array(
        "medium" => "twitter",
        "order" => $params->get('twitter'),
        "mouseover" => JText::_('MOD_DB8SOCIALMEDIASHARE_TWITTER'), $params->get('twitterlinktext'),
        "htmlclass" => "twitterlink",
        "href" => "http://twitter.com/home?status=" . $title . " " . $url
    ),
    array(
        "medium" => "facebook",
        "order" => $params->get('facebook'),
        "mouseover" => JText::_('MOD_DB8SOCIALMEDIASHARE_FACEBOOK'),
        "htmlclass" => "facebooklink",
        "href" => "http://facebook.com/sharer.php?u=" . $url . "&amp;t=" . $title
    ),
    array(
        "medium" => "linkedin",
        "order" => $params->get('linkedin'),
        "mouseover" => JText::_('MOD_DB8SOCIALMEDIASHARE_LINKEDIN'),
        "htmlclass" => "linkedinlink",
        "href" => "http://www.linkedin.com/shareArticle?mini=true&url=" . $url . "&title=" . $title . "&ro=false"
    ),
    array(
        "medium" => "googleplus",
        "order" => $params->get('googleplus'),
        "mouseover" => JText::_('MOD_DB8SOCIALMEDIASHARE_GOOGLEPLUS'),
        "htmlclass" => "googlepluslink",
        "href" => "https://plus.google.com/share?url=" . $url
    ),
    array(
        "medium" => "mail",
        "order" => $params->get('mail'),
        "mouseover" => JText::_('MOD_DB8SOCIALMEDIASHARE_MAIL'),
        "htmlclass" => "maillink",
        "href" => "mailto:ontvanger@hier.nl?subject=" . $title . "&body=" . $url
    )
);

require JModuleHelper::getLayoutPath('mod_db8socialmediashare', 'default');