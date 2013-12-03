<?php 
// print_r($_SERVER);exit;
        $ref_menu=$_SERVER['REQUEST_URI'];
        if (preg_match("/stations/",$ref_menu) || preg_match("/reports/",$ref_menu)) 
		{
		 $stations_list= ClassRegistry::init('stations')->find('list');
         echo $this->Form->input('station_id', 
			array(
				'url'	=> $this->Html->url(array('action' => 'index')), 
				'label'	=> false, 
				'id'	=> 'stationSelector', 
				'empty' => 'Select Station',
				'options'=> $stations_list
		   )); 
	   } 	
?>
<script type="text/javascript">	
	$(document).ready(function(){
		$('#stationSelector').val(stationId);
		$('#stationSelector').change(function(){
			var stationId=$(this).val();
			window.location= $(this).attr('url')+'/index?station='+this.value;
		});
	});
</script>