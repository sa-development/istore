<div class="posrequesters index">
	<h2><?php echo __('Posrequesters'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="grid">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('station_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cmd_url'); ?></th>
			<th><?php echo $this->Paginator->sort('data'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($posrequesters as $posrequester): ?>
	<tr>
		<td><?php echo h($posrequester['Posrequester']['id']); ?>&nbsp;</td>
		<td><?php echo h($posrequester['Posrequester']['station_id']); ?>&nbsp;</td>
		<td><?php echo h($posrequester['Posrequester']['cmd_url']); ?>&nbsp;</td>
		<td><?php echo h($posrequester['Posrequester']['data']); ?>&nbsp;</td>
		<td><?php echo h($posrequester['Posrequester']['status']); ?>&nbsp;</td>
		<td><?php echo h($posrequester['Posrequester']['active']); ?>&nbsp;</td>
		<td><?php echo h($posrequester['Posrequester']['created']); ?>&nbsp;</td>
		<td><?php echo h($posrequester['Posrequester']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $posrequester['Posrequester']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $posrequester['Posrequester']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $posrequester['Posrequester']['id']), null, __('Are you sure you want to delete # %s?', $posrequester['Posrequester']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Posrequester'), array('action' => 'add')); ?></li>
	</ul>
</div>
