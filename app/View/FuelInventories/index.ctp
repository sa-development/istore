<div class="fuelInventories index">
	<table  cellpadding="0" cellspacing="0">
		<tr>
			<td width='95%'><h2><?php echo __('Fuel Inventories'); ?></h2></td>
			<td width='5%'><?php
				echo $this->Html->image("actions/tab_new.png", array("alt" => "Add New",'width' => '60px','url' =>  array('controller' => 	'fuel_inventories', 'action' => 'add')));
			?>
			</td>
		</tr>		
	</table>
	
	<table class='grid' cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('fuel_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('open'); ?></th>
			<th><?php echo $this->Paginator->sort('purchase'); ?></th>
			<th><?php echo $this->Paginator->sort('subtotal'); ?></th>
			<th><?php echo $this->Paginator->sort('sales'); ?></th>
			<th><?php echo $this->Paginator->sort('today_ending_book_inventory'); ?></th>
			<th><?php echo $this->Paginator->sort('today_ending_stick_reading'); ?></th>
			<th><?php echo $this->Paginator->sort('today_ending_stick_reading_inches'); ?></th>
			<th><?php echo $this->Paginator->sort('water_leval'); ?></th>
			<th><?php echo $this->Paginator->sort('short_over'); ?></th>
			<th><?php echo $this->Paginator->sort('short_over_MTD'); ?></th>
			<th><?php echo $this->Paginator->sort('check_water_level'); ?></th>
			<th><?php echo $this->Paginator->sort('check_stage_equipment'); ?></th>
			<th><?php echo $this->Paginator->sort('station_id'); ?></th>
			<!--<th><?php echo $this->Paginator->sort('created'); ?></th>-->
			<!--<th><?php //echo $this->Paginator->sort('modified'); ?></th>-->
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($fuelInventories as $fuelInventory): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($fuelInventory['FuelType']['name'], array('controller' => 'fuel_types', 'action' => 'view', $fuelInventory['FuelType']['id'])); ?>
		</td>
		<td><?php echo h($fuelInventory['FuelInventory']['open']); ?>&nbsp;</td>
		<td><?php echo h($fuelInventory['FuelInventory']['purchase']); ?>&nbsp;</td>
		<td><?php echo h($fuelInventory['FuelInventory']['subtotal']); ?>&nbsp;</td>
		<td><?php echo h($fuelInventory['FuelInventory']['sales']); ?>&nbsp;</td>
		<td><?php echo h($fuelInventory['FuelInventory']['today_ending_book_inventory']); ?>&nbsp;</td>
		<td><?php echo h($fuelInventory['FuelInventory']['today_ending_stick_reading']); ?>&nbsp;</td>
		<td><?php echo h($fuelInventory['FuelInventory']['today_ending_stick_reading_inches']); ?>&nbsp;</td>
		<td><?php echo h($fuelInventory['FuelInventory']['water_leval']); ?>&nbsp;</td>
		<td><?php echo h($fuelInventory['FuelInventory']['short_over']); ?>&nbsp;</td>
		<td><?php echo h($fuelInventory['FuelInventory']['short_over_MTD']); ?>&nbsp;</td>
		<td><?php if($fuelInventory['FuelInventory']['check_water_level']==1)  echo h('Yes'); else echo h('No'); ?>&nbsp;</td>
		<td><?php if($fuelInventory['FuelInventory']['check_stage_equipment']==1) echo h('Yes'); else echo h('No'); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($fuelInventory['Station']['name'], array('controller' => 'stations', 'action' => 'view', $fuelInventory['Station']['id'])); ?>
		</td>
		<!--<td><?php echo h($fuelInventory['FuelInventory']['created']); ?>&nbsp;</td>-->
		<!--<td><?php echo h($fuelInventory['FuelInventory']['modified']); ?>&nbsp;</td>-->
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fuelInventory['FuelInventory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fuelInventory['FuelInventory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fuelInventory['FuelInventory']['id']), null, __('Are you sure you want to delete # %s?', $fuelInventory['FuelInventory']['id'])); ?>
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
