<div class="accountings view">
<h2><?php  echo __('Accounting'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($accounting['Accounting']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('GL Account'); ?></dt>
		<dd>
			<?php echo h($accounting['Accounting']['GL_account']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Corporation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($accounting['Corporation']['name'], array('controller' => 'corporations', 'action' => 'view', $accounting['Corporation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($accounting['Station']['name'], array('controller' => 'stations', 'action' => 'view', $accounting['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($accounting['Accounting']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($accounting['Accounting']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subaccount Of Id'); ?></dt>
		<dd>
			<?php echo h($accounting['Accounting']['subaccount_of_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($accounting['AccountType']['name'], array('controller' => 'account_types', 'action' => 'view', $accounting['AccountType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($accounting['User']['username'], array('controller' => 'users', 'action' => 'view', $accounting['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($accounting['Accounting']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($accounting['Accounting']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($accounting['Accounting']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Accounting'), array('action' => 'edit', $accounting['Accounting']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Accounting'), array('action' => 'delete', $accounting['Accounting']['id']), null, __('Are you sure you want to delete # %s?', $accounting['Accounting']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Accountings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accounting'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Corporations'), array('controller' => 'corporations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Corporation'), array('controller' => 'corporations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Types'), array('controller' => 'account_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Type'), array('controller' => 'account_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Registers'), array('controller' => 'account_registers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Register'), array('controller' => 'account_registers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Account Registers'); ?></h3>
	<?php if (!empty($accounting['AccountRegister'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Accounting Id'); ?></th>
		<th><?php echo __('Due Date'); ?></th>
		<th><?php echo __('Check'); ?></th>
		<th><?php echo __('Payee'); ?></th>
		<th><?php echo __('Memo'); ?></th>
		<th><?php echo __('Spend'); ?></th>
		<th><?php echo __('Account'); ?></th>
		<th><?php echo __('Recieve'); ?></th>
		<th><?php echo __('CLR'); ?></th>
		<th><?php echo __('Balance'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($accounting['AccountRegister'] as $accountRegister): ?>
		<tr>
			<td><?php echo $accountRegister['id']; ?></td>
			<td><?php echo $accountRegister['accounting_id']; ?></td>
			<td><?php echo $accountRegister['due_date']; ?></td>
			<td><?php echo $accountRegister['check']; ?></td>
			<td><?php echo $accountRegister['payee']; ?></td>
			<td><?php echo $accountRegister['memo']; ?></td>
			<td><?php echo $accountRegister['spend']; ?></td>
			<td><?php echo $accountRegister['account']; ?></td>
			<td><?php echo $accountRegister['recieve']; ?></td>
			<td><?php echo $accountRegister['CLR']; ?></td>
			<td><?php echo $accountRegister['balance']; ?></td>
			<td><?php echo $accountRegister['user_id']; ?></td>
			<td><?php echo $accountRegister['created']; ?></td>
			<td><?php echo $accountRegister['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'account_registers', 'action' => 'view', $accountRegister['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'account_registers', 'action' => 'edit', $accountRegister['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'account_registers', 'action' => 'delete', $accountRegister['id']), null, __('Are you sure you want to delete # %s?', $accountRegister['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Account Register'), array('controller' => 'account_registers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
