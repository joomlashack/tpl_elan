
<?php
// Wright v.3 Override
/**
 * @package     Élan
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2020 Joomlashack. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

$wrightNewsEnableIcons = false;
$wrightMaxColumns = 3;

require_once JPATH_THEMES.'/'. $app->getTemplate().'/'.'wright'.'/'.'html'.'/'.'overrider.php';
include Overrider::getOverride('mod_articles_news','horizontal');
?>
