<div class="corporations index">
	<table  cellpadding="0" cellspacing="0">
		<tr>
			<td width='95%'><h2><?php echo __('Corporations'); ?></h2></td>
			<td width='5%'><?php
				echo $this->Html->image("actions/tab_new.png", array("alt" => "Add New",'width' => '60px','url' =>  array('controller' => 	'corporations', 'action' => 'add')));
			?>
			</td>
		</tr>		
	</table>
	<table cellpadding="0" cellspacing="0" class="grid">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('registration_number'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('email_id'); ?></th>
			<th><?php echo $this->Paginator->sort('zip'); ?></th>
			<th><?php echo $this->Paginator->sort('quick_book_path'); ?></th>
			<th><?php echo $this->Paginator->sort('tax _code'); ?></th>
			
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($corporations as $corporation): ?>
	<tr>
		<td><?php echo h($corporation['Corporation']['id']); ?>&nbsp;</td>
		<td><?php echo h($corporation['Corporation']['name']); ?>&nbsp;</td>
		<td><?php echo h($corporation['Corporation']['address']); ?>&nbsp;</td>
		<td><?php echo h($corporation['Corporation']['registration_number']); ?>&nbsp;</td>
		<td><?php echo h($corporation['Corporation']['phone']); ?>&nbsp;</td>
		<td><?php echo h($corporation['Corporation']['fax']); ?>&nbsp;</td>
		<td><?php echo h($corporation['Corporation']['email_id']); ?>&nbsp;</td>
		<td><?php echo h($corporation['Corporation']['zip']); ?>&nbsp;</td>
		<td><?php echo h($corporation['Corporation']['quick_book_path']); ?>&nbsp;</td>
		<td><?php echo h($corporation['Corporation']['tax _code']); ?>&nbsp;</td>
	
		<td><?php echo h($corporation['Corporation']['city']); ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $corporation['Corporation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $corporation['Corporation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $corporation['Corporation']['id']), null, __('Are you sure you want to delete # %s?', $corporation['Corporation']['id'])); ?>
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
