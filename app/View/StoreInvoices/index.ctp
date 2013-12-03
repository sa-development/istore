<div class="storeInvoices ">
<table  cellpadding="0" cellspacing="0">
		<tr>
			<td width='95%'><h2><?php echo __('Store Invoices'); ?></h2></td>
			<td width='5%'>
			<a class="thickbox" href="/store_invoices/add?keepThis=true&amp;TB_iframe=true&amp;height=400&amp;width=1200"><img width="60px" alt="Add New"  src="/img/actions/tab_new.png"></a>
			</td>
		</tr>		
	</table>
	<table cellpadding="0" cellspacing="0" class='grid'>
	<tr>
			<th><?php echo $this->Paginator->sort('invoice'); ?></th>
			<th><?php echo $this->Paginator->sort('method_payment_id'); ?></th>
			<th><?php echo $this->Paginator->sort('taxes'); ?></th>
			<th><?php echo $this->Paginator->sort('total'); ?></th>
			<!--<th><?php echo $this->Paginator->sort('created'); ?></th>-->
			<!--<th><?php echo $this->Paginator->sort('modified'); ?></th>-->
			<th><?php echo $this->Paginator->sort('station_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('invoice_date'); ?></th>
	</tr>
	<?php
	foreach ($storeInvoices as $storeInvoice): ?>
	<tr>
		
		<td><?php echo h($storeInvoice['StoreInvoice']['invoice']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoice['PaymentMethod']['name']); ?>&nbsp;</td>
		
		<td><?php echo h($storeInvoice['StoreInvoice']['taxes']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoice['StoreInvoice']['total']); ?>&nbsp;</td>
		<!--<td><?php echo h($storeInvoice['StoreInvoice']['created']); ?>&nbsp;</td>-->
		<!--<td><?php echo h($storeInvoice['StoreInvoice']['modified']); ?>&nbsp;</td>-->
		<td>
			<?php echo $this->Html->link($storeInvoice['Station']['name'], array('controller' => 'stations', 'action' => 'view', $storeInvoice['Station']['id'])); ?>
		</td>
		<td><?php echo h($storeInvoice['StoreInvoice']['status']); ?>&nbsp;</td>
		
		<td><?php echo h($storeInvoice['StoreInvoice']['invoice_date']); ?>&nbsp;</td>
		
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
<?php //echo $this->element('inventories_action');?>
