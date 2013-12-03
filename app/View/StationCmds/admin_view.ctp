<div class="stationCmds view">
<h2><?php  echo __('Station Cmd'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($stationCmd['StationCmd']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($stationCmd['Station']['name'], array('controller' => 'stations', 'action' => 'view', $stationCmd['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cmd Url'); ?></dt>
		<dd>
			<?php echo h($stationCmd['StationCmd']['cmd_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($stationCmd['StationCmd']['data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($stationCmd['StationCmd']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($stationCmd['StationCmd']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Station Cmd'), array('action' => 'edit', $stationCmd['StationCmd']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Station Cmd'), array('action' => 'delete', $stationCmd['StationCmd']['id']), null, __('Are you sure you want to delete # %s?', $stationCmd['StationCmd']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Station Cmds'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station Cmd'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
