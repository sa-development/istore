<div class="competitors index">
	<table  cellpadding="0" cellspacing="0">
		<tr>
			<td width='95%'><h2><?php echo __('Competitors'); ?></h2></td>
			<td width='5%'><?php
				echo $this->Html->image("actions/tab_new.png", array("alt" => "Add New",'width' => '60px','url' =>  array('controller' => 	'competitors', 'action' => 'add')));
			?>
			<!--<a  href='competitors/add'><img src='img/actions/tab_new.png'></a>-->
			</td>
		</tr>		
	</table>
	<table cellpadding="0" cellspacing="0" class="grid">
	<tr>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('rating'); ?></th>

			<th><?php echo $this->Paginator->sort('business_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('zip'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>

			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($competitors as $competitor): ?>
	<tr>
		<td><?php echo h($competitor['Competitor']['name']); ?>&nbsp;</td>
		<td><?php echo h($competitor['Competitor']['rating']); ?>&nbsp;</td>

		<td>
			<?php echo $this->Html->link($competitor['BusinessType']['name'], array('controller' => 'business_types', 'action' => 'view', $competitor['BusinessType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($competitor['Country']['name'], array('controller' => 'countries', 'action' => 'view', $competitor['Country']['id'])); ?>
		</td>
		<td><?php echo h($competitor['State']['default_name']); ?>&nbsp;</td>
		<td><?php echo h($competitor['Competitor']['city']); ?>&nbsp;</td>
		<td><?php echo h($competitor['Competitor']['zip']); ?>&nbsp;</td>
		<td><?php echo h($competitor['Competitor']['address']); ?>&nbsp;</td>

		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $competitor['Competitor']['id']));?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $competitor['Competitor']['id']));?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $competitor['Competitor']['id']), null, __('Are you sure you want to delete # %s?', $competitor['Competitor']['id'])); ?>
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
