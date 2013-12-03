<div class="accountings form">
<?php echo $this->Form->create('Accounting'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Accounting'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('GL_account');
		echo $this->Form->input('corporation_id');
		echo $this->Form->input('station_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('subaccount_of_id');
		echo $this->Form->input('account_type_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Accounting.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Accounting.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Accountings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Corporations'), array('controller' => 'corporations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Corporation'), array('controller' => 'corporations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Types'), array('controller' => 'account_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Type'), array('controller' => 'account_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Registers'), array('controller' => 'account_registers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Register'), array('controller' => 'account_registers', 'action' => 'add')); ?> </li>
	</ul>
</div>
