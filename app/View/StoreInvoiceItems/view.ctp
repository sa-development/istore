<div class="storeInvoiceItems view">
<h2><?php  echo __('Store Invoice Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($storeInvoiceItem['StoreInvoiceItem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Store Invoice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($storeInvoiceItem['StoreInvoice']['invoice'], array('controller' => 'store_invoices', 'action' => 'view', $storeInvoiceItem['StoreInvoice']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($storeInvoiceItem['Category']['name'], array('controller' => 'categories', 'action' => 'view', $storeInvoiceItem['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Name'); ?></dt>
		<dd>
			<?php echo h($storeInvoiceItem['StoreInvoiceItem']['item_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UPC'); ?></dt>
		<dd>
			<?php echo h($storeInvoiceItem['StoreInvoiceItem']['UPC']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VIN'); ?></dt>
		<dd>
			<?php echo h($storeInvoiceItem['StoreInvoiceItem']['VIN']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Case QTY'); ?></dt>
		<dd>
			<?php echo h($storeInvoiceItem['StoreInvoiceItem']['case_QTY']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit In Case'); ?></dt>
		<dd>
			<?php echo h($storeInvoiceItem['StoreInvoiceItem']['unit_in_case']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Cost'); ?></dt>
		<dd>
			<?php echo h($storeInvoiceItem['StoreInvoiceItem']['total_cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit Cost'); ?></dt>
		<dd>
			<?php echo h($storeInvoiceItem['StoreInvoiceItem']['unit_cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Case Cost'); ?></dt>
		<dd>
			<?php echo h($storeInvoiceItem['StoreInvoiceItem']['case_cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Retail'); ?></dt>
		<dd>
			<?php echo h($storeInvoiceItem['StoreInvoiceItem']['total_retail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit Retail'); ?></dt>
		<dd>
			<?php echo h($storeInvoiceItem['StoreInvoiceItem']['unit_retail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Case Retail'); ?></dt>
		<dd>
			<?php echo h($storeInvoiceItem['StoreInvoiceItem']['case_retail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('GPM'); ?></dt>
		<dd>
			<?php echo h($storeInvoiceItem['StoreInvoiceItem']['GPM']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($storeInvoiceItem['StoreInvoiceItem']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($storeInvoiceItem['StoreInvoiceItem']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Store Invoice Item'), array('action' => 'edit', $storeInvoiceItem['StoreInvoiceItem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Store Invoice Item'), array('action' => 'delete', $storeInvoiceItem['StoreInvoiceItem']['id']), null, __('Are you sure you want to delete # %s?', $storeInvoiceItem['StoreInvoiceItem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Store Invoice Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store Invoice Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Store Invoices'), array('controller' => 'store_invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store Invoice'), array('controller' => 'store_invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
