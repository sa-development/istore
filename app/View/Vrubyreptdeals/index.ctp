<div class="vrubyreptdeals reports">
	<h2><?php echo __('Vrubyreptdeals'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="grid">
	<tr>
			<th><?php echo $this->Paginator->sort('periodBeginDate'); ?></th>
			<th><?php echo $this->Paginator->sort('periodEndDate'); ?></th>
			<th><?php echo $this->Paginator->sort('periodType'); ?></th>
			<th><?php echo $this->Paginator->sort('count'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('itemCount'); ?></th>
	</tr>
	<?php
	$count = $amount = $itemCount = 0;
	foreach ($vrubyreptdeals as $vrubyreptdeal): 
		$count += $vrubyreptdeal['Vrubyreptdeal']['count'];
		$amount += $vrubyreptdeal['Vrubyreptdeal']['amount'];
		$itemCount += $vrubyreptdeal['Vrubyreptdeal']['itemCount'];
	?>
	<tr>
		</td>
		<td><?php echo h($vrubyreptdeal['Vrubyreptdeal']['periodBeginDate']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptdeal['Vrubyreptdeal']['periodEndDate']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptdeal['Vrubyreptdeal']['periodType']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptdeal['Vrubyreptdeal']['count']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptdeal['Vrubyreptdeal']['amount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptdeal['Vrubyreptdeal']['itemCount']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	<tr>
		<td colspan=3 style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);">Total&nbsp;</td>
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);"><?php echo $count; ?></td>
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);">$<?php echo $amount; ?></td>
		<td style="color: red; background: none repeat scroll 0px 0px rgb(193, 189, 226);"><?php echo $itemCount; ?></td>
	</tr>
	</table>
</div>

