<div class="vrubyrepttaxes view">
<h2><?php  echo __('Vrubyrepttax'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vrubyrepttax['Station']['name'], array('controller' => 'stations', 'action' => 'view', $vrubyrepttax['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodBeginDate'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['periodBeginDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodEndDate'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['periodEndDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodType'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['periodType']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ActualTaxRate'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['actualTaxRate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TaxableSales'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['taxableSales']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NonTaxableSales'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['nonTaxableSales']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SalesTax'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['salesTax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RefundTax'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['refundTax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NetTax'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['netTax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VrubyrepttaxName'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['vrubyrepttaxName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TaxRate'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['taxRate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ByRegister Totals ActualTaxRate'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['byRegister_totals_actualTaxRate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ByRegister TaxableSales'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['byRegister_taxableSales']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ByRegister NonTaxableSales'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['byRegister_nonTaxableSales']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ByRegister SalesTax'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['byRegister_salesTax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ByRegister RefundTax'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['byRegister_refundTax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ByRegister NetTax'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['byRegister_netTax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ByRegister Name'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['byRegister_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ByRegister TaxRate'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['byRegister_taxRate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ByCashier Totals ActualTaxRate'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['byCashier_totals_actualTaxRate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ByCashier TaxableSales'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['byCashier_taxableSales']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ByCashier NonTaxableSales'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['byCashier_nonTaxableSales']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ByCashier SalesTax'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['byCashier_salesTax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ByCashier RefundTax'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['byCashier_refundTax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ByCashier NetTax'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['byCashier_netTax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ByCashier Name'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['byCashier_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ByCashier TaxRate'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['byCashier_taxRate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($vrubyrepttax['Vrubyrepttax']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vrubyrepttax'), array('action' => 'edit', $vrubyrepttax['Vrubyrepttax']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vrubyrepttax'), array('action' => 'delete', $vrubyrepttax['Vrubyrepttax']['id']), null, __('Are you sure you want to delete # %s?', $vrubyrepttax['Vrubyrepttax']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vrubyrepttaxes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vrubyrepttax'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
