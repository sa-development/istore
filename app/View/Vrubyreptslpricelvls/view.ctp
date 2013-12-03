<div class="vrubyreptslpricelvls view">
<h2><?php  echo __('Vrubyreptslpricelvl'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vrubyreptslpricelvl['Vrubyreptslpricelvl']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vrubyreptslpricelvl['Station']['name'], array('controller' => 'stations', 'action' => 'view', $vrubyreptslpricelvl['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodBeginDate'); ?></dt>
		<dd>
			<?php echo h($vrubyreptslpricelvl['Vrubyreptslpricelvl']['periodBeginDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodEndDate'); ?></dt>
		<dd>
			<?php echo h($vrubyreptslpricelvl['Vrubyreptslpricelvl']['periodEndDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodType'); ?></dt>
		<dd>
			<?php echo h($vrubyreptslpricelvl['Vrubyreptslpricelvl']['periodType']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($vrubyreptslpricelvl['Vrubyreptslpricelvl']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FuelInfoamount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptslpricelvl['Vrubyreptslpricelvl']['fuelInfoamount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FuelInfocount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptslpricelvl['Vrubyreptslpricelvl']['fuelInfocount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($vrubyreptslpricelvl['Vrubyreptslpricelvl']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($vrubyreptslpricelvl['Vrubyreptslpricelvl']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($vrubyreptslpricelvl['Vrubyreptslpricelvl']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vrubyreptslpricelvl'), array('action' => 'edit', $vrubyreptslpricelvl['Vrubyreptslpricelvl']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vrubyreptslpricelvl'), array('action' => 'delete', $vrubyreptslpricelvl['Vrubyreptslpricelvl']['id']), null, __('Are you sure you want to delete # %s?', $vrubyreptslpricelvl['Vrubyreptslpricelvl']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vrubyreptslpricelvls'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vrubyreptslpricelvl'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
