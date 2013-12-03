<div class="vfueltotals view">
<h2><?php  echo __('Vfueltotal'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vfueltotal['Vfueltotal']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodType'); ?></dt>
		<dd>
			<?php echo h($vfueltotal['Vfueltotal']['periodType']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($vfueltotal['Vfueltotal']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodSeqNum'); ?></dt>
		<dd>
			<?php echo h($vfueltotal['Vfueltotal']['periodSeqNum']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodBeginDate'); ?></dt>
		<dd>
			<?php echo h($vfueltotal['Vfueltotal']['periodBeginDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodEndDate'); ?></dt>
		<dd>
			<?php echo h($vfueltotal['Vfueltotal']['periodEndDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo h($vfueltotal['Vfueltotal']['site']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FuelingPositionId'); ?></dt>
		<dd>
			<?php echo h($vfueltotal['Vfueltotal']['fuelingPositionId']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ProductNumber'); ?></dt>
		<dd>
			<?php echo h($vfueltotal['Vfueltotal']['productNumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name2'); ?></dt>
		<dd>
			<?php echo h($vfueltotal['Vfueltotal']['name2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FuelVolume'); ?></dt>
		<dd>
			<?php echo h($vfueltotal['Vfueltotal']['fuelVolume']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Uom'); ?></dt>
		<dd>
			<?php echo h($vfueltotal['Vfueltotal']['uom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FuelMoney'); ?></dt>
		<dd>
			<?php echo h($vfueltotal['Vfueltotal']['fuelMoney']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency'); ?></dt>
		<dd>
			<?php echo h($vfueltotal['Vfueltotal']['currency']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ProductID'); ?></dt>
		<dd>
			<?php echo h($vfueltotal['Vfueltotal']['productID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FuelingPointStatus'); ?></dt>
		<dd>
			<?php echo h($vfueltotal['Vfueltotal']['fuelingPointStatus']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station Id'); ?></dt>
		<dd>
			<?php echo h($vfueltotal['Vfueltotal']['station_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($vfueltotal['Vfueltotal']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($vfueltotal['Vfueltotal']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vfueltotal'), array('action' => 'edit', $vfueltotal['Vfueltotal']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vfueltotal'), array('action' => 'delete', $vfueltotal['Vfueltotal']['id']), null, __('Are you sure you want to delete # %s?', $vfueltotal['Vfueltotal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vfueltotals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vfueltotal'), array('action' => 'add')); ?> </li>
	</ul>
</div>
