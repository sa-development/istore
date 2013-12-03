<?php
echo $this->Html->script(array('jquery.defaultText', 'jquery.table.addrow','jquery.ba-replacetext'));
?>
<div class="storeSpoilages form">
<?php echo $this->Form->create('StoreSpoilage'); ?>
	<fieldset>
		<legend><?php echo __('Add Store Spoilage'); ?></legend>
		<Table border="1">
			<tr>
				<th>Category</th>
				<th>Item Name</th>
				<th>U P C</th>
				<th>Reason</th>
				<th>Qty</th>
				<th>Retail Per Item</th>
				<th>Amount</th>
				<th><input type="button" class="addComment" value="Add More"/></th>
			</tr>
			<tr>
				<td><?php echo $this->Form->input('category_id][',array('label'=> false, 'options'=>$categories)); ?></td>
				<td><?php echo $this->Form->input('vrubyreptplu_id][',array('label'=> false,'options' => $vrubyreptplus)); ?></td>
				<td><?php echo $this->Form->input('UPC][',array('class' => 'NotEmpty','label'=> false,'onKeyUp'=>'javascript:is_valid(this);')); ?> </td>
				<td><?php echo $this->Form->input('reason][',array('class' => 'NotEmpty','label'=> false,'onKeyUp'=>'javascript:is_valid(this);')); ?></td>
				<td><?php echo $this->Form->input('qty][',array('class' => 'NotEmpty','label'=> false,'onKeyUp'=>'javascript:is_valid(this);')); ?></td>
				<td><?php echo $this->Form->input('retail_per_item][',array('class' => 'NotEmpty','label'=> false,'onKeyUp'=>'javascript:is_valid(this);')); ?></td>
				<td><?php echo $this->Form->input('amount][',array('class' => 'NotEmpty','label'=> false,'onKeyUp'=>'javascript:is_valid(this);')); ?></td>
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
										if (!error) $('#StoreSpoilageAddForm').submit();
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




