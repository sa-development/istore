<div class="stockItems index">
	<h2><?php echo __('Stock Items'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="grid">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('warehouse'); ?></th>
			<th><?php echo $this->Paginator->sort('on_hand'); ?></th>
			<th><?php echo $this->Paginator->sort('mfg_part_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($stockItems as $stockItem): ?>
	<tr>
		<td><?php echo h($stockItem['StockItem']['id']); ?>&nbsp;</td>
		<td><?php echo h($stockItem['StockItem']['warehouse']); ?>&nbsp;</td>
		<td><?php echo h($stockItem['StockItem']['on_hand']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($stockItem['MfgPart']['mfg_part_no'], array('controller' => 'mfg_parts', 'action' => 'view', $stockItem['MfgPart']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $stockItem['StockItem']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $stockItem['StockItem']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $stockItem['StockItem']['id']), null, __('Are you sure you want to delete # %s?', $stockItem['StockItem']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Stock Item'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Mfg Parts'), array('controller' => 'mfg_parts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfg Part'), array('controller' => 'mfg_parts', 'action' => 'add')); ?> </li>
	</ul>
</div>
