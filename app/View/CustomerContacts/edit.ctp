<div class="customerContacts form">
<?php echo $this->Form->create('CustomerContact'); ?>
	<fieldset>
		<legend><?php echo __('Edit Customer Contact'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('customer_id');
		echo $this->Form->input('type');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CustomerContact.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CustomerContact.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Customer Contacts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
