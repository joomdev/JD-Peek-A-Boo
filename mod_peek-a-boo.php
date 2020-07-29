<?php
/*------------------------------------------------------------------------
# mod_peek-a-boo - JD Peek-A-Boo for Joomla 3.x v3.1.0
# ------------------------------------------------------------------------
# author    JoomDev (Formerly GraphicAholic)
# copyright Copyright (C) 2020 Joomdev, Inc. All rights reserved.
# @license - GNU General Public License version 2 or later
# Websites: https://www.joomdev.com
-------------------------------------------------------------------------*/
// No direct access
defined('_JEXEC') or die('Restricted access');
$document = JFactory::getDocument();
if ($params->get('screen_position') == 1) {
	$document->addStyleSheet(JURI::root().'modules/mod_peek-a-boo/css/peek-a-boo_left.css');
}
if ($params->get('screen_position') == 2) {
	$document->addStyleSheet(JURI::root().'modules/mod_peek-a-boo/css/peek-a-boo_right.css');
}
$LiveSite = JURI::base();
$screen_position = $params->get('screen_position');
if($screen_position == "1") $screen_position = "_left";
if($screen_position == "2") $screen_position = "_right";
$imageURL 		= $params->get( 'imageURL', '' );
$pathURL 		= $params->get( 'pathURL', '' );
$linkWindow 	= $params->get( 'linkWindow', '' );
$imageWidth 	= $params->get( 'imageWidth', '' );
$imageHeight 	= $params->get( 'imageHeight', '' );
$imageHeight 	= $params->get( 'imageHeight', '' );
?>
<style type="text/css">
<?php if ($screen_position == "_left") : ?>
div.peek-a-boo_left {position: <?php echo $params->get('image_position') ?> !important;}
<?php elseif ($screen_position == "_right") : ?>
div.peek-a-boo_right {position: <?php echo $params->get('image_position') ?> !important;}
<?php endif ; ?>
</style>
<div class="peek-a-boo<?php echo $screen_position ?>"><a href="<?php echo $pathURL; ?>" target="<?php echo $linkWindow; ?>"><img src="<?php echo $LiveSite; ?><?php echo $imageURL; ?>" border="0" width="<?php echo $imageWidth; ?>" height="<?php echo $imageHeight; ?>" /></a></div>