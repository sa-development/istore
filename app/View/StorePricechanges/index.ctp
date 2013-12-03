<div class="storePricechanges index">
<table  cellpadding="0" cellspacing="0">
		<tr>
			<td width='95%'><h2><?php echo __('Store Pricechanges'); ?></h2></td>
			<td width='5%'><?php
				echo $this->Html->image("actions/tab_new.png", array("alt" => "Add New",'width' => '60px','url' =>  array('controller' => 	'store_pricechanges', 'action' => 'add')));
			?>
			</td>
		</tr>		
	</table>
	<table class='grid' cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('vendor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_name'); ?></th>
			<th><?php echo $this->Paginator->sort('qty'); ?></th>
			<th><?php echo $this->Paginator->sort('chage_retail_item'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($storePricechanges as $storePricechange): ?>
	<tr>
		<td><?php echo h($storePricechange['StorePricechange']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($storePricechange['Vendor']['name'], array('controller' => 'vendors', 'action' => 'view', $storePricechange['Vendor']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($storePricechange['Category']['name'], array('controller' => 'categories', 'action' => 'view', $storePricechange['Category']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($storePricechange['Vrubyreptplus']['name'], array('controller' => 'vrubyreptcategory', 'action' => 'view', $storePricechange['Vrubyreptplus']['id'])); ?>
		</td>
		<td><?php echo h($storePricechange['StorePricechange']['qty']); ?>&nbsp;</td>
		<td><?php echo h($storePricechange['StorePricechange']['chage_retail_item']); ?>&nbsp;</td>
		<td><?php echo h($storePricechange['StorePricechange']['amount']); ?>&nbsp;</td>
		<td><?php echo h($storePricechange['StorePricechange']['created']); ?>&nbsp;</td>
		<td><?php echo h($storePricechange['StorePricechange']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $storePricechange['StorePricechange']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $storePricechange['StorePricechange']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $storePricechange['StorePricechange']['id']), null, __('Are you sure you want to delete # %s?', $storePricechange['StorePricechange']['id'])); ?>
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
