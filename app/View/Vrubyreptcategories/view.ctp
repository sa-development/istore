<div class="vrubyreptcategories view">
<h2><?php  echo __('Vrubyreptcategory'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcategory['Vrubyreptcategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodType'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcategory['Vrubyreptcategory']['periodType']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodBeginDate'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcategory['Vrubyreptcategory']['periodBeginDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodEndDate'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcategory['Vrubyreptcategory']['periodEndDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TotalitemCount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcategory['Vrubyreptcategory']['totalitemCount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TotalitemnetSales'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcategory['Vrubyreptcategory']['totalitemnetSales']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TotalpercentOfSales'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcategory['Vrubyreptcategory']['totalpercentOfSales']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vscashiername'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcategory['Vrubyreptcategory']['vscashiername']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vscashiersysid'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcategory['Vrubyreptcategory']['vscashiersysid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcategory['Vrubyreptcategory']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SalePrice'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcategory['Vrubyreptcategory']['salePrice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OriginalPrice'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcategory['Vrubyreptcategory']['originalPrice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Netsalecount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcategory['Vrubyreptcategory']['netsalecount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Netsaleamount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcategory['Vrubyreptcategory']['netsaleamount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NetsaleitemCount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcategory['Vrubyreptcategory']['netsaleitemCount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PercentOfSales'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcategory['Vrubyreptcategory']['percentOfSales']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vrubyreptcategory['Station']['name'], array('controller' => 'stations', 'action' => 'view', $vrubyreptcategory['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcategory['Vrubyreptcategory']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modfied'); ?></dt>
		<dd>
			<?php echo h($vrubyreptcategory['Vrubyreptcategory']['modfied']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vrubyreptcategory'), array('action' => 'edit', $vrubyreptcategory['Vrubyreptcategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vrubyreptcategory'), array('action' => 'delete', $vrubyreptcategory['Vrubyreptcategory']['id']), null, __('Are you sure you want to delete # %s?', $vrubyreptcategory['Vrubyreptcategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vrubyreptcategories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vrubyreptcategory'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
