<?php
/**
 * @package     J4xdemos.Module
 * @subpackage  mod_debugme
 *
 * @copyright   Copyright (C) 2022 Clifford E Ford. All rights reserved.
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

?>

<?php if (!empty($count)): ?>
	<?php foreach ($list as $item):?>
	<div class="row">
		<div class="col-4">
			<?php echo $item->title; ?>
		</div>
		<div class="col-8">
			<?php echo $item->event_date; ?>
		</div>
	</div>
	<?php endforeach; ?>
<?php endif; ?>