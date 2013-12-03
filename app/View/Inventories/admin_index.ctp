<div >
    <?php echo $this->Form->create('Report', array('type' => 'GET')); ?>    
	<?php echo $this->Form->input('station_id', array('empty' => 'Select Station', 'selected' => $station_id)); ?>
	<?php echo $this->Form->end(); ?>
</div>

<?php if($station_id): ?>

<div class="inventories index">
	<h2><?php echo __('Inventories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
		<tr dir="ltr">
			<th></th>
			<th rowspan="2">S.N</th>
			<th rowspan="2">Category</th>
			<th rowspan="2">Date of Last Physical</th>
			<th colspan="6">Quantity</th>
			<th style="display: none;"></th>
			<th style="display: none;"></th>
			<th style="display: none;"></th>
			<th style="display: none;"></th>
			<th style="display: none;"></th>
			<th rowspan="2">Per Unit Cost</th>
			<th rowspan="2">Spoilage/Overage</th>
			<th rowspan="2">Date of Current Physical</th>
		</tr>
		<tr dir="ltr">
			<th></th>
			<th style="display: none;"></th>
			<th style="display: none;"></th>
			<th style="display: none;"></th>
			<th>Book Inventory</th>
			<th>Purchase</th>
			<th>Sales</th>
			<th>Ending Inventory</th>
			<th>Physical Inventory</th>
			<th>Short/Over</th>
			<th style="display: none;"></th>
			<th style="display: none;"></th>
			<th style="display: none;"></th>
		</tr>
	<?php
	foreach ($inventories as $inventory): ?>
	<tr>
		<td><?php echo h($inventory['Inventory']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($inventory['Station']['name'], array('controller' => 'stations', 'action' => 'view', $inventory['Station']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($inventory['Department']['name'], array('controller' => 'departments', 'action' => 'view', $inventory['Department']['id'])); ?>
		</td>
		<td><?php echo h($inventory['Inventory']['plus']); ?>&nbsp;</td>
		<td><?php echo h($inventory['Inventory']['ticket_adjustment']); ?>&nbsp;</td>
		<td><?php echo h($inventory['Inventory']['book_inventory']); ?>&nbsp;</td>
		<td><?php echo h($inventory['Inventory']['physical_inventory']); ?>&nbsp;</td>
		<td><?php echo h($inventory['Inventory']['quantity']); ?>&nbsp;</td>
		<td><?php echo h($inventory['Inventory']['short_over']); ?>&nbsp;</td>
		<td><?php echo h($inventory['Inventory']['time']); ?>&nbsp;</td>
		<td><?php echo h($inventory['Inventory']['last_physical']); ?>&nbsp;</td>
		<td><?php echo h($inventory['Inventory']['puchase']); ?>&nbsp;</td>
		<td><?php echo h($inventory['Inventory']['sales']); ?>&nbsp;</td>
		<td><?php echo h($inventory['Inventory']['buydown']); ?>&nbsp;</td>
		<td><?php echo h($inventory['Inventory']['price_change']); ?>&nbsp;</td>
		<td><?php echo h($inventory['Inventory']['spoilage']); ?>&nbsp;</td>
		<td><?php echo h($inventory['Inventory']['cost_of_inventory']); ?>&nbsp;</td>
		<td><?php echo h($inventory['Inventory']['created']); ?>&nbsp;</td>
		<td><?php echo h($inventory['Inventory']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $inventory['Inventory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $inventory['Inventory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $inventory['Inventory']['id']), null, __('Are you sure you want to delete # %s?', $inventory['Inventory']['id'])); ?>
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
<?php endif; ?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Inventory'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
	</ul>
</div>
