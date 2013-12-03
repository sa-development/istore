<div class="fuelSales index">
	<h2><?php echo __('Fuel Sales'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_type'); ?></th>
			<th><?php echo $this->Paginator->sort('volume'); ?></th>
			<th><?php echo $this->Paginator->sort('retail'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('adjustment'); ?></th>
			<th><?php echo $this->Paginator->sort('station_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($fuelSales as $fuelSale): ?>
	<tr>
		<td><?php echo h($fuelSale['FuelSale']['id']); ?>&nbsp;</td>
		<td><?php echo h($fuelSale['FuelSale']['product_type']); ?>&nbsp;</td>
		<td><?php echo h($fuelSale['FuelSale']['volume']); ?>&nbsp;</td>
		<td><?php echo h($fuelSale['FuelSale']['retail']); ?>&nbsp;</td>
		<td><?php echo h($fuelSale['FuelSale']['amount']); ?>&nbsp;</td>
		<td><?php echo h($fuelSale['FuelSale']['adjustment']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($fuelSale['Station']['name'], array('controller' => 'stations', 'action' => 'view', $fuelSale['Station']['id'])); ?>
		</td>
		<td><?php echo h($fuelSale['FuelSale']['created']); ?>&nbsp;</td>
		<td><?php echo h($fuelSale['FuelSale']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fuelSale['FuelSale']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fuelSale['FuelSale']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fuelSale['FuelSale']['id']), null, __('Are you sure you want to delete # %s?', $fuelSale['FuelSale']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Fuel Sale'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
