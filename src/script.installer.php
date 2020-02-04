<?php
/**
 * @package   tpl_elan
 * @contact   www.joomlashack.com, help@joomlashack.com
 * @copyright Copyright (C) 2005 - 2020 Joomlashack. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

use Alledia\Installer;

defined('_JEXEC') or die();

require_once 'library/Installer/include.php';

jimport('joomla.filesystem.folder');


/**
 * Custom installer script
 */
if (!class_exists('JS_ElanInstallerScript')) {
    class JS_ElanInstallerScript extends Installer\AbstractScript
    {
        /**
         * @param string                     $type
         * @param JInstallerAdapterComponent $parent
         *
         * @return bool
         */
        public function preFlight($type, $parent)
        {
            if (!parent::preFlight($type, $parent)) {
                return false;
            }
            
            return true;
        }
    }
}
