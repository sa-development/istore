<div class="fuelTypes form">
<?php echo $this->Form->create('FuelType'); ?>
	<fieldset>
		<legend><?php echo __('Add Fuel Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Fuel Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Fuel Inventories'), array('controller' => 'fuel_inventories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fuel Inventory'), array('controller' => 'fuel_inventories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fuel Invoice Items'), array('controller' => 'fuel_invoice_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fuel Invoice Item'), array('controller' => 'fuel_invoice_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
