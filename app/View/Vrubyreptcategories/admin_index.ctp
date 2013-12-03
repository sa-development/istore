<div class="vrubyreptcategories index">
	<h2><?php echo __('Vrubyreptcategories'); ?></h2>
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
	foreach ($vrubyreptcategories as $vrubyreptcategory): ?>
	<tr>
		<td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['id']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['periodType']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['periodBeginDate']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['periodEndDate']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['totalitemCount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['totalitemnetSales']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['totalpercentOfSales']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['vscashiername']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['vscashiersysid']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['name']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['salePrice']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['originalPrice']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['netsalecount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['netsaleamount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['netsaleitemCount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['percentOfSales']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($vrubyreptcategory['Station']['name'], array('controller' => 'stations', 'action' => 'view', $vrubyreptcategory['Station']['id'])); ?>
		</td>
		<td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['created']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['modfied']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $vrubyreptcategory['Vrubyreptcategory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $vrubyreptcategory['Vrubyreptcategory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $vrubyreptcategory['Vrubyreptcategory']['id']), null, __('Are you sure you want to delete # %s?', $vrubyreptcategory['Vrubyreptcategory']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Vrubyreptcategory'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
