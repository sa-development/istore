<div class="stations index">
	<table  cellpadding="0" cellspacing="0">
		<tr>
			<td width='95%'><h2><?php echo __('Stations'); ?></h2></td>
			<td width='5%'><?php
				echo $this->Html->image("actions/tab_new.png", array("alt" => "Add New",'width' => '60px','url' =>  array('controller' => 	'stations', 'action' => 'add')));
			?>
			</td>
		</tr>		
	</table>
	<table cellpadding="0" cellspacing="0" class="grid">
	<tr>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('corporation_id'); ?></th>	
			<th><?php echo $this->Paginator->sort('cash_register_brand', 'CR Brand'); ?></th>
			<th><?php echo $this->Paginator->sort('ip_address', 'IP'); ?></th>
			<th><?php echo $this->Paginator->sort('user_name'); ?></th>
			<th><?php echo __('Status') ?></th>
			
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($stations as $station): ?>
	<tr>
		<td><?php echo h($station['Station']['name']); ?>&nbsp;</td>
		<td><?php echo h($station['Corporation']['name']); ?>&nbsp;</td>
		<td><?php echo h($station['Station']['cash_register_brand']); ?>&nbsp;</td>
		<td><?php echo h($station['Station']['ip_address']); ?>&nbsp;</td>
		<td><?php echo h($station['Station']['user_name']); ?>&nbsp;</td>

		<td>Signal Link<?php //echo h($station['Station']['created']); ?>&nbsp;</td>
		
		<td class="actions">
			<?php //echo $this->Html->link(__('VIEW POS DATA'), array('controller' => 'station_cmds', 'action' => 'index', $station['Station']['id'])); ?>
                        <?php echo $this->Html->link(__('Department'), array('controller' => 'departments', 'action' => 'index', '?' => array('station' => $station['Station']['id']))); ?>
                        <?php echo $this->Html->link(__('Product code'), array('controller' => 'prodcodes', 'action' => 'index', '?' => array('station' => $station['Station']['id']))); ?>
                        <?php echo $this->Html->link(__('Category'), array('controller' => 'categories', 'action' => 'index', '?' => array('station' => $station['Station']['id']))); ?>
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $station['Station']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $station['Station']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $station['Station']['id']), null, __('Are you sure you want to delete # %s?', $station['Station']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Back to Dashboard'), array('controller' => 'dashboards', 'action' => 'index')); ?></li>
		
	</ul>
</div>
