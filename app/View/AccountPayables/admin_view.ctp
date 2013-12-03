<div class="accountPayables view">
<h2><?php  echo __('Account Payable'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($accountPayable['AccountPayable']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vendor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($accountPayable['Vendor']['name'], array('controller' => 'vendors', 'action' => 'view', $accountPayable['Vendor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ref No'); ?></dt>
		<dd>
			<?php echo h($accountPayable['AccountPayable']['ref_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount Due'); ?></dt>
		<dd>
			<?php echo h($accountPayable['AccountPayable']['amount_due']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creadits Used'); ?></dt>
		<dd>
			<?php echo h($accountPayable['AccountPayable']['creadits_used']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount Pay'); ?></dt>
		<dd>
			<?php echo h($accountPayable['AccountPayable']['amount_pay']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($accountPayable['User']['username'], array('controller' => 'users', 'action' => 'view', $accountPayable['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($accountPayable['AccountPayable']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($accountPayable['AccountPayable']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Account Payable'), array('action' => 'edit', $accountPayable['AccountPayable']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Account Payable'), array('action' => 'delete', $accountPayable['AccountPayable']['id']), null, __('Are you sure you want to delete # %s?', $accountPayable['AccountPayable']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Payables'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Payable'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
