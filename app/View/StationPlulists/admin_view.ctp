<div class="stationPlulists view">
<h2><?php  echo __('Station Plulist'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($stationPlulist['StationPlulist']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($stationPlulist['Station']['name'], array('controller' => 'stations', 'action' => 'view', $stationPlulist['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Domain'); ?></dt>
		<dd>
			<?php echo h($stationPlulist['StationPlulist']['domain']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Upc'); ?></dt>
		<dd>
			<?php echo h($stationPlulist['StationPlulist']['upc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpcModifier'); ?></dt>
		<dd>
			<?php echo h($stationPlulist['StationPlulist']['upcModifier']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($stationPlulist['StationPlulist']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Department'); ?></dt>
		<dd>
			<?php echo h($stationPlulist['StationPlulist']['department']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fee'); ?></dt>
		<dd>
			<?php echo h($stationPlulist['StationPlulist']['fee']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pcode'); ?></dt>
		<dd>
			<?php echo h($stationPlulist['StationPlulist']['pcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($stationPlulist['StationPlulist']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SellUnit'); ?></dt>
		<dd>
			<?php echo h($stationPlulist['StationPlulist']['SellUnit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($stationPlulist['StationPlulist']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($stationPlulist['StationPlulist']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Station Plulist'), array('action' => 'edit', $stationPlulist['StationPlulist']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Station Plulist'), array('action' => 'delete', $stationPlulist['StationPlulist']['id']), null, __('Are you sure you want to delete # %s?', $stationPlulist['StationPlulist']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Station Plulists'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station Plulist'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
