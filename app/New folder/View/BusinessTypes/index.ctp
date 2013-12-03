<div class="businessTypes index">
	<h2><?php echo __('Business Types'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="grid">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($businessTypes as $businessType): ?>
	<tr>
		<td><?php echo h($businessType['BusinessType']['id']); ?>&nbsp;</td>
		<td><?php echo h($businessType['BusinessType']['name']); ?>&nbsp;</td>
		<td><?php echo h($businessType['BusinessType']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $businessType['BusinessType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $businessType['BusinessType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $businessType['BusinessType']['id']), null, __('Are you sure you want to delete # %s?', $businessType['BusinessType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Business Type'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Competitors'), array('controller' => 'competitors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competitor'), array('controller' => 'competitors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stores'), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('controller' => 'stores', 'action' => 'add')); ?> </li>
	</ul>
</div>
