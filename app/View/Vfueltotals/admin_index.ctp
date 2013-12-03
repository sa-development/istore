<div class="vfueltotals index">
	<h2><?php echo __('Vfueltotals'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('periodType'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('periodSeqNum'); ?></th>
			<th><?php echo $this->Paginator->sort('periodBeginDate'); ?></th>
			<th><?php echo $this->Paginator->sort('periodEndDate'); ?></th>
			<th><?php echo $this->Paginator->sort('site'); ?></th>
			<th><?php echo $this->Paginator->sort('fuelingPositionId'); ?></th>
			<th><?php echo $this->Paginator->sort('productNumber'); ?></th>
			<th><?php echo $this->Paginator->sort('name2'); ?></th>
			<th><?php echo $this->Paginator->sort('fuelVolume'); ?></th>
			<th><?php echo $this->Paginator->sort('uom'); ?></th>
			<th><?php echo $this->Paginator->sort('fuelMoney'); ?></th>
			<th><?php echo $this->Paginator->sort('currency'); ?></th>
			<th><?php echo $this->Paginator->sort('productID'); ?></th>
			<th><?php echo $this->Paginator->sort('fuelingPointStatus'); ?></th>
			<th><?php echo $this->Paginator->sort('station_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($vfueltotals as $vfueltotal): ?>
	<tr>
		<td><?php echo h($vfueltotal['Vfueltotal']['id']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['periodType']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['name']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['periodSeqNum']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['periodBeginDate']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['periodEndDate']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['site']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['fuelingPositionId']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['productNumber']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['name2']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['fuelVolume']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['uom']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['fuelMoney']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['currency']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['productID']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['fuelingPointStatus']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['station_id']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['created']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $vfueltotal['Vfueltotal']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $vfueltotal['Vfueltotal']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $vfueltotal['Vfueltotal']['id']), null, __('Are you sure you want to delete # %s?', $vfueltotal['Vfueltotal']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Vfueltotal'), array('action' => 'add')); ?></li>
	</ul>
</div>
