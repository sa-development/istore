<div class="kitparts view">
<h2><?php  echo __('Kitpart'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($kitpart['Kitpart']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($kitpart['Product']['product_no'], array('controller' => 'products', 'action' => 'view', $kitpart['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Part'); ?></dt>
		<dd>
			<?php echo $this->Html->link($kitpart['Part']['id'], array('controller' => 'parts', 'action' => 'view', $kitpart['Part']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qty'); ?></dt>
		<dd>
			<?php echo h($kitpart['Kitpart']['qty']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Kitpart'), array('action' => 'edit', $kitpart['Kitpart']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Kitpart'), array('action' => 'delete', $kitpart['Kitpart']['id']), null, __('Are you sure you want to delete # %s?', $kitpart['Kitpart']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Kitparts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kitpart'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Parts'), array('controller' => 'parts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Part'), array('controller' => 'parts', 'action' => 'add')); ?> </li>
	</ul>
</div>
