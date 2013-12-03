<div class="departments view">
<h2><?php  echo __('Department'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($department['Department']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sysid'); ?></dt>
		<dd>
			<?php echo h($department['Department']['sysid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station Id'); ?></dt>
		<dd>
			<?php echo h($department['Department']['station_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($department['Department']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MinAmt'); ?></dt>
		<dd>
			<?php echo h($department['Department']['minAmt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MaxAmt'); ?></dt>
		<dd>
			<?php echo h($department['Department']['maxAmt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsAllowFS'); ?></dt>
		<dd>
			<?php echo h($department['Department']['isAllowFS']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsNegative'); ?></dt>
		<dd>
			<?php echo h($department['Department']['isNegative']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsFuel'); ?></dt>
		<dd>
			<?php echo h($department['Department']['isFuel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsAllowFQ'); ?></dt>
		<dd>
			<?php echo h($department['Department']['isAllowFQ']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsAllowSD'); ?></dt>
		<dd>
			<?php echo h($department['Department']['isAllowSD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsBL1'); ?></dt>
		<dd>
			<?php echo h($department['Department']['isBL1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsBL2'); ?></dt>
		<dd>
			<?php echo h($department['Department']['isBL2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsMoneyOrder'); ?></dt>
		<dd>
			<?php echo h($department['Department']['isMoneyOrder']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($department['Department']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($department['Department']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Department'), array('action' => 'edit', $department['Department']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Department'), array('action' => 'delete', $department['Department']['id']), null, __('Are you sure you want to delete # %s?', $department['Department']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Departments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Operations'); ?></h3>
	<?php if (!empty($department['Operation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Department Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($department['Operation'] as $operation): ?>
		<tr>
			<td><?php echo $operation['id']; ?></td>
			<td><?php echo $operation['name']; ?></td>
			<td><?php echo $operation['department_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'operations', 'action' => 'view', $operation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'operations', 'action' => 'edit', $operation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'operations', 'action' => 'delete', $operation['id']), null, __('Are you sure you want to delete # %s?', $operation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($department['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Middle Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('Department Id'); ?></th>
		<th><?php echo __('Superadmin'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($department['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['first_name']; ?></td>
			<td><?php echo $user['middle_name']; ?></td>
			<td><?php echo $user['last_name']; ?></td>
			<td><?php echo $user['group_id']; ?></td>
			<td><?php echo $user['department_id']; ?></td>
			<td><?php echo $user['superadmin']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
