<div class="storeBuydowns view">
<h2><?php  echo __('Store Buydown'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($storeBuydown['StoreBuydown']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vendor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($storeBuydown['Vendor']['name'], array('controller' => 'vendors', 'action' => 'view', $storeBuydown['Vendor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($storeBuydown['Category']['name'], array('controller' => 'categories', 'action' => 'view', $storeBuydown['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Name'); ?></dt>
		<dd>
			<?php echo h($storeBuydown['StoreBuydown']['item_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qty'); ?></dt>
		<dd>
			<?php echo h($storeBuydown['StoreBuydown']['qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Change Retail Item'); ?></dt>
		<dd>
			<?php echo h($storeBuydown['StoreBuydown']['change_retail_item']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($storeBuydown['StoreBuydown']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($storeBuydown['StoreBuydown']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($storeBuydown['StoreBuydown']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Store Buydown'), array('action' => 'edit', $storeBuydown['StoreBuydown']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Store Buydown'), array('action' => 'delete', $storeBuydown['StoreBuydown']['id']), null, __('Are you sure you want to delete # %s?', $storeBuydown['StoreBuydown']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Store Buydowns'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store Buydown'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
