<div class="accountPayables index">
	<h2><?php echo __('Account Payables'); ?></h2>
	<table cellpadding="0" cellspacing="0" class='grid'>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('vendor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ref_no'); ?></th>
			<th><?php echo $this->Paginator->sort('amount_due'); ?></th>
			<th><?php echo $this->Paginator->sort('credits_used'); ?></th>
			<th><?php echo $this->Paginator->sort('amount_pay'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($accountPayables as $accountPayable): ?>
	<tr>
		<td><?php echo h($accountPayable['AccountPayable']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($accountPayable['Vendor']['name'], array('controller' => 'vendors', 'action' => 'view', $accountPayable['Vendor']['id'])); ?>
		</td>
		<td><?php echo h($accountPayable['AccountPayable']['ref_no']); ?>&nbsp;</td>
		<td><?php echo h($accountPayable['AccountPayable']['amount_due']); ?>&nbsp;</td>
		<td><?php echo h($accountPayable['AccountPayable']['creadits_used']); ?>&nbsp;</td>
		<td><?php echo h($accountPayable['AccountPayable']['amount_pay']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($accountPayable['User']['username'], array('controller' => 'users', 'action' => 'view', $accountPayable['User']['id'])); ?>
		</td>
		<td><?php echo h($accountPayable['AccountPayable']['created']); ?>&nbsp;</td>
		<td><?php echo h($accountPayable['AccountPayable']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $accountPayable['AccountPayable']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $accountPayable['AccountPayable']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $accountPayable['AccountPayable']['id']), null, __('Are you sure you want to delete # %s?', $accountPayable['AccountPayable']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Account Payable'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Back to account'), array('controller' => 'accountings', 'action' => 'index')); ?> </li>
	</ul>
</div>
