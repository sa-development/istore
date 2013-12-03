<div class="vrubyreptprpricelvls view">
<h2><?php  echo __('Vrubyreptprpricelvl'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vrubyreptprpricelvl['Station']['name'], array('controller' => 'stations', 'action' => 'view', $vrubyreptprpricelvl['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodBeginDate'); ?></dt>
		<dd>
			<?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['periodBeginDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodEndDate'); ?></dt>
		<dd>
			<?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['periodEndDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodType'); ?></dt>
		<dd>
			<?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['periodType']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cred FuelInfocount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['cred_fuelInfocount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cred FuelInfoamount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['cred_fuelInfoamount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cred FuelInfovolume'); ?></dt>
		<dd>
			<?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['cred_fuelInfovolume']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cash FuelInfocount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['cash_fuelInfocount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cash FuelInfoamount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['cash_fuelInfoamount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cash FuelInfovolume'); ?></dt>
		<dd>
			<?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['cash_fuelInfovolume']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subtotal Count'); ?></dt>
		<dd>
			<?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['subtotal_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subtotal Amount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['subtotal_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subtotal Volume'); ?></dt>
		<dd>
			<?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['subtotal_volume']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($vrubyreptprpricelvl['Vrubyreptprpricelvl']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vrubyreptprpricelvl'), array('action' => 'edit', $vrubyreptprpricelvl['Vrubyreptprpricelvl']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vrubyreptprpricelvl'), array('action' => 'delete', $vrubyreptprpricelvl['Vrubyreptprpricelvl']['id']), null, __('Are you sure you want to delete # %s?', $vrubyreptprpricelvl['Vrubyreptprpricelvl']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vrubyreptprpricelvls'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vrubyreptprpricelvl'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
