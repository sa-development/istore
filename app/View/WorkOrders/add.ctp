<div class="workOrders form">
<?php echo $this->Form->create('WorkOrder'); ?>
	<fieldset>
		<legend><?php echo __('Add Work Order'); ?></legend>
	<?php
		echo $this->Form->input('work_order_no');
		echo $this->Form->input('product_id');
		echo $this->Form->input('total_qty');
		echo $this->Form->input('qty_complete');
		echo $this->Form->input('release_date');
		echo $this->Form->input('due_date');
		echo $this->Form->input('high_priority');
		echo $this->Form->input('prototype');
		echo $this->Form->input('rework');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Work Orders'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
