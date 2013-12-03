<h2><?php echo __('Vrubyreptcategories'); ?></h2>
<table cellpadding="0" cellspacing="0" class="grid">
	<tr>
		<th><?php echo __('TIS'); ?></th>
		<th><?php echo __('TOTAL % S'); ?></th>
		<th><?php echo __('TIC'); ?></th>
		<th><?php echo __('Sale P'); ?></th>
		<th><?php echo __('Original P'); ?></th>
		<th><?php echo __('NSC'); ?></th>
		<th><?php echo __('NSA'); ?></th>
		<th><?php echo __('NSIC'); ?></th>
		<th><?php echo __('% OF Sale'); ?></th>
	</tr>
	<?php foreach ($vrubyreptcategories as $vrubyreptcategory): ?>
		<tr>

			
			<td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['totalitemnetSales']); ?>&nbsp;</td>
			<td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['totalpercentOfSales']); ?>&nbsp;</td>
			<td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['salePrice']); ?>&nbsp;</td>
			<td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['originalPrice']); ?>&nbsp;</td>
			<td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['netsalecount']); ?>&nbsp;</td>
			<td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['netsaleamount']); ?>&nbsp;</td>
			<td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['netsaleitemCount']); ?>&nbsp;</td>
			<td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['percentOfSales']); ?>&nbsp;</td>
	   
	</tr>
	<?php endforeach; ?>
		</table>


	
        


