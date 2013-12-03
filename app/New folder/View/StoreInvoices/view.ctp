<div class="storeInvoices view">
<h2><?php  echo __('Store Invoice'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($storeInvoice['StoreInvoice']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vendor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($storeInvoice['Vendor']['name'], array('controller' => 'vendors', 'action' => 'view', $storeInvoice['Vendor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice'); ?></dt>
		<dd>
			<?php echo h($storeInvoice['StoreInvoice']['invoice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Method Payment Id'); ?></dt>
		<dd>
			<?php echo h($storeInvoice['StoreInvoice']['method_payment_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Terms'); ?></dt>
		<dd>
			<?php echo h($storeInvoice['StoreInvoice']['terms']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Docuement'); ?></dt>
		<dd>
			<?php echo h($storeInvoice['StoreInvoice']['docuement']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subtotal'); ?></dt>
		<dd>
			<?php echo h($storeInvoice['StoreInvoice']['subtotal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Taxes'); ?></dt>
		<dd>
			<?php echo h($storeInvoice['StoreInvoice']['taxes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total'); ?></dt>
		<dd>
			<?php echo h($storeInvoice['StoreInvoice']['total']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($storeInvoice['StoreInvoice']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($storeInvoice['StoreInvoice']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($storeInvoice['Station']['name'], array('controller' => 'stations', 'action' => 'view', $storeInvoice['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zero Leading UPCs'); ?></dt>
		<dd>
			<?php echo h($storeInvoice['StoreInvoice']['zero_leading_UPCs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice Date'); ?></dt>
		<dd>
			<?php echo h($storeInvoice['StoreInvoice']['invoice_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Store Invoice'), array('action' => 'edit', $storeInvoice['StoreInvoice']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Store Invoice'), array('action' => 'delete', $storeInvoice['StoreInvoice']['id']), null, __('Are you sure you want to delete # %s?', $storeInvoice['StoreInvoice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Store Invoices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store Invoice'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Store Invoice Items'), array('controller' => 'store_invoice_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store Invoice Item'), array('controller' => 'store_invoice_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Store Invoice Items'); ?></h3>
	<?php if (!empty($storeInvoice['StoreInvoiceItem'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Store Invoice Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Item Name'); ?></th>
		<th><?php echo __('UPC'); ?></th>
		<th><?php echo __('VIN'); ?></th>
		<th><?php echo __('Case QTY'); ?></th>
		<th><?php echo __('Unit In Case'); ?></th>
		<th><?php echo __('Total Cost'); ?></th>
		<th><?php echo __('Unit Cost'); ?></th>
		<th><?php echo __('Case Cost'); ?></th>
		<th><?php echo __('Total Retail'); ?></th>
		<th><?php echo __('Unit Retail'); ?></th>
		<th><?php echo __('Case Retail'); ?></th>
		<th><?php echo __('GPM'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($storeInvoice['StoreInvoiceItem'] as $storeInvoiceItem): ?>
		<tr>
			<td><?php echo $storeInvoiceItem['id']; ?></td>
			<td><?php echo $storeInvoiceItem['store_invoice_id']; ?></td>
			<td><?php echo $storeInvoiceItem['category_id']; ?></td>
			<td><?php echo $storeInvoiceItem['item_name']; ?></td>
			<td><?php echo $storeInvoiceItem['UPC']; ?></td>
			<td><?php echo $storeInvoiceItem['VIN']; ?></td>
			<td><?php echo $storeInvoiceItem['case_QTY']; ?></td>
			<td><?php echo $storeInvoiceItem['unit_in_case']; ?></td>
			<td><?php echo $storeInvoiceItem['total_cost']; ?></td>
			<td><?php echo $storeInvoiceItem['unit_cost']; ?></td>
			<td><?php echo $storeInvoiceItem['case_cost']; ?></td>
			<td><?php echo $storeInvoiceItem['total_retail']; ?></td>
			<td><?php echo $storeInvoiceItem['unit_retail']; ?></td>
			<td><?php echo $storeInvoiceItem['case_retail']; ?></td>
			<td><?php echo $storeInvoiceItem['GPM']; ?></td>
			<td><?php echo $storeInvoiceItem['created']; ?></td>
			<td><?php echo $storeInvoiceItem['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'store_invoice_items', 'action' => 'view', $storeInvoiceItem['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'store_invoice_items', 'action' => 'edit', $storeInvoiceItem['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'store_invoice_items', 'action' => 'delete', $storeInvoiceItem['id']), null, __('Are you sure you want to delete # %s?', $storeInvoiceItem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Store Invoice Item'), array('controller' => 'store_invoice_items', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
