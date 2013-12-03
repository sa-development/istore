<div class="accountings index">
	<h2><?php echo __('Accountings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('GL_account'); ?></th>
			<th><?php echo $this->Paginator->sort('corporation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('station_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('subaccount_of_id'); ?></th>
			<th><?php echo $this->Paginator->sort('account_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($accountings as $accounting): ?>
	<tr>
		<td><?php echo h($accounting['Accounting']['id']); ?>&nbsp;</td>
		<td><?php echo h($accounting['Accounting']['GL_account']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($accounting['Corporation']['name'], array('controller' => 'corporations', 'action' => 'view', $accounting['Corporation']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($accounting['Station']['name'], array('controller' => 'stations', 'action' => 'view', $accounting['Station']['id'])); ?>
		</td>
		<td><?php echo h($accounting['Accounting']['name']); ?>&nbsp;</td>
		<td><?php echo h($accounting['Accounting']['description']); ?>&nbsp;</td>
		<td><?php echo h($accounting['Accounting']['subaccount_of_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($accounting['AccountType']['name'], array('controller' => 'account_types', 'action' => 'view', $accounting['AccountType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($accounting['User']['username'], array('controller' => 'users', 'action' => 'view', $accounting['User']['id'])); ?>
		</td>
		<td><?php echo h($accounting['Accounting']['active']); ?>&nbsp;</td>
		<td><?php echo h($accounting['Accounting']['created']); ?>&nbsp;</td>
		<td><?php echo h($accounting['Accounting']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $accounting['Accounting']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $accounting['Accounting']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $accounting['Accounting']['id']), null, __('Are you sure you want to delete # %s?', $accounting['Accounting']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Accounting'), array('action' => 'add')); ?></li>
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
