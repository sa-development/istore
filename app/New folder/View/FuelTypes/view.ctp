<div class="fuelTypes view">
<h2><?php  echo __('Fuel Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($fuelType['FuelType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($fuelType['FuelType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($fuelType['FuelType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($fuelType['FuelType']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fuel Type'), array('action' => 'edit', $fuelType['FuelType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fuel Type'), array('action' => 'delete', $fuelType['FuelType']['id']), null, __('Are you sure you want to delete # %s?', $fuelType['FuelType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fuel Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fuel Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fuel Inventories'), array('controller' => 'fuel_inventories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fuel Inventory'), array('controller' => 'fuel_inventories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fuel Invoice Items'), array('controller' => 'fuel_invoice_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fuel Invoice Item'), array('controller' => 'fuel_invoice_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Fuel Inventories'); ?></h3>
	<?php if (!empty($fuelType['FuelInventory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fuel Type Id'); ?></th>
		<th><?php echo __('Open'); ?></th>
		<th><?php echo __('Purchase'); ?></th>
		<th><?php echo __('Subtotal'); ?></th>
		<th><?php echo __('Sales'); ?></th>
		<th><?php echo __('Today Ending Book Inventory'); ?></th>
		<th><?php echo __('Today Ending Stick Reading'); ?></th>
		<th><?php echo __('Today Ending Stick Reading Inches'); ?></th>
		<th><?php echo __('Water Leval'); ?></th>
		<th><?php echo __('Short Over'); ?></th>
		<th><?php echo __('Short Over MTD'); ?></th>
		<th><?php echo __('Check Water Level'); ?></th>
		<th><?php echo __('Check Stage Equipment'); ?></th>
		<th><?php echo __('Station Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($fuelType['FuelInventory'] as $fuelInventory): ?>
		<tr>
			<td><?php echo $fuelInventory['id']; ?></td>
			<td><?php echo $fuelInventory['fuel_type_id']; ?></td>
			<td><?php echo $fuelInventory['open']; ?></td>
			<td><?php echo $fuelInventory['purchase']; ?></td>
			<td><?php echo $fuelInventory['subtotal']; ?></td>
			<td><?php echo $fuelInventory['sales']; ?></td>
			<td><?php echo $fuelInventory['today_ending_book_inventory']; ?></td>
			<td><?php echo $fuelInventory['today_ending_stick_reading']; ?></td>
			<td><?php echo $fuelInventory['today_ending_stick_reading_inches']; ?></td>
			<td><?php echo $fuelInventory['water_leval']; ?></td>
			<td><?php echo $fuelInventory['short_over']; ?></td>
			<td><?php echo $fuelInventory['short_over_MTD']; ?></td>
			<td><?php echo $fuelInventory['check_water_level']; ?></td>
			<td><?php echo $fuelInventory['check_stage_equipment']; ?></td>
			<td><?php echo $fuelInventory['station_id']; ?></td>
			<td><?php echo $fuelInventory['created']; ?></td>
			<td><?php echo $fuelInventory['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'fuel_inventories', 'action' => 'view', $fuelInventory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'fuel_inventories', 'action' => 'edit', $fuelInventory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'fuel_inventories', 'action' => 'delete', $fuelInventory['id']), null, __('Are you sure you want to delete # %s?', $fuelInventory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Fuel Inventory'), array('controller' => 'fuel_inventories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Fuel Invoice Items'); ?></h3>
	<?php if (!empty($fuelType['FuelInvoiceItem'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fuel Type Id'); ?></th>
		<th><?php echo __('Gallons Delivered'); ?></th>
		<th><?php echo __('Cost Per Gallon'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Tank'); ?></th>
		<th><?php echo __('Fuel Invoice Id'); ?></th>
		<th><?php echo __('Station Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($fuelType['FuelInvoiceItem'] as $fuelInvoiceItem): ?>
		<tr>
			<td><?php echo $fuelInvoiceItem['id']; ?></td>
			<td><?php echo $fuelInvoiceItem['fuel_type_id']; ?></td>
			<td><?php echo $fuelInvoiceItem['gallons delivered']; ?></td>
			<td><?php echo $fuelInvoiceItem['cost per gallon']; ?></td>
			<td><?php echo $fuelInvoiceItem['amount']; ?></td>
			<td><?php echo $fuelInvoiceItem['tank']; ?></td>
			<td><?php echo $fuelInvoiceItem['fuel_invoice_id']; ?></td>
			<td><?php echo $fuelInvoiceItem['station_id']; ?></td>
			<td><?php echo $fuelInvoiceItem['created']; ?></td>
			<td><?php echo $fuelInvoiceItem['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'fuel_invoice_items', 'action' => 'view', $fuelInvoiceItem['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'fuel_invoice_items', 'action' => 'edit', $fuelInvoiceItem['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'fuel_invoice_items', 'action' => 'delete', $fuelInvoiceItem['id']), null, __('Are you sure you want to delete # %s?', $fuelInvoiceItem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Fuel Invoice Item'), array('controller' => 'fuel_invoice_items', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
