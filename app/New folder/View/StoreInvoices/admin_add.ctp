<div class="storeInvoices form">
<?php echo $this->Form->create('StoreInvoice'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Store Invoice'); ?></legend>
	<?php
		echo $this->Form->input('category_id');
		echo $this->Form->input('upc');
		echo $this->Form->input('cost_qty');
		echo $this->Form->input('unit');
		echo $this->Form->input('total_cost');
		echo $this->Form->input('unit_cost');
		echo $this->Form->input('case_cost');
		echo $this->Form->input('total_retail');
		echo $this->Form->input('unit_retail');
		echo $this->Form->input('case_retail');
		echo $this->Form->input('GPM');
		echo $this->Form->input('vendor_id');
		echo $this->Form->input('invoice');
		echo $this->Form->input('method_payment_id');
		echo $this->Form->input('terms');
		echo $this->Form->input('docuement');
		echo $this->Form->input('subtotal');
		echo $this->Form->input('taxes');
		echo $this->Form->input('total');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Store Invoices'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
	</ul>
</div>
