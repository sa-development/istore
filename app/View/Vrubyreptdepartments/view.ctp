<div class="vrubyreptdepartments view">
<h2><?php  echo __('Vrubyreptdepartment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodType'); ?></dt>
		<dd>
			<?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['periodType']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodSeqNum'); ?></dt>
		<dd>
			<?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['periodSeqNum']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodBeginDate'); ?></dt>
		<dd>
			<?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['periodBeginDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PeriodEndDate'); ?></dt>
		<dd>
			<?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['periodEndDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VsdeptBasename'); ?></dt>
		<dd>
			<?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['vsdeptBasename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NetSalesamount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['netSalesamount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NetSalesitemCount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['netSalesitemCount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Refundsamount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['refundsamount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discountstotalamount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['discountstotalamount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discountspromotionsamount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['discountspromotionsamount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ManualDiscountsamount'); ?></dt>
		<dd>
			<?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['manualDiscountsamount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('GrossSales'); ?></dt>
		<dd>
			<?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['grossSales']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PercentOfSales'); ?></dt>
		<dd>
			<?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['percentOfSales']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station Id'); ?></dt>
		<dd>
			<?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['station_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($vrubyreptdepartment['Vrubyreptdepartment']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vrubyreptdepartment'), array('action' => 'edit', $vrubyreptdepartment['Vrubyreptdepartment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vrubyreptdepartment'), array('action' => 'delete', $vrubyreptdepartment['Vrubyreptdepartment']['id']), null, __('Are you sure you want to delete # %s?', $vrubyreptdepartment['Vrubyreptdepartment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vrubyreptdepartments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vrubyreptdepartment'), array('action' => 'add')); ?> </li>
	</ul>
</div>
