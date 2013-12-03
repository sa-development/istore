<div class="stations index">
	<h2><?php echo __('Stations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('business_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cash_register_brand'); ?></th>
			<th><?php echo $this->Paginator->sort('ip_address'); ?></th>
			<th><?php echo $this->Paginator->sort('user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($stations as $station): ?>
	<tr>
		<td><?php echo h($station['Station']['id']); ?>&nbsp;</td>
		<td><?php echo h($station['Station']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($station['BusinessTypy']['name'], array('controller' => 'business_types', 'action' => 'view', $station['BusinessTypy']['id'])); ?>
		</td>
		<td><?php echo h($station['Station']['cash_register_brand']); ?>&nbsp;</td>
		<td><?php echo h($station['Station']['ip_address']); ?>&nbsp;</td>
		<td><?php echo h($station['Station']['user_name']); ?>&nbsp;</td>
		<td><?php echo h($station['Station']['password']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($station['User']['username'], array('controller' => 'users', 'action' => 'view', $station['User']['id'])); ?>
		</td>
		<td><?php echo h($station['Station']['created']); ?>&nbsp;</td>
		<td><?php echo h($station['Station']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $station['Station']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $station['Station']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $station['Station']['id']), null, __('Are you sure you want to delete # %s?', $station['Station']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Station'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Business Types'), array('controller' => 'business_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business Typy'), array('controller' => 'business_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
