<div class="vrubyreptcarwashes reports">
	<h2><?php echo __('Vrubyreptcarwashes'); ?></h2>
	<table cellpadding="0" cellspacing="0" class='grid'>
	<tr>
			
			<th><?php echo __('coinRevenue'); ?></th>
			
			<th><?php echo __('washesUsed'); ?></th>
			<th><?php echo __('Net S'); ?></th>
			<th><?php echo __('GS'); ?></th>
			
			<th><?php echo __('cash'); ?></th>
			<th><?php echo __('count'); ?></th>
			<th><?php echo __('credit'); ?></th>
			<th><?php echo __('creditcount'); ?></th>
			<th><?php echo __('discounts'); ?></th>
	</tr>
	<?php
	$netSales = $grossSales = 0;
	foreach ($vrubyreptcarwashes as $vrubyreptcarwash): 
		$netSales 	+= $vrubyreptcarwash['Vrubyreptcarwash']['netSales'];
		$grossSales += $vrubyreptcarwash['Vrubyreptcarwash']['grossSales'];
	?>
	<tr>
		
		<td><?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['coinRevenue']); ?>&nbsp;</td>
		
		<td><?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['washesUsed']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['netSales']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['grossSales']); ?>&nbsp;</td>
		
		<td><?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['cashamount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['cashcount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['creditamount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['creditcount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['discounts']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	<tr>
		<td colspan=5 style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);">Total&nbsp;</td>
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);">$<?php echo $netSales; ?></td>
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);">$<?php echo $grossSales; ?></td>
	</tr>
	</table>

</div>
