<div class="fuelSales form">
<?php echo $this->Form->create('FuelSale'); ?>
	<fieldset>
		<legend><?php echo __('Add Fuel Sale'); ?></legend>
	<?php
		echo $this->Form->input('station_id');
		echo $this->Form->input('fuel_type_id');
		echo $this->Form->input('volume');
		echo $this->Form->input('retail');
		echo $this->Form->input('amount');
		echo $this->Form->input('adjustment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('inventories_action');?>
