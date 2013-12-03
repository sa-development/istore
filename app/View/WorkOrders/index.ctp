<div class="workOrders index">
	<h2><?php echo __('Work Orders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('work_order_no'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('total_qty'); ?></th>
			<th><?php echo $this->Paginator->sort('qty_complete'); ?></th>
			<th><?php echo $this->Paginator->sort('release_date'); ?></th>
			<th><?php echo $this->Paginator->sort('due_date'); ?></th>
			<th><?php echo $this->Paginator->sort('high_priority'); ?></th>
			<th><?php echo $this->Paginator->sort('prototype'); ?></th>
			<th><?php echo $this->Paginator->sort('rework'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($workOrders as $workOrder): ?>
	<tr>
		<td><?php echo h($workOrder['WorkOrder']['id']); ?>&nbsp;</td>
		<td><?php echo h($workOrder['WorkOrder']['work_order_no']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($workOrder['Product']['product_no'], array('controller' => 'products', 'action' => 'view', $workOrder['Product']['id'])); ?>
		</td>
		<td><?php echo h($workOrder['WorkOrder']['total_qty']); ?>&nbsp;</td>
		<td><?php echo h($workOrder['WorkOrder']['qty_complete']); ?>&nbsp;</td>
		<td><?php echo h($workOrder['WorkOrder']['release_date']); ?>&nbsp;</td>
		<td><?php echo h($workOrder['WorkOrder']['due_date']); ?>&nbsp;</td>
		<td><?php echo h($workOrder['WorkOrder']['high_priority']); ?>&nbsp;</td>
		<td><?php echo h($workOrder['WorkOrder']['prototype']); ?>&nbsp;</td>
		<td><?php echo h($workOrder['WorkOrder']['rework']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $workOrder['WorkOrder']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $workOrder['WorkOrder']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $workOrder['WorkOrder']['id']), null, __('Are you sure you want to delete # %s?', $workOrder['WorkOrder']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Work Order'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
