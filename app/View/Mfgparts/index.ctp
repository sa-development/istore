<div class="mfgparts index">
	<h2><?php echo __('Mfgparts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('mfgr'); ?></th>
			<th><?php echo $this->Paginator->sort('pref'); ?></th>
			<th><?php echo $this->Paginator->sort('mfg_part_no'); ?></th>
			<th><?php echo $this->Paginator->sort('part_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($mfgparts as $mfgpart): ?>
	<tr>
		<td><?php echo h($mfgpart['Mfgpart']['id']); ?>&nbsp;</td>
		<td><?php echo h($mfgpart['Mfgpart']['mfgr']); ?>&nbsp;</td>
		<td><?php echo h($mfgpart['Mfgpart']['pref']); ?>&nbsp;</td>
		<td><?php echo h($mfgpart['Mfgpart']['mfg_part_no']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mfgpart['Part']['part_no'], array('controller' => 'parts', 'action' => 'view', $mfgpart['Part']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mfgpart['Mfgpart']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mfgpart['Mfgpart']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mfgpart['Mfgpart']['id']), null, __('Are you sure you want to delete # %s?', $mfgpart['Mfgpart']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Mfgpart'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Parts'), array('controller' => 'parts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Part'), array('controller' => 'parts', 'action' => 'add')); ?> </li>
	</ul>
</div>
