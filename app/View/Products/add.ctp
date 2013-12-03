<div class="products form">
<?php echo $this->Form->create('Product'); ?>
	<fieldset>
		<legend><?php echo __('Add Product'); ?></legend>
	<?php
		echo $this->Form->input('product_no');
		echo $this->Form->input('rev');
		echo $this->Form->input('class');
		echo $this->Form->input('type');
		echo $this->Form->input('description');
		echo $this->Form->input('note');
		echo $this->Form->input('customer_product_number');
		echo $this->Form->input('customer_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Kitparts'), array('controller' => 'kitparts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kitpart'), array('controller' => 'kitparts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Operations'), array('controller' => 'product_operations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Operation'), array('controller' => 'product_operations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Work Orders'), array('controller' => 'work_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Work Order'), array('controller' => 'work_orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
