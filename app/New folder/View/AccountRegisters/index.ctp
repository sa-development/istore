<div class="accountRegisters index">
	<h2><?php echo __('Account Registers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('accounting_id'); ?></th>
			<th><?php echo $this->Paginator->sort('due_date'); ?></th>
			<th><?php echo $this->Paginator->sort('check'); ?></th>
			<th><?php echo $this->Paginator->sort('payee'); ?></th>
			<th><?php echo $this->Paginator->sort('memo'); ?></th>
			<th><?php echo $this->Paginator->sort('spend'); ?></th>
			<th><?php echo $this->Paginator->sort('account'); ?></th>
			<th><?php echo $this->Paginator->sort('recieve'); ?></th>
			<th><?php echo $this->Paginator->sort('CLR'); ?></th>
			<th><?php echo $this->Paginator->sort('balance'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($accountRegisters as $accountRegister): ?>
	<tr>
		<td><?php echo h($accountRegister['AccountRegister']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($accountRegister['Accounting']['name'], array('controller' => 'accountings', 'action' => 'view', $accountRegister['Accounting']['id'])); ?>
		</td>
		<td><?php echo h($accountRegister['AccountRegister']['due_date']); ?>&nbsp;</td>
		<td><?php echo h($accountRegister['AccountRegister']['check']); ?>&nbsp;</td>
		<td><?php echo h($accountRegister['AccountRegister']['payee']); ?>&nbsp;</td>
		<td><?php echo h($accountRegister['AccountRegister']['memo']); ?>&nbsp;</td>
		<td><?php echo h($accountRegister['AccountRegister']['spend']); ?>&nbsp;</td>
		<td><?php echo h($accountRegister['AccountRegister']['account']); ?>&nbsp;</td>
		<td><?php echo h($accountRegister['AccountRegister']['recieve']); ?>&nbsp;</td>
		<td><?php echo h($accountRegister['AccountRegister']['CLR']); ?>&nbsp;</td>
		<td><?php echo h($accountRegister['AccountRegister']['balance']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($accountRegister['User']['username'], array('controller' => 'users', 'action' => 'view', $accountRegister['User']['id'])); ?>
		</td>
		<td><?php echo h($accountRegister['AccountRegister']['created']); ?>&nbsp;</td>
		<td><?php echo h($accountRegister['AccountRegister']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $accountRegister['AccountRegister']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $accountRegister['AccountRegister']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $accountRegister['AccountRegister']['id']), null, __('Are you sure you want to delete # %s?', $accountRegister['AccountRegister']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Account Register'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Accountings'), array('controller' => 'accountings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accounting'), array('controller' => 'accountings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
