<?php
$fuelVolume = $fuelMoney = $fuelVolumeEnd = $fuelMoneyEnd = $fuelVolumeStart  =  $fuelMoneyStart  = '';
if(!empty($startData) && isset($startData[0]) && isset($startData[0][0]['SUM(fuelVolume)'])) {
	$fuelVolumeStart = $startData[0][0]['SUM(fuelVolume)'];
}

if(!empty($startData) && isset($startData[0]) && isset($startData[0][0]['SUM(fuelMoney)'])) {
	$fuelMoneyStart  = $startData[0][0]['SUM(fuelMoney)'];
}

if(!empty($endData) && isset($endData[0]) && isset($endData[0][0]['SUM(fuelVolume)'])) {
	$fuelVolumeEnd = $endData[0][0]['SUM(fuelVolume)'];
}

if(!empty($endData) && isset($endData[0]) && isset($endData[0][0]['SUM(fuelMoney)'])) {
	$fuelMoneyEnd  = $endData[0][0]['SUM(fuelMoney)'];
}
?>
<div class="vrubyrepttanks reports">
	<?php echo $this->element('stationinfo'); ?> 
	
	<table cellpadding="0" cellspacing="1" border="0" class="grid" width="1015px">
		<tr class="header" align="center">
			<td style="width: 150px;">Station</td>
			<td style="width: 200px;" colspan="4">Total Gasoline Gallon Sales</td>
			<td style="width: 200px;" colspan="4">Diesel Gallon Sales</td>
			<td style="width: 230px;" colspan="4">Total Fuel $ Sales</td>
			<td style="width: 230px;" colspan="4">Total Store $ Sales</td>
		</tr>
		<tr class="subheader" align="center">
			<td style="width: 150px;">&nbsp;</td>
			<td style="width: 50px;">CY</td>
			<td style="width: 50px;">LY</td>
			<td style="width: 50px;">DIFF</td>
			<td style="width: 50px;">% DIFF</td>
			<td style="width: 50px;">CY</td>
			<td style="width: 50px;">LY</td>
			<td style="width: 50px;">DIFF</td>
			<td style="width: 50px;">% DIFF</td>
			<td style="width: 60px;">CY</td>
			<td style="width: 60px;">LY</td>
			<td style="width: 60px;">DIFF</td>
			<td style="width: 50px;">% DIFF</td>
			<td style="width: 60px;">CY</td>
			<td style="width: 60px;">LY</td>
			<td style="width: 60px;">DIFF</td>
			<td style="width: 50px;">% DIFF</td>			
		</tr>
		
		<tr class="even" align="right">
			<td x:str style="text-align: left;font-weight: bold;"><?php echo $this->Session->read('Station.Station.name'); ?></td>
			<td x:str><?php echo $fuelVolumeStart; ?></td>
			<td x:str><?php echo $fuelVolumeEnd; ?></td>
			<td x:str>(<?php echo ($fuelVolumeStart - $fuelVolumeEnd) ?>)</td>
			<td x:str>(<?php echo @ceil( ($fuelVolumeStart / ($fuelVolumeStart + $fuelVolumeEnd)) / 100); ?>)%</td>
			
			<td x:str> </td>				
			<td x:str> </td>	
			<td x:str> </td>	
			<td x:str></td>	
			
			<td x:str><?php echo $fuelMoneyStart; ?></td>
			<td x:str><?php echo $fuelMoneyEnd; ?></td>
			<td x:str>(<?php echo ($fuelMoneyEnd - $fuelVolumeEnd) ?>)</td>
			<td x:str>(<?php echo @ceil( ($fuelMoneyStart / ($fuelMoneyStart + $fuelMoneyEnd)) / 100); ?>)%</td>
			
			
			<td x:str> </td>	
			<td x:str> </td>	
			<td x:str> </td>	
			<td x:str> </td>	
		</tr>
		
		
		<tr class="even" align="right">
			<td x:str style="text-align: left;font-weight: bold;">Totals</td>
			<td x:str><?php echo $fuelVolumeStart; ?></td>
			<td x:str><?php echo $fuelVolumeEnd; ?></td>
			<td x:str>(<?php echo ($fuelVolumeStart - $fuelVolumeEnd) ?>)</td>
			<td x:str>(<?php echo @ceil( ($fuelVolumeEnd / ($fuelVolumeStart + $fuelVolumeEnd)) / 100); ?>)%</td>
			
			<td x:str> </td>				
			<td x:str> </td>	
			<td x:str> </td>	
			<td x:str></td>	
			
			<td x:str><?php echo $fuelMoneyStart; ?></td>
			<td x:str><?php echo $fuelMoneyEnd; ?></td>
			<td x:str>(<?php echo ($fuelMoneyEnd - $fuelVolumeEnd) ?>)</td>
			<td x:str>(<?php echo @ceil( ($fuelMoneyStart / ($fuelMoneyStart + $fuelMoneyEnd)) / 100); ?>)%</td>
			
			
			<td x:str> </td>	
			<td x:str> </td>	
			<td x:str> </td>	
			<td x:str> </td>	
		</tr>
		
		
		</table>
	
</div>	
