<?php
echo $this->Html->script(array('jquery.defaultText', 'jquery.table.addrow','jquery.ba-replacetext'));
?>
<div class="storeBuydowns form">
<?php echo $this->Form->create('StoreBuydown'); ?>
	<fieldset>
		       <legend><?php echo __('Add Store Buydown'); ?></legend>
	           <Table border="1">
					<tr>
						<th>Vendor</th>
						<th>Category</th>
						<th>Item name</th>
						<th>Q T Y</th>
						<th>Retail Per Item</th>
						<th>Amount</th>
						<th><input type="button" class="addComment" value="Add More"/></th>
					</tr>
					<tr>
						<td><?php echo $this->Form->input('vendor_id][',array('label'=> false, 'options'=>$vendors)); ?></td>
						<td><?php echo $this->Form->input('category_id][',array('label'=> false, 'options'=>$categories)); ?></td>
						<td><?php echo $this->Form->input('item_name][',array('label'=> false, 'options'=>$vrubyreptplus)); ?></td>
						<td><?php echo $this->Form->input('qty][',array('class' => 'NotEmpty','label'=> false,'onKeyUp'=>'javascript:is_valid(this);')); ?></td>
						<td><?php echo $this->Form->input('change_retail_item][',array('class' => 'NotEmpty','label'=> false,'onKeyUp'=>'javascript:is_valid(this);')); ?></td>
						<td><?php echo $this->Form->input('amount][',array('class' => 'NotEmpty','label'=> false,'onKeyUp'=>'javascript:is_valid(this);')); ?></td>
						<td> <input type="button" class="delRow" value="Remove"/></td>
					</tr>
		      </Table>
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
										if (!error) $('#StoreBuydownAddForm').submit();
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
