<div class="vrubyreptnetworks reports">
	<h2><?php echo __('Vrubyreptnetworks'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="grid">
	<tr>
		
			<th><?php echo $this->Paginator->sort('periodBeginDate'); ?></th>
			<th><?php echo $this->Paginator->sort('periodEndDate'); ?></th>
			<th><?php echo $this->Paginator->sort('periodType'); ?></th>
			<th><?php echo $this->Paginator->sort('cardNumber'); ?></th>
			<th><?php echo $this->Paginator->sort('cardName'); ?></th>
			<th><?php echo $this->Paginator->sort('cardCharges'); ?></th>
			<th><?php echo $this->Paginator->sort('cardChargescount'); ?></th>
			<th><?php echo $this->Paginator->sort('cardCorrections'); ?></th>
			<th><?php echo $this->Paginator->sort('cardCorrectionscount'); ?></th>
	</tr>
	<?php
	$cardCharges = $cardChargescount = $cardCorrections = $cardCorrectionscount =  0;
	foreach ($vrubyreptnetworks as $vrubyreptnetwork): 
		$cardCharges += $vrubyreptnetwork['Vrubyreptnetwork']['cardCharges'];
		$cardChargescount += $vrubyreptnetwork['Vrubyreptnetwork']['cardChargescount'];
		$cardCorrections += $cardCorrections['Vrubyreptnetwork']['cardCorrections'];
		$cardCorrectionscount += $vrubyreptnetwork['Vrubyreptnetwork']['cardCorrectionscount'];
		
	?>
	<tr>
		<td><?php echo h($vrubyreptnetwork['Vrubyreptnetwork']['periodBeginDate']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptnetwork['Vrubyreptnetwork']['periodEndDate']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptnetwork['Vrubyreptnetwork']['periodType']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptnetwork['Vrubyreptnetwork']['cardNumber']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptnetwork['Vrubyreptnetwork']['cardName']); ?>&nbsp;</td>
		<td>$<?php echo h($vrubyreptnetwork['Vrubyreptnetwork']['cardCharges']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptnetwork['Vrubyreptnetwork']['cardChargescount']); ?>&nbsp;</td>
		<td>$<?php echo h($vrubyreptnetwork['Vrubyreptnetwork']['cardCorrections']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptnetwork['Vrubyreptnetwork']['cardCorrectionscount']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	<tr>
		<td colspan=5 style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);">Total&nbsp;</td>
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);">$<?php echo $cardCharges; ?></td>
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);"><?php echo $cardChargescount; ?></td>
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);">$<?php echo $cardCorrections; ?></td>
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);"><?php echo $cardCorrectionscount; ?></td>
	</tr>
	</table>
</div>