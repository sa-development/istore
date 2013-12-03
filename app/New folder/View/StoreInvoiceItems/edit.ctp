<div class="storeInvoiceItems form">
<?php echo $this->Form->create('StoreInvoiceItem'); ?>
	<fieldset>
		<legend><?php echo __('Edit Store Invoice Item'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('store_invoice_id');
		echo $this->Form->input('category_id');
		echo $this->Form->input('item_name');
		echo $this->Form->input('UPC');
		echo $this->Form->input('VIN');
		echo $this->Form->input('case_QTY');
		echo $this->Form->input('unit_in_case');
		echo $this->Form->input('total_cost');
		echo $this->Form->input('unit_cost');
		echo $this->Form->input('case_cost');
		echo $this->Form->input('total_retail');
		echo $this->Form->input('unit_retail');
		echo $this->Form->input('case_retail');
		echo $this->Form->input('GPM');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('StoreInvoiceItem.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('StoreInvoiceItem.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Store Invoice Items'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Store Invoices'), array('controller' => 'store_invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store Invoice'), array('controller' => 'store_invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
