<?php 
echo $this->Html->css('ui-lightness/jquery-ui-1.10.3.custom');
echo $this->Html->script(array('jquery-1.9.1', 'jquery-ui-1.10.3.custom')); 
?>

<div class="grid">
	<h2><?php echo __('Paybills'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="grid">
	<tr>
			<th><?php echo __('Due Date'); ?></th>
			<th><?php echo __('Bills ref no'); ?></th>
			<th><?php echo __('Vendor'); ?></th>
			<th><?php echo __('Amount Due'); ?></th>
			<th><?php echo __('Amount To Pay'); ?></th>
		
			<th><?php echo __('payment_method'); ?></th>

			<th><?php echo __('Pay From (CR)'); ?></th>
			<th><?php echo __('Action'); ?></th>
	</tr>
	<?php
	foreach ($paybills as $paybill):
	?>
	<tr id=PaybillPayableRow_<?php echo $paybill['Paybill']['id'];?> >
		<td><?php echo h($paybill['Paybill']['due_date']); ?>;
		</td>
		<td>
			<?php echo ($paybill['StoreInvoice']['invoice'])? ($paybill['StoreInvoice']['invoice']) :$paybill['FuelInvoice']['invoice']; ?>
		</td>
		<td>
			<?php echo $this->Html->link($paybill['Vendor']['name'], array('controller' => 'vendors', 'action' => 'view', $paybill['Vendor']['id'])); ?>
		</td>
		<td><?php echo h($paybill['Paybill']['amt_due']); ?>&nbsp;</td>
		<td><?php echo h($paybill['Paybill']['paybill_amount']); ?>&nbsp;</td>
		
		<td><?php echo h($paymentMethods[$paybill['Paybill']['paymen_method']]); ?>&nbsp;</td>
		
		<td>	
			<form accept-charset="utf-8" method="post" id="PaybillPayableForm_<?php echo $paybill['Paybill']['id']; ?>" action="/Paybills/payable">		
			<?php 
				//echo $this->Form->create('Paybill');
				echo $this->Form->hidden('id', array('value' => $paybill['Paybill']['id']));
				echo $this->Form->hidden('group_id', array('value' => $paybill['Vendor']['group_id']));
				echo $this->Form->hidden('amount_to_pay', array('value' => $paybill['Paybill']['paybill_amount']));
				echo $this->Form->hidden('status', array('value' => 4));
				echo $this->Form->input('account_debit', array('options' => $groupList, 'label' => false)); 
			?>
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
			
			$.post('/Paybills/index', $('#PaybillPayableForm_'+ this.id).serialize(), function(res){
				alert('Transaction completed. Amount Successfully Paid to Vendor');
				$('#PaybillPayableRow_'+ PID).hide();
			});
		});
	});
</script>
