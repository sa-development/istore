<div class="customerContacts index">
	<h2><?php echo __('Customer Contacts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($customerContacts as $customerContact): ?>
	<tr>
		<td><?php echo h($customerContact['CustomerContact']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($customerContact['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $customerContact['Customer']['id'])); ?>
		</td>
		<td><?php echo h($customerContact['CustomerContact']['type']); ?>&nbsp;</td>
		<td><?php echo h($customerContact['CustomerContact']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $customerContact['CustomerContact']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $customerContact['CustomerContact']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $customerContact['CustomerContact']['id']), null, __('Are you sure you want to delete # %s?', $customerContact['CustomerContact']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Customer Contact'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
