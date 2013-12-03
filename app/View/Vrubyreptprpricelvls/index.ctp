<div class="vrubyreptprpricelvls reports">
	<h2><?php echo __('Vrubyreptprpricelvls'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="grid">
	<tr>
			<th><?php echo $this->Paginator->sort('periodBeginDate'); ?></th>
			<th><?php echo $this->Paginator->sort('periodEndDate'); ?></th>
			<!-- <th><?php echo $this->Paginator->sort('periodType'); ?></th> 
			<th><?php echo $this->Paginator->sort('name'); ?></th>-->
			<th><?php echo $this->Paginator->sort('cred_fuelInfocount'); ?></th>
			<th><?php echo $this->Paginator->sort('cred_fuelInfoamount'); ?></th>
			<th><?php echo $this->Paginator->sort('cred_fuelInfovolume'); ?></th>
			<th><?php echo $this->Paginator->sort('cash_fuelInfocount'); ?></th>
			<th><?php echo $this->Paginator->sort('cash_fuelInfoamount'); ?></th>
			<th><?php echo $this->Paginator->sort('cash_fuelInfovolume'); ?></th>
			<th><?php echo $this->Paginator->sort('subtotal_count'); ?></th>
			<th><?php echo $this->Paginator->sort('subtotal_amount'); ?></th>
			<th><?php echo $this->Paginator->sort('subtotal_volume'); ?></th>
	</tr>
	<?php
	$cred_fuelInfocount = $cred_fuelInfoamount = $cred_fuelInfovolume = $cash_fuelInfocount = $cash_fuelInfoamount = $cash_fuelInfovolume = $subtotal_count = $subtotal_amount = $subtotal_volume = 0;
	foreach ($vrubyreptprpricelvls as $vrubyreptprpricelvl): 
		$cred_fuelInfocount += $vrubyreptprpricelvl['Vrubyreptprpricelvl']['cred_fuelInfocount'];
		$cred_fuelInfoamount += $vrubyreptprpricelvl['Vrubyreptprpricelvl']['cred_fuelInfoamount'];
		$cred_fuelInfovolume += $vrubyreptprpricelvl['Vrubyreptprpricelvl']['cred_fuelInfovolume'];
		$cash_fuelInfocount += $vrubyreptprpricelvl['Vrubyreptprpricelvl']['cash_fuelInfocount'];
		$cash_fuelInfoamount += $vrubyreptprpricelvl['Vrubyreptprpricelvl']['cash_fuelInfoamount'];
		$cash_fuelInfovolume += $vrubyreptprpricelvl['Vrubyreptprpricelvl']['cash_fuelInfovolume'];
		$subtotal_count += $vrubyreptprpricelvl['Vrubyreptprpricelvl']['subtotal_count'];
		$subtotal_amount += $vrubyreptprpricelvl['Vrubyreptprpricelvl']['subtotal_amount'];
		$subtotal_volume += $vrubyreptprpricelvl['Vrubyreptprpricelvl']['subtotal_volume'];
	?>
	<tr>
		<td><?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['periodBeginDate']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['periodEndDate']); ?>&nbsp;</td>
		<!-- <td><?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['periodType']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['name']); ?>&nbsp;</td> -->
		<td><?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['cred_fuelInfocount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['cred_fuelInfoamount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['cred_fuelInfovolume']); ?>&nbsp;</td>
		
		<td><?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['cash_fuelInfocount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['cash_fuelInfoamount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['cash_fuelInfovolume']); ?>&nbsp;</td>
		
		<td><?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['subtotal_count']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['subtotal_amount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['subtotal_volume']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	
	<tr>
		<td colspan=2 style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);">Total&nbsp;</td>
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);">$<?php echo $cred_fuelInfocount; ?></td>
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);">$<?php echo $cred_fuelInfoamount; ?></td>
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);">$<?php echo $cred_fuelInfovolume; ?></td>
		
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);">$<?php echo $cash_fuelInfocount; ?></td>
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);">$<?php echo $cash_fuelInfoamount; ?></td>
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);">$<?php echo $cash_fuelInfovolume; ?></td>
		
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);">$<?php echo $subtotal_count; ?></td>
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);">$<?php echo $subtotal_amount; ?></td>
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);">$<?php echo $subtotal_volume; ?></td>
	</tr>
	
	</table>
	
</div>
