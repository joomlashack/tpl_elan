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

function getFulltextImageFloat($item) {
    $images = json_decode($item->images);
    return (empty($images->float_fulltext)) ? $item->params->get('float_fulltext') : $images->float_fulltext;
}

$classFloat = 'float-' . getFulltextImageFloat($this->item);

switch ($classFloat) {
	case "float-left":
	$this->wrightElementsStructure = Array(
		    "div.row-fluid",
	        "div.span6" ,
		        "div.no-pull-image",
		            'image',
		        "/div",
	        "/div",
	        "div.span6" ,
	            'icons',
	            'title',
	            'content',
	            'article-info',
	        "/div",
	    "/div");
	 
	break;
	case "float-right":
	$this->wrightElementsStructure = Array(
		    "div.row-fluid",
	        "div.span6",
	        	 'icons',
	            'title',
	            'content',
	            'article-info',
	        "/div",
	        "div.span6" ,
		        "div.no-pull-image",
		            'image',
		        "/div",
	        "/div",
	    "/div");

	default:
	$this->wrightElementsStructure = Array(
	    "image",
	    "div.full-title",
	    "title",
	    "/div",
	    "icons",
	    "legendtop",
	    "content",
	    "article-info",
	    "legendbottom"
	);
 
	break;
}

require_once(JPATH_THEMES.'/'.$app->getTemplate().'/'.'wright'.'/'.'html'.'/'.'overrider.php');
include(Overrider::getOverride('com_content.article'));
?>