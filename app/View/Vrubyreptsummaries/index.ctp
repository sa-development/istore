<div class="vrubyreptsummaries index">
	<h2><?php echo __('Vrubyreptsummaries'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('station_id'); ?></th>
			<th><?php echo $this->Paginator->sort('periodBeginDate'); ?></th>
			<th><?php echo $this->Paginator->sort('periodEndDate'); ?></th>
			<th><?php echo $this->Paginator->sort('periodType'); ?></th>
			<th><?php echo $this->Paginator->sort('netSales'); ?></th>
			<th><?php echo $this->Paginator->sort('cancelRefund'); ?></th>
			<th><?php echo $this->Paginator->sort('totalPaymentOut'); ?></th>
			<th><?php echo $this->Paginator->sort('totalPaymentIn'); ?></th>
			<th><?php echo $this->Paginator->sort('totalToAccountFor'); ?></th>
			<th><?php echo $this->Paginator->sort('totalRefundTaxes'); ?></th>
			<th><?php echo $this->Paginator->sort('totalSalesTaxes'); ?></th>
			<th><?php echo $this->Paginator->sort('totalTaxes'); ?></th>
			<th><?php echo $this->Paginator->sort('totalIncludedTaxes'); ?></th>
			<th><?php echo $this->Paginator->sort('itemCount'); ?></th>
			<th><?php echo $this->Paginator->sort('customerCount'); ?></th>
			<th><?php echo $this->Paginator->sort('noSaleCount'); ?></th>
			<th><?php echo $this->Paginator->sort('drawerViolations'); ?></th>
			<th><?php echo $this->Paginator->sort('loginOverrides'); ?></th>
			<th><?php echo $this->Paginator->sort('fuelSales'); ?></th>
			<th><?php echo $this->Paginator->sort('fuelDiscounts'); ?></th>
			<th><?php echo $this->Paginator->sort('merchSales'); ?></th>
			<th><?php echo $this->Paginator->sort('totalDiscounts'); ?></th>
			<th><?php echo $this->Paginator->sort('totalDiscountscount'); ?></th>
			<th><?php echo $this->Paginator->sort('payIncount'); ?></th>
			<th><?php echo $this->Paginator->sort('payIn'); ?></th>
			<th><?php echo $this->Paginator->sort('payOut'); ?></th>
			<th><?php echo $this->Paginator->sort('payOutcount'); ?></th>
			<th><?php echo $this->Paginator->sort('safeDrop'); ?></th>
			<th><?php echo $this->Paginator->sort('safeDropcount'); ?></th>
			<th><?php echo $this->Paginator->sort('xmldata'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($vrubyreptsummaries as $vrubyreptsummary): ?>
	<tr>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($vrubyreptsummary['Station']['name'], array('controller' => 'stations', 'action' => 'view', $vrubyreptsummary['Station']['id'])); ?>
		</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['periodBeginDate']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['periodEndDate']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['periodType']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['netSales']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['cancelRefund']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['totalPaymentOut']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['totalPaymentIn']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['totalToAccountFor']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['totalRefundTaxes']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['totalSalesTaxes']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['totalTaxes']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['totalIncludedTaxes']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['itemCount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['customerCount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['noSaleCount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['drawerViolations']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['loginOverrides']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['fuelSales']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['fuelDiscounts']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['merchSales']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['totalDiscounts']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['totalDiscountscount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['payIncount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['payIn']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['payOut']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['payOutcount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['safeDrop']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['safeDropcount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['xmldata']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['created']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptsummary['Vrubyreptsummary']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $vrubyreptsummary['Vrubyreptsummary']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $vrubyreptsummary['Vrubyreptsummary']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $vrubyreptsummary['Vrubyreptsummary']['id']), null, __('Are you sure you want to delete # %s?', $vrubyreptsummary['Vrubyreptsummary']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Vrubyreptsummary'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
