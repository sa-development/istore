<div class="storeInvoiceItems index">
	<h2><?php echo __('Store Invoice Items'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('store_invoice_id'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_name'); ?></th>
			<th><?php echo $this->Paginator->sort('UPC'); ?></th>
			<th><?php echo $this->Paginator->sort('VIN'); ?></th>
			<th><?php echo $this->Paginator->sort('case_QTY'); ?></th>
			<th><?php echo $this->Paginator->sort('unit_in_case'); ?></th>
			<th><?php echo $this->Paginator->sort('total_cost'); ?></th>
			<th><?php echo $this->Paginator->sort('unit_cost'); ?></th>
			<th><?php echo $this->Paginator->sort('case_cost'); ?></th>
			<th><?php echo $this->Paginator->sort('total_retail'); ?></th>
			<th><?php echo $this->Paginator->sort('unit_retail'); ?></th>
			<th><?php echo $this->Paginator->sort('case_retail'); ?></th>
			<th><?php echo $this->Paginator->sort('GPM'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($storeInvoiceItems as $storeInvoiceItem): ?>
	<tr>
		<td><?php echo h($storeInvoiceItem['StoreInvoiceItem']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($storeInvoiceItem['StoreInvoice']['invoice'], array('controller' => 'store_invoices', 'action' => 'view', $storeInvoiceItem['StoreInvoice']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($storeInvoiceItem['Category']['name'], array('controller' => 'categories', 'action' => 'view', $storeInvoiceItem['Category']['id'])); ?>
		</td>
		<td><?php echo h($storeInvoiceItem['StoreInvoiceItem']['item_name']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoiceItem['StoreInvoiceItem']['UPC']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoiceItem['StoreInvoiceItem']['VIN']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoiceItem['StoreInvoiceItem']['case_QTY']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoiceItem['StoreInvoiceItem']['unit_in_case']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoiceItem['StoreInvoiceItem']['total_cost']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoiceItem['StoreInvoiceItem']['unit_cost']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoiceItem['StoreInvoiceItem']['case_cost']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoiceItem['StoreInvoiceItem']['total_retail']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoiceItem['StoreInvoiceItem']['unit_retail']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoiceItem['StoreInvoiceItem']['case_retail']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoiceItem['StoreInvoiceItem']['GPM']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoiceItem['StoreInvoiceItem']['created']); ?>&nbsp;</td>
		<td><?php echo h($storeInvoiceItem['StoreInvoiceItem']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $storeInvoiceItem['StoreInvoiceItem']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $storeInvoiceItem['StoreInvoiceItem']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $storeInvoiceItem['StoreInvoiceItem']['id']), null, __('Are you sure you want to delete # %s?', $storeInvoiceItem['StoreInvoiceItem']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Store Invoice Item'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Store Invoices'), array('controller' => 'store_invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store Invoice'), array('controller' => 'store_invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
