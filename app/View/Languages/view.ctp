<div class="languages view">
<h2><?php  echo __('Language'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($language['Language']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($language['Language']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($language['Language']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($language['Language']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Language'), array('action' => 'edit', $language['Language']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Language'), array('action' => 'delete', $language['Language']['id']), null, __('Are you sure you want to delete # %s?', $language['Language']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Languages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Employees'); ?></h3>
	<?php if (!empty($language['Employee'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Sex'); ?></th>
		<th><?php echo __('Language Id'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Mobile'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('SS Hash'); ?></th>
		<th><?php echo __('Birth Date'); ?></th>
		<th><?php echo __('Corporation Id'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Dependants'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('Local Tax'); ?></th>
		<th><?php echo __('1099 Legible'); ?></th>
		<th><?php echo __('Married'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($language['Employee'] as $employee): ?>
		<tr>
			<td><?php echo $employee['id']; ?></td>
			<td><?php echo $employee['first_name']; ?></td>
			<td><?php echo $employee['last_name']; ?></td>
			<td><?php echo $employee['sex']; ?></td>
			<td><?php echo $employee['language_id']; ?></td>
			<td><?php echo $employee['address']; ?></td>
			<td><?php echo $employee['fax']; ?></td>
			<td><?php echo $employee['phone']; ?></td>
			<td><?php echo $employee['email']; ?></td>
			<td><?php echo $employee['mobile']; ?></td>
			<td><?php echo $employee['city']; ?></td>
			<td><?php echo $employee['state_id']; ?></td>
			<td><?php echo $employee['SS_hash']; ?></td>
			<td><?php echo $employee['birth_date']; ?></td>
			<td><?php echo $employee['corporation_id']; ?></td>
			<td><?php echo $employee['status']; ?></td>
			<td><?php echo $employee['dependants']; ?></td>
			<td><?php echo $employee['country_id']; ?></td>
			<td><?php echo $employee['local_tax']; ?></td>
			<td><?php echo $employee['1099_legible']; ?></td>
			<td><?php echo $employee['married']; ?></td>
			<td><?php echo $employee['created']; ?></td>
			<td><?php echo $employee['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'employees', 'action' => 'view', $employee['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'employees', 'action' => 'edit', $employee['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'employees', 'action' => 'delete', $employee['id']), null, __('Are you sure you want to delete # %s?', $employee['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
