<div class="fuelInvoiceItems index">
	<h2><?php echo __('Fuel Invoice Items'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fuel_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('gallons delivered'); ?></th>
			<th><?php echo $this->Paginator->sort('cost per gallon'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('tank'); ?></th>
			<th><?php echo $this->Paginator->sort('fuel_invoice_id'); ?></th>
			<th><?php echo $this->Paginator->sort('station_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($fuelInvoiceItems as $fuelInvoiceItem): ?>
	<tr>
		<td><?php echo h($fuelInvoiceItem['FuelInvoiceItem']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($fuelInvoiceItem['FuelType']['name'], array('controller' => 'fuel_types', 'action' => 'view', $fuelInvoiceItem['FuelType']['id'])); ?>
		</td>
		<td><?php echo h($fuelInvoiceItem['FuelInvoiceItem']['gallons delivered']); ?>&nbsp;</td>
		<td><?php echo h($fuelInvoiceItem['FuelInvoiceItem']['cost per gallon']); ?>&nbsp;</td>
		<td><?php echo h($fuelInvoiceItem['FuelInvoiceItem']['amount']); ?>&nbsp;</td>
		<td><?php echo h($fuelInvoiceItem['FuelInvoiceItem']['tank']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($fuelInvoiceItem['FuelInvoice']['invoice'], array('controller' => 'fuel_invoices', 'action' => 'view', $fuelInvoiceItem['FuelInvoice']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($fuelInvoiceItem['Station']['name'], array('controller' => 'stations', 'action' => 'view', $fuelInvoiceItem['Station']['id'])); ?>
		</td>
		<td><?php echo h($fuelInvoiceItem['FuelInvoiceItem']['created']); ?>&nbsp;</td>
		<td><?php echo h($fuelInvoiceItem['FuelInvoiceItem']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fuelInvoiceItem['FuelInvoiceItem']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fuelInvoiceItem['FuelInvoiceItem']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fuelInvoiceItem['FuelInvoiceItem']['id']), null, __('Are you sure you want to delete # %s?', $fuelInvoiceItem['FuelInvoiceItem']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Fuel Invoice Item'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Fuel Types'), array('controller' => 'fuel_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fuel Type'), array('controller' => 'fuel_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fuel Invoices'), array('controller' => 'fuel_invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fuel Invoice'), array('controller' => 'fuel_invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
