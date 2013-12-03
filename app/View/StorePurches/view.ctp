<div class="storePurches view">
<h2><?php  echo __('Store Purch'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($storePurch['StorePurch']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vendor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($storePurch['Vendor']['name'], array('controller' => 'vendors', 'action' => 'view', $storePurch['Vendor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($storePurch['Category']['name'], array('controller' => 'categories', 'action' => 'view', $storePurch['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cost'); ?></dt>
		<dd>
			<?php echo h($storePurch['StorePurch']['cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retail'); ?></dt>
		<dd>
			<?php echo h($storePurch['StorePurch']['retail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Method'); ?></dt>
		<dd>
			<?php echo h($storePurch['StorePurch']['payment_method']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('GPM'); ?></dt>
		<dd>
			<?php echo h($storePurch['StorePurch']['GPM']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profit'); ?></dt>
		<dd>
			<?php echo h($storePurch['StorePurch']['profit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($storePurch['StorePurch']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($storePurch['StorePurch']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Store Purch'), array('action' => 'edit', $storePurch['StorePurch']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Store Purch'), array('action' => 'delete', $storePurch['StorePurch']['id']), null, __('Are you sure you want to delete # %s?', $storePurch['StorePurch']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Store Purches'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store Purch'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
