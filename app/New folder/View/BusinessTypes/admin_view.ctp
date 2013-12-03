<div class="businessTypes view">
<h2><?php  echo __('Business Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($businessType['BusinessType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($businessType['BusinessType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($businessType['BusinessType']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Business Type'), array('action' => 'edit', $businessType['BusinessType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Business Type'), array('action' => 'delete', $businessType['BusinessType']['id']), null, __('Are you sure you want to delete # %s?', $businessType['BusinessType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Business Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business Type'), array('action' => 'add')); ?> </li>
	</ul>
</div>
