<div class="fuelInventories index">
	<h2><?php echo __('Fuel Inventories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fuel_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('open'); ?></th>
			<th><?php echo $this->Paginator->sort('purchase'); ?></th>
			<th><?php echo $this->Paginator->sort('subtotal'); ?></th>
			<th><?php echo $this->Paginator->sort('sales'); ?></th>
			<th><?php echo $this->Paginator->sort('today_ending_book_inventory'); ?></th>
			<th><?php echo $this->Paginator->sort('today_ending_stick_reading'); ?></th>
			<th><?php echo $this->Paginator->sort('today_ending_stick_reading_inches'); ?></th>
			<th><?php echo $this->Paginator->sort('water_leval'); ?></th>
			<th><?php echo $this->Paginator->sort('short_over'); ?></th>
			<th><?php echo $this->Paginator->sort('short_over_MTD'); ?></th>
			<th><?php echo $this->Paginator->sort('check_water_level'); ?></th>
			<th><?php echo $this->Paginator->sort('check_stage_equipment'); ?></th>
			<th><?php echo $this->Paginator->sort('station_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($fuelInventories as $fuelInventory): ?>
	<tr>
		<td><?php echo h($fuelInventory['FuelInventory']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($fuelInventory['FuelType']['name'], array('controller' => 'fuel_types', 'action' => 'view', $fuelInventory['FuelType']['id'])); ?>
		</td>
		<td><?php echo h($fuelInventory['FuelInventory']['open']); ?>&nbsp;</td>
		<td><?php echo h($fuelInventory['FuelInventory']['purchase']); ?>&nbsp;</td>
		<td><?php echo h($fuelInventory['FuelInventory']['subtotal']); ?>&nbsp;</td>
		<td><?php echo h($fuelInventory['FuelInventory']['sales']); ?>&nbsp;</td>
		<td><?php echo h($fuelInventory['FuelInventory']['today_ending_book_inventory']); ?>&nbsp;</td>
		<td><?php echo h($fuelInventory['FuelInventory']['today_ending_stick_reading']); ?>&nbsp;</td>
		<td><?php echo h($fuelInventory['FuelInventory']['today_ending_stick_reading_inches']); ?>&nbsp;</td>
		<td><?php echo h($fuelInventory['FuelInventory']['water_leval']); ?>&nbsp;</td>
		<td><?php echo h($fuelInventory['FuelInventory']['short_over']); ?>&nbsp;</td>
		<td><?php echo h($fuelInventory['FuelInventory']['short_over_MTD']); ?>&nbsp;</td>
		<td><?php echo h($fuelInventory['FuelInventory']['check_water_level']); ?>&nbsp;</td>
		<td><?php echo h($fuelInventory['FuelInventory']['check_stage_equipment']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($fuelInventory['Station']['name'], array('controller' => 'stations', 'action' => 'view', $fuelInventory['Station']['id'])); ?>
		</td>
		<td><?php echo h($fuelInventory['FuelInventory']['created']); ?>&nbsp;</td>
		<td><?php echo h($fuelInventory['FuelInventory']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fuelInventory['FuelInventory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fuelInventory['FuelInventory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fuelInventory['FuelInventory']['id']), null, __('Are you sure you want to delete # %s?', $fuelInventory['FuelInventory']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Fuel Inventory'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Fuel Types'), array('controller' => 'fuel_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fuel Type'), array('controller' => 'fuel_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
