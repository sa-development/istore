<div class="vrubyreptsummaries view">
<h2><?php  echo __('Vrubyreptsummary'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vrubyreptsummary['Station']['name'], array('controller' => 'stations', 'action' => 'view', $vrubyreptsummary['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodBeginDate'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['periodBeginDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodEndDate'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['periodEndDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodType'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['periodType']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NetSales'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['netSales']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CancelRefund'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['cancelRefund']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TotalPaymentOut'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['totalPaymentOut']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TotalPaymentIn'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['totalPaymentIn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TotalToAccountFor'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['totalToAccountFor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TotalRefundTaxes'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['totalRefundTaxes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TotalSalesTaxes'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['totalSalesTaxes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TotalTaxes'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['totalTaxes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TotalIncludedTaxes'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['totalIncludedTaxes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ItemCount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['itemCount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CustomerCount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['customerCount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NoSaleCount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['noSaleCount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DrawerViolations'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['drawerViolations']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LoginOverrides'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['loginOverrides']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FuelSales'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['fuelSales']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FuelDiscounts'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['fuelDiscounts']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MerchSales'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['merchSales']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TotalDiscounts'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['totalDiscounts']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TotalDiscountscount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['totalDiscountscount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PayIncount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['payIncount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PayIn'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['payIn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PayOut'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['payOut']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PayOutcount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['payOutcount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SafeDrop'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['safeDrop']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SafeDropcount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['safeDropcount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Xmldata'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['xmldata']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($vrubyreptsummary['Vrubyreptsummary']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vrubyreptsummary'), array('action' => 'edit', $vrubyreptsummary['Vrubyreptsummary']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vrubyreptsummary'), array('action' => 'delete', $vrubyreptsummary['Vrubyreptsummary']['id']), null, __('Are you sure you want to delete # %s?', $vrubyreptsummary['Vrubyreptsummary']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vrubyreptsummaries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vrubyreptsummary'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
