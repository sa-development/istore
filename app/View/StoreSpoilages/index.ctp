<div class="storeSpoilages index">
<table  cellpadding="0" cellspacing="0">
		<tr>
			<td width='95%'><h2><?php echo __('Store Spoilages'); ?></h2></td>
			<td width='5%'><?php
				echo $this->Html->image("actions/tab_new.png", array("alt" => "Add New",'width' => '60px','url' =>  array('controller' => 	'store_spoilages', 'action' => 'add')));
			?>
			</td>
		</tr>		
	</table>
	<table class="grid" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_name'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('UPC'); ?></th>
			<th><?php echo $this->Paginator->sort('reason'); ?></th>
			<th><?php echo $this->Paginator->sort('qty'); ?></th>
			<th><?php echo $this->Paginator->sort('retail_per_item'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($storeSpoilages as $storeSpoilage): ?>
	<tr>
		<td><?php echo h($storeSpoilage['StoreSpoilage']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($storeSpoilage['Vrubyreptplus']['name'], array('controller' => 'vrubyreptcategory', 'action' => 'view', $storeSpoilage['Vrubyreptplus']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($storeSpoilage['Category']['name'], array('controller' => 'categories', 'action' => 'view', $storeSpoilage['Category']['id'])); ?>
		</td>
		<td><?php echo h($storeSpoilage['StoreSpoilage']['UPC']); ?>&nbsp;</td>
		<td><?php echo h($storeSpoilage['StoreSpoilage']['reason']); ?>&nbsp;</td>
		<td><?php echo h($storeSpoilage['StoreSpoilage']['qty']); ?>&nbsp;</td>
		<td><?php echo h($storeSpoilage['StoreSpoilage']['retail_per_item']); ?>&nbsp;</td>
		<td><?php echo h($storeSpoilage['StoreSpoilage']['amount']); ?>&nbsp;</td>
		<td><?php echo h($storeSpoilage['StoreSpoilage']['created']); ?>&nbsp;</td>
		<td><?php echo h($storeSpoilage['StoreSpoilage']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $storeSpoilage['StoreSpoilage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $storeSpoilage['StoreSpoilage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $storeSpoilage['StoreSpoilage']['id']), null, __('Are you sure you want to delete # %s?', $storeSpoilage['StoreSpoilage']['id'])); ?>
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
