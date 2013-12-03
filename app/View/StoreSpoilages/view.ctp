<div class="storeSpoilages view">
<h2><?php  echo __('Store Spoilage'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($storeSpoilage['StoreSpoilage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Name'); ?></dt>
		<dd>
			<?php echo h($storeSpoilage['StoreSpoilage']['item_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($storeSpoilage['Category']['name'], array('controller' => 'categories', 'action' => 'view', $storeSpoilage['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UPC'); ?></dt>
		<dd>
			<?php echo h($storeSpoilage['StoreSpoilage']['UPC']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reason'); ?></dt>
		<dd>
			<?php echo h($storeSpoilage['StoreSpoilage']['reason']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qty'); ?></dt>
		<dd>
			<?php echo h($storeSpoilage['StoreSpoilage']['qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retail Per Item'); ?></dt>
		<dd>
			<?php echo h($storeSpoilage['StoreSpoilage']['retail_per_item']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($storeSpoilage['StoreSpoilage']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($storeSpoilage['StoreSpoilage']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($storeSpoilage['StoreSpoilage']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Store Spoilage'), array('action' => 'edit', $storeSpoilage['StoreSpoilage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Store Spoilage'), array('action' => 'delete', $storeSpoilage['StoreSpoilage']['id']), null, __('Are you sure you want to delete # %s?', $storeSpoilage['StoreSpoilage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Store Spoilages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store Spoilage'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
