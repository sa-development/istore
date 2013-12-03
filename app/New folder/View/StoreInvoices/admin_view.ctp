<div class="storeInvoices view">
<h2><?php  echo __('Store Invoice'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($storeInvoice['StoreInvoice']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($storeInvoice['Category']['name'], array('controller' => 'categories', 'action' => 'view', $storeInvoice['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Upc'); ?></dt>
		<dd>
			<?php echo h($storeInvoice['StoreInvoice']['upc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cost Qty'); ?></dt>
		<dd>
			<?php echo h($storeInvoice['StoreInvoice']['cost_qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit'); ?></dt>
		<dd>
			<?php echo h($storeInvoice['StoreInvoice']['unit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Cost'); ?></dt>
		<dd>
			<?php echo h($storeInvoice['StoreInvoice']['total_cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit Cost'); ?></dt>
		<dd>
			<?php echo h($storeInvoice['StoreInvoice']['unit_cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Case Cost'); ?></dt>
		<dd>
			<?php echo h($storeInvoice['StoreInvoice']['case_cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Retail'); ?></dt>
		<dd>
			<?php echo h($storeInvoice['StoreInvoice']['total_retail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit Retail'); ?></dt>
		<dd>
			<?php echo h($storeInvoice['StoreInvoice']['unit_retail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Case Retail'); ?></dt>
		<dd>
			<?php echo h($storeInvoice['StoreInvoice']['case_retail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('GPM'); ?></dt>
		<dd>
			<?php echo h($storeInvoice['StoreInvoice']['GPM']); ?>
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
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Store Invoice'), array('action' => 'edit', $storeInvoice['StoreInvoice']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Store Invoice'), array('action' => 'delete', $storeInvoice['StoreInvoice']['id']), null, __('Are you sure you want to delete # %s?', $storeInvoice['StoreInvoice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Store Invoices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store Invoice'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
	</ul>
</div>
