<div class="workOrders view">
<h2><?php  echo __('Work Order'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($workOrder['WorkOrder']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work Order No'); ?></dt>
		<dd>
			<?php echo h($workOrder['WorkOrder']['work_order_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($workOrder['Product']['product_no'], array('controller' => 'products', 'action' => 'view', $workOrder['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Qty'); ?></dt>
		<dd>
			<?php echo h($workOrder['WorkOrder']['total_qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qty Complete'); ?></dt>
		<dd>
			<?php echo h($workOrder['WorkOrder']['qty_complete']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Release Date'); ?></dt>
		<dd>
			<?php echo h($workOrder['WorkOrder']['release_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Due Date'); ?></dt>
		<dd>
			<?php echo h($workOrder['WorkOrder']['due_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('High Priority'); ?></dt>
		<dd>
			<?php echo h($workOrder['WorkOrder']['high_priority']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prototype'); ?></dt>
		<dd>
			<?php echo h($workOrder['WorkOrder']['prototype']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rework'); ?></dt>
		<dd>
			<?php echo h($workOrder['WorkOrder']['rework']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Work Order'), array('action' => 'edit', $workOrder['WorkOrder']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Print Label'), array('action' => 'printlabel', $workOrder['WorkOrder']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Work Order'), array('action' => 'delete', $workOrder['WorkOrder']['id']), null, __('Are you sure you want to delete # %s?', $workOrder['WorkOrder']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Work Orders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Work Order'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
