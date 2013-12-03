<div class="showkitpicklist">
	<div class="customer"><?php  echo __($customer_name); ?></div>
	<div class="customer_part_number"><?php echo $workOrder['Product']['customer_product_number']; ?></div>
	<div class="left">
		<div class="wo_tag">WO#:</div>
		<div class="work_area">
		<?php echo $this->Form->input('Department', array('label' => '', 'div' => 'work_area')); ?>
		</div>
	</div>
	<div class="work_order_number"><?php echo substr($workOrder['WorkOrder']['work_order_no'], 6); ?></div>
</div>

