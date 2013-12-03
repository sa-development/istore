<div class="prodcodes index">
	<h2><?php echo __('Prodcodes'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="grid">
	<tr>
			
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('isNotSold'); ?></th>
			<th><?php echo $this->Paginator->sort('isFuel'); ?></th>
			<th><?php echo $this->Paginator->sort('station_id'); ?></th>
			
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($prodcodes as $prodcode): ?>
	<tr>
		
		<td><?php echo h($prodcode['Prodcode']['name']); ?>&nbsp;</td>
		<td><?php echo h($prodcode['Prodcode']['isNotSold']); ?>&nbsp;</td>
		<td><?php echo h($prodcode['Prodcode']['isFuel']); ?>&nbsp;</td>
		<td><?php echo h($prodcode['Prodcode']['station_id']); ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $prodcode['Prodcode']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $prodcode['Prodcode']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $prodcode['Prodcode']['id']), null, __('Are you sure you want to delete # %s?', $prodcode['Prodcode']['id'])); ?>
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

<?php echo $this->element('station_action'); ?>

<div class="actions">
	<h3><?php echo __('Prodcode'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Prodcode'), array('action' => 'add')); ?></li>
	</ul>
</div>
