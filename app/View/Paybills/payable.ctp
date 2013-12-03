<?php 
echo $this->Html->css('ui-lightness/jquery-ui-1.10.3.custom');
echo $this->Html->script(array('jquery-1.9.1', 'jquery-ui-1.10.3.custom')); 
?>

<div class="grid">
	<h2><?php echo __('Payables'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="grid">
	<tr>
			<th><?php echo __('Due Date'); ?></th>
			<th><?php echo __('Bills ref no'); ?></th>
			<th><?php echo __('Vendor'); ?></th>
			<th><?php echo __('Amount Due'); ?></th>
			<th><?php echo __('Amount To Pay'); ?></th>
			<th><?php echo __('paymen_method'); ?></th>
			<th><?php echo __('Action'); ?></th>
	</tr>
	<?php
	foreach ($paybills as $paybill):
	?>
		
	
	<tr id=PaybillPayableRow_<?php echo $paybill['Paybill']['id'];?> >
		<td><?php echo h($paybill['Paybill']['due_date']); ?>&nbsp;</td>
		<td>
			<?php echo ($paybill['StoreInvoice']['invoice'])? ($paybill['StoreInvoice']['invoice']) :$paybill['FuelInvoice']['invoice']; ?>
		</td>
		<td>
			<?php echo $paybill['Vendor']['name']; ?>
		</td>
		<td id=PaybillPayableAmtDisplay_<?php echo $paybill['Paybill']['id'];?> ><?php echo h(ceil($paybill['Paybill']['amt_due'] - $paybill['Paybill']['paybill_amount'])); ?>&nbsp;</td>
		
		<td>
			<form accept-charset="utf-8" method="post" id="PaybillPayableForm_<?php echo $paybill['Paybill']['id']; ?>" action="/Paybills/payable">
			<?php 
				//echo $this->Form->create('Paybill');
				echo $this->Form->hidden('id', array('value' => $paybill['Paybill']['id']));
				echo $this->Form->hidden('group_id', array('value' => $paybill['Vendor']['group_id']));
				echo $this->Form->hidden('amt_due', array('value' => $paybill['Paybill']['amt_due'], 'id' => "PaybillPayableAmtHidden_". $paybill['Paybill']['id']));
				echo $this->Form->hidden('status', array('value' => 2));
			?>
			<?php echo $this->Form->input('amount', array('label' => false, 'id' => "PaybillPayableAmtInput_". $paybill['Paybill']['id'])); ?>
		</td>
		
		<td><?php echo $this->Form->input('paymen_method', array('options' => $paymentMethods, 'label' => false)); ?>
			</form>
		</td>
		
		<td><div class="submit"><input type="button" id='<?php echo $paybill['Paybill']['id']; ?>' class='approved' value='Approved' /></div></td>
	</tr>
	
<?php endforeach; ?>

	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

<script type="text/javascript">	
	$(document).ready(function(){
		$('.approved').click(function(){
			var PID = this.id;
			$.post('/Paybills/payable', $('#PaybillPayableForm_'+ this.id).serialize(), function(res){
				if(res == 'full') {
					$('#PaybillPayableRow_'+ PID).hide();
				} else {
					var num1 = parseFloat($('#PaybillPayableAmtHidden_'+PID).val());
					var num2 = parseFloat($('#PaybillPayableAmtInput_'+PID).val());
					
					var AmtRemains = num1 - num2;
					
					$('#PaybillPayableAmtHidden_'+PID).val(AmtRemains);
					$('#PaybillPayableAmtDisplay_'+PID).html(AmtRemains);
				}
				
				alert('Transaction completed. Related amount moved paybill section');
			});
		});
	});
</script>	          

