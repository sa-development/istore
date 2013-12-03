<div class="departments form">
<?php echo $this->Form->create('Department'); ?>
	<fieldset>
		<legend><?php echo __('Edit Department'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('sysid');
		echo $this->Form->input('station_id');
		echo $this->Form->input('name');
		
		echo $this->Form->input('department_type_id', array('empty'=>'-- Department Type --'));
		echo $this->Form->input('minAmt', array('label'=>'Minimum Price'));
		echo $this->Form->input('maxAmt', array('label'=>'Maximum Price'));
		
		echo $this->Form->input('description', array('type'=>'textarea'));
		echo $this->Form->input('default_price');
		
		echo $this->Form->input('default_sales_quantity');
		echo $this->Form->input('minimum_age');
		echo $this->Form->input('fee_charges');		

		echo $this->Form->input('isAllowFS');
		echo $this->Form->input('isNegative');
		echo $this->Form->input('isFuel');
		echo $this->Form->input('isAllowFQ');
		echo $this->Form->input('isAllowSD');
		echo $this->Form->input('isBL1');
		echo $this->Form->input('isBL2');
		echo $this->Form->input('isMoneyOrder');
		echo $this->Form->input('category_id', array('label'=>'Matching Category', 'empty'=>'-- select category--'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Department.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Department.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Departments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
