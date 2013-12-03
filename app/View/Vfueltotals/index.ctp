<div class="vfueltotals reports" id="vfueltotals">
<table cellpadding="0" cellspacing="0" class="grid">
	<tr>
			
			<th><?php echo __('name'); ?></th>
			
			
			<th><?php echo __('site'); ?></th>
			<th><?php echo __('fuelingPositionId'); ?></th>
			<th><?php echo __('pNumber'); ?></th>
			
			<th><?php echo __('volume'); ?></th>
			<th><?php echo __('uom'); ?></th>
			<th><?php echo __('fuelMoney'); ?></th>
			<th><?php echo __('currency'); ?></th>
			<th><?php echo __('Product'); ?></th>
			<th><?php echo __('fuelingPointStatus'); ?></th>

		
	</tr>
	<?php
	foreach ($vfueltotals as $vfueltotal): ?>
	<tr>
		
		
		<td><?php echo h($vfueltotal['Vfueltotal']['name']); ?>&nbsp;</td>
		
		
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
	
	</tr>
<?php endforeach; ?>
	</table>
</div>


