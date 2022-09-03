<?php

/**
 * @package     Joomla.Site
 * @subpackage  mod_debugme
 *
 * @copyright   Copyright (C) 2022 Clifford E Ford. All rights reserved.
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace J4xdemos\Module\Debugme\Site\Helper;

use Joomla\CMS\Application\CMSApplication;
use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Multilanguage;
use Joomla\CMS\Language\Text;
use Joomla\Registry\Registry;

/**
 * Helper for mod_debugme
 *
 * @since  1.5
 */
class DebugmeHelper
{
	/**
	 * Retrieve event items
	 *
	 * @param   Registry        $params  The module parameters
	 * @param   CMSApplication  $app     The application
	 *
	 * @return  array
	 */
	public static function getList(Registry $params, CMSApplication $app)
	{
		// Current day of the year
		//$day_of_year = date('z') + 1;
		$year = date('Y');

		$number_of_events = $params->get('number_of_events');

		$db = Factory::getDbo();
		$query = $db->getQuery(true);
		$query->select('`day_of_year`, `title`')
		//->select('DATE_FORMAT(MAKEDATE(' . $year . ', `day_of_year`), \'%a %D %b, %Y\') AS `event_date`')
		->select('DATE_FORMAT(MAKEDATE(' . $year . ', `day_of_year`), '%a %D %b, %Y') AS `event_date`')
		//->from('`#__debugme_data`')
		->from('`#__debugme`')
		->where('`day_of_year` >= ' . $day_of_year)
		->order('`day_of_year`');
		$db->setQuery($query, 0, $number_of_events);
		return $db->loadObjectList();
	}
}