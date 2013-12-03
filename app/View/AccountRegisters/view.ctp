<div class="accountRegisters view">
<h2><?php  echo __('Account Register'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($accountRegister['AccountRegister']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Accounting'); ?></dt>
		<dd>
			<?php echo $this->Html->link($accountRegister['Accounting']['name'], array('controller' => 'accountings', 'action' => 'view', $accountRegister['Accounting']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Due Date'); ?></dt>
		<dd>
			<?php echo h($accountRegister['AccountRegister']['due_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Check'); ?></dt>
		<dd>
			<?php echo h($accountRegister['AccountRegister']['check']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payee'); ?></dt>
		<dd>
			<?php echo h($accountRegister['AccountRegister']['payee']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Memo'); ?></dt>
		<dd>
			<?php echo h($accountRegister['AccountRegister']['memo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Spend'); ?></dt>
		<dd>
			<?php echo h($accountRegister['AccountRegister']['spend']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account'); ?></dt>
		<dd>
			<?php echo h($accountRegister['AccountRegister']['account']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recieve'); ?></dt>
		<dd>
			<?php echo h($accountRegister['AccountRegister']['recieve']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CLR'); ?></dt>
		<dd>
			<?php echo h($accountRegister['AccountRegister']['CLR']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Balance'); ?></dt>
		<dd>
			<?php echo h($accountRegister['AccountRegister']['balance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($accountRegister['User']['username'], array('controller' => 'users', 'action' => 'view', $accountRegister['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($accountRegister['AccountRegister']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($accountRegister['AccountRegister']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Account Register'), array('action' => 'edit', $accountRegister['AccountRegister']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Account Register'), array('action' => 'delete', $accountRegister['AccountRegister']['id']), null, __('Are you sure you want to delete # %s?', $accountRegister['AccountRegister']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Registers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Register'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accountings'), array('controller' => 'accountings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accounting'), array('controller' => 'accountings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
