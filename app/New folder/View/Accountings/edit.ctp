<div class="accountings form">
<?php echo $this->Form->create('Accounting'); ?>
	<fieldset>
		<legend><?php echo __('Edit Accounting'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('GL_account');
		echo $this->Form->input('corporation_id');
		echo $this->Form->input('station_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		//echo $this->Form->input('subaccount_of_id');
		echo $this->Form->input('account_type_id');
		echo $this->Form->hidden('user_id', array('value' => $userId));
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Accounting'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Corporations'), array('controller' => 'corporations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Types'), array('controller' => 'account_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Registers'), array('controller' => 'account_registers', 'action' => 'index')); ?> </li>
	</ul>
</div>

