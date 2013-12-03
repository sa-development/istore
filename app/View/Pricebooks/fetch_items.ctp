<div class="stations index">
	<h2><?php echo __('PRICE BOOK'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo __('id'); ?></th>
			<th><?php echo __('name'); ?></th>
			<th><?php echo __('business_type_id'); ?></th>
			<th><?php echo __('created'); ?></th>
			<th><?php echo __('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	//foreach ($stations as $station): ?>
	
	<tr>
		<td><?php //echo h($station['Station']['id']); ?>&nbsp;</td>
		<td><?php //echo h($station['Station']['name']); ?>&nbsp;</td>
		<td>
			<?php //echo $this->Html->link($station['BusinessTypy']['name'], array('controller' => 'business_types', 'action' => 'view', $station['BusinessTypy']['id'])); ?>
		</td>
		<td><?php //echo h($station['Station']['cash_register_brand']); ?>&nbsp;</td>
		<td><?php //echo h($station['Station']['ip_address']); ?>&nbsp;</td>
		<td><?php //echo h($station['Station']['user_name']); ?>&nbsp;</td>
		<td><?php //echo h($station['Station']['password']); ?>&nbsp;</td>
		<td>
			<?php //echo $this->Html->link($station['User']['username'], array('controller' => 'users', 'action' => 'view', $station['User']['id'])); ?>
		</td>
		<td><?php //echo h($station['Station']['created']); ?>&nbsp;</td>
		<td><?php //echo h($station['Station']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit')); ?>
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $station['Station']['id']), null, __('Are you sure you want to delete # %s?', $station['Station']['id'])); ?>
		</td>
	</tr>
<?php //endforeach; ?>
	</table>
	
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('View'), array('action' => 'add')); ?></li>
		
	</ul>
</div>
