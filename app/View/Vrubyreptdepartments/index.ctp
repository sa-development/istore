<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<?php
$shifts =  array('daily shift', 'monthly shift', 'year shift');
?>

	
	<?php echo $this->Form->create('Vrubyreptdepartment', array('type' => 'get')); ?>
	
	<table cellpadding="0" cellspacing="0" class="grid">
	<tr>
			
			<th><?php echo __('vsdeptBasename'); ?></th>
			
			<th><?php echo __('periodBeginDate'); ?></th>
			<th><?php echo __('periodEndDate'); ?></th>
		
			<th><?php echo __('netSalesamount'); ?></th>
			<th><?php echo __('netSalesitemCount'); ?></th>
			<!-- <th><?php echo __('refundsamount'); ?></th> -->
			<!-- <th><?php echo __('discountstotalamount'); ?></th>-->
			<!-- <th><?php echo __('discountspromotionsamount'); ?></th>-->
			<th><?php echo __('grossSales'); ?></th>
			<th><?php echo __('percentOfSales'); ?></th>
	</tr>
	<?php
	foreach ($vrubyreptdepartments as $vrubyreptdepartment): ?>
	<tr>
		
		<td><?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['vsdeptBasename']); ?>&nbsp;</td>
		
		<td><?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['periodBeginDate']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['periodEndDate']); ?>&nbsp;</td>
		
		<td><?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['netSalesamount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['netSalesitemCount']); ?>&nbsp;</td>
		<!--<td><?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['refundsamount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['discountstotalamount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['discountspromotionsamount']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['manualDiscountsamount']); ?>&nbsp;</td>-->
		<td><?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['grossSales']); ?>&nbsp;</td>
		<td><?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['percentOfSales']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>
	

<?php //echo $this->element('station_report'); ?>

<script type="text/javascript">
	$(document).ready(function(){
		$( ".datepicker" ).datepicker({
			onClose: function( selectedDate ) {
				$(this).focus();
			},
			dateFormat: "yy-mm-dd"
		});
	});
</script>