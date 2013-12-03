<div class="fuelInventories form">
<?php echo $this->Form->create('FuelInventory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Fuel Inventory'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fuel_type_id');
		echo $this->Form->input('open');
		echo $this->Form->input('purchase');
		echo $this->Form->input('subtotal');
		echo $this->Form->input('sales');
		echo $this->Form->input('today_ending_book_inventory');
		echo $this->Form->input('today_ending_stick_reading');
		echo $this->Form->input('today_ending_stick_reading_inches');
		echo $this->Form->input('water_leval');
		echo $this->Form->input('short_over');
		echo $this->Form->input('short_over_MTD');
		echo $this->Form->input('check_water_level');
		echo $this->Form->input('check_stage_equipment');
		echo $this->Form->input('station_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FuelInventory.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('FuelInventory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Fuel Inventories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Fuel Types'), array('controller' => 'fuel_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fuel Type'), array('controller' => 'fuel_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
