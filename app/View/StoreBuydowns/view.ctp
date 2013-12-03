<div class="storeBuydowns view">
<h2><?php  echo __('Store Buydown'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($storeBuydown['StoreBuydown']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vendor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($storeBuydown['Vendor']['name'], array('controller' => 'vendors', 'action' => 'view', $storeBuydown['Vendor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($storeBuydown['Category']['name'], array('controller' => 'categories', 'action' => 'view', $storeBuydown['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Name'); ?></dt>
		<dd>
			<?php echo h($storeBuydown['StoreBuydown']['item_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qty'); ?></dt>
		<dd>
			<?php echo h($storeBuydown['StoreBuydown']['qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Change Retail Item'); ?></dt>
		<dd>
			<?php echo h($storeBuydown['StoreBuydown']['change_retail_item']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($storeBuydown['StoreBuydown']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($storeBuydown['StoreBuydown']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($storeBuydown['StoreBuydown']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<?php echo $this->element('inventories_action');?>
