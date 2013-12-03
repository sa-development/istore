<div class="vrubyrepttierproducts view">
<h2><?php  echo __('Vrubyrepttierproduct'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttierproduct['Vrubyrepttierproduct']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vrubyrepttierproduct['Station']['name'], array('controller' => 'stations', 'action' => 'view', $vrubyrepttierproduct['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttierproduct['Vrubyrepttierproduct']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodBeginDate'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttierproduct['Vrubyrepttierproduct']['periodBeginDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodEndDate'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttierproduct['Vrubyrepttierproduct']['periodEndDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodType'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttierproduct['Vrubyrepttierproduct']['periodType']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vssite'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttierproduct['Vrubyrepttierproduct']['vssite']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FuelfuelTierBase'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttierproduct['Vrubyrepttierproduct']['fuelfuelTierBase']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ProductInfoname'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttierproduct['Vrubyrepttierproduct']['productInfoname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FuelInfocount'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttierproduct['Vrubyrepttierproduct']['fuelInfocount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FuelInfoamount'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttierproduct['Vrubyrepttierproduct']['fuelInfoamount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FuelInfovolume'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttierproduct['Vrubyrepttierproduct']['fuelInfovolume']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttierproduct['Vrubyrepttierproduct']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttierproduct['Vrubyrepttierproduct']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttierproduct['Vrubyrepttierproduct']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vrubyrepttierproduct'), array('action' => 'edit', $vrubyrepttierproduct['Vrubyrepttierproduct']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vrubyrepttierproduct'), array('action' => 'delete', $vrubyrepttierproduct['Vrubyrepttierproduct']['id']), null, __('Are you sure you want to delete # %s?', $vrubyrepttierproduct['Vrubyrepttierproduct']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vrubyrepttierproducts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vrubyrepttierproduct'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
