<div class="vendors index">
	<h2><?php echo __('Vendors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('zip'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_person'); ?></th>
			<th><?php echo $this->Paginator->sort('account_number'); ?></th>
			<th><?php echo $this->Paginator->sort('GL#'); ?></th>
			<th><?php echo $this->Paginator->sort('Terms'); ?></th>
			<th><?php echo $this->Paginator->sort('use_negotiated_cost_in_invoices'); ?></th>
			<th><?php echo $this->Paginator->sort('EDI_parser'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($vendors as $vendor): ?>
	<tr>
		<td><?php echo h($vendor['Vendor']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($vendor['User']['username'], array('controller' => 'users', 'action' => 'view', $vendor['User']['id'])); ?>
		</td>
		<td><?php echo h($vendor['Vendor']['name']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['address']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['city']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($vendor['State']['id'], array('controller' => 'states', 'action' => 'view', $vendor['State']['id'])); ?>
		</td>
		<td><?php echo h($vendor['Vendor']['active']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['created']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['modified']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['zip']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['phone']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['fax']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['email']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['contact_person']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['account_number']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['GL#']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['Terms']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['use_negotiated_cost_in_invoices']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['EDI_parser']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $vendor['Vendor']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $vendor['Vendor']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $vendor['Vendor']['id']), null, __('Are you sure you want to delete # %s?', $vendor['Vendor']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Vendor'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inventories'), array('controller' => 'inventories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inventory'), array('controller' => 'inventories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendors Types'), array('controller' => 'vendors_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendors Type'), array('controller' => 'vendors_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
