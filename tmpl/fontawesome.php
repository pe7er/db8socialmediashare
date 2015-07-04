<?php
/**
 * @package	mod_db8socialmediashare
 * @author	Peter Martin, www.db8.nl
 * @copyright	Copyright (C) 2015 Peter Martin. All rights reserved.
 * @license	GNU General Public License version 2 or later.
 */
defined('_JEXEC') or die;

if ($loadCSS == 1)
{
	$document = JFactory::getDocument();
	// add minified Font Awesome CSS stylesheet from CDN
	$document->addStyleSheet('http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
}
?>
<div class="db8socialmediashare<?php echo $params->get('moduleclass_sfx'); ?>">
    <?php
    for ($i = 1; $i <= count($socialmedia); $i++) {
        for ($a = 0; $a <= (count($socialmedia) - 1); $a++) {
            if ($socialmedia[$a]['order'] == $i) {
                ?>
                <a title="<?php echo $socialmedia[$a]['mouseover']; ?>" class="<?php echo $socialmedia[$a]['htmlclass']; ?>" href="<?php echo $socialmedia[$a]['href']; ?>" target="_blank">
                    <span class="fa fa-<?php echo $socialmedia[$a]['medium']; ?>-square"></span>
                </a>
                <?php
            }
        }
    }
    ?>
</div>
