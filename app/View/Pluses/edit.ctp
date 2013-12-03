<div class="pluses form">
<?php echo $this->Form->create('Plus'); ?>
	<fieldset>
		<legend><?php echo __('Edit Plus'); ?></legend>
	<?php
		echo $this->Form->hidden('id');
		echo $this->Form->input('station_id');
		//echo $this->Form->input('page');
		//echo $this->Form->input('ofPages');
		echo $this->Form->input('upc');
		echo $this->Form->hidden('upcModifier', array('value' => '000'));
		echo $this->Form->input('description');
		echo $this->Form->input('department', array('type' => 'select', 'options' => $department));
		echo $this->Form->input('fee');
		echo $this->Form->input('pcode', array('type' => 'select', 'options' => $prodcode));
		echo $this->Form->input('price');
		echo $this->Form->input('SellUnit');
		//echo $this->Form->input('sysid');
		//echo $this->Form->input('sysid2');
		//echo $this->Form->input('sysid3');
		//echo $this->Form->input('sysid4');
		echo $this->Form->hidden('update_POS', array('value' => 1));
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('station_action'); ?>
