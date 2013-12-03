<div class="storePricechanges view">
<h2><?php  echo __('Store Pricechange'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($storePricechange['StorePricechange']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vendor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($storePricechange['Vendor']['name'], array('controller' => 'vendors', 'action' => 'view', $storePricechange['Vendor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($storePricechange['Category']['name'], array('controller' => 'categories', 'action' => 'view', $storePricechange['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Name'); ?></dt>
		<dd>
			<?php echo h($storePricechange['StorePricechange']['item_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qty'); ?></dt>
		<dd>
			<?php echo h($storePricechange['StorePricechange']['qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Chage Retail Item'); ?></dt>
		<dd>
			<?php echo h($storePricechange['StorePricechange']['chage_retail_item']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($storePricechange['StorePricechange']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($storePricechange['StorePricechange']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($storePricechange['StorePricechange']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Store Pricechange'), array('action' => 'edit', $storePricechange['StorePricechange']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Store Pricechange'), array('action' => 'delete', $storePricechange['StorePricechange']['id']), null, __('Are you sure you want to delete # %s?', $storePricechange['StorePricechange']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Store Pricechanges'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store Pricechange'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
