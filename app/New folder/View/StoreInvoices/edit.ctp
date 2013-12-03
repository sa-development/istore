<div class="storeInvoices form">
<?php echo $this->Form->create('StoreInvoice'); ?>
	<fieldset>
		<legend><?php echo __('Edit Store Invoice'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('vendor_id');
		echo $this->Form->input('invoice');
		echo $this->Form->input('method_payment_id');
		echo $this->Form->input('terms');
		echo $this->Form->input('docuement');
		echo $this->Form->input('subtotal');
		echo $this->Form->input('taxes');
		echo $this->Form->input('total');
		echo $this->Form->input('station_id');
		echo $this->Form->input('zero_leading_UPCs');
		echo $this->Form->input('invoice_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('StoreInvoice.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('StoreInvoice.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Store Invoices'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Store Invoice Items'), array('controller' => 'store_invoice_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store Invoice Item'), array('controller' => 'store_invoice_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
