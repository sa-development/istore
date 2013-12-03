<div class="vrubyreptdeals view">
<h2><?php  echo __('Vrubyreptdeal'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vrubyreptdeal['Vrubyreptdeal']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vrubyreptdeal['Station']['name'], array('controller' => 'stations', 'action' => 'view', $vrubyreptdeal['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodBeginDate'); ?></dt>
		<dd>
			<?php echo h($vrubyreptdeal['Vrubyreptdeal']['periodBeginDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodEndDate'); ?></dt>
		<dd>
			<?php echo h($vrubyreptdeal['Vrubyreptdeal']['periodEndDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodType'); ?></dt>
		<dd>
			<?php echo h($vrubyreptdeal['Vrubyreptdeal']['periodType']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Count'); ?></dt>
		<dd>
			<?php echo h($vrubyreptdeal['Vrubyreptdeal']['count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptdeal['Vrubyreptdeal']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ItemCount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptdeal['Vrubyreptdeal']['itemCount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($vrubyreptdeal['Vrubyreptdeal']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($vrubyreptdeal['Vrubyreptdeal']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vrubyreptdeal'), array('action' => 'edit', $vrubyreptdeal['Vrubyreptdeal']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vrubyreptdeal'), array('action' => 'delete', $vrubyreptdeal['Vrubyreptdeal']['id']), null, __('Are you sure you want to delete # %s?', $vrubyreptdeal['Vrubyreptdeal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vrubyreptdeals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vrubyreptdeal'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
