
<div class="fuelInvoices account">
	<table cellpadding="0" width='75%' cellspacing="0">
	<tr>
			<td colspan=8><H1>Fuel Invoice Account</H1></td>
			<td>
			<a class="thickbox" href="/fuel_invoices/add?keepThis=true&TB_iframe=true&height=380&width=1000"><img width="60px" alt="Add New"  src="/img/actions/tab_new.png"></a>
			</td>
	</tr>
	</table>
	<table class='grid' cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('fuel_supplier_id'); ?></th>
			<th><?php echo $this->Paginator->sort('invoice'); ?></th>
			<th><?php echo $this->Paginator->sort('terms'); ?></th>
			<th><?php echo $this->Paginator->sort('tax_total'); ?></th>
			<th><?php echo $this->Paginator->sort('total_invoice'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_method_id'); ?></th>
			<th><?php echo $this->Paginator->sort('station_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($fuelInvoices as $fuelInvoice): ?>
	<tr>
		<td><?php echo $fuelInvoice['Vendor']['name']; ?></td>
		<td><?php echo h($fuelInvoice['FuelInvoice']['invoice']); ?>&nbsp;</td>
		<td><?php echo h($fuelInvoice['FuelInvoice']['terms']); ?>&nbsp;</td>
		<td><?php echo h($fuelInvoice['FuelInvoice']['tax_total']); ?>&nbsp;</td>
		<td><?php echo h($fuelInvoice['FuelInvoice']['total_invoice']); ?>&nbsp;</td>
		<td><?php echo h($fuelInvoice['PaymentMethod']['name']); ?>&nbsp;</td>
		<td><?php echo h($fuelInvoice['Station']['name']); ?>&nbsp;</td>
		<td><?php echo h($fuelInvoice['FuelInvoice']['status']); ?>&nbsp;</td>
		
		<td class="acc_actions">
			<?php if($fuelInvoice['FuelInvoice']['status'] == 'approved') { ?>
				  -
			<?php } else {  ?>
			<a class="thickbox" href="/fuel_invoices/edit/<?php echo $fuelInvoice['FuelInvoice']['id']; ?>?keepThis=true&amp;TB_iframe=true&amp;height=380&width=1000">Edit</a>
			<?php } ?>
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

<?php //echo $this->element('inventories_action'); ?>