<div class="uploadinvoices index">
		<table  cellpadding="0" cellspacing="0">
		<tr>
			<td width='95%'><h2><?php echo __('Uploadinvoices'); ?></h2></td>
			<td width='5%'><?php
				echo $this->Html->image("actions/tab_new.png",array("alt" => "Add New",'width' => '60px','url' =>  array('controller' => 'uploadinvoices', 'action' => 'add'), array('class' => 'thickbox')));
			?>
			<!--<a class='thickbox'  href='uploadinvoices/add/?height=440&width=1000&TB_iframe=true'><img src='img/actions/tab_new.png'></a>-->
			</td>
		</tr>		
	</table>
	<table cellpadding="0" cellspacing="0" class="grid">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('file'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($uploadinvoices as $uploadinvoice): ?>
	<tr>
		<td><?php echo h($uploadinvoice['Uploadinvoice']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($uploadinvoice['User']['username'], 
			                                            array('controller' => 'users', 
														'action' => 'view', 
														$uploadinvoice['User']['id'])); 
			?>
		</td>
		<td><?php echo $this->Html->link($uploadinvoice['Uploadinvoice']['file'],
                                    		'/files/uploads/'.$uploadinvoice['Uploadinvoice']['file']); 
			?>&nbsp;</td>
		<td><?php echo h($uploadinvoice['Uploadinvoice']['name']); ?>&nbsp;</td>
		<td><?php echo h($uploadinvoice['Uploadinvoice']['note']); ?>&nbsp;</td>
		<td><?php echo h($uploadinvoice['Uploadinvoice']['status']); ?>&nbsp;</td>
		<td><?php echo h($uploadinvoice['Uploadinvoice']['created']); ?>&nbsp;</td>
		<td><?php echo h($uploadinvoice['Uploadinvoice']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'),
                                   			array('action' => 'view',
											      $uploadinvoice['Uploadinvoice']['id'])); 
			?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $uploadinvoice['Uploadinvoice']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'),
                                 			array('action' => 'delete', 
											$uploadinvoice['Uploadinvoice']['id']),
											null, __('Are you sure you want to delete # %s?',
											$uploadinvoice['Uploadinvoice']['id'])); 
			?>
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
