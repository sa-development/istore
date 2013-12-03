<div class="storePurches index">
<table  cellpadding="0" cellspacing="0">
		<tr>
			<td width='95%'><h2><?php echo __('Store Purches'); ?></h2></td>
			<td width='5%'><?php
				echo $this->Html->image("actions/tab_new.png", array("alt" => "Add New",'width' => '60px','url' =>  array('controller' => 	'store_purches', 'action' => 'add')));
			?>
			</td>
		</tr>		
	</table>
	<table class="grid" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('vendor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cost'); ?></th>
			<th><?php echo $this->Paginator->sort('retail'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_method'); ?></th>
			<th><?php echo $this->Paginator->sort('GPM'); ?></th>
			<th><?php echo $this->Paginator->sort('profit'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($storePurches as $storePurch): ?>
	<tr>
		<td><?php echo h($storePurch['StorePurch']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($storePurch['Vendor']['name'], array('controller' => 'vendors', 'action' => 'view', $storePurch['Vendor']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($storePurch['Category']['name'], array('controller' => 'categories', 'action' => 'view', $storePurch['Category']['id'])); ?>
		</td>
		<td><?php echo h($storePurch['StorePurch']['cost']); ?>&nbsp;</td>
		<td><?php echo h($storePurch['StorePurch']['retail']); ?>&nbsp;</td>
		<td><?php echo h($storePurch['StorePurch']['payment_method']); ?>&nbsp;</td>
		<td><?php echo h($storePurch['StorePurch']['GPM']); ?>&nbsp;</td>
		<td><?php echo h($storePurch['StorePurch']['profit']); ?>&nbsp;</td>
		<td><?php echo h($storePurch['StorePurch']['created']); ?>&nbsp;</td>
		<td><?php echo h($storePurch['StorePurch']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $storePurch['StorePurch']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $storePurch['StorePurch']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $storePurch['StorePurch']['id']), null, __('Are you sure you want to delete # %s?', $storePurch['StorePurch']['id'])); ?>
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
<?php echo $this->element('inventories_action');?>