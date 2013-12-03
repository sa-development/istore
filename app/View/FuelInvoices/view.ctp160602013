<div class="fuelInvoices view">
<h2><?php  echo __('Fuel Invoice'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($fuelInvoice['FuelInvoice']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fuel Supplier'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fuelInvoice['FuelSupplier']['name'], array('controller' => 'fuel_suppliers', 'action' => 'view', $fuelInvoice['FuelSupplier']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice'); ?></dt>
		<dd>
			<?php echo h($fuelInvoice['FuelInvoice']['invoice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Terms'); ?></dt>
		<dd>
			<?php echo h($fuelInvoice['FuelInvoice']['terms']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax Total'); ?></dt>
		<dd>
			<?php echo h($fuelInvoice['FuelInvoice']['tax_total']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Invoice'); ?></dt>
		<dd>
			<?php echo h($fuelInvoice['FuelInvoice']['total_invoice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Method'); ?></dt>
		<dd>
			<?php echo h($fuelInvoice['FuelInvoice']['payment_method']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fuelInvoice['Station']['name'], array('controller' => 'stations', 'action' => 'view', $fuelInvoice['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($fuelInvoice['FuelInvoice']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($fuelInvoice['FuelInvoice']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fuel Invoice'), array('action' => 'edit', $fuelInvoice['FuelInvoice']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fuel Invoice'), array('action' => 'delete', $fuelInvoice['FuelInvoice']['id']), null, __('Are you sure you want to delete # %s?', $fuelInvoice['FuelInvoice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fuel Invoices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fuel Invoice'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fuel Suppliers'), array('controller' => 'fuel_suppliers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fuel Supplier'), array('controller' => 'fuel_suppliers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fuel Invoice Items'), array('controller' => 'fuel_invoice_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fuel Invoice Item'), array('controller' => 'fuel_invoice_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Fuel Invoice Items'); ?></h3>
	<?php if (!empty($fuelInvoice['FuelInvoiceItem'])): ?>
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
		foreach ($fuelInvoice['FuelInvoiceItem'] as $fuelInvoiceItem): ?>
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
