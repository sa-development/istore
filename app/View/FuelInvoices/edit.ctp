<?php 
echo $this->Html->css('ui-lightness/jquery-ui-1.10.3.custom');
echo $this->Html->script(array('jquery-1.9.1', 'jquery-ui-1.10.3.custom')); 
?>
<?php
$itemCount = count($this->data['FuelInvoiceItem']);

echo $this->Html->script('jquery.ba-replacetext');
?>
<div class="fuelInvoices form">
<?php echo $this->Form->create('FuelInvoice'); ?>
<?php echo $this->Form->hidden('id'); ?>
	<fieldset>
		<legend><?php echo __('Edit Fuel Invoice'); ?></legend>
		<Table id='invoiceItemTable' class="grid" cellpadding=0 cellspacing=0 border=0 width="804">
		<tr>
			<td><?php echo $this->Form->input('invoice'); ?> </td>
			<td><?php echo $this->Form->input('invoice_date', array('type' => 'text', 'id' => 'datepicker')); ?></td>
			<td colspan=4><?php echo $this->Form->input('status', array('options' => array('pending' => 'Pending', 'approved' => 'Approved'))); ?></td>
		</tr>
		
		<?php $inputOption = array('label' => false); ?>
		<tr>
			<td><?php echo $this->Form->input('station_id'); ?></td>
			<td><?php echo $this->Form->input('vendor_id'); ?></td>
			<td><?php echo $this->Form->input('payment_method_id'); ?></td>
			<td><?php echo $this->Form->input('terms', array('type' => 'text')); ?></td>
			<td><?php echo $this->Form->input('tax_total', array('label'=>'Tax Total Cost')); ?></td>
			<td><?php echo $this->Form->input('total_invoice', array('label'=>'Invoice Total Cost')); ?></td>
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
		<tr style='<?php echo ($ii<$itemCount) ? '' : 'display:none';?>' id='addMoreItemLink_<?php echo $ii; ?>'>
		<?php } ?>
			<?php echo $this->Form->hidden('FuelInvoiceItem.'.$ii.'.id', $inputOption); ?>			
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
	</fieldset>
	
<?php echo $this->Form->end(__('Submit')); ?>
</div>

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
});


function removeElement(elementId){
	$('#'+elementId).html('');
	return false;
}
</script>

