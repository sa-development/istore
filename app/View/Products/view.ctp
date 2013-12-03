<div class="products view">
<h2><?php  echo __('Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product No'); ?></dt>
		<dd>
			<?php echo h($product['Product']['product_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rev'); ?></dt>
		<dd>
			<?php echo h($product['Product']['rev']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Class'); ?></dt>
		<dd>
			<?php echo h($product['Product']['class']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($product['Product']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($product['Product']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($product['Product']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Product Number'); ?></dt>
		<dd>
			<?php echo h($product['Product']['customer_product_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $product['Customer']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), null, __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Kitparts'), array('controller' => 'kitparts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kitpart'), array('controller' => 'kitparts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Operations'), array('controller' => 'product_operations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Operation'), array('controller' => 'product_operations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Work Orders'), array('controller' => 'work_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Work Order'), array('controller' => 'work_orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Kitparts'); ?></h3>
	<?php if (!empty($product['Kitpart'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Part Id'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($product['Kitpart'] as $kitpart): ?>
		<tr>
			<td><?php echo $kitpart['id']; ?></td>
			<td><?php echo $kitpart['product_id']; ?></td>
			<td><?php echo $kitpart['part_id']; ?></td>
			<td><?php echo $kitpart['qty']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'kitparts', 'action' => 'view', $kitpart['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'kitparts', 'action' => 'edit', $kitpart['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'kitparts', 'action' => 'delete', $kitpart['id']), null, __('Are you sure you want to delete # %s?', $kitpart['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Kitpart'), array('controller' => 'kitparts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Product Operations'); ?></h3>
	<?php if (!empty($product['ProductOperation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Operation Id'); ?></th>
		<th><?php echo __('Associated Socument'); ?></th>
		<th><?php echo __('Process Priority'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($product['ProductOperation'] as $productOperation): ?>
		<tr>
			<td><?php echo $productOperation['id']; ?></td>
			<td><?php echo $productOperation['product_id']; ?></td>
			<td><?php echo $productOperation['operation_id']; ?></td>
			<td><?php echo $productOperation['associated_socument']; ?></td>
			<td><?php echo $productOperation['process_priority']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'product_operations', 'action' => 'view', $productOperation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'product_operations', 'action' => 'edit', $productOperation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'product_operations', 'action' => 'delete', $productOperation['id']), null, __('Are you sure you want to delete # %s?', $productOperation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product Operation'), array('controller' => 'product_operations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Work Orders'); ?></h3>
	<?php if (!empty($product['WorkOrder'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Work Order No'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Total Qty'); ?></th>
		<th><?php echo __('Qty Complete'); ?></th>
		<th><?php echo __('Release Date'); ?></th>
		<th><?php echo __('Due Date'); ?></th>
		<th><?php echo __('High Priority'); ?></th>
		<th><?php echo __('Prototype'); ?></th>
		<th><?php echo __('Rework'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($product['WorkOrder'] as $workOrder): ?>
		<tr>
			<td><?php echo $workOrder['id']; ?></td>
			<td><?php echo $workOrder['work_order_no']; ?></td>
			<td><?php echo $workOrder['product_id']; ?></td>
			<td><?php echo $workOrder['total_qty']; ?></td>
			<td><?php echo $workOrder['qty_complete']; ?></td>
			<td><?php echo $workOrder['release_date']; ?></td>
			<td><?php echo $workOrder['due_date']; ?></td>
			<td><?php echo $workOrder['high_priority']; ?></td>
			<td><?php echo $workOrder['prototype']; ?></td>
			<td><?php echo $workOrder['rework']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'work_orders', 'action' => 'view', $workOrder['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'work_orders', 'action' => 'edit', $workOrder['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'work_orders', 'action' => 'delete', $workOrder['id']), null, __('Are you sure you want to delete # %s?', $workOrder['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Work Order'), array('controller' => 'work_orders', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
