<div class="states view">
<h2><?php  echo __('State'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($state['State']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($state['Country']['name'], array('controller' => 'countries', 'action' => 'view', $state['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($state['State']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Default Name'); ?></dt>
		<dd>
			<?php echo h($state['State']['default_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit State'), array('action' => 'edit', $state['State']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete State'), array('action' => 'delete', $state['State']['id']), null, __('Are you sure you want to delete # %s?', $state['State']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Competitors'), array('controller' => 'competitors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competitor'), array('controller' => 'competitors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Corporations'), array('controller' => 'corporations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Corporation'), array('controller' => 'corporations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stores'), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('controller' => 'stores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Uses'), array('controller' => 'uses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Use'), array('controller' => 'uses', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Competitors'); ?></h3>
	<?php if (!empty($state['Competitor'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Rating'); ?></th>
		<th><?php echo __('Base Near'); ?></th>
		<th><?php echo __('Business Type Id'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Zip'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Summary'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($state['Competitor'] as $competitor): ?>
		<tr>
			<td><?php echo $competitor['id']; ?></td>
			<td><?php echo $competitor['name']; ?></td>
			<td><?php echo $competitor['rating']; ?></td>
			<td><?php echo $competitor['base_near']; ?></td>
			<td><?php echo $competitor['business_type_id']; ?></td>
			<td><?php echo $competitor['country_id']; ?></td>
			<td><?php echo $competitor['state_id']; ?></td>
			<td><?php echo $competitor['city']; ?></td>
			<td><?php echo $competitor['zip']; ?></td>
			<td><?php echo $competitor['address']; ?></td>
			<td><?php echo $competitor['summary']; ?></td>
			<td><?php echo $competitor['created']; ?></td>
			<td><?php echo $competitor['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'competitors', 'action' => 'view', $competitor['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'competitors', 'action' => 'edit', $competitor['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'competitors', 'action' => 'delete', $competitor['id']), null, __('Are you sure you want to delete # %s?', $competitor['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Competitor'), array('controller' => 'competitors', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Corporations'); ?></h3>
	<?php if (!empty($state['Corporation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Registration Number'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Email Id'); ?></th>
		<th><?php echo __('Zip'); ?></th>
		<th><?php echo __('Quick Book Path'); ?></th>
		<th><?php echo __('Tax  Code'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($state['Corporation'] as $corporation): ?>
		<tr>
			<td><?php echo $corporation['id']; ?></td>
			<td><?php echo $corporation['name']; ?></td>
			<td><?php echo $corporation['address']; ?></td>
			<td><?php echo $corporation['registration_number']; ?></td>
			<td><?php echo $corporation['phone']; ?></td>
			<td><?php echo $corporation['fax']; ?></td>
			<td><?php echo $corporation['email_id']; ?></td>
			<td><?php echo $corporation['zip']; ?></td>
			<td><?php echo $corporation['quick_book_path']; ?></td>
			<td><?php echo $corporation['tax _code']; ?></td>
			<td><?php echo $corporation['country_id']; ?></td>
			<td><?php echo $corporation['state_id']; ?></td>
			<td><?php echo $corporation['city']; ?></td>
			<td><?php echo $corporation['created']; ?></td>
			<td><?php echo $corporation['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'corporations', 'action' => 'view', $corporation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'corporations', 'action' => 'edit', $corporation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'corporations', 'action' => 'delete', $corporation['id']), null, __('Are you sure you want to delete # %s?', $corporation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Corporation'), array('controller' => 'corporations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Employees'); ?></h3>
	<?php if (!empty($state['Employee'])): ?>
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
		foreach ($state['Employee'] as $employee): ?>
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
<div class="related">
	<h3><?php echo __('Related Stores'); ?></h3>
	<?php if (!empty($state['Store'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Corporation Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Business Type Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('STI Number'); ?></th>
		<th><?php echo __('General Ledger Number'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Street'); ?></th>
		<th><?php echo __('Zip'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($state['Store'] as $store): ?>
		<tr>
			<td><?php echo $store['id']; ?></td>
			<td><?php echo $store['corporation_id']; ?></td>
			<td><?php echo $store['name']; ?></td>
			<td><?php echo $store['business_type_id']; ?></td>
			<td><?php echo $store['state_id']; ?></td>
			<td><?php echo $store['STI_number']; ?></td>
			<td><?php echo $store['general_ledger_number']; ?></td>
			<td><?php echo $store['country_id']; ?></td>
			<td><?php echo $store['fax']; ?></td>
			<td><?php echo $store['city']; ?></td>
			<td><?php echo $store['phone']; ?></td>
			<td><?php echo $store['street']; ?></td>
			<td><?php echo $store['zip']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'stores', 'action' => 'view', $store['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'stores', 'action' => 'edit', $store['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'stores', 'action' => 'delete', $store['id']), null, __('Are you sure you want to delete # %s?', $store['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Store'), array('controller' => 'stores', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Uses'); ?></h3>
	<?php if (!empty($state['Use'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Account Name'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Zip Id'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Mobile'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Company Number'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($state['Use'] as $use): ?>
		<tr>
			<td><?php echo $use['id']; ?></td>
			<td><?php echo $use['account_name']; ?></td>
			<td><?php echo $use['password']; ?></td>
			<td><?php echo $use['first_name']; ?></td>
			<td><?php echo $use['last_name']; ?></td>
			<td><?php echo $use['address']; ?></td>
			<td><?php echo $use['country_id']; ?></td>
			<td><?php echo $use['state_id']; ?></td>
			<td><?php echo $use['city_id']; ?></td>
			<td><?php echo $use['zip_id']; ?></td>
			<td><?php echo $use['email']; ?></td>
			<td><?php echo $use['phone']; ?></td>
			<td><?php echo $use['mobile']; ?></td>
			<td><?php echo $use['fax']; ?></td>
			<td><?php echo $use['company_number']; ?></td>
			<td><?php echo $use['created']; ?></td>
			<td><?php echo $use['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'uses', 'action' => 'view', $use['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'uses', 'action' => 'edit', $use['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'uses', 'action' => 'delete', $use['id']), null, __('Are you sure you want to delete # %s?', $use['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Use'), array('controller' => 'uses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
