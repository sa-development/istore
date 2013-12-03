<div class="vrubyrepttierproducts reports">
	<h2><?php echo __('Vrubyrepttierproducts'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="grid">
	<tr>
			<th><?php echo $this->Paginator->sort('periodBeginDate'); ?></th>
			<th><?php echo $this->Paginator->sort('periodEndDate'); ?></th>
			<th><?php echo $this->Paginator->sort('periodType'); ?></th>
			<!-- th><?php echo $this->Paginator->sort('vssite'); ?></th>
			<th><?php echo $this->Paginator->sort('fuelfuelTierBase'); ?></th -->
			<th><?php echo $this->Paginator->sort('productInfoname'); ?></th>
			<th><?php echo $this->Paginator->sort('fuelInfocount'); ?></th>
			<th><?php echo $this->Paginator->sort('fuelInfoamount'); ?></th>
			<th><?php echo $this->Paginator->sort('fuelInfovolume'); ?></th>
	</tr>
	<?php
	$fuelInfocount = $fuelInfoamount = $fuelInfovolume = 0;
	foreach ($vrubyrepttierproducts as $vrubyrepttierproduct):
	$fuelInfocount  += $vrubyrepttierproduct['Vrubyrepttierproduct']['fuelInfocount'];
	$fuelInfoamount += $vrubyrepttierproduct['Vrubyrepttierproduct']['fuelInfoamount'];
	$fuelInfovolume += $vrubyrepttierproduct['Vrubyrepttierproduct']['fuelInfovolume'];
	 ?>
	<tr>
		<td><?php echo h($vrubyrepttierproduct['Vrubyrepttierproduct']['periodBeginDate']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttierproduct['Vrubyrepttierproduct']['periodEndDate']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttierproduct['Vrubyrepttierproduct']['periodType']); ?>&nbsp;</td>
		<!-- td><?php echo h($vrubyrepttierproduct['Vrubyrepttierproduct']['vssite']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttierproduct['Vrubyrepttierproduct']['fuelfuelTierBase']); ?>&nbsp;</td -->
		<td><?php echo h($vrubyrepttierproduct['Vrubyrepttierproduct']['productInfoname']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttierproduct['Vrubyrepttierproduct']['fuelInfocount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttierproduct['Vrubyrepttierproduct']['fuelInfoamount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttierproduct['Vrubyrepttierproduct']['fuelInfovolume']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	<tr>
		<td colspan=4 style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);">Total&nbsp;</td>
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);"><?php echo $fuelInfocount; ?></td>
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);"><?php echo $fuelInfoamount; ?></td>
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);"><?php echo $fuelInfovolume; ?></td>
		
	</tr>
</table>
</div>
