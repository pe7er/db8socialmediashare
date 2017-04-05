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
	// add minified CSS stylesheet (original CSS: db8socialmediashare_style.css)
	$document->addStyleSheet('modules/mod_db8socialmediashare/assets/db8socialmediashare_style-min.css');
}
?>
<div class="db8socialmediashare<?php echo $params->get('moduleclass_sfx'); ?>">
    <?php
    for ($i = 1; $i <= count($socialmedia); $i++) {
        for ($a = 0; $a <= (count($socialmedia) - 1); $a++) {
            if ($socialmedia[$a]['order'] == $i) {
                ?>
                <a title="<?php echo $socialmedia[$a]['mouseover']; ?>"
                   class="<?php echo $socialmedia[$a]['htmlclass']; ?>"
                   href="<?php echo $socialmedia[$a]['href']; ?>"
                   target="_blank">
                    <span class="hidelink">
                        <?php echo $socialmedia[$a]['medium']; ?>
                    </span>
                    <span class="icon-<?php echo $socialmedia[$a]['medium']; ?>"></span>
                </a>
                <?php
            }
        }
    }
    ?>
</div>
