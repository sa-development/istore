<div class="fuelInvoices index">
	
	<table  cellpadding="0" cellspacing="0">
		<tr>
			<td width='95%'><h2><?php echo __('Fuel Invoices'); ?></h2></td>
			<td width='5%'><?php
				echo $this->Html->image("actions/tab_new.png", array("alt" => "Add New",'width' => '60px','url' =>  array('controller' => 	'fuel_invoices', 'action' => 'add')));
			?>
			</td>
		</tr>		
	</table>
	
	<table class='grid' cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fuel_supplier_id'); ?></th>
			<th><?php echo $this->Paginator->sort('invoice'); ?></th>
			<th><?php echo $this->Paginator->sort('terms'); ?></th>
			<th><?php echo $this->Paginator->sort('tax_total'); ?></th>
			<th><?php echo $this->Paginator->sort('total_invoice'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_method'); ?></th>
			<th><?php echo $this->Paginator->sort('station_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($fuelInvoices as $fuelInvoice): ?>
	<tr>
		<td><?php echo h($fuelInvoice['FuelInvoice']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $fuelInvoice['FuelSupplier']['name']; ?>
		</td>
		<td><?php echo h($fuelInvoice['FuelInvoice']['invoice']); ?>&nbsp;</td>
		<td><?php echo h($fuelInvoice['FuelInvoice']['terms']); ?>&nbsp;</td>
		<td><?php echo h($fuelInvoice['FuelInvoice']['tax_total']); ?>&nbsp;</td>
		<td><?php echo h($fuelInvoice['FuelInvoice']['total_invoice']); ?>&nbsp;</td>
		<td><?php echo h($fuelInvoice['FuelInvoice']['payment_method']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($fuelInvoice['Station']['name'], array('controller' => 'stations', 'action' => 'view', $fuelInvoice['Station']['id'])); ?>
		</td>
		<td><?php echo h($fuelInvoice['FuelInvoice']['status']); ?>&nbsp;</td>
		<td><?php echo h($fuelInvoice['FuelInvoice']['created']); ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fuelInvoice['FuelInvoice']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fuelInvoice['FuelInvoice']['id'])); ?>
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

<?php echo $this->element('inventories_action');?>
