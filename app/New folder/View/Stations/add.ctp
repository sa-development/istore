<div class="stations form">
<?php echo $this->Form->create('Station'); ?>
	<fieldset>
		<legend><?php echo __('Add Station'); ?></legend>
	<?php
		echo $this->Form->input('name');
                echo $this->Form->input('store_id');
		echo $this->Form->input('cash_register_brand');
		echo $this->Form->input('ip_address');
		echo $this->Form->input('user_name');
		echo $this->Form->input('password');
		echo $this->Form->hidden('user_id', array('value' => $userId));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Stations'), array('action' => 'index')); ?></li>
	</ul>
</div>
