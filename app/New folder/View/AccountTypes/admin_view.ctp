<div class="accountTypes view">
<h2><?php  echo __('Account Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($accountType['AccountType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($accountType['AccountType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($accountType['AccountType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($accountType['AccountType']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Account Type'), array('action' => 'edit', $accountType['AccountType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Account Type'), array('action' => 'delete', $accountType['AccountType']['id']), null, __('Are you sure you want to delete # %s?', $accountType['AccountType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accountings'), array('controller' => 'accountings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accounting'), array('controller' => 'accountings', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Accountings'); ?></h3>
	<?php if (!empty($accountType['Accounting'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('GL Account'); ?></th>
		<th><?php echo __('Corporation Id'); ?></th>
		<th><?php echo __('Station Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Subaccount Of Id'); ?></th>
		<th><?php echo __('Account Type Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($accountType['Accounting'] as $accounting): ?>
		<tr>
			<td><?php echo $accounting['id']; ?></td>
			<td><?php echo $accounting['GL_account']; ?></td>
			<td><?php echo $accounting['corporation_id']; ?></td>
			<td><?php echo $accounting['station_id']; ?></td>
			<td><?php echo $accounting['name']; ?></td>
			<td><?php echo $accounting['description']; ?></td>
			<td><?php echo $accounting['subaccount_of_id']; ?></td>
			<td><?php echo $accounting['account_type_id']; ?></td>
			<td><?php echo $accounting['user_id']; ?></td>
			<td><?php echo $accounting['active']; ?></td>
			<td><?php echo $accounting['created']; ?></td>
			<td><?php echo $accounting['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'accountings', 'action' => 'view', $accounting['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'accountings', 'action' => 'edit', $accounting['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'accountings', 'action' => 'delete', $accounting['id']), null, __('Are you sure you want to delete # %s?', $accounting['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Accounting'), array('controller' => 'accountings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
