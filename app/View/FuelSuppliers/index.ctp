<div class="fuelSuppliers index">
	<h2><?php echo __('Fuel Suppliers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('station_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($fuelSuppliers as $fuelSupplier): ?>
	<tr>
		<td><?php echo h($fuelSupplier['FuelSupplier']['id']); ?>&nbsp;</td>
		<td><?php echo h($fuelSupplier['FuelSupplier']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($fuelSupplier['Station']['name'], array('controller' => 'stations', 'action' => 'view', $fuelSupplier['Station']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($fuelSupplier['User']['username'], array('controller' => 'users', 'action' => 'view', $fuelSupplier['User']['id'])); ?>
		</td>
		<td><?php echo h($fuelSupplier['FuelSupplier']['created']); ?>&nbsp;</td>
		<td><?php echo h($fuelSupplier['FuelSupplier']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fuelSupplier['FuelSupplier']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fuelSupplier['FuelSupplier']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fuelSupplier['FuelSupplier']['id']), null, __('Are you sure you want to delete # %s?', $fuelSupplier['FuelSupplier']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Fuel Supplier'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
