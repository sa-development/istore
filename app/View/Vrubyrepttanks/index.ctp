<div class="vrubyrepttanks reports">
	<h2><?php echo __('Vrubyrepttanks'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="grid">
	<tr>
			<th><?php echo $this->Paginator->sort('periodBeginDate'); ?></th>
			<th><?php echo $this->Paginator->sort('periodEndDate'); ?></th>
			<th><?php echo $this->Paginator->sort('periodType'); ?></th>
			<th><?php echo $this->Paginator->sort('fuelfuelTank'); ?></th>
			<th><?php echo $this->Paginator->sort('fuelInfocount'); ?></th>
			<th><?php echo $this->Paginator->sort('fuelInfoamount'); ?></th>
			<th><?php echo $this->Paginator->sort('fuelInfovolume'); ?></th>

	</tr>
	<?php
	$fuelInfocount = $fuelInfoamount = $fuelInfovolume = $fuelfuelTank = 0;
	foreach ($vrubyrepttanks as $vrubyrepttank): 
	
	$fuelfuelTank  +=  $vrubyrepttank['Vrubyrepttank']['fuelfuelTank'];
	$fuelInfocount  +=  $vrubyrepttank['Vrubyrepttank']['fuelInfocount'];
	$fuelInfoamount +=  $vrubyrepttank['Vrubyrepttank']['fuelInfoamount'];
	$fuelInfovolume +=  $vrubyrepttank['Vrubyrepttank']['fuelInfovolume'];
	?>
	<tr>
		<td><?php echo h($vrubyrepttank['Vrubyrepttank']['periodBeginDate']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttank['Vrubyrepttank']['periodEndDate']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttank['Vrubyrepttank']['periodType']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttank['Vrubyrepttank']['fuelfuelTank']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttank['Vrubyrepttank']['fuelInfocount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttank['Vrubyrepttank']['fuelInfoamount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttank['Vrubyrepttank']['fuelInfovolume']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	<tr>
		<td colspan=3 style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);">Total&nbsp;</td>
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);"><?php echo $fuelfuelTank; ?></td>
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);"><?php echo $fuelInfocount; ?></td>
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);">$<?php echo $fuelInfoamount; ?></td>
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);"><?php echo $fuelInfovolume; ?></td>
	</tr>
</table>
</div>
