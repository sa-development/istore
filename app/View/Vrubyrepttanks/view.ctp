<div class="vrubyrepttanks view">
<h2><?php  echo __('Vrubyrepttank'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttank['Vrubyrepttank']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vrubyrepttank['Station']['name'], array('controller' => 'stations', 'action' => 'view', $vrubyrepttank['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodBeginDate'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttank['Vrubyrepttank']['periodBeginDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodEndDate'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttank['Vrubyrepttank']['periodEndDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodType'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttank['Vrubyrepttank']['periodType']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FuelfuelTank'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttank['Vrubyrepttank']['fuelfuelTank']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FuelInfocount'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttank['Vrubyrepttank']['fuelInfocount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FuelInfoamount'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttank['Vrubyrepttank']['fuelInfoamount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FuelInfovolume'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttank['Vrubyrepttank']['fuelInfovolume']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttank['Vrubyrepttank']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttank['Vrubyrepttank']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttank['Vrubyrepttank']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vrubyrepttank'), array('action' => 'edit', $vrubyrepttank['Vrubyrepttank']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vrubyrepttank'), array('action' => 'delete', $vrubyrepttank['Vrubyrepttank']['id']), null, __('Are you sure you want to delete # %s?', $vrubyrepttank['Vrubyrepttank']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vrubyrepttanks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vrubyrepttank'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
