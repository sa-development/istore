<div class="vrubyrepttaxes reports">
	<h2><?php echo __('Vrubyrepttaxes'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="grid">
	<tr>
			<th><?php echo $this->Paginator->sort('actualTaxRate'); ?></th>
			<th><?php echo $this->Paginator->sort('taxableSales'); ?></th>
			<th><?php echo $this->Paginator->sort('nonTaxableSales'); ?></th>
			<th><?php echo $this->Paginator->sort('salesTax'); ?></th>
			<th><?php echo $this->Paginator->sort('refundTax'); ?></th>
			<th><?php echo $this->Paginator->sort('netTax'); ?></th>
			<th><?php echo $this->Paginator->sort('vrubyrepttaxName'); ?></th>
			<th><?php echo $this->Paginator->sort('taxRate'); ?></th>
			<!-- <th><?php echo $this->Paginator->sort('byRegister_totals_actualTaxRate'); ?></th>
			<th><?php echo $this->Paginator->sort('byRegister_taxableSales'); ?></th>
			<th><?php echo $this->Paginator->sort('byRegister_nonTaxableSales'); ?></th>
			<th><?php echo $this->Paginator->sort('byRegister_salesTax'); ?></th>
			<th><?php echo $this->Paginator->sort('byRegister_refundTax'); ?></th>
			<th><?php echo $this->Paginator->sort('byRegister_netTax'); ?></th>
			<th><?php echo $this->Paginator->sort('byRegister_name'); ?></th>
			<th><?php echo $this->Paginator->sort('byRegister_taxRate'); ?></th>
			<th><?php echo $this->Paginator->sort('byCashier_totals_actualTaxRate'); ?></th>
			<th><?php echo $this->Paginator->sort('byCashier_taxableSales'); ?></th>
			<th><?php echo $this->Paginator->sort('byCashier_nonTaxableSales'); ?></th>
			<th><?php echo $this->Paginator->sort('byCashier_salesTax'); ?></th>
			<th><?php echo $this->Paginator->sort('byCashier_refundTax'); ?></th>
			<th><?php echo $this->Paginator->sort('byCashier_netTax'); ?></th>
			<th><?php echo $this->Paginator->sort('byCashier_name'); ?></th>
			<th><?php echo $this->Paginator->sort('byCashier_taxRate'); ?></th> -->
	</tr>
	<?php
	$actualTaxRate = $taxableSales = $nonTaxableSales = $salesTax = $refundTax = $netTax = 0;
	foreach ($vrubyrepttaxes as $vrubyrepttax): 
		$taxableSales += $vrubyrepttax['Vrubyrepttax']['taxableSales'];
		$nonTaxableSales += $vrubyrepttax['Vrubyrepttax']['nonTaxableSales'];
		$salesTax += $vrubyrepttax['Vrubyrepttax']['salesTax'];
		$refundTax += $vrubyrepttax['Vrubyrepttax']['refundTax'];
		$netTax += $vrubyrepttax['Vrubyrepttax']['netTax'];
	
	?>
	
	<tr>
		
		<td><?php echo h($vrubyrepttax['Vrubyrepttax']['actualTaxRate']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttax['Vrubyrepttax']['taxableSales']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttax['Vrubyrepttax']['nonTaxableSales']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttax['Vrubyrepttax']['salesTax']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttax['Vrubyrepttax']['refundTax']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttax['Vrubyrepttax']['netTax']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttax['Vrubyrepttax']['vrubyrepttaxName']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttax['Vrubyrepttax']['taxRate']); ?>&nbsp;</td>
		<!-- <td><?php echo h($vrubyrepttax['Vrubyrepttax']['byRegister_totals_actualTaxRate']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttax['Vrubyrepttax']['byRegister_taxableSales']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttax['Vrubyrepttax']['byRegister_nonTaxableSales']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttax['Vrubyrepttax']['byRegister_salesTax']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttax['Vrubyrepttax']['byRegister_refundTax']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttax['Vrubyrepttax']['byRegister_netTax']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttax['Vrubyrepttax']['byRegister_name']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttax['Vrubyrepttax']['byRegister_taxRate']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttax['Vrubyrepttax']['byCashier_totals_actualTaxRate']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttax['Vrubyrepttax']['byCashier_taxableSales']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttax['Vrubyrepttax']['byCashier_nonTaxableSales']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttax['Vrubyrepttax']['byCashier_salesTax']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttax['Vrubyrepttax']['byCashier_refundTax']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttax['Vrubyrepttax']['byCashier_netTax']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttax['Vrubyrepttax']['byCashier_name']); ?>&nbsp;</td>
		<td><?php echo h($vrubyrepttax['Vrubyrepttax']['byCashier_taxRate']); ?>&nbsp;</td>-->
	</tr>
<?php endforeach; ?>
	<tr>
		<td colspan=4 style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);">Total&nbsp;</td>
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);"><?php echo $taxableSales; ?></td>
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);"><?php echo $nonTaxableSales; ?></td>
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);"><?php echo $salesTax; ?></td>
		
	</tr>
</table>
</div>

