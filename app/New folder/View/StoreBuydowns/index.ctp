<div class="storeBuydowns index">
	<h2><?php echo __('Store Buydowns'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('vendor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_name'); ?></th>
			<th><?php echo $this->Paginator->sort('qty'); ?></th>
			<th><?php echo $this->Paginator->sort('change_retail_item'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($storeBuydowns as $storeBuydown): ?>
	<tr>
		<td><?php echo h($storeBuydown['StoreBuydown']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($storeBuydown['Vendor']['name'], array('controller' => 'vendors', 'action' => 'view', $storeBuydown['Vendor']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($storeBuydown['Category']['name'], array('controller' => 'categories', 'action' => 'view', $storeBuydown['Category']['id'])); ?>
		</td>
		<td><?php echo h($storeBuydown['StoreBuydown']['item_name']); ?>&nbsp;</td>
		<td><?php echo h($storeBuydown['StoreBuydown']['qty']); ?>&nbsp;</td>
		<td><?php echo h($storeBuydown['StoreBuydown']['change_retail_item']); ?>&nbsp;</td>
		<td><?php echo h($storeBuydown['StoreBuydown']['amount']); ?>&nbsp;</td>
		<td><?php echo h($storeBuydown['StoreBuydown']['created']); ?>&nbsp;</td>
		<td><?php echo h($storeBuydown['StoreBuydown']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $storeBuydown['StoreBuydown']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $storeBuydown['StoreBuydown']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $storeBuydown['StoreBuydown']['id']), null, __('Are you sure you want to delete # %s?', $storeBuydown['StoreBuydown']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Store Buydown'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
