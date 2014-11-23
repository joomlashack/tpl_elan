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

$top2Modules = intval($this->countModules('top2'));
$topModules = intval($this->countModules('top2'));

$topModuleClass = 'center-logo';

$topModulesCountInlinePosition = (($topModules + $top2Modules) > 1);

if ($topModulesCountInlinePosition)
{
	$topModuleClass = 'top-inline';
}

$paramOption = $input->getVar('option', '');
$paramView = $input->getVar('view', '');
$paramLayout = $input->getVar('layout', 'default');
$paramId = $input->getVar('id', '');

// Single article image (full image)
$wrightSingleArticleImage = '';

if ($paramOption == 'com_content' && $paramView == 'article')
{
	$db = JFactory::getDbo();
	$query = $db->getQuery(true);
	$query->select($db->qn('images'))
		->from($db->qn('#__content'))
		->where($db->qn('id') . ' = ' . (int) $paramId);
	$db->setQuery($query);

	$images = $db->loadResult();

	if ($images != '')
	{
		$imagesArray = json_decode($images);

		if ($imagesArray->float_fulltext == 'none' || $imagesArray->float_fulltext == '')
		{
			$wrightSingleArticleImage = $imagesArray->image_fulltext;
			$wrightSingleArticleAlt = $imagesArray->image_fulltext_alt;
		}
	}
}
