<div class="fuelInventories view">
<h2><?php  echo __('Fuel Inventory'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($fuelInventory['FuelInventory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fuel Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fuelInventory['FuelType']['name'], array('controller' => 'fuel_types', 'action' => 'view', $fuelInventory['FuelType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Open'); ?></dt>
		<dd>
			<?php echo h($fuelInventory['FuelInventory']['open']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase'); ?></dt>
		<dd>
			<?php echo h($fuelInventory['FuelInventory']['purchase']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subtotal'); ?></dt>
		<dd>
			<?php echo h($fuelInventory['FuelInventory']['subtotal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sales'); ?></dt>
		<dd>
			<?php echo h($fuelInventory['FuelInventory']['sales']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Today Ending Book Inventory'); ?></dt>
		<dd>
			<?php echo h($fuelInventory['FuelInventory']['today_ending_book_inventory']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Today Ending Stick Reading'); ?></dt>
		<dd>
			<?php echo h($fuelInventory['FuelInventory']['today_ending_stick_reading']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Today Ending Stick Reading Inches'); ?></dt>
		<dd>
			<?php echo h($fuelInventory['FuelInventory']['today_ending_stick_reading_inches']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Water Leval'); ?></dt>
		<dd>
			<?php echo h($fuelInventory['FuelInventory']['water_leval']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Short Over'); ?></dt>
		<dd>
			<?php echo h($fuelInventory['FuelInventory']['short_over']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Short Over MTD'); ?></dt>
		<dd>
			<?php echo h($fuelInventory['FuelInventory']['short_over_MTD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Check Water Level'); ?></dt>
		<dd>
			<?php echo h($fuelInventory['FuelInventory']['check_water_level']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Check Stage Equipment'); ?></dt>
		<dd>
			<?php echo h($fuelInventory['FuelInventory']['check_stage_equipment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fuelInventory['Station']['name'], array('controller' => 'stations', 'action' => 'view', $fuelInventory['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($fuelInventory['FuelInventory']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($fuelInventory['FuelInventory']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fuel Inventory'), array('action' => 'edit', $fuelInventory['FuelInventory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fuel Inventory'), array('action' => 'delete', $fuelInventory['FuelInventory']['id']), null, __('Are you sure you want to delete # %s?', $fuelInventory['FuelInventory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fuel Inventories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fuel Inventory'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fuel Types'), array('controller' => 'fuel_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fuel Type'), array('controller' => 'fuel_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
