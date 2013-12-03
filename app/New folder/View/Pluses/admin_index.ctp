<div class="pluses index">
	<h2><?php echo __('Pluses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('station_id'); ?></th>
			<th><?php echo $this->Paginator->sort('page'); ?></th>
			<th><?php echo $this->Paginator->sort('ofPages'); ?></th>
			<th><?php echo $this->Paginator->sort('upc'); ?></th>
			<th><?php echo $this->Paginator->sort('upcModifier'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('department'); ?></th>
			<th><?php echo $this->Paginator->sort('fee'); ?></th>
			<th><?php echo $this->Paginator->sort('pcode'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('SellUnit'); ?></th>
			<th><?php echo $this->Paginator->sort('sysid'); ?></th>
			<th><?php echo $this->Paginator->sort('sysid2'); ?></th>
			<th><?php echo $this->Paginator->sort('sysid3'); ?></th>
			<th><?php echo $this->Paginator->sort('sysid4'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($pluses as $plus): ?>
	<tr>
		<td><?php echo h($plus['Plus']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($plus['Station']['name'], array('controller' => 'stations', 'action' => 'view', $plus['Station']['id'])); ?>
		</td>
		<td><?php echo h($plus['Plus']['page']); ?>&nbsp;</td>
		<td><?php echo h($plus['Plus']['ofPages']); ?>&nbsp;</td>
		<td><?php echo h($plus['Plus']['upc']); ?>&nbsp;</td>
		<td><?php echo h($plus['Plus']['upcModifier']); ?>&nbsp;</td>
		<td><?php echo h($plus['Plus']['description']); ?>&nbsp;</td>
		<td><?php echo h($plus['Plus']['department']); ?>&nbsp;</td>
		<td><?php echo h($plus['Plus']['fee']); ?>&nbsp;</td>
		<td><?php echo h($plus['Plus']['pcode']); ?>&nbsp;</td>
		<td><?php echo h($plus['Plus']['price']); ?>&nbsp;</td>
		<td><?php echo h($plus['Plus']['SellUnit']); ?>&nbsp;</td>
		<td><?php echo h($plus['Plus']['sysid']); ?>&nbsp;</td>
		<td><?php echo h($plus['Plus']['sysid2']); ?>&nbsp;</td>
		<td><?php echo h($plus['Plus']['sysid3']); ?>&nbsp;</td>
		<td><?php echo h($plus['Plus']['sysid4']); ?>&nbsp;</td>
		<td><?php echo h($plus['Plus']['created']); ?>&nbsp;</td>
		<td><?php echo h($plus['Plus']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $plus['Plus']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $plus['Plus']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $plus['Plus']['id']), null, __('Are you sure you want to delete # %s?', $plus['Plus']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Plus'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
