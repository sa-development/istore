<?php
echo $this->Html->script(array('jquery.defaultText', 'jquery.table.addrow'));
?>
<div class="fuelSales form">
<?php echo $this->Form->create('FuelSale'); ?>
	<fieldset>
		<legend><?php echo __('Add Fuel Sale'); ?></legend>
		 <table border="1">
           <tr>
				 <th>Station</th>
				 <th>Fuel Type</th>
				 <th>Volume</th>
				 <th>Retail</th>
				 <th>Amount</th>
				 <th>Adjustment</th>
				<th><input type="button" class="addComment" value="Add More"/></th>
		   </tr>
            <tr>
				<td><?php echo $this->Form->input('station_id][',array('label'=> false, 'options'=>$stations)); ?></td>
				<td><?php echo $this->Form->input('fuel_type_id][',array('label'=> false, 'options'=>$fuelTypes)); ?></td>
				<td><?php echo $this->Form->input('volume][',array('class' => 'NotEmpty', 'label'=> false,'onKeyUp'=>'javascript:is_valid(this);')); ?></td>
				<td><?php echo $this->Form->input('retail][',array('class' => 'NotEmpty','label'=> false,'onKeyUp'=>'javascript:is_valid(this);')); ?></td>
				<td><?php echo $this->Form->input('amount][',array('class' => 'NotEmpty','label'=> false,'onKeyUp'=>'javascript:is_valid(this);')); ?></td>
				<td><?php echo $this->Form->input('adjustment][',array('class' => 'NotEmpty','label'=> false,'onKeyUp'=>'javascript:is_valid(this);')); ?></td>
				<td> <input type="button" class="delRow" value="Remove"/></td>
	      </tr>
         </table>
    </fieldset>
<div class="submit"><input id="btnSubmit" type="button"  value="Submit"></div>
</div>
<?php echo $this->element('inventories_action');?>
<script type="text/javascript">
    $("document").ready(function(){
                                   $("#btnSubmit").click(function(){
										var error = false;
										$('.NotEmpty').each(function(e){
											if(this.value == '') error = true;
										});
										if (error) alert('Some values are empty');
										if (!error) $('#FuelSaleAddForm').submit();
										    return false;
									});
								  $(".addComment").btnAddRow({rowNumColumn:"rowNumber"});
                                  $(".delRow").btnDelRow();
                                });
	var  reg = /[0-9]|\./;
    function is_valid(textField){
                                   if(!reg.test(textField.value)){
											alert("Please enter numeric value only");
					                        textField.value="";
					                        textField.focus();
					                        return false; 
                                    }
								}		
</script>

 

