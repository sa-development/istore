<div class="parts view">
<h2><?php  echo __('Part'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($part['Part']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Part No'); ?></dt>
		<dd>
			<?php echo h($part['Part']['part_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rev'); ?></dt>
		<dd>
			<?php echo h($part['Part']['rev']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Class'); ?></dt>
		<dd>
			<?php echo h($part['Part']['class']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($part['Part']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($part['Part']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material Type'); ?></dt>
		<dd>
			<?php echo h($part['Part']['material_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Source'); ?></dt>
		<dd>
			<?php echo h($part['Part']['source']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit Cost'); ?></dt>
		<dd>
			<?php echo h($part['Part']['unit_cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($part['Part']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Package'); ?></dt>
		<dd>
			<?php echo h($part['Part']['package']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($part['Part']['active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Part'), array('action' => 'edit', $part['Part']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Part'), array('action' => 'delete', $part['Part']['id']), null, __('Are you sure you want to delete # %s?', $part['Part']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Parts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Part'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Kitparts'), array('controller' => 'kitparts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kitpart'), array('controller' => 'kitparts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mfgparts'), array('controller' => 'mfgparts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfgpart'), array('controller' => 'mfgparts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Kitparts'); ?></h3>
	<?php if (!empty($part['Kitpart'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Part Id'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($part['Kitpart'] as $kitpart): ?>
		<tr>
			<td><?php echo $kitpart['id']; ?></td>
			<td><?php echo $kitpart['product_id']; ?></td>
			<td><?php echo $kitpart['part_id']; ?></td>
			<td><?php echo $kitpart['qty']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'kitparts', 'action' => 'view', $kitpart['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'kitparts', 'action' => 'edit', $kitpart['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'kitparts', 'action' => 'delete', $kitpart['id']), null, __('Are you sure you want to delete # %s?', $kitpart['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Kitpart'), array('controller' => 'kitparts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Mfgparts'); ?></h3>
	<?php if (!empty($part['Mfgpart'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Mfgr'); ?></th>
		<th><?php echo __('Pref'); ?></th>
		<th><?php echo __('Mfg Part No'); ?></th>
		<th><?php echo __('Part Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($part['Mfgpart'] as $mfgpart): ?>
		<tr>
			<td><?php echo $mfgpart['id']; ?></td>
			<td><?php echo $mfgpart['mfgr']; ?></td>
			<td><?php echo $mfgpart['pref']; ?></td>
			<td><?php echo $mfgpart['mfg_part_no']; ?></td>
			<td><?php echo $mfgpart['part_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mfgparts', 'action' => 'view', $mfgpart['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mfgparts', 'action' => 'edit', $mfgpart['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mfgparts', 'action' => 'delete', $mfgpart['id']), null, __('Are you sure you want to delete # %s?', $mfgpart['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mfgpart'), array('controller' => 'mfgparts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
