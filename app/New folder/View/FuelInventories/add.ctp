<div class="fuelInventories form">
<?php echo $this->Form->create('FuelInventory'); ?>
	<fieldset>
		<legend><?php echo __('Add Fuel Inventory'); ?></legend>
	<?php
		echo $this->Form->input('station_id');
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
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('inventories_action');?>
