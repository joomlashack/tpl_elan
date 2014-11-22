<?php
/**
 * @package     Wright
 * @subpackage  Overrider
 *
 * @copyright   Copyright (C) 2005 - 2014 Joomlashack. Meritage Assets.
 * 				All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

$app = JFactory::getApplication();
$params		= $this->item->params;
$images = json_decode($this->item->images);

if ($params->get('access-view')) {
	$imageExist = (isset($images->image_fulltext) and !empty($images->image_fulltext)) ? true : false ;
	$classFloat = 'float-';
	$classFloat .= (empty($images->float_fulltext)) ? $params->get('float_fulltext') : $images->float_fulltext;
}

if ($imageExist) {
	switch ($classFloat) {
		case "float-left":
		$this->wrightElementsStructure = Array(
			'image',      
		    'icons',
		    'title',
		    'article-info',
		    'content',
			);

		break;
		case "float-right":
		$this->wrightElementsStructure = Array(
		    'image',
		    'icons',
		    'title',
		    'article-info',
		    'content'
		    );

		break;
		default:
		$this->wrightElementsStructure = Array(
		    "div.full-title",
		    "title",
		    "icons",
		   	"/div",
		    "article-info",
		    "legendtop",
		    "content",
		    "legendbottom"
		);

		break;
	}
}
else {
	$this->wrightElementsStructure = Array(
	    "image",
	    "div.full-title",
		    "title",
		    "icons",
	   	"/div",
	    "article-info",
	    "legendtop",
	    "content",
	    "legendbottom");
}

require_once(JPATH_THEMES.'/'.$app->getTemplate().'/'.'wright'.'/'.'html'.'/'.'overrider.php');
include(Overrider::getOverride('com_content.article'));
?>