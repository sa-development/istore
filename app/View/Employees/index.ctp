<div class="employees index">	
	<table  cellpadding="0" cellspacing="0">
		<tr>
			<td width='95%'><h2><?php echo __('Employees'); ?></h2></td>
			<td width='5%'><?php
				//echo $this->Html->image("actions/tab_new.png", array("alt" => "Add New",'width' => '60px','url' =>  array('controller' => 	'employees', 'action' => 'add')));
			?>
			<a href='employees/add'><img src='img/actions/tab_new.png'></a>
			</td>
		</tr>		
	</table>
	<table cellpadding="0" cellspacing="0" class="grid">
	<tr>
			
			<th><?php echo __('Name'); ?></th>
			
			
		
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('mobile'); ?></th>
		
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			
			<th><?php echo $this->Paginator->sort('local_tax'); ?></th>
			<th><?php echo $this->Paginator->sort('1099_legible'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($employees as $employee): ?>
	<tr>
		
		<td><?php echo h($employee['Employee']['first_name']) . h($employee['Employee']['last_name']); ?>&nbsp;</td>
		
		
		<td><?php echo h($employee['Employee']['address']); ?>&nbsp;</td>
		
		<td><?php echo h($employee['Employee']['email']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['mobile']); ?>&nbsp;</td>
		
		
		<td><?php echo h($employee['Employee']['status']); ?>&nbsp;</td>
		
		<td><?php echo h($employee['Employee']['local_tax']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['1099_legible']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $employee['Employee']['id']));?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $employee['Employee']['id']));?>							
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $employee['Employee']['id']), null, __('Are you sure you want to delete # %s?', $employee['Employee']['id'])); ?>
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
