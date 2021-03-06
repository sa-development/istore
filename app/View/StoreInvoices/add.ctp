<div class="storeInvoices formaccount">
<?php echo $this->Form->create('StoreInvoice'); ?>
		<Table id='invoiceItemTable' class="grid fromgrid" cellpadding=0 cellspacing=0 border=0>
		<tr>
			<td><?php echo $this->Form->input('station_id'); ?></td>
			<td><?php echo $this->Form->input('invoice_date', array('type' => 'text', 'id' => 'datepicker')); ?></td>
			<td><?php echo $this->Form->input('vendor_id'); ?></td>
			<td><?php echo $this->Form->input('invoice'); ?></td>
			<td><?php echo $this->Form->input('method_payment_id', array('label'=>'Payment Method')); ?></td>
			<td><?php echo $this->Form->input('terms', array('type' => 'text')); ?></td>
			<td><?php echo $this->Form->input('zero_leading_UPCs'); ?></td>
		</tr>	
		
		<tr>
			<td colspan=7> Invoice Item </td>
		</tr>
		
		<tr>
			<td colspan=7> 
				<Table id='invoiceItemTable' class="grid fromgrid" cellpadding=0 cellspacing=0 border=0 >
					<tr>
						<th>Category</th>
						<th colspan=2 style='text-align:center'>Item Name</th>
						<th>Case QTY</th>
						<th colspan=2 style='text-align:center'>Total Cost</th>
						<th colspan=2 style='text-align:center'>Total Retail</th>
						<th>GPM</th>
					</tr>
					
					<tr>
						<th></th>
						<th>UPC</th>
						<th>VIN</th>
						<th>Unit Case</th>
						<th>Unit Cost</th>
						<th>Case Cost</th>
						
						<th>Unit Retail</th>
						<th>Case Retail</th>
						<th></th>
					</tr>
				<?php for ($ii=0; $ii<=20; $ii++) { ?>
		
					<?php if( $ii == 0) { ?>
      		<tr>
      		<?php } else {?>
      		<tr style='display:none' id='addMoreItemLink0_<?php echo $ii; ?>'>
      		<?php } ?>
		
						<td><?php echo $this->Form->input('StoreInvoiceItem.'.$ii.'.category_id',array('label'=> false, 'options' => $categories)); ?></td>
						<td colspan=2 style='text-align:center'><?php echo $this->Form->input('StoreInvoiceItem.'.$ii.'.vrubyreptplu_id',array('label'=> false, 'options' => $vrubyreptplus)); ?></td>
						<td><?php echo $this->Form->input('StoreInvoiceItem.'.$ii.'.case_QTY',array('label'=> false));?></td>
						<td colspan=2 style='text-align:center'><?php echo $this->Form->input('StoreInvoiceItem.'.$ii.'.total_cost',array('label'=> false)); ?></td>
						<td colspan=2 style='text-align:center'><?php echo $this->Form->input('StoreInvoiceItem.'.$ii.'.total_retail',array('label'=> false)); ?></td>
						<td><?php echo $this->Form->input('StoreInvoiceItem.'.$ii.'.GPM',array('label'=> false)); ?></td>
					</tr>
					
					<?php if( $ii == 0) { ?>
					<tr>
      		<?php } else {?>
      		<tr style='display:none' id='addMoreItemLink1_<?php echo $ii; ?>'>
      		<?php } ?>
      		
						<td></td>
						<td><?php echo $this->Form->input('StoreInvoiceItem.'.$ii.'.UPC',array('label'=> false)); ?></td>
						<td><?php echo $this->Form->input('StoreInvoiceItem.'.$ii.'.VIN',array('label'=> false)); ?></td>
						<td><?php echo $this->Form->input('StoreInvoiceItem.'.$ii.'.unit_in_case',array('label'=> false)); ?></td>
						<td><?php echo $this->Form->input('StoreInvoiceItem.'.$ii.'.unit_cost',array('label'=> false)); ?></td>
						<td><?php echo $this->Form->input('StoreInvoiceItem.'.$ii.'.case_cost',array('label'=> false)); ?></td>
						
						<td><?php echo $this->Form->input('StoreInvoiceItem.'.$ii.'.unit_retail',array('label'=> false)); ?></td>
						<td><?php echo $this->Form->input('StoreInvoiceItem.'.$ii.'.case_retail',array('label'=> false)); ?></td>
						<td>
							<?php if( $ii == 0) { ?>
			 	         Add More <a id='addMoreItemLink' href='#'><?php echo $this->Html->image('icon_plus.gif');?></a>
			         <?php } else {?>
				        Remove<a onclick="removeElement('addMoreItemLink0_<?php echo $ii; ?>', 'addMoreItemLink1_<?php echo $ii; ?>')" id='removeItemLink_<?php echo $ii; ?>'><?php echo $this->Html->image('icon_minus.gif');?></a>
			         <?php } ?>
			
            </td>
					</tr>
					<?php } ?>
				</Table>
			</td>
		</tr>
		
		
		<tr><td  colspan=6 style='text-align:right'><strong>Subtotal<strong></th><th><?php echo $this->Form->input('subtotal',array('label'=> false)); ?></td></tr>
		<tr><td  colspan=6 style='text-align:right'><strong>Taxes<strong></th><th><?php echo $this->Form->input('taxes',array('label'=> false)); ?></td></tr>
		<tr><td  colspan=6 style='text-align:right'><strong>Total<strong></th><th><?php echo $this->Form->input('total',array('label'=> false)); ?></td></tr>
		
	</Table>
	
    <?php echo $this->Form->input('status', array('options' => array('pending' => 'Pending', 'approved' => 'Approved'))); ?>
	<?php echo $this->Form->end(__('Submit')); ?>
</div>


<?php //echo $this->element('inventories_action');?>

<script type="text/javascript">


$(document).ready(function(){
	var rr =1
	
	$('#addMoreItemLink').click(function(){

	  $('#addMoreItemLink0_'+rr).show();
		$('#addMoreItemLink1_'+rr).show();
			//$('#addMoreItemLink_'+rr+ 'input:*').attr('disabled', '');
		rr++;
		return false;
	});
	
	$("#datepicker" ).datepicker();
});

function removeElement(row0, row1){
  	$('#'+row0).html('');
  	$('#'+row1).html('');
  	return false;
  }
</script>
