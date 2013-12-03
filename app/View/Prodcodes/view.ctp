<div class="prodcodes view">
<h2><?php  echo __('Prodcode'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($prodcode['Prodcode']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sysid'); ?></dt>
		<dd>
			<?php echo h($prodcode['Prodcode']['sysid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($prodcode['Prodcode']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsNotSold'); ?></dt>
		<dd>
			<?php echo h($prodcode['Prodcode']['isNotSold']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsFuel'); ?></dt>
		<dd>
			<?php echo h($prodcode['Prodcode']['isFuel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station Id'); ?></dt>
		<dd>
			<?php echo h($prodcode['Prodcode']['station_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($prodcode['Prodcode']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($prodcode['Prodcode']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Prodcode'), array('action' => 'edit', $prodcode['Prodcode']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Prodcode'), array('action' => 'delete', $prodcode['Prodcode']['id']), null, __('Are you sure you want to delete # %s?', $prodcode['Prodcode']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Prodcodes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prodcode'), array('action' => 'add')); ?> </li>
	</ul>
</div>
