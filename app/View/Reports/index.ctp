<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script>
	$(function() {
		$(".datepicker").datepicker({ dateFormat: 'yy-mm-dd',  minDate: '-1Y', maxDate: "-1"});// minDate: -20, maxDate: "+1M +10D"
		//$(".datepicker").datepicker("option", "dateFormat", "yy-mm-dd" );
	});
</script>

<div id='ajaxloader' style="display:none">
		<img src="http://www.istoreoffice.net/img/ajax-loader.gif"  />
</div>


<div class="reports report">
	<div id='renderReportFilter'>
		<table cellpadding="0" cellspacing="0" class="grid" id='filter'>
			<tr>
					<th>Date Range</th>
					<th>Current Year<?php echo $this->form->text('filterTo', array('label' => false,  'value'=> date('Y-m-d', strtotime('now')), 'class' => 'datepicker')); ?>
					<!-- <th>Last Year<?php echo $this->form->text('filterFrom', array('label' => false, 'value'=> date('Y-m-d', strtotime('-1 week')),'class' => 'datepicker')); ?></th> -->

					<?php echo $this->form->hidden('TreeURL', array('id' => 'reporttreeurl')); ?>
					</th>
					<th><?php echo $this->form->button('Filter', array('id' => 'filterReportButton')); ?></th>
			</tr>
		</table>
	</div>
	<div id='renderReport'></div>
</div>

<?php

	echo $this->element('station_report');
	
 ?>


