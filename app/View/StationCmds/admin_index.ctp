<div class="stationCmds index">
	<h2><?php echo __('Station Cmds'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('station_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cmd_url'); ?></th>
			<th><?php echo $this->Paginator->sort('data'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($stationCmds as $stationCmd): ?>
	<tr>
		<td><?php echo h($stationCmd['StationCmd']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($stationCmd['Station']['name'], array('controller' => 'stations', 'action' => 'view', $stationCmd['Station']['id'])); ?>
		</td>
		<td><?php echo h($stationCmd['StationCmd']['cmd_url']); ?>&nbsp;</td>
		<td><?php echo h($stationCmd['StationCmd']['data']); ?>&nbsp;</td>
		<td><?php echo h($stationCmd['StationCmd']['created']); ?>&nbsp;</td>
		<td><?php echo h($stationCmd['StationCmd']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $stationCmd['StationCmd']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $stationCmd['StationCmd']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $stationCmd['StationCmd']['id']), null, __('Are you sure you want to delete # %s?', $stationCmd['StationCmd']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Station Cmd'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
