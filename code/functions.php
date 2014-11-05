<?php
/**
 * @package     Elan
 * @subpackage  Functions
 *
 * @copyright   Copyright (C) 2005 - 2014 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// Restrict Access to within Joomla
defined('_JEXEC') or die('Restricted access');

$app = JFactory::getApplication();
$input = $app->input;

// get the bootstrap row mode ( row / row-fluid )
$gridMode = $this->params->get('bs_rowmode','row-fluid');
$containerClass = 'container';
if ($gridMode == 'row-fluid') {
    $containerClass = 'container-fluid';
}

$responsivePage = $this->params->get('responsive','1');
$responsive = ' responsive';
if ($responsivePage == 0) {
    $responsive = ' no-responsive';
}

$top2Modules = intval($this->countModules( 'top2' ));
$topModules = intval($this->countModules( 'top2' ));

$topModuleClass = 'center-logo';

$topModulesCountInlinePosition = (($topModules + $top2Modules) > 1);

if ($topModulesCountInlinePosition) {
	$topModuleClass = 'top-inline';
}

$paramOption = $input->getVar('option', '');
$paramView = $input->getVar('view', '');
$paramLayout = $input->getVar('layout', 'default');
