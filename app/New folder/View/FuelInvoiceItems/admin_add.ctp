<div class="fuelInvoiceItems form">
<?php echo $this->Form->create('FuelInvoiceItem'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Fuel Invoice Item'); ?></legend>
	<?php
		echo $this->Form->input('fuel_type_id');
		echo $this->Form->input('gallons delivered');
		echo $this->Form->input('cost per gallon');
		echo $this->Form->input('amount');
		echo $this->Form->input('tank');
		echo $this->Form->input('fuel_invoice_id');
		echo $this->Form->input('station_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Fuel Invoice Items'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Fuel Types'), array('controller' => 'fuel_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fuel Type'), array('controller' => 'fuel_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fuel Invoices'), array('controller' => 'fuel_invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fuel Invoice'), array('controller' => 'fuel_invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
