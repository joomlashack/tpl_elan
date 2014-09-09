<?php
/**
 * @package     Memo
 * @subpackage  Overrider
 *
 * @copyright   Copyright (C) 2005 - 2013 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

$app = JFactory::getApplication();

$template = $app->getTemplate(true);

require_once(JPATH_THEMES.'/'.$app->getTemplate().'/wright/html/overrider.php');

function getFulltextImageFloat($item) {
    $images = json_decode($item->images);
    return (empty($images->float_fulltext)) ? $item->params->get('float_fulltext') : $images->float_fulltext;
}

$classFloat = 'float-' . getFulltextImageFloat($this->item);

$this->wrightElementsStructure = Array(
    "image",
    "title",
    "icons",
    "legendtop",
    "content",
    "article-info",
    "legendbottom"
);

if ($classFloat == 'float-right') {
    $this->wrightElementsStructure = Array(
        "div.row-fluid",
            "div.span6",
                "title",
                "icons",
                "legendtop",
                "content",
                "article-info",
                "legendbottom",
            "/div",
            "div.span6",
                "image",
            "/div",
        "/div"
    );
} elseif ($classFloat == 'float-left') {
    $this->wrightElementsStructure = Array(
        "div.row-fluid",
            "div.span6",
                "image",
            "/div",
            "div.span6",
                "title",
                "icons",
                "legendtop",
                "content",
                "article-info",
                "legendbottom",
            "/div",
        "/div"
    );
}


include(Overrider::getOverride('com_content.article'));
?>
