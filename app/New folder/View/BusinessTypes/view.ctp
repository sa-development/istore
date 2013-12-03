<div class="businessTypes view">
<h2><?php  echo __('Business Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($businessType['BusinessType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($businessType['BusinessType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($businessType['BusinessType']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Business Type'), array('action' => 'edit', $businessType['BusinessType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Business Type'), array('action' => 'delete', $businessType['BusinessType']['id']), null, __('Are you sure you want to delete # %s?', $businessType['BusinessType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Business Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Competitors'), array('controller' => 'competitors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competitor'), array('controller' => 'competitors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stores'), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('controller' => 'stores', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Competitors'); ?></h3>
	<?php if (!empty($businessType['Competitor'])): ?>
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
		foreach ($businessType['Competitor'] as $competitor): ?>
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
	<h3><?php echo __('Related Stores'); ?></h3>
	<?php if (!empty($businessType['Store'])): ?>
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
		foreach ($businessType['Store'] as $store): ?>
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
