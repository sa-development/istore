<div class="storeInvoices index">
	<h2><?php echo __('Store Invoices'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('vendor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('invoice'); ?></th>
			<th><?php echo $this->Paginator->sort('method_payment_id'); ?></th>
			<th><?php echo $this->Paginator->sort('terms'); ?></th>
			<th><?php echo $this->Paginator->sort('docuement'); ?></th>
			<th><?php echo $this->Paginator->sort('subtotal'); ?></th>
			<th><?php echo $this->Paginator->sort('taxes'); ?></th>
			<th><?php echo $this->Paginator->sort('total'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('station_id'); ?></th>
			<th><?php echo $this->Paginator->sort('zero_leading_UPCs'); ?></th>
			<th><?php echo $this->Paginator->sort('invoice_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($storeInvoices as $storeInvoice): ?>
	<tr>
		<td><?php echo h($storeInvoice['StoreInvoice']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($storeInvoice['Vendor']['name'], array('controller' => 'vendors', 'action' => 'view', $storeInvoice['Vendor']['id'])); ?>
		</td>
		<td><?php echo h($storeInvoice['StoreInvoice']['invoice']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoice['StoreInvoice']['method_payment_id']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoice['StoreInvoice']['terms']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoice['StoreInvoice']['docuement']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoice['StoreInvoice']['subtotal']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoice['StoreInvoice']['taxes']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoice['StoreInvoice']['total']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoice['StoreInvoice']['created']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoice['StoreInvoice']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($storeInvoice['Station']['name'], array('controller' => 'stations', 'action' => 'view', $storeInvoice['Station']['id'])); ?>
		</td>
		<td><?php echo h($storeInvoice['StoreInvoice']['zero_leading_UPCs']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoice['StoreInvoice']['invoice_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $storeInvoice['StoreInvoice']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $storeInvoice['StoreInvoice']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $storeInvoice['StoreInvoice']['id']), null, __('Are you sure you want to delete # %s?', $storeInvoice['StoreInvoice']['id'])); ?>
		</td>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Store Invoice'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Store Invoice Items'), array('controller' => 'store_invoice_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store Invoice Item'), array('controller' => 'store_invoice_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
