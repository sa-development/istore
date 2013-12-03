<div class="accountTypes form">
<?php echo $this->Form->create('AccountType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Account Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AccountType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AccountType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Account Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Accountings'), array('controller' => 'accountings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accounting'), array('controller' => 'accountings', 'action' => 'add')); ?> </li>
	</ul>
</div>
