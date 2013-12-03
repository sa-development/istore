<div class="mfgparts view">
<h2><?php  echo __('Mfgpart'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mfgpart['Mfgpart']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mfgr'); ?></dt>
		<dd>
			<?php echo h($mfgpart['Mfgpart']['mfgr']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pref'); ?></dt>
		<dd>
			<?php echo h($mfgpart['Mfgpart']['pref']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mfg Part No'); ?></dt>
		<dd>
			<?php echo h($mfgpart['Mfgpart']['mfg_part_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Part'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mfgpart['Part']['part_no'], array('controller' => 'parts', 'action' => 'view', $mfgpart['Part']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mfgpart'), array('action' => 'edit', $mfgpart['Mfgpart']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mfgpart'), array('action' => 'delete', $mfgpart['Mfgpart']['id']), null, __('Are you sure you want to delete # %s?', $mfgpart['Mfgpart']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mfgparts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfgpart'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Parts'), array('controller' => 'parts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Part'), array('controller' => 'parts', 'action' => 'add')); ?> </li>
	</ul>
</div>
