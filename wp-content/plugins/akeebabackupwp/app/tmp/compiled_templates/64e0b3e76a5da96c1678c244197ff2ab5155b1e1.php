<?php /* /home/u718790758/domains/florianjourde.com/public_html/centre_auto_87/wp-content/plugins/akeebabackupwp/app/Solo/ViewTemplates/Main/latest_backup.blade.php */ ?>
<?php
/**
 * @package   solo
 * @copyright Copyright (c)2014-2023 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 */

use Awf\Text\Text;

defined('_AKEEBA') or die();

/** @var \Solo\View\Main\Html $this */

?>
<div class="akeeba-panel">
	<header class="akeeba-block-header">
        <h3>
            <?php echo \Awf\Text\Text::_('SOLO_MAIN_LBL_LATEST_BACKUP'); ?>
        </h3>
	</header>

    <div><?php echo $this->latestBackupCell; ?></div>
</div>
