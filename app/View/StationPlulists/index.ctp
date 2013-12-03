<div class="stationPlulists index">
	<h2><?php echo __('Station Plulists'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('station_id'); ?></th>
			<th><?php echo $this->Paginator->sort('domain'); ?></th>
			<th><?php echo $this->Paginator->sort('upc'); ?></th>
			<th><?php echo $this->Paginator->sort('upcModifier'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('department'); ?></th>
			<th><?php echo $this->Paginator->sort('fee'); ?></th>
			<th><?php echo $this->Paginator->sort('pcode'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('SellUnit'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($stationPlulists as $stationPlulist): ?>
	<tr>
		<td><?php echo h($stationPlulist['StationPlulist']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($stationPlulist['Station']['name'], array('controller' => 'stations', 'action' => 'view', $stationPlulist['Station']['id'])); ?>
		</td>
		<td><?php echo h($stationPlulist['StationPlulist']['domain']); ?>&nbsp;</td>
		<td><?php echo h($stationPlulist['StationPlulist']['upc']); ?>&nbsp;</td>
		<td><?php echo h($stationPlulist['StationPlulist']['upcModifier']); ?>&nbsp;</td>
		<td><?php echo h($stationPlulist['StationPlulist']['description']); ?>&nbsp;</td>
		<td><?php echo h($stationPlulist['StationPlulist']['department']); ?>&nbsp;</td>
		<td><?php echo h($stationPlulist['StationPlulist']['fee']); ?>&nbsp;</td>
		<td><?php echo h($stationPlulist['StationPlulist']['pcode']); ?>&nbsp;</td>
		<td><?php echo h($stationPlulist['StationPlulist']['price']); ?>&nbsp;</td>
		<td><?php echo h($stationPlulist['StationPlulist']['SellUnit']); ?>&nbsp;</td>
		<td><?php echo h($stationPlulist['StationPlulist']['created']); ?>&nbsp;</td>
		<td><?php echo h($stationPlulist['StationPlulist']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $stationPlulist['StationPlulist']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $stationPlulist['StationPlulist']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $stationPlulist['StationPlulist']['id']), null, __('Are you sure you want to delete # %s?', $stationPlulist['StationPlulist']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Station Plulist'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
