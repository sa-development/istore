<div class="stores index">
	<h2><?php echo __('Stores'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="grid">
	<tr>
			
			<th><?php echo $this->Paginator->sort('corporation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('business_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<th><?php echo $this->Paginator->sort('STI_number'); ?></th>
			<th><?php echo $this->Paginator->sort('general_ledger_number'); ?></th>
			<?php /*<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>*/?>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('street'); ?></th>
			<th><?php echo $this->Paginator->sort('zip'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($stores as $store): ?>
	<tr>
		
		<td><?php echo h($store['Store']['corporation_id']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['name']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['business_type_id']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['state_id']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['STI_number']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['general_ledger_number']); ?>&nbsp;</td>
		<?php /* <td><?php echo h($store['Store']['country_id']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['fax']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['city']); ?>&nbsp;</td>*/?>
		<td><?php echo h($store['Store']['phone']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['street']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['zip']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $store['Store']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $store['Store']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $store['Store']['id']), null, __('Are you sure you want to delete # %s?', $store['Store']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Store'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Back to Dashboard'), array('controller' => 'dashboards', 'action' => 'index')); ?></li>
	</ul>
</div>
