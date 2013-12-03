<div class="vrubyreptpluses view">
<h2><?php  echo __('Vrubyreptplus'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vrubyreptplus['Vrubyreptplus']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodType'); ?></dt>
		<dd>
			<?php echo h($vrubyreptplus['Vrubyreptplus']['periodType']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodBeginDate'); ?></dt>
		<dd>
			<?php echo h($vrubyreptplus['Vrubyreptplus']['periodBeginDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodEndDate'); ?></dt>
		<dd>
			<?php echo h($vrubyreptplus['Vrubyreptplus']['periodEndDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TotalitemCount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptplus['Vrubyreptplus']['totalitemCount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TotalitemnetSales'); ?></dt>
		<dd>
			<?php echo h($vrubyreptplus['Vrubyreptplus']['totalitemnetSales']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TotalpercentOfSales'); ?></dt>
		<dd>
			<?php echo h($vrubyreptplus['Vrubyreptplus']['totalpercentOfSales']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vscashiername'); ?></dt>
		<dd>
			<?php echo h($vrubyreptplus['Vrubyreptplus']['vscashiername']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vscashiersysid'); ?></dt>
		<dd>
			<?php echo h($vrubyreptplus['Vrubyreptplus']['vscashiersysid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Upc'); ?></dt>
		<dd>
			<?php echo h($vrubyreptplus['Vrubyreptplus']['upc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modifier'); ?></dt>
		<dd>
			<?php echo h($vrubyreptplus['Vrubyreptplus']['modifier']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($vrubyreptplus['Vrubyreptplus']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SalePrice'); ?></dt>
		<dd>
			<?php echo h($vrubyreptplus['Vrubyreptplus']['salePrice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OriginalPrice'); ?></dt>
		<dd>
			<?php echo h($vrubyreptplus['Vrubyreptplus']['originalPrice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Netsalecount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptplus['Vrubyreptplus']['netsalecount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Netsaleamount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptplus['Vrubyreptplus']['netsaleamount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NetsaleitemCount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptplus['Vrubyreptplus']['netsaleitemCount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PercentOfSales'); ?></dt>
		<dd>
			<?php echo h($vrubyreptplus['Vrubyreptplus']['percentOfSales']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vrubyreptplus['Station']['name'], array('controller' => 'stations', 'action' => 'view', $vrubyreptplus['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($vrubyreptplus['Vrubyreptplus']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modfied'); ?></dt>
		<dd>
			<?php echo h($vrubyreptplus['Vrubyreptplus']['modfied']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vrubyreptplus'), array('action' => 'edit', $vrubyreptplus['Vrubyreptplus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vrubyreptplus'), array('action' => 'delete', $vrubyreptplus['Vrubyreptplus']['id']), null, __('Are you sure you want to delete # %s?', $vrubyreptplus['Vrubyreptplus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vrubyreptpluses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vrubyreptplus'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
