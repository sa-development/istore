<div class="categories form">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><?php echo __('Add Category'); ?></legend>
	<?php
		//echo $this->Form->input('sysid');
		echo $this->Form->input('name');
		echo $this->Form->input('station_id');
		//echo $this->Form->input('sync_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Category'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('Back to station'), array( 'controller' => 'stations', 'action' => 'index')); ?></li>                        
			<li><?php echo $this->Html->link(__('Back to pricebook'), array('controller' => 'pricebooks', 'action' => 'index')); ?></li>                        
		</ul>
</div>
