<div class="vrubyreptcarwashes view">
<h2><?php  echo __('Vrubyreptcarwash'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vrubyreptcarwash['Station']['name'], array('controller' => 'stations', 'action' => 'view', $vrubyreptcarwash['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodBeginDate'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['periodBeginDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodEndDate'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['periodEndDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodType'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['periodType']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CoinRevenue'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['coinRevenue']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TokenRevenue'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['tokenRevenue']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('WashesUsed'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['washesUsed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NetSales'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['netSales']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('GrossSales'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['grossSales']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PaidTicketsCount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['paidTicketsCount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PaidTicketsAmount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['paidTicketsAmount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FreeTicketsCount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['freeTicketsCount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FreeTicketsAmount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['freeTicketsAmount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FleetTicketsCount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['fleetTicketsCount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FleetTicketsAmount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['fleetTicketsAmount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cashamount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['cashamount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cashcount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['cashcount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creditamount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['creditamount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creditcount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['creditcount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discounts'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['discounts']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcarwash['Vrubyreptcarwash']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vrubyreptcarwash'), array('action' => 'edit', $vrubyreptcarwash['Vrubyreptcarwash']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vrubyreptcarwash'), array('action' => 'delete', $vrubyreptcarwash['Vrubyreptcarwash']['id']), null, __('Are you sure you want to delete # %s?', $vrubyreptcarwash['Vrubyreptcarwash']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vrubyreptcarwashes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vrubyreptcarwash'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
