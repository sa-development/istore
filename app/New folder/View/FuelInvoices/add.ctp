<?php
echo $this->Html->script('jquery.ba-replacetext');
?>
<div class="fuelInvoices form">
<?php echo $this->Form->create('FuelInvoice'); ?>
	<fieldset>
		<legend><?php echo __('Add Fuel Invoice'); ?></legend>
	<?php
		echo $this->Form->input('invoice');
		$inputOption = array('label' => false);
	?>
	
	<Table id='invoiceItemTable' class="grid" cellpadding=0 cellspacing=0 border=0 width="804">
		<tr>
			<td><?php echo $this->Form->input('station_id'); ?></td>
			<td><?php echo $this->Form->input('fuel_supplier_id'); ?></td>
			<td><?php echo $this->Form->input('payment_method', array('options' => array('cash' => 'Cash', 'ET' => 'Electornic Transfer'))); ?></td>
			<td><?php echo $this->Form->input('terms', array('type' => 'text')); ?></td>
			<td><?php echo $this->Form->input('tax_total'); ?></td>
			<td><?php echo $this->Form->input('total_invoice'); ?></td>
		</tr>
		
	</Table>
	
	<Table id='invoiceItemTable' class="grid" cellpadding=0 cellspacing=0 border=0 width="804">
		<tr>
			<th>Product</th>
			<th>Gas Dilivered</th>
			<th>Cost Per Gallon</th>
			<th>Amount</th>
			<th>Tank</th>
			<th>Action</th>
		</tr>
		
		<?php for($ii=0; $ii<=20; $ii++) { 
			//$inputOption['disabled'] = true;
		?>
		
		<?php if( $ii == 0) { ?>
			<tr>
		<?php } else {?>
		<tr style='display:none' id='addMoreItemLink_<?php echo $ii; ?>'>
		<?php } ?>
			<td><?php echo $this->Form->input('FuelInvoiceItem.'.$ii.'.fuel_type_id', $inputOption); ?></td>
			<td><?php echo $this->Form->input('FuelInvoiceItem.'.$ii.'.gallons delivered',  $inputOption); ?></td>
			<td><?php echo $this->Form->input('FuelInvoiceItem.'.$ii.'.cost per gallon',  $inputOption); ?></td>
			<td><?php echo $this->Form->input('FuelInvoiceItem.'.$ii.'.amount',  $inputOption); ?></td>
			<td><?php echo $this->Form->input('FuelInvoiceItem.'.$ii.'.tank',  $inputOption); ?></td>
			
			<?php if( $ii == 0) { ?>
				<td><a id='addMoreItemLink' href='#'><?php echo $this->Html->image('icon_plus.gif');?></a></td>
			<?php } else {?>
				<td><a onclick="removeElement('addMoreItemLink_<?php echo $ii; ?>')" id='removeItemLink_<?php echo $ii; ?>'><?php echo $this->Html->image('icon_minus.gif');?></a></td>
			<?php } ?>
		</tr>
		<?php }?>
		
	</Table>
	
	<?php echo $this->Form->input('status', array('options' => array('pending' => 'Pendint', 'approved' => 'Approved'))); ?>
<?php echo $this->Form->end(__('Add Invoice')); ?>
</div>
</fieldset>

<?php echo $this->element('inventories_action');?>


<script type="text/javascript">


$(document).ready(function(){
	var rr =1
	$('#addMoreItemLink').click(function(){
		$('#addMoreItemLink_'+rr).show();
			//$('#addMoreItemLink_'+rr+ 'input:*').attr('disabled', '');
		rr++;
		return false;
	});
});

function removeElement(elementId){
	$('#'+elementId).html('');
	return false;
}
</script>

