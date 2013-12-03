<div class="productOperations view">
<h2><?php  echo __('Product Operation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productOperation['ProductOperation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productOperation['Product']['product_no'], array('controller' => 'products', 'action' => 'view', $productOperation['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Operation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productOperation['Operation']['name'], array('controller' => 'operations', 'action' => 'view', $productOperation['Operation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Associated Document'); ?></dt>
		<dd>
			<?php echo h($productOperation['ProductOperation']['associated_document']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Process Priority'); ?></dt>
		<dd>
			<?php echo h($productOperation['ProductOperation']['process_priority']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product Operation'), array('action' => 'edit', $productOperation['ProductOperation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product Operation'), array('action' => 'delete', $productOperation['ProductOperation']['id']), null, __('Are you sure you want to delete # %s?', $productOperation['ProductOperation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Operations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Operation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
	</ul>
</div>
