<?php
/**
 * @package     J4xdemos.Module
 * @subpackage  mod_debugme
 *
 * @copyright   Copyright (C) 2022 Clifford E Ford. All rights reserved.
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
//use J4xdemos\Module\Debugme\Site\Helper\DebugmeHelper;

// Get the list of events
$list  = DebugmeHelper::getList($params, $app);
$count = count($list);

require ModuleHelper::getLayoutPath('mod_debugme', $params->get('layout', 'default'));
