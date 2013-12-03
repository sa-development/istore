<div class="vrubyreptslpricelvls reports">
	<h2><?php echo __('Vrubyreptslpricelvls'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="grid">
	<tr>
			<th><?php echo $this->Paginator->sort('periodBeginDate'); ?></th>
			<th><?php echo $this->Paginator->sort('periodEndDate'); ?></th>
			<th><?php echo $this->Paginator->sort('periodType'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('fuelInfoamount'); ?></th>
			<th><?php echo $this->Paginator->sort('fuelInfocount'); ?></th>
	</tr>
	<?php
	$fuelInfoamount = $fuelInfocount = 0;
	foreach ($vrubyreptslpricelvls as $vrubyreptslpricelvl): 
		$fuelInfoamount += $vrubyreptslpricelvl['Vrubyreptslpricelvl']['fuelInfoamount'];
		$fuelInfocount  += $vrubyreptslpricelvl['Vrubyreptslpricelvl']['fuelInfocount'];
	?>
	<tr>
		<td><?php echo h($vrubyreptslpricelvl['Vrubyreptslpricelvl']['periodBeginDate']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptslpricelvl['Vrubyreptslpricelvl']['periodEndDate']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptslpricelvl['Vrubyreptslpricelvl']['periodType']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptslpricelvl['Vrubyreptslpricelvl']['name']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptslpricelvl['Vrubyreptslpricelvl']['fuelInfoamount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptslpricelvl['Vrubyreptslpricelvl']['fuelInfocount']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	<tr>
		<td colspan=4 style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);">Total&nbsp;</td>
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);">$<?php echo $fuelInfoamount; ?></td>
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);"><?php echo $fuelInfocount; ?></td>
	</tr>
</table>
</div>
