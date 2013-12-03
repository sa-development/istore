<div class="uploadinvoices view">
<h2><?php  echo __('Uploadinvoice'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($uploadinvoice['Uploadinvoice']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($uploadinvoice['User']['username'], array('controller' => 'users', 'action' => 'view', $uploadinvoice['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File'); ?></dt>
		<dd>
			<?php echo h($uploadinvoice['Uploadinvoice']['file']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($uploadinvoice['Uploadinvoice']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($uploadinvoice['Uploadinvoice']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($uploadinvoice['Uploadinvoice']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($uploadinvoice['Uploadinvoice']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($uploadinvoice['Uploadinvoice']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Uploadinvoice'), array('action' => 'edit', $uploadinvoice['Uploadinvoice']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Uploadinvoice'), array('action' => 'delete', $uploadinvoice['Uploadinvoice']['id']), null, __('Are you sure you want to delete # %s?', $uploadinvoice['Uploadinvoice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Uploadinvoices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uploadinvoice'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
