<div class="paybills view">
<h2><?php  echo __('Paybill'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($paybill['Paybill']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Store Invoice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($paybill['StoreInvoice']['invoice'], array('controller' => 'store_invoices', 'action' => 'view', $paybill['StoreInvoice']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fuel Invoice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($paybill['FuelInvoice']['invoice'], array('controller' => 'fuel_invoices', 'action' => 'view', $paybill['FuelInvoice']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Due Date'); ?></dt>
		<dd>
			<?php echo h($paybill['Paybill']['due_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vendor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($paybill['Vendor']['name'], array('controller' => 'vendors', 'action' => 'view', $paybill['Vendor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amt Due'); ?></dt>
		<dd>
			<?php echo h($paybill['Paybill']['amt_due']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disc Used'); ?></dt>
		<dd>
			<?php echo h($paybill['Paybill']['disc_used']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Credit Used'); ?></dt>
		<dd>
			<?php echo h($paybill['Paybill']['credit_used']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount To Pay'); ?></dt>
		<dd>
			<?php echo h($paybill['Paybill']['amount_to_pay']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bills Ref No'); ?></dt>
		<dd>
			<?php echo h($paybill['Paybill']['bills_ref_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discount'); ?></dt>
		<dd>
			<?php echo h($paybill['Paybill']['discount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number Of Credit'); ?></dt>
		<dd>
			<?php echo h($paybill['Paybill']['number_of_credit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Credit Available'); ?></dt>
		<dd>
			<?php echo h($paybill['Paybill']['total_credit_available']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Date'); ?></dt>
		<dd>
			<?php echo h($paybill['Paybill']['payment_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paymen Method'); ?></dt>
		<dd>
			<?php echo h($paybill['Paybill']['paymen_method']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment To'); ?></dt>
		<dd>
			<?php echo h($paybill['Paybill']['payment_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment From'); ?></dt>
		<dd>
			<?php echo h($paybill['Paybill']['payment_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ending Balance'); ?></dt>
		<dd>
			<?php echo h($paybill['Paybill']['ending_balance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($paybill['Paybill']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($paybill['Paybill']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Paybill'), array('action' => 'edit', $paybill['Paybill']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Paybill'), array('action' => 'delete', $paybill['Paybill']['id']), null, __('Are you sure you want to delete # %s?', $paybill['Paybill']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Paybills'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paybill'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Store Invoices'), array('controller' => 'store_invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store Invoice'), array('controller' => 'store_invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fuel Invoices'), array('controller' => 'fuel_invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fuel Invoice'), array('controller' => 'fuel_invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
	</ul>
</div>
