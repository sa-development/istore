<?php 
echo $this->Html->css('ui-lightness/jquery-ui-1.10.3.custom');
echo $this->Html->script(array('jquery-1.9.1', 'jquery-ui-1.10.3.custom')); 
?>
<div class="employees form">
<?php echo $this->Form->create('Employee'); ?>
	<fieldset>
		<legend><?php echo __('Add Employee'); ?></legend>
	<?php
	   /*
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('sex');
		echo $this->Form->input('language_id');
		echo $this->Form->input('address');
		echo $this->Form->input('fax');
		echo $this->Form->input('phone');
		echo $this->Form->input('email');
		echo $this->Form->input('mobile');
		echo $this->Form->input('city');
		echo $this->Form->input('state_id');
		echo $this->Form->input('SS_hash');
		echo $this->Form->input('birth_date');
		echo $this->Form->input('corporation_id');
		echo $this->Form->input('status');
		echo $this->Form->input('dependants');
		echo $this->Form->input('country_id');
		echo $this->Form->input('local_tax');
		echo $this->Form->input('1099_legible');
		echo $this->Form->input('married');
	  */
	?>
	<Table id='employeesTable' class="grid" cellpadding=0 cellspacing=0 border=0 width="804">
	            <tr>
                    <th>Corporation</th>
				    <th>Country</th>
				    <th>State</th>
					<th>City</th>
				    <th>Language</th>
				</tr>
				<tr>
				    <td><?php echo $this->Form->input('corporation_id', array('label'=>false));?></td> 
					<td><?php echo $this->Form->input('country_id', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('state_id', array('label'=>false));?></td>
					<td><?php echo $this->Form->input('city', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('language_id', array('label'=>false)); ?></td>
				<tr>
	</Table>
	 <Table id='employees2Table' class="grid" cellpadding=0 cellspacing=0 border=0 width="804">
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Sex</th>
					<th>Birth Date</th>
					<th>Marital status</th>
					<th>Email</th>
					<th>Fax</th>
					<th>Address</th>
				</tr>
				<tr>
					<td><?php echo $this->Form->input('first_name', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('last_name', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('sex', array('label'=>false,'options' => array('m' => 'Male', 'f' => 'Female'))); ?></td>
					<td><?php echo $this->Form->input('birth_date', array('label'=>false,'type' => 'text', 'id' => 'datepicker'));?></td> 
					<td><?php echo $this->Form->input('married', array('label'=>false,'options' => array('u' => 'Unmarried', 'm' => 'Married', 'd' => 'Divorcee '))); ?></td>
					<td><?php echo $this->Form->input('email', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('fax', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('address', array('label'=>false)); ?></td>
				</tr>	
				<tr>
					<th>Phone</th>
					<th>Mobile</th>
					<th>S S Hash</th>
					<th>Status</th>
					<th>Dependants</th>
					<th>Local Tax</th>
					<th colspan=2>1099 Legible</th>
				</tr>		
				<tr>
					<td><?php echo $this->Form->input('phone', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('mobile', array('label'=>false)); ?></td>					
					<td><?php echo $this->Form->input('SS_hash', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('status', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('dependants', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('local_tax', array('label'=>false)); ?></td>
					<td colspan=2><?php echo $this->Form->input('1099_legible', array('label'=>false)); ?></td>
				</tr>
     </Table>

	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?></li>
	</ul>
</div>
<script type="text/javascript">
$(document).ready(function(){
                              $("#datepicker" ).datepicker();
                            });
</script>