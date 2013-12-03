<div class="vrubyreptnetworks view">
<h2><?php  echo __('Vrubyreptnetwork'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vrubyreptnetwork['Vrubyreptnetwork']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vrubyreptnetwork['Station']['name'], array('controller' => 'stations', 'action' => 'view', $vrubyreptnetwork['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodBeginDate'); ?></dt>
		<dd>
			<?php echo h($vrubyreptnetwork['Vrubyreptnetwork']['periodBeginDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodEndDate'); ?></dt>
		<dd>
			<?php echo h($vrubyreptnetwork['Vrubyreptnetwork']['periodEndDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodType'); ?></dt>
		<dd>
			<?php echo h($vrubyreptnetwork['Vrubyreptnetwork']['periodType']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CardNumber'); ?></dt>
		<dd>
			<?php echo h($vrubyreptnetwork['Vrubyreptnetwork']['cardNumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CardName'); ?></dt>
		<dd>
			<?php echo h($vrubyreptnetwork['Vrubyreptnetwork']['cardName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CardCharges'); ?></dt>
		<dd>
			<?php echo h($vrubyreptnetwork['Vrubyreptnetwork']['cardCharges']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CardChargescount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptnetwork['Vrubyreptnetwork']['cardChargescount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CardCorrections'); ?></dt>
		<dd>
			<?php echo h($vrubyreptnetwork['Vrubyreptnetwork']['cardCorrections']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CardCorrectionscount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptnetwork['Vrubyreptnetwork']['cardCorrectionscount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($vrubyreptnetwork['Vrubyreptnetwork']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Xmldata'); ?></dt>
		<dd>
			<?php echo h($vrubyreptnetwork['Vrubyreptnetwork']['xmldata']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($vrubyreptnetwork['Vrubyreptnetwork']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($vrubyreptnetwork['Vrubyreptnetwork']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vrubyreptnetwork'), array('action' => 'edit', $vrubyreptnetwork['Vrubyreptnetwork']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vrubyreptnetwork'), array('action' => 'delete', $vrubyreptnetwork['Vrubyreptnetwork']['id']), null, __('Are you sure you want to delete # %s?', $vrubyreptnetwork['Vrubyreptnetwork']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vrubyreptnetworks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vrubyreptnetwork'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
