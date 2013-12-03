<div class="fuelInvoiceItems view">
<h2><?php  echo __('Fuel Invoice Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($fuelInvoiceItem['FuelInvoiceItem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fuel Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fuelInvoiceItem['FuelType']['name'], array('controller' => 'fuel_types', 'action' => 'view', $fuelInvoiceItem['FuelType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gallons Delivered'); ?></dt>
		<dd>
			<?php echo h($fuelInvoiceItem['FuelInvoiceItem']['gallons delivered']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cost Per Gallon'); ?></dt>
		<dd>
			<?php echo h($fuelInvoiceItem['FuelInvoiceItem']['cost per gallon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($fuelInvoiceItem['FuelInvoiceItem']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tank'); ?></dt>
		<dd>
			<?php echo h($fuelInvoiceItem['FuelInvoiceItem']['tank']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fuel Invoice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fuelInvoiceItem['FuelInvoice']['invoice'], array('controller' => 'fuel_invoices', 'action' => 'view', $fuelInvoiceItem['FuelInvoice']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fuelInvoiceItem['Station']['name'], array('controller' => 'stations', 'action' => 'view', $fuelInvoiceItem['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($fuelInvoiceItem['FuelInvoiceItem']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($fuelInvoiceItem['FuelInvoiceItem']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fuel Invoice Item'), array('action' => 'edit', $fuelInvoiceItem['FuelInvoiceItem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fuel Invoice Item'), array('action' => 'delete', $fuelInvoiceItem['FuelInvoiceItem']['id']), null, __('Are you sure you want to delete # %s?', $fuelInvoiceItem['FuelInvoiceItem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fuel Invoice Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fuel Invoice Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fuel Types'), array('controller' => 'fuel_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fuel Type'), array('controller' => 'fuel_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fuel Invoices'), array('controller' => 'fuel_invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fuel Invoice'), array('controller' => 'fuel_invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
