<?php
/**
 * @package	mod_db8socialmediashare
 * @author	Peter Martin, www.db8.nl
 * @copyright	Copyright (C) 2014 Peter Martin. All rights reserved.
 * @license	GNU General Public License version 2 or later.
 */
defined('_JEXEC') or die;
?>
<div class="db8socialmediashare<?php echo $params->get('moduleclass_sfx'); ?>">
    <?php
    for ($i = 1; $i <= 5; $i++) {
        for ($a = 0; $a <= 4; $a++) {
            if ($socialmedia[$a]['order'] == $i) {
                ?>
                <a title="<?php echo $socialmedia[$a]['mouseover']; ?>" class="<?php echo $socialmedia[$a]['htmlclass']; ?>" href="<?php echo $socialmedia[$a]['href']; ?>" target="_blank">&nbsp;</a>
                <?php
            }
        }
    }
    ?>
</div>