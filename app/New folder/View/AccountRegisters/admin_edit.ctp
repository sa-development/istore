<div class="accountRegisters form">
<?php echo $this->Form->create('AccountRegister'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Account Register'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('accounting_id');
		echo $this->Form->input('due_date');
		echo $this->Form->input('check');
		echo $this->Form->input('payee');
		echo $this->Form->input('memo');
		echo $this->Form->input('spend');
		echo $this->Form->input('account');
		echo $this->Form->input('recieve');
		echo $this->Form->input('CLR');
		echo $this->Form->input('balance');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AccountRegister.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AccountRegister.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Account Registers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Accountings'), array('controller' => 'accountings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accounting'), array('controller' => 'accountings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
