<div class="accountReceivables view">
<h2><?php  echo __('Account Receivable'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($accountReceivable['AccountReceivable']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($accountReceivable['User']['username'], array('controller' => 'users', 'action' => 'view', $accountReceivable['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Corporation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($accountReceivable['Corporation']['name'], array('controller' => 'corporations', 'action' => 'view', $accountReceivable['Corporation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($accountReceivable['Station']['name'], array('controller' => 'stations', 'action' => 'view', $accountReceivable['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payee'); ?></dt>
		<dd>
			<?php echo h($accountReceivable['AccountReceivable']['payee']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Memo'); ?></dt>
		<dd>
			<?php echo h($accountReceivable['AccountReceivable']['memo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Increase'); ?></dt>
		<dd>
			<?php echo h($accountReceivable['AccountReceivable']['increase']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Decrease'); ?></dt>
		<dd>
			<?php echo h($accountReceivable['AccountReceivable']['decrease']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount To Rec'); ?></dt>
		<dd>
			<?php echo h($accountReceivable['AccountReceivable']['amount_to_rec']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($accountReceivable['AccountReceivable']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($accountReceivable['AccountReceivable']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Account Receivable'), array('action' => 'edit', $accountReceivable['AccountReceivable']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Account Receivable'), array('action' => 'delete', $accountReceivable['AccountReceivable']['id']), null, __('Are you sure you want to delete # %s?', $accountReceivable['AccountReceivable']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Receivables'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Receivable'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Corporations'), array('controller' => 'corporations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Corporation'), array('controller' => 'corporations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
