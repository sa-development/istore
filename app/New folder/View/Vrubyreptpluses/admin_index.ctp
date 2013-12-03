<div class="vrubyreptpluses index">
	<h2><?php echo __('Vrubyreptpluses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('periodType'); ?></th>
			<th><?php echo $this->Paginator->sort('periodBeginDate'); ?></th>
			<th><?php echo $this->Paginator->sort('periodEndDate'); ?></th>
			<th><?php echo $this->Paginator->sort('totalitemCount'); ?></th>
			<th><?php echo $this->Paginator->sort('totalitemnetSales'); ?></th>
			<th><?php echo $this->Paginator->sort('totalpercentOfSales'); ?></th>
			<th><?php echo $this->Paginator->sort('vscashiername'); ?></th>
			<th><?php echo $this->Paginator->sort('vscashiersysid'); ?></th>
			<th><?php echo $this->Paginator->sort('upc'); ?></th>
			<th><?php echo $this->Paginator->sort('modifier'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('salePrice'); ?></th>
			<th><?php echo $this->Paginator->sort('originalPrice'); ?></th>
			<th><?php echo $this->Paginator->sort('netsalecount'); ?></th>
			<th><?php echo $this->Paginator->sort('netsaleamount'); ?></th>
			<th><?php echo $this->Paginator->sort('netsaleitemCount'); ?></th>
			<th><?php echo $this->Paginator->sort('percentOfSales'); ?></th>
			<th><?php echo $this->Paginator->sort('station_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modfied'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($vrubyreptpluses as $vrubyreptplus): ?>
	<tr>
		<td><?php echo h($vrubyreptplus['Vrubyreptplus']['id']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptplus['Vrubyreptplus']['periodType']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptplus['Vrubyreptplus']['periodBeginDate']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptplus['Vrubyreptplus']['periodEndDate']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptplus['Vrubyreptplus']['totalitemCount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptplus['Vrubyreptplus']['totalitemnetSales']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptplus['Vrubyreptplus']['totalpercentOfSales']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptplus['Vrubyreptplus']['vscashiername']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptplus['Vrubyreptplus']['vscashiersysid']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptplus['Vrubyreptplus']['upc']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptplus['Vrubyreptplus']['modifier']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptplus['Vrubyreptplus']['name']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptplus['Vrubyreptplus']['salePrice']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptplus['Vrubyreptplus']['originalPrice']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptplus['Vrubyreptplus']['netsalecount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptplus['Vrubyreptplus']['netsaleamount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptplus['Vrubyreptplus']['netsaleitemCount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptplus['Vrubyreptplus']['percentOfSales']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($vrubyreptplus['Station']['name'], array('controller' => 'stations', 'action' => 'view', $vrubyreptplus['Station']['id'])); ?>
		</td>
		<td><?php echo h($vrubyreptplus['Vrubyreptplus']['created']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptplus['Vrubyreptplus']['modfied']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $vrubyreptplus['Vrubyreptplus']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $vrubyreptplus['Vrubyreptplus']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $vrubyreptplus['Vrubyreptplus']['id']), null, __('Are you sure you want to delete # %s?', $vrubyreptplus['Vrubyreptplus']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Vrubyreptplus'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
