<div class="customerContacts view">
<h2><?php  echo __('Customer Contact'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($customerContact['CustomerContact']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($customerContact['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $customerContact['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($customerContact['CustomerContact']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($customerContact['CustomerContact']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer Contact'), array('action' => 'edit', $customerContact['CustomerContact']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer Contact'), array('action' => 'delete', $customerContact['CustomerContact']['id']), null, __('Are you sure you want to delete # %s?', $customerContact['CustomerContact']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Contacts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Contact'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
