<div class="fuelInvoices formaccount">
<?php echo $this->Form->create('FuelInvoice'); ?>
	<Table id='invoiceItemTable' class="grid" cellpadding=0 cellspacing=0 border=0 width="804">
		<tr>
			<td><?php echo $this->Form->input('invoice'); ?> </td>
			<td><?php echo $this->Form->input('invoice_date', array('type' => 'text', 'id' => 'datepicker')); ?></td>
			<td><?php echo $this->Form->input('station_id'); ?></td>
			<td colspan=3><?php echo $this->Form->input('status', array('options' => array('pending' => 'Pending', 'approved' => 'Approved'))); ?></td>
			
		</tr>
		
	
		<?php $inputOption = array('label' => false);?></td>
		
		<tr>
			<td><?php echo $this->Form->input('vendor_id'); ?></td>
			<td><?php echo $this->Form->input('debited_from', array('options' => $groupList)); ?></td>
			
			<td><?php echo $this->Form->input('payment_method_id'); ?></td>
			<td colspan=3><?php echo $this->Form->input('terms', array('type' => 'text')); ?></td>
			
		</tr>
		
	
		<tr>
			<th>Product</th>
			<th>Gas Dilivered in Gallon</th>
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
			<td><?php echo $this->Form->input('FuelInvoiceItem.'.$ii.'.amount',  am($inputOption, array('class' => 'FuelInvoiceAmt'))); ?></td>
			<td><?php echo $this->Form->input('FuelInvoiceItem.'.$ii.'.tank',  $inputOption); ?></td>
			
			<?php if( $ii == 0) { ?>
				<td><a id='addMoreItemLink' href='#'><?php echo $this->Html->image('icon_plus.gif');?></a></td>
			<?php } else {?>
				<td><a onclick="removeElement('addMoreItemLink_<?php echo $ii; ?>')" id='removeItemLink_<?php echo $ii; ?>'><?php echo $this->Html->image('icon_minus.gif');?></a></td>
			<?php } ?>
		</tr>
		<?php }?>
		<tr>
			<td colspan=3><?php echo $this->Form->input('tax_total', array('label'=>'Tax Total Cost')); ?></td>
			<td colspan=3><?php echo $this->Form->input('total_invoice', array('label'=>'Invoice Total Cost', 'value' => '0.0')); ?></td>
		</tr>
	</Table>
	
	<?php echo $this->Form->end(__('Add Invoice')); ?>
</div>

<?php //echo $this->element('inventories_action');?>


<script type="text/javascript">


$(document).ready(function(){
	var rr =1
	$('#addMoreItemLink').click(function(){
		$('#addMoreItemLink_'+rr).show();
			//$('#addMoreItemLink_'+rr+ 'input:*').attr('disabled', '');
		rr++;
		return false;
	});
	
	$("#datepicker" ).datepicker();
	
	$(".FuelInvoiceAmt").blur(function(){
		var num1 = parseFloat($(this).val());
		var num2 = parseFloat($('#FuelInvoiceTotalInvoice').val());
		var total = num1+num2;
		
		
		$('#FuelInvoiceTotalInvoice').val(total);
		
		var ntotal = 0;
		
		ntotal = getItems();
		//alert(ntotal);
	});
	
	function getItems(){
		var items = new Array();
		var itemCount = document.getElementsByClassName("FuelInvoiceAmt");
		var total = 0;
		var id= '';
		for(var i = 0; i < itemCount.length; i++){
			id = "FuelInvoiceItem"+(i)+"Amount";
			//alert(id);
			var num11 = parseFloat(document.getElementById(id).value);
			if (num11 !='NaN') {
				total = total +  num11;
			}
		}
		//alert(total);
		return total;
	}
	
});



function removeElement(elementId){
	$('#'+elementId).html('');
	return false;
}
</script>

