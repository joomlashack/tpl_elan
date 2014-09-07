<?php
/**
 * @package     Wright
 * @subpackage  Overrider
 *
 * @copyright   Copyright (C) 2005 - 2014 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

$app = JFactory::getApplication();

$this->wrightLeadingItemElementsStructure = Array();
$this->wrightIntroItemElementsStructure = Array(
	'image',
	'title',
	'content',
	'article-info',
	'icons'
);

$this->wrightIntroHasImageClass = "";  // optional extra class when image is present

$this->wrightExtraDivH1 = false;  // adds an extra div next to the h1 titles

require_once(JPATH_THEMES.'/'.$app->getTemplate().'/'.'wright'.'/'.'html'.'/'.'overrider.php');
include(Overrider::getOverride('com_content.featured'));
?>
