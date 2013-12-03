<div class="accountReceivables index">
	<h2><?php echo __('Account Receivables'); ?></h2>
	<table cellpadding="0" cellspacing="0" class='grid'>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('corporation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('station_id'); ?></th>
			<th><?php echo $this->Paginator->sort('payee'); ?></th>
			<th><?php echo $this->Paginator->sort('memo'); ?></th>
			<th><?php echo $this->Paginator->sort('increase'); ?></th>
			<th><?php echo $this->Paginator->sort('decrease'); ?></th>
			<th><?php echo $this->Paginator->sort('amount_to_rec'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($accountReceivables as $accountReceivable): ?>
	<tr>
		<td><?php echo h($accountReceivable['AccountReceivable']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($accountReceivable['User']['username'], array('controller' => 'users', 'action' => 'view', $accountReceivable['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($accountReceivable['Corporation']['name'], array('controller' => 'corporations', 'action' => 'view', $accountReceivable['Corporation']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($accountReceivable['Station']['name'], array('controller' => 'stations', 'action' => 'view', $accountReceivable['Station']['id'])); ?>
		</td>
		<td><?php echo h($accountReceivable['AccountReceivable']['payee']); ?>&nbsp;</td>
		<td><?php echo h($accountReceivable['AccountReceivable']['memo']); ?>&nbsp;</td>
		<td><?php echo h($accountReceivable['AccountReceivable']['increase']); ?>&nbsp;</td>
		<td><?php echo h($accountReceivable['AccountReceivable']['decrease']); ?>&nbsp;</td>
		<td><?php echo h($accountReceivable['AccountReceivable']['amount_to_rec']); ?>&nbsp;</td>
		<td><?php echo h($accountReceivable['AccountReceivable']['created']); ?>&nbsp;</td>
		<td><?php echo h($accountReceivable['AccountReceivable']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $accountReceivable['AccountReceivable']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $accountReceivable['AccountReceivable']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $accountReceivable['AccountReceivable']['id']), null, __('Are you sure you want to delete # %s?', $accountReceivable['AccountReceivable']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Account Receivable'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Back to account'), array('controller' => 'accountings', 'action' => 'index')); ?> </li>
	</ul>
</div>
