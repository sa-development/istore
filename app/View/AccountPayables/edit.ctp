<div class="accountPayables form">
<?php echo $this->Form->create('AccountPayable'); ?>
	<fieldset>
		<legend><?php echo __('Edit Account Payable'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('vendor_id');
		echo $this->Form->input('ref_no');
		echo $this->Form->input('amount_due');
		echo $this->Form->input('credits_used');
		echo $this->Form->input('amount_pay');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AccountPayable.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AccountPayable.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Account Payables'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
