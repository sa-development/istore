<div class="paybills form">
<?php echo $this->Form->create('Paybill'); ?>
	<fieldset>
		<legend><?php echo __('Add Paybill'); ?></legend>
	<?php
		echo $this->Form->input('store_invoice_id');
		echo $this->Form->input('fuel_invoice_id');
		echo $this->Form->input('due_date');
		echo $this->Form->input('vendor_id');
		echo $this->Form->input('amt_due');
		echo $this->Form->input('disc_used');
		echo $this->Form->input('credit_used');
		echo $this->Form->input('amount_to_pay');
		echo $this->Form->input('bills_ref_no');
		echo $this->Form->input('discount');
		echo $this->Form->input('number_of_credit');
		echo $this->Form->input('total_credit_available');
		echo $this->Form->input('payment_date');
		echo $this->Form->input('paymen_method');
		echo $this->Form->input('payment_to');
		echo $this->Form->input('payment_from');
		echo $this->Form->input('ending_balance');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Paybills'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Store Invoices'), array('controller' => 'store_invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store Invoice'), array('controller' => 'store_invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fuel Invoices'), array('controller' => 'fuel_invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fuel Invoice'), array('controller' => 'fuel_invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
	</ul>
</div>
