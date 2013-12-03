<div class="storeInvoices form">
<?php echo $this->Form->create('StoreInvoice'); ?>
	<fieldset>
		<legend><?php echo __('Add Store Invoice'); ?></legend>
		
		<Table id='invoiceItemTable' class="grid" cellpadding=0 cellspacing=0 border=0>
		<tr>
			<td><?php echo $this->Form->input('station_id'); ?></td>
			<td><?php echo $this->Form->input('invoice_date'); ?></td>
			<td><?php echo $this->Form->input('vendor_id'); ?></td>
			<td><?php echo $this->Form->input('invoice'); ?></td>
			<td><?php echo $this->Form->input('method_payment_id'); ?></td>
			<td><?php echo $this->Form->input('terms', array('type' => 'text')); ?></td>
			<td><?php echo $this->Form->input('zero_leading_UPCs'); ?></td>
		</tr>	
		
		<tr>
			<td colspan=7> Invoice Item </td>
		</tr>
		
		<tr>
			<td colspan=7> 
				<Table id='invoiceItemTable' class="grid" cellpadding=0 cellspacing=0 border=0 >
					<tr>
						<th>Category</th>
						<th colspan=2 style='text-align:center'>Item Name</th>
						<th>Case QTY</th>
						<th colspan=2 style='text-align:center'>Total Cost</th>
						<th colspan=2 style='text-align:center'>Total Retail</th>
						<th>GPM</th>
					</tr>
					
					<tr>
						<th></th>
						<th>UPC</th>
						<th>VIN</th>
						<th>Unit Case</th>
						<th>Unit Cost</th>
						<th>Case Cost</th>
						
						<th>Unit Retail</th>
						<th>Case Retail</th>
						<th></th>
					</tr>
					
				</Table>
			</td>
		</tr>
		
		<tr>
			<td colspan=7> Invoice Item </td>
		</tr>
		
		<tr>
			<td><?php echo $this->Form->input('subtotal'); ?></td>
			<td><?php echo $this->Form->input('taxes'); ?></td>
			<td><?php echo $this->Form->input('total'); ?></td>
		</tr>
		
	</Table>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Store Invoices'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Store Invoice Items'), array('controller' => 'store_invoice_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store Invoice Item'), array('controller' => 'store_invoice_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
