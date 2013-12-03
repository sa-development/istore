<div class="vendors index">
	<table  cellpadding="0" cellspacing="0">
		<tr>
			<td width='95%'><h2><?php echo __('Vendors'); ?></h2></td>
			<td width='5%'>
			<a   href='add/'><img src='../img/actions/tab_new.png'></a>
		
			</td>
		</tr>		
	</table>
	<table cellpadding="0" cellspacing="0" class='grid'>
	<tr>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
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
		
		
		<td><?php echo h($vendor['Vendor']['name']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['address']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['email']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['contact_person']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['account_number']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['GL#']); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['Terms']); ?>&nbsp;</td>
		<td><?php echo h(($vendor['Vendor']['use_negotiated_cost_in_invoices']) ? 'Yes' : 'No'); ?>&nbsp;</td>
		<td><?php echo h($vendor['Vendor']['EDI_parser']? 'Yes' : 'No'); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $vendor['Vendor']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $vendor['Vendor']['id']));?>
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
		<li><?php echo $this->Html->link(__('List Inventories'), array('controller' => 'inventories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
	</ul>
</div>

