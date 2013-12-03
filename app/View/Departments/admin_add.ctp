<div class="departments form">
<?php echo $this->Form->create('Department'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Department'); ?></legend>
	<?php
		echo $this->Form->input('sysid');
		echo $this->Form->input('station_id');
		echo $this->Form->input('name');
		echo $this->Form->input('minAmt');
		echo $this->Form->input('maxAmt');
		echo $this->Form->input('isAllowFS');
		echo $this->Form->input('isNegative');
		echo $this->Form->input('isFuel');
		echo $this->Form->input('isAllowFQ');
		echo $this->Form->input('isAllowSD');
		echo $this->Form->input('isBL1');
		echo $this->Form->input('isBL2');
		echo $this->Form->input('isMoneyOrder');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Departments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
