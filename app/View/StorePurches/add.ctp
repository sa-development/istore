<div class="storePurches form">
<?php echo $this->Form->create('StorePurch'); ?>
	<fieldset>
		<legend><?php echo __('Add Store Purch'); ?></legend>
				<Table id='storePurchesTable' class="grid" cellpadding=0 cellspacing=0 border=0 width="804">
				<tr>
					<th>Vendor</th>
					<th>Category</th>
					<th>Cost</th>
					<th>Retail</th>
					<th>Payment Method</th>
					<th>G P M</th>
					<th>Profit</th>
					<th>Action</th>
				</tr>
					  <?php for($ps=0; $ps<=20; $ps++) { 
					//$inputOption['disabled'] = true;
				?>
				<?php if( $ps == 0) { ?>
					<tr>
				<?php } else {?>
					<tr style='display:none' id='addMorePurchesLink_<?php echo $ps; ?>'>
				<?php } ?>
					   
						<td><?php echo $this->Form->input('StorePurch.'.$ps.'.vendor_id',array('label'=> false));  ?></td>
						<td><?php echo $this->Form->input('StorePurch.'.$ps.'.category_id',array('label'=> false)); ?></td>
						<td><?php echo $this->Form->input('StorePurch.'.$ps.'.cost',array('label'=> false)); ?></td>
						<td><?php echo $this->Form->input('StorePurch.'.$ps.'.retail',array('label'=> false)); ?></td>
						<td><?php echo $this->Form->input('StorePurch.'.$ps.'.payment_method',array('label'=> false)); ?></td>
						<td><?php echo $this->Form->input('StorePurch.'.$ps.'.GPM',array('label'=> false)); ?></td>
						<td><?php echo $this->Form->input('StorePurch.'.$ps.'.profit',array('label'=> false)); ?></td>
					<?php if( $ps == 0) { ?>
						<td><a id='addMorePurchesLink' href='#'><?php echo $this->Html->image('icon_plus.gif');?></a></td>
					<?php } else {?>
						<td><a onclick="removeElement('addMorePurchesLink_<?php echo $ps; ?>')" id='removePurchesLink_<?php echo $ps; ?>'><?php echo $this->Html->image('icon_minus.gif');?></a></td>
					<?php } ?>
				</tr>
				<?php }?>
		</table>

    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
		
		<script type="text/javascript">
		$(document).ready(function(){
			var pp =1
			$('#addMorePurchesLink').click(function(){
				$('#addMorePurchesLink_'+pp).show();
					//$('#addMorePurchesLink_'+pp+ 'input:*').attr('disabled', '');
				pp++;
				return false;
			});
		});

		function removeElement(elementId){
			$('#'+elementId).html('');
			return false;
		}
		</script>
</div>
<?php echo $this->element('inventories_action');?>