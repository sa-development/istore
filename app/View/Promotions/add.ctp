<div class="promotions form">
<?php echo $this->Form->create('Promotion'); ?>
	<fieldset>
		<legend><?php echo __('Add Promotion'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

<?php echo $this->element('station_action'); ?>

<div class="actions">
	<h3><?php echo __('Promotion'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('Back to promotion'), array( 'controller' => 'promotions', 'action' => 'index')); ?></li>                        
			<li><?php echo $this->Html->link(__('Back to pricebook'), array('controller' => 'pricebooks', 'action' => 'index')); ?></li>                        
		</ul>
</div>
