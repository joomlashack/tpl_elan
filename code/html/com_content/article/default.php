<?php
/**
 * @package     Élan
 * @subpackage  Overrider
 *
 * @copyright   Copyright (C) 2005 - 2013 Joomlashack. Meritage Assets.
 *              All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

$app = JFactory::getApplication();

$template = $app->getTemplate(true);

$this->wrightElementsStructure = Array(
    "div.row-fluid",
        "div.span6" ,
            'image',
        "/div",

        "div.span6" ,
            'icons',
            'title',
            'content',
            'article-info',
        "/div",
    "/div",
);

require_once(JPATH_THEMES.'/'.$app->getTemplate().'/'.'wright'.'/'.'html'.'/'.'overrider.php');
include(Overrider::getOverride('com_content.article'));
?>
