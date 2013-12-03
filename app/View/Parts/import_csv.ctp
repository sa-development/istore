<div class="parts index">
	<h2><?php echo __('Parts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<?php
	foreach ($lols as $lol): ?>
	<tr><td><?php echo '_' . h($lol) . '_'; ?>&nbsp;</td></tr>
	<?php endforeach; ?>
	</table>
