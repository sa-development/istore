<?php
$itemCount = count($this->data['FuelInvoiceItem']);

echo $this->Html->script('jquery.ba-replacetext');
?>
<div class="fuelInvoices form">
<?php echo $this->Form->create('FuelInvoice'); ?>
	<fieldset>
		<legend><?php echo __('Add Fuel Invoice'); ?></legend>
	<?php
		echo $this->Form->input('station_id');
		echo $this->Form->input('fuel_supplier_id');
		echo $this->Form->input('invoice');
		echo $this->Form->input('terms', array('type' => 'text'));
		echo $this->Form->input('tax_total');
		echo $this->Form->input('total_invoice');
		echo $this->Form->input('payment_method');
		$inputOption = array('label' => false);
		
	?>
	
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
		<tr style='<?php echo ($ii<$itemCount) ? '' : 'display:none';?>' id='addMoreItemLink_<?php echo $ii; ?>'>
		<?php } ?>
		
			<td><?php echo $this->Form->hidden('FuelInvoiceItem.'.$ii.'.id', $inputOption); ?></td>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Fuel Invoices'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Fuel Suppliers'), array('controller' => 'fuel_suppliers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fuel Supplier'), array('controller' => 'fuel_suppliers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fuel Invoice Items'), array('controller' => 'fuel_invoice_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fuel Invoice Item'), array('controller' => 'fuel_invoice_items', 'action' => 'add')); ?> </li>
	</ul>
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
	
	
	
});


function removeElement(elementId){
	$('#'+elementId).html('');
	return false;
}
</script>

