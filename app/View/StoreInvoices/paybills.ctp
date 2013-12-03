<div>
	<table cellpadding="0" width='75%' cellspacing="0">
	<tr>
		<td>Select Type</td>
		<td><?php echo $this->Form->input('invoice_type', array('options' => array('fuelInoviceDiv' => 'Fuel', 'storeInoviceDiv' => 'Store'), 'label' => false)); ?></td>
	</tr>
	</table>
</div>

<div class="storeInvoices" id='storeInoviceDiv'>
	<table  cellpadding="0" cellspacing="0">
		<tr>
			<td width='95%'><h2><?php echo __('Store Invoices Pay Bills'); ?></h2></td>
			</td>
		</tr>		
	</table>

	<table cellpadding="0" cellspacing="0" class='grid'>
	<tr>
			<th><?php echo __('id'); ?></th>
			<th><?php echo __('vendor_id'); ?></th>
			<th><?php echo __('invoice'); ?></th>
			<th><?php echo __('method_payment_id'); ?></th>
			<th><?php echo __('terms'); ?></th>
			<th><?php echo __('docuement'); ?></th>
			<th><?php echo __('subtotal'); ?></th>
			<th><?php echo __('taxes'); ?></th>
			<th><?php echo __('total'); ?></th>
			<th><?php echo __('station_id'); ?></th>
			<th><?php echo __('status'); ?></th>
			<th><?php echo __('zero_leading_UPCs'); ?></th>
			<th><?php echo __('invoice_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($storeInvoices as $storeInvoice): ?>
	<tr>
		<td><?php echo h($storeInvoice['StoreInvoice']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($storeInvoice['Vendor']['name'], array('controller' => 'vendors', 'action' => 'view', $storeInvoice['Vendor']['id'])); ?>
		</td>
		<td><?php echo h($storeInvoice['StoreInvoice']['invoice']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoice['PaymentMethod']['name']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoice['StoreInvoice']['terms']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoice['StoreInvoice']['docuement']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoice['StoreInvoice']['subtotal']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoice['StoreInvoice']['taxes']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoice['StoreInvoice']['total']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($storeInvoice['Station']['name'], array('controller' => 'stations', 'action' => 'view', $storeInvoice['Station']['id'])); ?>
		</td>
		<td><?php echo h($storeInvoice['StoreInvoice']['status']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoice['StoreInvoice']['zero_leading_UPCs']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoice['StoreInvoice']['invoice_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $storeInvoice['StoreInvoice']['id'])); ?>
			<?php 
			       if($storeInvoice['StoreInvoice']['status'] != 'approved')
			          echo $this->Html->link(__('Edit'), array('action' => 'edit', $storeInvoice['StoreInvoice']['id'])); 
			?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $storeInvoice['StoreInvoice']['id']), null, __('Are you sure you want to delete # %s?', $storeInvoice['StoreInvoice']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	</div>
</div>

<div class="fuelInvoices account" id='fuleInoviceDiv' style='display:none'>
	<table cellpadding="0" width='75%' cellspacing="0">
	<tr>
			<td colspan=8><H2>Fuel Invoice Paybills</H2></td>
	</tr>
	</table>
	<table class='grid' cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo __('fuel_supplier_id'); ?></th>
			<th><?php echo __('invoice'); ?></th>
			<th><?php echo __('terms'); ?></th>
			<th><?php echo __('tax_total'); ?></th>
			<th><?php echo __('total_invoice'); ?></th>
			<th><?php echo __('payment_method_id'); ?></th>
			<th><?php echo __('station_id'); ?></th>
			<th><?php echo __('status'); ?></th>
			
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
		<td>
			<?php echo $this->Html->link($fuelInvoice['Station']['name'], array('controller' => 'stations', 'action' => 'view', $fuelInvoice['Station']['id'])); ?>
		</td>
		<td><?php echo h($fuelInvoice['FuelInvoice']['status']); ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fuelInvoice['FuelInvoice']['id'])); ?>
			<?php 
			 if($fuelInvoice['FuelInvoice']['status'] != 'approved')
				echo $this->Html->link(__('Edit'), array('action' => 'edit', $fuelInvoice['FuelInvoice']['id'])); 
			?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#invoice_type').change(function(){
			$('#fuleInoviceDiv').toggle();
			$('#storeInoviceDiv').toggle();
		});
	});
</script>