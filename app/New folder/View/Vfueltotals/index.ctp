<div class="vfueltotals index">
	<h2><?php echo __('Vfueltotals'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="grid">
	<tr>
			<th><?php echo $this->Paginator->sort('periodType'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('periodSeqNum', 'SeqNum'); ?></th>
			<th><?php echo $this->Paginator->sort('periodBeginDate', 'BeginDate'); ?></th>
			<th><?php echo $this->Paginator->sort('periodEndDate', 'EndDate'); ?></th>
			<th><?php echo $this->Paginator->sort('site'); ?></th>
			<th><?php echo $this->Paginator->sort('fuelingPositionId', 'FPositionId'); ?></th>
			<th><?php echo $this->Paginator->sort('productNumber', 'pNumber'); ?></th>
			
			<th><?php echo $this->Paginator->sort('fuelVolume', 'volume'); ?></th>
			<th><?php echo $this->Paginator->sort('uom'); ?></th>
			<th><?php echo $this->Paginator->sort('fuelMoney'); ?></th>
			<th><?php echo $this->Paginator->sort('currency'); ?></th>
			<th><?php echo $this->Paginator->sort('productID', 'Product'); ?></th>
			<th><?php echo $this->Paginator->sort('fuelingPointStatus'); ?></th>
			<th><?php echo $this->Paginator->sort('station_id'); ?></th>
		
	</tr>
	<?php
	foreach ($vfueltotals as $vfueltotal): ?>
	<tr>
		
		<td><?php echo h($vfueltotal['Vfueltotal']['periodType']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['name']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['periodSeqNum']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['periodBeginDate']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['periodEndDate']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['site']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['fuelingPositionId']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['productNumber']); ?>&nbsp;</td>
		
		<td><?php echo h($vfueltotal['Vfueltotal']['fuelVolume']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['uom']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['fuelMoney']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['currency']); ?>&nbsp;</td>
		<td><?php 
		$vfpID = $vfueltotal['Vfueltotal']['productID'];
		if (isset($prodcodeList[$vfpID])) {
			echo $prodcodeList[$vfpID];
		} else {
			echo h($vfueltotal['Vfueltotal']['productID']);
		}
		?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['fuelingPointStatus']); ?>&nbsp;</td>
		<td><?php echo h($vfueltotal['Vfueltotal']['station_id']); ?>&nbsp;</td>
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

<?php echo $this->element('station_report'); ?>