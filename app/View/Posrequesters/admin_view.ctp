<div class="posrequesters view">
<h2><?php  echo __('Posrequester'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($posrequester['Posrequester']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station Id'); ?></dt>
		<dd>
			<?php echo h($posrequester['Posrequester']['station_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cmd Url'); ?></dt>
		<dd>
			<?php echo h($posrequester['Posrequester']['cmd_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($posrequester['Posrequester']['data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($posrequester['Posrequester']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($posrequester['Posrequester']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($posrequester['Posrequester']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($posrequester['Posrequester']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Posrequester'), array('action' => 'edit', $posrequester['Posrequester']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Posrequester'), array('action' => 'delete', $posrequester['Posrequester']['id']), null, __('Are you sure you want to delete # %s?', $posrequester['Posrequester']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Posrequesters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Posrequester'), array('action' => 'add')); ?> </li>
	</ul>
</div>
